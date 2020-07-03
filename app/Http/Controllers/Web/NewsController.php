<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Model\News;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('published_at', 'DESC')->get();
        return view('web.news.index', [
            'news' => $news
        ]);
    }

    public function view($news_id) {
        $news = News::findOrFail($news_id);
        return view('web.news.view', [
            'news' => $news
        ]);
    }
}
