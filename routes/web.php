<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\Admin\UsersController;
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
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/press-news', [NewsController::class, 'pressnews'])->name('press-news');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/status', [StatusController::class, 'index'])->name('status');

Route::get('/history', [MainController::class, 'history'])->name('main.history');
Route::get('/mission', [MainController::class, 'mission'])->name('main.mission');
Route::get('/structure', [MainController::class, 'structure'])->name('main.structure');
Route::get('/projects', [MainController::class, 'projects'])->name('main.projects');
Route::get('/partners', [MainController::class, 'partners'])->name('main.partners');
Route::get('/reports', [MainController::class, 'reports'])->name('main.reports');
Route::get('/bankinfo', [MainController::class, 'bankinfo'])->name('main.bankinfo');

Route::get('/feedback/lawyer', [FeedbackController::class, 'lawyer'])->name('feedback.lawyer');
Route::get('/feedback/reception', [FeedbackController::class, 'feedback'])->name('feedback.reception');
Route::get('/feedback/hotline', [FeedbackController::class, 'hotline'])->name('feedback.hotline');
Route::get('/feedback/application', [FeedbackController::class, 'application'])->name('feedback.app');
Route::get('/feedback/claim', [FeedbackController::class, 'claim'])->name('feedback.claim');
Route::get('/feedback/problem', [FeedbackController::class, 'problem'])->name('feedback.problem');
Route::get('/feedback/fzakon', [FeedbackController::class, 'fzakon'])->name('feedback.fzakon');

Route::get('/press-news/interview', [NewsController::class, 'interview'])->name('press-news.interview');
Route::get('/press-news/press', [NewsController::class, 'showPressNews'])->name('press-news.press');
Route::get('/press-news/foto', [NewsController::class, 'showFoto'])->name('press-news.foto');
Route::get('/press-news/for-press', [NewsController::class, 'forPress'])->name('press-news.for-press');
Route::get('/press-news/not-for-press', [NewsController::class, 'notForPress'])->name('press-news.not-for-press');

Route::get('/faq/{id}', [FaqController::class, 'replyByid'])->name('faq.id');

Route::get('/info/vacancies', [InfoController::class, 'vacancies'])->name('info.vacancies');
Route::get('/info/blanks', [InfoController::class, 'blanks'])->name('info.blanks');
Route::get('/info/bankofdocuments', [InfoController::class, 'bank'])->name('info.bank');
Route::get('/info/testmaterial',[InfoController::class, 'testmaterial'])->name('info.testmaterial');
Route::get('/info/brochures', [InfoController::class, 'brochures'])->name('info.brochures');
Route::get('/info/reminder', [InfoController::class, 'reminder'])->name('info.reminder');

Route::get('/news/{category}', [NewsController::class, 'showByCategory'])->name('news.category');
Route::get('/news/{category}/{id}', [NewsController::class, 'showByCategoryId'])->where('id', '[0-9]+')
->name('news.category.id');
Route::get('/news/{category}/{subcategory}', [NewsController::class, 'showBySubCategory'])
->where('subcategory', '[A-Za-z]+')
->name('news.subcategory');
Route::get('/news/{category}/{subcategory}/{id}', [NewsController::class, 'showBySubCategoryId'])->
name('news.subcategory.id');


Route::post('/subscribe', [AjaxController::class, 'saveSubscription']);
Route::post('/submit', [AjaxController::class, 'saveMessages']);
Route::post('/website-feedback', [AjaxController::class, 'saveWebsiteFeedback']);
Route::post('/lawyer-question', [AjaxController::class, 'saveLawQuestion']);
Route::post('/commentForm', [AjaxController::class, 'saveComment']);

Route::post('/call', [AjaxController::class, 'saveCallInfo']);

Route::view('/home', [MainController::class, 'home']);


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
Route::resource('/user', '\App\Http\Controllers\Admin\UsersController', ['except' => ['create', 'show','save']]);
});
