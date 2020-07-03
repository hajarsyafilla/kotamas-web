<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Model\Banner;
use Helper;

class BannerController extends Controller
{
    public function index() {
        $b = Banner::orderBy('order', 'ASC')->get();

        return view('admin.banners.index', [
            'banners' => $b
        ]);
    }

    public function add(Request $request) {
        $b = new Banner;
        if ($request->isMethod('post')) {
            // TODO: validation
            $path = $request->file('file')->store('banners');
            $b->file_name = $path;
            $b->save();

            return redirect(action('Admin\BannerController@index'));
        }

        return view('admin.banners.add', [
            'm' => $b
        ]);
    }

    public function edit(Request $request, $banner_id) {
        $b = Banner::findOrFail($banner_id);
        if ($request->isMethod('post')) {
            // TODO: validation
            $path = $request->file('file')->store('banners');
            $b->file_name = $path;
            $b->save();

            return redirect(action('Admin\BannerController@index'));
        }

        return view('admin.banners.edit', [
            'm' => $b
        ]);
    }

    public function delete($banner_id) {
        $m = Banner::find($banner_id);
        if($m) {
            Storage::delete($m->file_name);
            $m->delete();
            return response()->json([
                'success' => true,
                'msg' => "Banner has been deleted",
                'redirect' => action('Admin\BannerController@index')
            ]);

        } else {
            return response()->json([
                'success' => false,
                'msg' => "Not found"
            ]);
        }
    }

    public function sort($banner_id, $direction) {
        $b = Banner::findOrFail($banner_id);
        switch ($direction) {
            case 'up':
                $b->moveOrderUp();
                break;
            case 'down':
                $b->moveOrderDown();
                break;
        }

        return redirect(action('Admin\BannerController@index'));
    }
}
