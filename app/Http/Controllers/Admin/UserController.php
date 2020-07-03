<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Model\User;
use Model\UserGroup;
use Helper;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('name', 'ASC')->get();

        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function add(Request $request) {
        $u = new User;
        $u->user_group = new UserGroup;
        if ($request->isMethod('post')) {
            // TODO: validation
            $u = new User;
            $u->name = $request->name;
            $u->email = $request->email;
            $u->user_group_id = $request->user_group_id;
            $u->password = Hash::make($request->password);
            $u->save();

            return redirect()->action('Admin\UserController@index');
        }

        return view('admin.users.add', [
            'u' => $u
        ]);
    }

    public function edit(Request $request, $user_id) {
        $u = User::findOrFail($user_id);
        if ($request->isMethod('post')) {
            $u->name = $request->name;
            $u->email = $request->email;
            $u->user_group_id = $request->user_group_id;
            $u->save();

            return redirect()->action('Admin\UserController@index');
        }

        return view('admin.users.edit', [
            'u' => $u
        ]);
    }

    public function delete($user_id) {
        $m = User::find($user_id);
        if($m) {
            switch($m->id) {
                case 1:
                case 2:
                    return response()->json([
                        'success' => false,
                        'msg' => "This user cannot be deleted"
                    ]);
                default:
                    $m->delete();
                    return response()->json([
                        'success' => true,
                        'msg' => "User has been deleted",
                        'redirect' => action('Admin\UserController@index')
                    ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'msg' => "Not found"
            ]);
        }
    }
}
