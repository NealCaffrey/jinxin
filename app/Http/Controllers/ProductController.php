<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        //分类
        $category = Category::where('parent_id', '!=', 0)->get();
        //品牌
        $brand = Brand::all();

        $query = Product::query();
        //产品
        $categoryId = [];
        $brandId = [];
        if ($request->filled('category')) {
            $categoryId = explode(',', $request->input('category'));
            $query->whereIn('category_id', $categoryId);
        }
        if ($request->filled('brand')) {
            $brandId = explode(',', $request->input('brand'));
            $query->whereIn('brand_id', $brandId);
        }

        $product = $query->get();
        return view('product_index', [
            'categoryList' => $category,
            'brand' => $brand,
            'list' => $product,
            'categoryId' => $categoryId,
            'brandId' => $brandId
        ]);
    }

    public function info($id)
    {
        $info = Product::find($id);
        if (empty($info)) {
            return redirect('/');
        }

        $info->attribute = json_decode($info->attribute);
        return view('product_info', [
            'info' => $info
        ]);
    }
}
