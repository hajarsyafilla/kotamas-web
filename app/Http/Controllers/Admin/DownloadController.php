<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Model\Download;
use Helper;

class DownloadController extends Controller
{
    public function index() {
        $downloads = Download::orderBy('created_at', 'DESC')->get();

        return view('admin.downloads.index', [
            'downloads' => $downloads
        ]);
    }

    public function add(Request $request) {
        $d = new Download;
        if ($request->isMethod('post')) {
            $path = $request->file('file')->store('');

            $d->name = $request->name;
            $d->description = $request->description;
            $d->file_name = $request->file->getClientOriginalName();
            $d->hash_name = $path;
            $d->size = $request->file->getSize();
            $d->mime_type = $request->file->getMimeType();
            $d->download_category_id = 1;
            $d->save();

            return redirect(action('Admin\DownloadController@index'));
        }

        return view('admin.downloads.add', [
            'm' => $d
        ]);
    }

    public function view($download_id) {
        $d = Download::findOrFail($download_id);
        return Storage::download($d->hash_name, $d->file_name);
    }

    public function edit(Request $request, $download_id) {
        $d = Download::findOrFail($download_id);

        if ($request->isMethod('post')) {


            $d->name = $request->name;
            $d->description = $request->description;

            if ($request->hasFile('file')) {
                $path = $request->file('file')->store('');
                $d->file_name = $request->file->getClientOriginalName();
                $d->hash_name = $path;
                $d->size = $request->file->getSize();
                $d->mime_type = $request->file->getMimeType();
                $d->download_category_id = 1;
            }

            $d->save();

            return redirect(action('Admin\DownloadController@index'));
        }

        return view('admin.downloads.edit', [
            'm' => $d
        ]);
    }

    public function delete($download_id) {
        $m = Download::find($download_id);
        if($m) {
            Storage::delete($m->hash_name);
            $m->delete();
            return response()->json([
                'success' => true,
                'msg' => "<strong>{$m->file_name}</strong> has been deleted",
                'redirect' => action('Admin\DownloadController@index')
            ]);

        } else {
            return response()->json([
                'success' => false,
                'msg' => "Not found"
            ]);
        }

    }
}
