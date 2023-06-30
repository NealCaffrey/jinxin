<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Business;
use App\Models\Category;
use App\Models\Config;
use App\Models\Nav;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        //商品分类
        $category = Category::getNavCategory();
        //品牌
        $brands = Brand::getNavBrand();
        //导航
        $navs = getTree(Nav::all()->toArray());
        //业务
        $business = Business::getHomeBusiness();
        //配置
        $configs = Config::getSiteConfigs();

        view()->share('category', $category);
        view()->share('brands', $brands);
        view()->share('navs', $navs);
        view()->share('business', $business);
        view()->share('configs', $configs);
    }
}
