<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AjaxcrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('postinsert',[PostController::class,'index']);
Route::post('postinsert',[PostController::class,'ajaxRequestPost']);




Route::get('ajaxpost',[AjaxController::class,'ajaxpost'])->name('post.ajaxpost');
Route::post('ajaxpost',[AjaxController::class,'requestpost'])->name('post.ajaxpost');

Route::get('/blog',[AjaxController::class,'getreq'])->name('getreq');
Route::post('/blog',[AjaxController::class,'postreq'])->name('postreq');

Route::get('list',[AjaxController::class,'list'])->name('list');
Route::get('exportpdf',[AjaxController::class,'pdf'])->name('pdf');


Route::get('showform',[AjaxcrudController::class,'index'])->name('showfrom');
Route::post('submitform',[AjaxcrudController::class,'store'])->name('submitform');
Route::post('editform/{id}',[AjaxcrudController::class,'update'])->name('editform');
Route::PUT('deleteform/{id}',[AjaxcrudController::class,'destroy'])->name('delete');