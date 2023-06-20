<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Example;
use App\Models\News;
use App\Models\Page;
use App\Models\Product;
use App\Models\Slide;
use App\Models\Solution;
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
    public function solution()
    {
        $solutions = Solution::getList();
        foreach ($solutions as $k => $data)
        {
            $solutions[$k]['created_at'] = date('Y-m-d', strtotime($data['created_at']));
        }

        view()->share('solutions', $solutions);
        return view('solution_index');
    }

    public function solutionInfo($id)
    {
        $data = Solution::find($id);
        if (empty($data)) {
            return redirect('/solution.html');
        }

        return view('solution_info', [
            'data' => $data->toArray()
        ]);
    }

    /**
     * 支持
     */
    public function support()
    {
        $data = DB::table('pages')->where('title', '=', 'support')->first();
        return view('support', [
            'data' => $data
        ]);
    }

    /**
     * 搜索
     */
    public function search(Request $request)
    {
        $data = [];
        $keyword = $request->input('keyword');
        if (!empty($keyword)) {
            $data = Product::where('name', 'like', "%{$keyword}%")->paginate(12);
            foreach ($data as $k => $news)
            {
                $data[$k]['url'] = '/product/' . $news['id'] . '.html';
            }
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
