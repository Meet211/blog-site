<?php

use App\Http\Controllers\Admin\Home as AdminHome;
use App\Http\Controllers\Admin\ManageBlog;
use App\Http\Controllers\Admin\ManageCategories;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Home::class, 'index']);
Route::get('/blogs/{id}', [Home::class, 'details']);

Route::get('admin', function () {
    return redirect('admin/home');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('home', [AdminHome::class, 'index']);
    Route::get('home/create', [ManageBlog::class, 'index']);

    Route::post('manage-blog/save', [ManageBlog::class, 'save']);
    Route::get('home/delete', [ManageBlog::class, 'delete']);

    Route::get('categories', [ManageCategories::class, 'index']);
    Route::get('categories/manage', [ManageCategories::class, 'manage']);
    Route::post('categories/manage/save', [ManageCategories::class, 'save']);
});
