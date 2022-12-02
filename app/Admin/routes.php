<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('nav', 'NavController');
    $router->resource('case', 'ExampleController');
    $router->resource('news', 'NewsController');
    $router->resource('brand', 'BrandController');
    $router->resource('category', 'CategoryController');
    $router->resource('attribute_category', 'AttributeCategoryController');
    $router->resource('attribute', 'AttributeController');
    $router->resource('product', 'ProductController');

    $router->get('/api/nav_tree', 'commonController@getNavTree');
    $router->get('/api/category_list', 'commonController@getCategoryList');
    $router->get('/api/attribute_category', 'commonController@getAttributeCategory');
    $router->get('/api/category_list_2', 'commonController@getCategoryListTwo');
    $router->get('/api/brand_list', 'commonController@getBrandList');
});
