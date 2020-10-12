<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FaqController;
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
//Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/faq/{id}', [FaqController::class, 'byid'])->name('faq.id');

Route::get('/about/testmaterial',[AboutController::class, 'testmaterial'])->name('about.testmaterial');
Route::get('/about/projects', [AboutController::class, 'projects'])->name('about.projects');
Route::get('/about/partners', [AboutController::class, 'partners'])->name('about.partners');
Route::get('/about/reports', [AboutController::class, 'reports'])->name('about.reports');

Route::get('/feedback/fzakon', [FeedbackController::class, 'fzakon'])->name('feedback.fzakon');
Route::get('/feedback/info', [FeedbackController::class, 'info'])->name('feedback.info');
Route::get('/feedback/lawyer', [FeedbackController::class, 'lawyer'])->name('feedback.lawyer');
Route::get('/feedback/brochures', [FeedbackController::class, 'brochures'])->name('feedback.brochures');


Route::get('/news/press-news', [NewsController::class, 'showPressNews'])->name('news.press-news');
Route::get('/news/{category}', [NewsController::class, 'showByCategory'])->name('news.category');
Route::get('/news/{category}/{id}', [NewsController::class, 'showByCategoryId'])->where('id', '[0-9]+')->name('news.category.id');
Route::get('/news/migration-news/{subcategory}', [NewsController::class, 'showBySubCategory'])->where('subcategory', '[A-Za-z]+')
->name('news.subcategory');
Route::get('/news/migration-news/{subcategory}/{id}', [NewsController::class, 'showBySubCategoryId'])->
name('news.subcategory.id');





// Route::get('/post/{post}', function () {
//     //
// })->name('post.show');
// echo route('post.show', ['post' => 1]);
