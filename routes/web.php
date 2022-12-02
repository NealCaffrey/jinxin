<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);//首页
Route::get('/solution/{type}', [IndexController::class, 'solution']);//解决方案
Route::get('/support', [IndexController::class, 'support']);//支持
Route::get('/search', [IndexController::class, 'search']);//搜索
Route::get('/about', [IndexController::class, 'about']);//关于我们
Route::get('/location', [IndexController::class, 'location']);//公司地址
//产品
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'info']);
//案例
Route::get('/case', [CaseController::class, 'index']);
Route::get('/case/{id}', [CaseController::class, 'info']);
//新闻
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'info']);

