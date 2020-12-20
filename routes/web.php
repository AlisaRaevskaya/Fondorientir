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
use App\Http\Controllers\Admin\DefaultController;
use App\Http\Controllers\Admin\PageController;

use App\Http\Controllers\CaptchaServiceController;
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
Route::get('/migration-news', [NewsController::class, 'index'])->name('news');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');

// Route::get('/status', [StatusController::class, 'index'])->name('status');
Route::get('/fond', [MainController::class, 'fond'])->name('fond');

Route::get('/history', [MainController::class, 'history'])->name('history');
Route::get('/smi_o_nas', [MainController::class, 'pressnews'])->name('press-news');
Route::get('/mission', [MainController::class, 'mission'])->name('mission');
Route::get('/structure', [MainController::class, 'structure'])->name('structure');
Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/partners', [MainController::class, 'partners'])->name('partners');
Route::get('/reports', [MainController::class, 'reports'])->name('reports');
Route::get('/bankinfo', [MainController::class, 'bankinfo'])->name('bankinfo');

Route::get('/online_priemnaya/lawyer', [MessageController::class, 'lawyer'])->name('lawyer');
Route::get('/online_priemnaya/reception', [MessageController::class, 'reception'])->name('reception');
Route::get('/online_priemnaya/hotline', [MessageController::class, 'hotline'])->name('hotline');
Route::get('/online_priemnaya/application', [MessageController::class, 'application'])->name('application');
Route::get('/online_priemnaya/claim', [MessageController::class, 'claim'])->name('claim');
Route::get('/online_priemnaya/problem', [MessageController::class, 'problem'])->name('problem');
Route::get('/online_priemnaya/fzakon', [MessageController::class, 'fzakon'])->name('feedback.fzakon');
Route::get('/online_priemnaya/faq', [FaqController::class, 'index'])->name('faq');


Route::get('/faq/{id}', [FaqController::class, 'replyByid'])->name('faq.id');

Route::get('/info-center/useful-info', [InfoController::class, 'usefulInfo'])->name('useful-info');
Route::get('/info-center/blanks', [InfoController::class, 'blanks'])->name('blanks');
Route::get('/info-center/bankofdocuments', [InfoController::class, 'bankofdocuments'])->name('bankdocuments');
Route::get('/info-center/testirovanie-trudovyh-migrantov',[InfoController::class, 'testmaterial'])->name('testmaterial');
Route::get('/info-center/brochures', [InfoController::class, 'brochures'])->name('brochures');
Route::get('/info-center/reminder', [InfoController::class, 'reminder'])->name('reminder');

// Route::get('/smi_o_nas', [MainController::class, 'pressnews'])->name('press-news');
Route::get('/smi_o_nas', [MainController::class, 'showPressNews'])->name('press');
// Route::get('/news/{category}', [NewsController::class, 'showByCategory'])->name('news.category');
Route::get('/migration-news/{id}', [NewsController::class, 'showByCategoryId'])->where('id', '[0-9]+')
->name('news_category.id');
Route::get('/press-news/{id}', [MainController::class, 'showByCategoryId'])->where('id', '[0-9]+')
->name('press_category.id');


Route::post('/lawyer-form', [AjaxController::class, 'saveLawQuestion'])->name("lawyer-question");
Route::post('/lawyer-form-sidebar', [AjaxController::class, 'saveLawQuestionSidebar'])->name("lawyer-sidebar");
Route::post('/reception-form', [AjaxController::class, 'saveReceptionMessage'])->name("reception-form");
Route::post('/problem-form', [AjaxController::class, 'saveProblemMessage'])->name("problem-form");;
Route::post('/application-form', [AjaxController::class, 'saveApplication'])->name("application-form");;
Route::post('/call-form', [AjaxController::class, 'saveCallInfo'])->name("call-form");;
Route::post('/claim-form', [AjaxController::class, 'saveClaim'])->name("claim-form");
Route::get('/online_priemnaya/reload-captcha',[CaptchaServiceController::class, 'reloadCaptcha']);

Route::view('/admin-panel', 'admin.admin_home')->middleware('auth');

Route::get('/center-podderzhki', [SecondSiteController::class, 'index'])->name('second_main');
Route::get('/center-podderzhki/reception', [SecondSiteController::class, 'reception'])->name('second.reception');
Route::get('/center-podderzhki/faq', [SecondSiteController::class, 'faq'])->name('second.faq');
Route::get('/center-podderzhki/faq/{id}', [SecondSiteController::class, 'faqSingle'])->name('second.faq.single');
Route::get('/center-podderzhki/lawyer', [SecondSiteController::class, 'lawyer'])->name('second.lawyer');
Route::get('/center-podderzhki/problem', [SecondSiteController::class, 'problem'])->name('second.problem');
Route::get('/center-podderzhki/hotline', [SecondSiteController::class, 'hotline'])->name('second.hotline');


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



Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){

Route::resource('/user', '\App\Http\Controllers\Admin\UsersController', ['except' => ['create', 'show','save']]);
Route::resource('/main', '\App\Http\Controllers\Admin\MainController');
Route::resource('/news', '\App\Http\Controllers\Admin\NewsController');

Route::resource('/faq-page', '\App\Http\Controllers\Admin\FAQ\ForFaqController');
Route::resource('/faq', '\App\Http\Controllers\Admin\FAQ\AdminFaqController');

Route::resource('/seo', '\App\Http\Controllers\Admin\SeoController');

Route::resource('/contacts', '\App\Http\Controllers\Admin\Contacts\ContactsController');
Route::resource('/company-info', '\App\Http\Controllers\Admin\Contacts\CompanyInfoController');

Route::resource('/history', '\App\Http\Controllers\Admin\Main\HistoryController');
Route::resource('/about', '\App\Http\Controllers\Admin\Main\AboutController');
Route::resource('/fond', '\App\Http\Controllers\Admin\Main\FondController');
Route::resource('/mission', '\App\Http\Controllers\Admin\Main\MissionController');
Route::resource('/reports', '\App\Http\Controllers\Admin\Main\ReportsController');

Route::resource('/projects', '\App\Http\Controllers\Admin\Main\ProjectsController');
Route::resource('/forprojects', '\App\Http\Controllers\Admin\Main\ForProjectsController');

Route::resource('/partners', '\App\Http\Controllers\Admin\Main\PartnersController');
Route::resource('/bankinfo', '\App\Http\Controllers\Admin\Main\BankInfoController');


Route::resource('blanks', '\App\Http\Controllers\Admin\Info\BlanksController');
Route::resource('brochures', '\App\Http\Controllers\Admin\Info\BrochuresController');
Route::resource('reminder', '\App\Http\Controllers\Admin\Info\RemindersController');
Route::resource('testmaterial', '\App\Http\Controllers\Admin\Info\TestMaterialController');
Route::resource('useful-info', '\App\Http\Controllers\Admin\Info\InfoController');
Route::resource('bankdocuments', '\App\Http\Controllers\Admin\Info\BankdocumentsController');

Route::resource('/press', '\App\Http\Controllers\Admin\Press\PressController');



Route::resource('/lawyer', '\App\Http\Controllers\Admin\Reception\LawyerController');
Route::resource('/problem', '\App\Http\Controllers\Admin\Reception\ProblemController');
Route::resource('/claim', '\App\Http\Controllers\Admin\Reception\ClaimController');
Route::resource('/application', '\App\Http\Controllers\Admin\Reception\ApplicationController');
Route::resource('/hotline', '\App\Http\Controllers\Admin\Reception\HotlineController');
Route::resource('/reception', '\App\Http\Controllers\Admin\Reception\ReceptionController');
Route::resource('/feedback-call', '\App\Http\Controllers\Admin\FeedbackCallController');
Route::resource('/pages', '\App\Http\Controllers\Admin\PageController');
Route::resource('/secondmenu', '\App\Http\Controllers\Admin\SecondMenuController');
Route::get('/pages-choice', [PageController::class, 'choosePage'])->name('choose.page');

Route::get('/notifications/all',[NotificationController::class, 'showAll'])->name('notices.all');
Route::get('/notifications/{category}', [NotificationController::class, 'index'])->where('category', '[a-z]+')->name('notice');
Route::get('/notifications/{category}/{id}',[NotificationController::class, 'show'])->name('notice.show');
Route::get('/notifications/feedback-call',[NotificationController::class, 'call'])->name('notices.call');
});

Route::post('/{}', [ DefaultController::class, 'index' ])->name('index');