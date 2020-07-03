<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index() 
    {
        return view('admin.index');
    }

    public function editLandingPoster(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg|max:1024',
            ]);

            $imageName = 'landing_poster.jpg';

            $request->image->move(storage_path('app/public/uploads'), $imageName);

            return redirect()
                ->action('Admin\HomeController@editLandingPoster')
                ->with('success','Poster has been updated.');
            
        }
        
        if (Storage::exists('landing_poster.jpg')) {

        }

        return view('admin.landing_poster', []);
        

    }

    public function deleteLandingPoster(Request $request)
    {
        if (Storage::exists('landing_poster.jpg')) {
            Storage::delete('landing_poster.jpg');

            return redirect()
                ->action('Admin\HomeController@editLandingPoster')
                ->with('success','Poster has been deleted.');
        }
    }
}
