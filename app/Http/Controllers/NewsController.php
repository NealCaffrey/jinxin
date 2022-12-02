<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('news_index', [
            'data' => News::all()->sortByDesc('id')->toArray()
        ]);
    }

    public function info($id)
    {
        return view('news_info', [
            'data' => News::find($id)->toArray()
        ]);
    }
}
