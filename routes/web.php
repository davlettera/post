<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\CategoryController;

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
// Route::get('/', 'HomeController@index')->name('homepage')->withoutMiddleware(['auth']);

Route::get('/', [PublicController::class, 'home'])->name('homepage')->withoutMiddleware(['auth']);
Route::post('/', [PublicController::class, 'home'])->withoutMiddleware(['auth']);

Auth::routes(); 


// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');

// Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

// Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/index', [CategoryController::class, 'categoryArticles'])->name('article.index');


Route::get('/article/{article:slug}/show', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');

Route::get('/article/author/{user}', [ArticleController::class, 'byAuthor'])->name('article.byAuthor');

Route::get('/careers', [PublicController::class, 'careers'])->name('careers');

Route::post('/careers/submit', [PublicController::class, 'careersSubmit'])->name('careers.submit');



Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::get('/admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::get('/admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
    Route::put('/admin/edit/{tag}/tag', [AdminController::class, 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/{tag}/tag', [AdminController::class, 'deleteTag'])->name('admin.deleteTag');
    Route::put('/admin/edit/{category}/category', [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/{category}/category', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::post('/admin/category/store', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');




});
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
    Route::get('/revisor/{article}/accepted', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
    Route::get('/revisor/{article}/rejected', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    Route::get('/revisor/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
    Route::get('/article/image/{articleId}/choose', [ArticleController::class, 'choose']);





});
Route::middleware('writer')->group(function(){
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/writer/dashboard', [WriterController::class, 'dashboard'])->name('writer.dashboard');
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/{article}/delete', [ArticleController::class, 'destroy'])->name('article.destroy');



});
Route::get('/article/search', [ArticleController::class, 'articleSearch'])->name('article.search');





Route::get('/index', [WeatherController::class, 'index']);
Route::post('/index', [WeatherController::class, 'getWeather'])->name('getWeather');

























    //routes tecniche per pagine da modificare

    Route::get('/test/following', [PublicController::class, 'following'])->name('following');
    
    Route::get('/test/blogdetail', [PublicController::class, 'blogdetail'])->name('blogdetail');

    Route::get('/test/test', [PublicController::class, 'test'])->name('test');
