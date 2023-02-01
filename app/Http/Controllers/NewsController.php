<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $dataList = News::all()->sortByDesc('id')->toArray();
        foreach ($dataList as $k => $data)
        {
            $dataList[$k]['created_at'] = date('Y-m-d', strtotime($data['created_at']));
        }

        return view('news_index', [
            'data' => $dataList
        ]);
    }

    public function info($id)
    {
        return view('news_info', [
            'data' => News::find($id)->toArray()
        ]);
    }
}
