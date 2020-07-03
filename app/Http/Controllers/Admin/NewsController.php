<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Model\News;
use Helper;

class NewsController extends Controller
{
    public function index() {
        $news = News::orderBy('published_at', 'DESC')->get();

        return view('admin.news.index', [
            'news' => $news
        ]);
    }

    public function add(Request $request) {
        $news = new News;
        if ($request->isMethod('post')) {
            $n = new News;
            $n->title = $request->title;
            $n->short_description = $request->short_description;
            $n->content = $request->description;
            $n->published_at = Helper\Date::localeToDb($request->published_at);
            $n->user_id = Auth::user()->id;
            $n->save();

            return redirect()->action('Admin\NewsController@index');
        }

        return view('admin.news.add', [
            'n' => $news
        ]);
    }

    public function edit(Request $request, $news_id) {
        $n = News::findOrFail($news_id);
        if ($request->isMethod('post')) {
            $n->title = $request->title;
            $n->short_description = $request->short_description;
            $n->content = $request->description;
            $n->published_at = Helper\Date::localeToDb($request->published_at);
            $n->user_id = Auth::user()->id;
            $n->save();

            return redirect()->action('Admin\NewsController@index');
        }

        return view('admin.news.edit', [
            'n' => $n
        ]);
    }

    public function delete($news_id) {
        $m = News::find($news_id);
        if($m) {
            $m->delete();
            return response()->json([
                'success' => true,
                'msg' => "News has been deleted",
                'redirect' => action('Admin\NewsController@index')
            ]);

        } else {
            return response()->json([
                'success' => false,
                'msg' => "Not found"
            ]);
        }
    }
}
