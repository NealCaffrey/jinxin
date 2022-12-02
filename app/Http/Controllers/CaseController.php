<?php

namespace App\Http\Controllers;

use App\Models\Example;

class CaseController extends Controller
{
    /**
     * 首页
     */
    public function index()
    {
        return view('case_index', [
            'data' => Example::all()->sortByDesc('id')->toArray()
        ]);
    }

    /**
     * 详情
     */
    public function info($id)
    {
        return view('case_info', [
            'data' => Example::find($id)->toArray()
        ]);
    }
}
