<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Nav;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        //商品分类
        $category = Category::all()->toArray();
        //导航
        $navs = $this->getTree(Nav::all()->toArray());

        view()->share('category', $category);
        view()->share('navs', $navs);
    }

    function getTree($list)
    {
        $tree = [];
        $list = array_column($list, null, 'id');
        foreach ($list as $k => $row) {
            if (isset($list[$row['parent_id']])) {
                $list[$row['parent_id']]['son'][] = &$list[$k];
            } else {
                $tree[] = &$list[$k];
            }
        }
        return $tree;
    }
}
