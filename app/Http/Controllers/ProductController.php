<?php

namespace App\Http\Controllers;

use App\Models\Appearance;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Business;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        //分类
        $category = getTree(Category::getProductCategory());
        //品牌
        $brand = Brand::getNavBrand();
        //产品
        $query = Product::query();
        $categoryIds = [];
        $brandIds = [];
        $appearanceIds = [];
        if ($request->filled('category')) {
            $categoryInfo = Category::find($request->input('category'));
            //一级分类
            if ($categoryInfo->parent_id == 0) {
                $categoryList = Category::where('parent_id', '=', $categoryInfo->id)->get(['id'])->toArray();
                //那么跳转到首个二级分类
                if (!empty($categoryList)) {
                    return redirect('/product.html?category=' . $categoryList[0]['id']);
                }
            } else {
                $categoryIds = [$request->input('category')];
            }

            $query->whereIn('category_id', $categoryIds);
        }
        if ($request->filled('brand')) {
            $brandIds = explode(',', $request->input('brand'));
            $query->whereIn('brand_id', $brandIds);
        }
        if ($request->filled('appearance')) {
            $appearanceIds = explode(',', $request->input('appearance'));
            $query->whereIn('appearance_id', $appearanceIds);
        }

        //外观
        $appearance = [];
        if (!empty($categoryInfo)) {
            $appearance = (new Appearance())->whereIn('id', explode(',', $categoryInfo->appearance_id))->get()->toArray();
        }

        $product = $query->paginate(16);
        return view('product_index', [
            'categoryList'  => $category,
            'brand'         => $brand,
            'appearances'   => $appearance,
            'list'          => $product,
            'categoryIds'   => $categoryIds,
            'brandIds'      => $brandIds,
            'appearanceIds' => $appearanceIds,
            'params'        => $request->post()
        ]);
    }

    public function info($id)
    {
        $info = Product::find($id);
        if (empty($info)) {
            return redirect('/');
        }

        //属性
        $attribute = Attribute::all()->toArray();
        $attribute = array_column($attribute, 'name', 'id');

        //推荐商品
        $data = DB::table('product')
            ->where('category_id', '=', $info->category_id)
            ->limit(5)
            ->get()
            ->toArray();

        //联系方式
        $contact = false;
        if (!empty($info->phone) || !empty($info->qq) || !empty($info->wechat)) {
            $contact = true;
        }

        $info->attribute = @json_decode($info->attribute);
        $info->slide = @json_decode($info->slide);
        return view('product_info', [
            'info' => $info,
            'recommend' => $data,
            'attribute' => $attribute,
            'contact'   => $contact
        ]);
    }
}
