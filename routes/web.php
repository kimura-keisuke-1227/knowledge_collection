<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\TemplateMasterCategoryController;
use App\Http\Controllers\TemplateMasterHeaderController;

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

Route::get('/', [KnowledgeController::class,'index'])
->name('main')
->middleware('auth');

Route::resource('/codes',CodeController::class)
->middleware('auth');

Route::resource('/users', UserController::class);

Route::resource('/categories',CategoryController::class)
->middleware('auth');

Route::resource('/knowledge',KnowledgeController::class)
->middleware('auth');

Route::resource('/projects',ProjectController::class)
->middleware('auth');

Route::resource('/tasks',TaskController::class)
->middleware('auth');

Route::resource('/bookmarks',BookmarkController::class)
->middleware('auth');

Route::resource('/templateMasterCategory',TemplateMasterCategoryController::class)
->middleware('auth');

Route::resource('/template',TemplateMasterHeaderController::class)
->middleware('auth');

//ログイン画面
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']); 

//ログアウト処理
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('logout');
