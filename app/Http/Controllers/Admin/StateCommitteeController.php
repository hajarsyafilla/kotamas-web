<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Model\Committee;
use Helper;

class StateCommitteeController extends Controller
{
    public function index() {
        $scs = Committee::orderBy('state_id', 'ASC')->get();

        return view('admin.state_committees.index', [
            'scs' => $scs
        ]);
    }

    public function add(Request $request) {
        $sc = new Committee;
        if ($request->isMethod('post')) {
            $sc = new Committee;
            $sc->name = $request->name;
            $sc->email = $request->email;
            $sc->committee_position_id = $request->committee_position_id;
            $sc->contact_no = $request->contact_no;
            $sc->address_line_1 = $request->address_line_1;
            $sc->address_line_2 = $request->address_line_2;
            $sc->postcode = $request->postcode;
            $sc->city = $request->city;
            $sc->state_id = $request->state_id;
            $sc->save();

            return redirect()->action('Admin\StateCommitteeController@index');
        }

        return view('admin.state_committees.add', [
            'm' => $sc
        ]);
    }

    public function edit(Request $request, $sc_id) {
        $sc = Committee::findOrFail($sc_id);
        if ($request->isMethod('post')) {
            $sc->name = $request->name;
            $sc->email = $request->email;
            $sc->committee_position_id = $request->committee_position_id;
            $sc->contact_no = $request->contact_no;
            $sc->address_line_1 = $request->address_line_1;
            $sc->address_line_2 = $request->address_line_2;
            $sc->postcode = $request->postcode;
            $sc->city = $request->city;
            $sc->state_id = $request->state_id;
            $sc->save();

            return redirect()->action('Admin\StateCommitteeController@index');
        }

        return view('admin.state_committees.edit', [
            'm' => $sc
        ]);
    }

    public function delete($sc_id) {
        $m = Committee::find($sc_id);
        if($m) {
            $m->delete();
            return response()->json([
                'success' => true,
                'msg' => "State committee has been deleted",
                'redirect' => action('Admin\StateCommitteeController@index')
            ]);

        } else {
            return response()->json([
                'success' => false,
                'msg' => "Not found"
            ]);
        }
    }
}
