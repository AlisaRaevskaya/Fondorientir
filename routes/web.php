<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SecondSiteController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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
Route::get('/feedback', [MessageController::class, 'index'])->name('feedback');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/press-news', [NewsController::class, 'pressnews'])->name('press-news');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/status', [StatusController::class, 'index'])->name('status');
Route::get('/fond', [MainController::class, 'fond'])->name('fond');

Route::get('/history', [MainController::class, 'history'])->name('history');
// Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/mission', [MainController::class, 'mission'])->name('mission');
Route::get('/structure', [MainController::class, 'structure'])->name('structure');
Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/partners', [MainController::class, 'partners'])->name('partners');
Route::get('/reports', [MainController::class, 'reports'])->name('reports');
Route::get('/bankinfo', [MainController::class, 'bankinfo'])->name('bankinfo');

Route::get('/feedback/lawyer', [MessageController::class, 'lawyer'])->name('lawyer');
Route::get('/feedback/reception', [MessageController::class, 'reception'])->name('reception');
Route::get('/feedback/hotline', [MessageController::class, 'hotline'])->name('hotline');
Route::get('/feedback/application', [MessageController::class, 'application'])->name('application');
Route::get('/feedback/claim', [MessageController::class, 'claim'])->name('claim');
Route::get('/feedback/problem', [MessageController::class, 'problem'])->name('problem');
Route::get('/feedback/fzakon', [MessageController::class, 'fzakon'])->name('feedback.fzakon');


Route::get('/press-news/interview', [PressController::class, 'interview'])->name('interview');
Route::get('/press-news/press', [PressController::class, 'showPressNews'])->name('press');
Route::get('/press-news/foto', [PressController::class, 'showFoto'])->name('foto');
Route::get('/press-news/for-press', [PressController::class, 'forPress'])->name('for-press');
Route::get('/press-news/not-for-press', [PressController::class, 'notForPress'])->name('not-for-press');

Route::get('/faq/{id}', [FaqController::class, 'replyByid'])->name('faq.id');

Route::get('/info/vacancies', [InfoController::class, 'vacancies'])->name('vacancies');
Route::get('/info/blanks', [InfoController::class, 'blanks'])->name('blanks');
Route::get('/info/bankofdocuments', [InfoController::class, 'bankofdocuments'])->name('bankdocuments');
Route::get('/info/testirovanie-trudovyh-migrantov',[InfoController::class, 'testmaterial'])->name('testmaterial');
Route::get('/info/brochures', [InfoController::class, 'brochures'])->name('brochures');
Route::get('/info/reminder', [InfoController::class, 'reminder'])->name('reminder');

Route::get('/news/{category}', [NewsController::class, 'showByCategory'])->name('news.category');
Route::get('/news/{category}/{id}', [NewsController::class, 'showByCategoryId'])->where('id', '[0-9]+')
->name('news.category.id');
Route::get('/news/{category}/{subcategory}', [NewsController::class, 'showBySubCategory'])
->where('subcategory', '[A-Za-z]+')
->name('news.subcategory');
Route::get('/news/{category}/{subcategory}/{id}', [NewsController::class, 'showBySubCategoryId'])->
name('news.subcategory.id');


Route::post('/lawyer-form', [AjaxController::class, 'saveLawQuestion'])->name("lawyer-question");
Route::post('/reception-form', [AjaxController::class, 'saveReceptionMessage'])->name("reception-form");
Route::post('/problem-form', [AjaxController::class, 'saveProblemMessage'])->name("problem-form");;
Route::post('/application-form', [AjaxController::class, 'saveApplication'])->name("application-form");;
Route::post('/call-form', [AjaxController::class, 'saveCallInfo'])->name("call-form");;
Route::post('/claim-form', [AjaxController::class, 'saveClaim'])->name("claim-form");

Route::view('/admin-panel', 'admin.admin_home')->middleware('auth');


Route::get('/center-podderzhki', [SecondSiteController::class, 'index'])->name('second_main');
Route::get('/center-podderzhki/reception', [SecondSiteController::class, 'reception'])->name('second-reception');
Route::get('/center-podderzhki/claim', [SecondSiteController::class, 'claim'])->name('second-claim');
Route::get('/center-podderzhki/applictaion', [SecondSiteController::class, 'application'])->name('second-application');
Route::get('/center-podderzhki/problem', [SecondSiteController::class, 'problem'])->name('second-problem');
Route::get('/center-podderzhki/hotline', [SecondSiteController::class, 'hotline'])->name('second-hotline');
Route::get('/center-podderzhki/migration-questions', [SecondSiteController::class, 'migration'])->name('second.migration');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){

Route::resource('/user', '\App\Http\Controllers\Admin\UsersController', ['except' => ['create', 'show','save']]);
Route::resource('/', '\App\Http\Controllers\Admin\MainController');
Route::resource('/news', '\App\Http\Controllers\Admin\NewsController');
Route::resource('/faq', '\App\Http\Controllers\Admin\FAQ\AdminFaqController');
Route::resource('/fq', '\App\Http\Controllers\Admin\FAQ\ForFaqController');
Route::resource('/seo', '\App\Http\Controllers\Admin\SeoController');
Route::resource('/contacts', '\App\Http\Controllers\Admin\Contacts\ContactsController');
Route::resource('/company-info', '\App\Http\Controllers\Admin\Contacts\CompanyInfoController');

Route::resource('/history', '\App\Http\Controllers\Admin\Main\HistoryController');
Route::resource('/about', '\App\Http\Controllers\Admin\Main\AboutController');
Route::resource('/fond', '\App\Http\Controllers\Admin\Main\FondController');
Route::resource('/mission', '\App\Http\Controllers\Admin\Main\MissionController');
Route::resource('/reports', '\App\Http\Controllers\Admin\Main\ReportsController');
Route::resource('/structure', '\App\Http\Controllers\Admin\Main\StructureController');
Route::resource('/projects', '\App\Http\Controllers\Admin\Main\ProjectsController');
Route::resource('/partners', '\App\Http\Controllers\Admin\Main\PartnersController');
Route::resource('/bankinfo', '\App\Http\Controllers\Admin\Main\BankInfoController');
Route::resource('/forprojects', '\App\Http\Controllers\Admin\Main\ForProjectsController');


Route::resource('blanks', '\App\Http\Controllers\Admin\Info\BlanksController');
Route::resource('brochures', '\App\Http\Controllers\Admin\Info\BrochuresController');
Route::resource('reminder', '\App\Http\Controllers\Admin\Info\RemindersController');
Route::resource('testmaterial', '\App\Http\Controllers\Admin\Info\TestMaterialController');
Route::resource('vacancies', '\App\Http\Controllers\Admin\Info\VacancyController');
Route::resource('bankdocuments', '\App\Http\Controllers\Admin\Info\BankdocumentsController');

Route::resource('/press', '\App\Http\Controllers\Admin\Press\PressController');


Route::resource('/lawyer', '\App\Http\Controllers\Admin\Reception\LawyerController');
Route::resource('/problem', '\App\Http\Controllers\Admin\Reception\ProblemController');
Route::resource('/claim', '\App\Http\Controllers\Admin\Reception\ClaimController');
Route::resource('/application', '\App\Http\Controllers\Admin\Reception\ApplicationController');
Route::resource('/hotline', '\App\Http\Controllers\Admin\Reception\HotlineController');
Route::resource('/reception', '\App\Http\Controllers\Admin\Reception\ReceptionController');
Route::resource('/pages', '\App\Http\Controllers\Admin\PageController');
Route::resource('/feedback-call', '\App\Http\Controllers\Admin\FeedbackCallController');

Route::get('/notifications/{category}', [NotificationController::class, 'index'])->where('category', '[a-z]+')->name('notice');

Route::get('/notifications/{category}/{id}',[NotificationController::class, 'show'])->name('notice.show');
Route::get('/notifications/all',[NotificationController::class, 'showAll'])->name('notices.all');
});

Route::view('/static','admin.layout-static');
Route::view('/404','admin.errors.404');
Route::view('/401','admin.errors.401');
Route::view('/500','admin.errors.500');
Route::view('/inbox','admin.mail.mail');
Route::view('/read','admin.mail.read_mail');
Route::view('/compose','admin.mail.compose');

Route::get('/add-news', [ UploadController::class, 'newsadd' ])->name('newsadd');
Route::get('/upload/{id}', [ UploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('/store/{id}', [ UploadController::class, 'imageStorePost' ])->name('image.store.post');

Route::put('/uploadImage/{id}', [ UploadController::class, 'summerUpload' ])->name('summer_upload');
Route::put('/uploadNewsImage', [ UploadController::class, 'imageNewsStore' ])->name('image.news.store');

