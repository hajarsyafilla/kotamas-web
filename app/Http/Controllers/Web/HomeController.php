<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Model;

class HomeController extends Controller
{
    public function index() {
        $news = Model\News::orderBy('published_at', 'DESC')->limit(3)->get();
        $banners = Model\Banner::orderBy('order', 'ASC')->get();
        return view('web.index', [
            'news' => $news,
            'banners' => $banners
        ]);
    }

    public function blank() {
        return view('web.default');
    }

    public function downloads() {
        $downloads = Model\Download::get();
        return view('web.download', [
            'downloads' => $downloads
        ]);
    }

    public function contactUs() {
        return view('web.contacts.hq');
    }

    public function contactUsArRahnu() {
        return view('web.contacts.arrahnu');
    }

    public function privacyPolicy() {
        return view('web.privacy_policy');
    }

    public function disclaimer() {
        return view('web.disclaimer');
    }
}
