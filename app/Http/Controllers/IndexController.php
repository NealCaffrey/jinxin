<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Example;
use App\Models\News;
use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * 首页
     */
    public function index()
    {
        $slides = Slide::orderByDesc('orders')->get()->toArray();
        $brands = Brand::orderByDesc('order')->get()->toArray();
        $news = News::orderByDesc('created_at')->limit(3)->get()->toArray();

        if (!empty($news)) {
            foreach ($news as $k => $v) {
                $news[$k]['content'] = strip_tags($v['content']);
            }
        }

        view()->share('slides', $slides);
        view()->share('brands', $brands);
        view()->share('news', $news);
        return view('home');
    }

    /**
     * 解决方案
     */
    public function solution($type)
    {
        /**
         * 解决方案类型判断
         * 如果需要新增页面，需要在这儿添加
         */
        if (!in_array($type, ['bigdata', 'cloud', 'performance'])) {
            return redirect('/');
        }

        return view('solution_' . $type);
    }

    /**
     * 支持
     */
    public function support()
    {
        return view('support');
    }

    /**
     * 搜索
     */
    public function search(Request $request)
    {
        $data = [];
        $keyword = $request->input('keyword');
        if (!empty($keyword)) {
            $newsList = DB::table('news')->where('content', 'like', "%{$keyword}%")->get()->toArray();
            foreach ($newsList as $news)
            {
                $news->url = '/news/' . $news->id;
            }
            $data = array_merge($data, $newsList);
        }

        return view('search', [
            'keyword' => $keyword,
            'data' => $data
        ]);
    }

    /**
     * 关于我们
     */
    public function about()
    {
        return view('about');
    }

    /**
     * 公司地址
     */
    public function location()
    {
        return view('location');
    }
}
