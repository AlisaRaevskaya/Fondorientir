<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UsefulInfoController;
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
Route::get('/support', [MessageController::class, 'index'])->name('support');
Route::get('/migration-news', [NewsController::class, 'index'])->name('news');
Route::get('/info', [InfoController::class, 'index'])->name('info');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');

// Route::get('/status', [StatusController::class, 'index'])->name('status');
Route::get('/fond', [MainController::class, 'fond'])->name('fond');

Route::get('/history', [MainController::class, 'history'])->name('history');
Route::get('/smi-o-nas', [MainController::class, 'pressnews'])->name('press-news');
Route::get('/mission', [MainController::class, 'mission'])->name('mission');
Route::get('/structure', [MainController::class, 'structure'])->name('structure');
Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/partners', [MainController::class, 'partners'])->name('partners');
Route::get('/reports', [MainController::class, 'reports'])->name('reports');
Route::get('/rekvizity', [MainController::class, 'bankinfo'])->name('bankinfo');

Route::get('/support/lawyer', [MessageController::class, 'lawyer'])->name('lawyer');
Route::get('/support/reception', [MessageController::class, 'reception'])->name('reception');
Route::get('/support/hotline', [MessageController::class, 'hotline'])->name('hotline');
Route::get('/support/application', [MessageController::class, 'application'])->name('application');
Route::get('/support/claim', [MessageController::class, 'claim'])->name('claim');
Route::get('/support/problem', [MessageController::class, 'problem'])->name('problem');
Route::get('/support/fzakon', [MessageController::class, 'fzakon'])->name('feedback.fzakon');
Route::get('/support/faq', [FaqController::class, 'index'])->name('faq');


Route::get('/faq/{id}', [FaqController::class, 'replyByid'])->name('faq.id');

Route::get('/info-center/useful-info', [InfoController::class, 'usefulInfo'])->name('useful-info');
Route::get('/info-center/blanks', [InfoController::class, 'blanks'])->name('blanks');
Route::get('/info-center/bankofdocuments', [InfoController::class, 'bankofdocuments'])->name('bankdocuments');
Route::get('/info-center/testirovanie-trudovyh-migrantov',[InfoController::class, 'testmaterial'])->name('testmaterial');
Route::get('/info-center/brochures', [InfoController::class, 'brochures'])->name('brochures');
Route::get('/info-center/useful_contacts', [InfoController::class, 'usefulContacts'])->name('useful_contacts');


Route::get('/info-center/useful-info/migrationnaya-karta', [UsefulInfoController::class, 'migrationCart'])->name('info-1');
Route::get('/info-center/useful-info/migrationnyi-uchet', [UsefulInfoController::class, 'migrationUchet'])->name('info-2');
Route::get('/info-center/useful-info/migratia-prodleniye', [UsefulInfoController::class, 'migrationProlongation'])->name('info-2-1');
Route::get('/info-center/useful-info/migratia-snyatiye-s-ucheta', [UsefulInfoController::class, 'migrationSnyatiye'])->name('info-2-2');
Route::get('/info-center/useful-info/visa-invitation', [UsefulInfoController::class, 'visaInvitation'])->name('info-3');
Route::get('/info-center/useful-info/visa-invitation-change', [UsefulInfoController::class, 'changeInvitation'])->name('info-3-1');
Route::get('/info-center/useful-info/trudovoy-patent', [UsefulInfoController::class, 'patent'])->name('info-4');
Route::get('/info-center/useful-info/trudovoy-patent-prodleniye', [UsefulInfoController::class, 'patentProlongation'])->name('info-4-1');
Route::get('/info-center/useful-info/trudovoy-patent-testirovaniye', [UsefulInfoController::class, 'patentTest'])->name('info-4-2');
Route::get('/info-center/useful-info/trudovoy-patent-medical-commission', [UsefulInfoController::class, 'patentComission'])->name('info-4-3');
Route::get('/info-center/useful-info/razreshenie-na-raboty', [UsefulInfoController::class, 'razreshenie'])->name('info-5');
Route::get('/info-center/useful-info/razreshenie-na-raboty-vks', [UsefulInfoController::class, 'vksRabota'])->name('info-5-1');
Route::get('/info-center/useful-info/razreshenie-na-zhitelstvo-vks', [UsefulInfoController::class, 'vksZhitelstvo'])->name('info-5-2');
Route::get('/info-center/useful-info/razreshenie-medical-comission', [UsefulInfoController::class, 'commission'])->name('info-5-3');
Route::get('/info-center/useful-info/razresheniye-na-rabotu-testirovaniye', [UsefulInfoController::class, 'rabotaTest'])->name('info-7-5');
Route::get('/info-center/useful-info/razresheniye-na-raboty-medical-comission', [UsefulInfoController::class, 'razreshenieComission'])->name('info-7-6');
Route::get('/info-center/useful-info/rvp-podtverzhdeniye', [UsefulInfoController::class, 'rvpConfirm'])->name('info-7-1');
Route::get('/info-center/useful-info/vid-na-zhitelstvo', [UsefulInfoController::class, 'vid'])->name('info-7-2');
Route::get('/info-center/useful-info/vid-na-zhitelstvo-podtverzhdenie', [UsefulInfoController::class, 'vidConfirm'])->name('info-7-3');
Route::get('/info-center/useful-info/razresheniye-rvp', [UsefulInfoController::class, 'rvp'])->name('info-7');
Route::get('/info-center/useful-info/grazhdanstvo', [UsefulInfoController::class, 'grazhdanstvo'])->name('info-8-1');
Route::get('/info-center/useful-info/grazhdanstvo-comission', [UsefulInfoController::class, 'grazhdanstvoCommission'])->name('info-8-2');
Route::get('/info-center/useful-info/status-nositelya', [UsefulInfoController::class, 'status'])->name('info-8-3');
Route::get('/info-center/useful-info/grazhdanstvo-test', [UsefulInfoController::class, 'grazhdanstvoTest'])->name('info-8');
Route::get('/info-center/useful-info/polis-dms', [UsefulInfoController::class, 'polis'])->name('info-9');
Route::get('/info-center/useful-info/snils', [UsefulInfoController::class, 'snils'])->name('info-8-4');
Route::get('/info-center/useful-info/daktiloskopiya', [UsefulInfoController::class, 'daktiloskopiya'])->name('info-9-2');
Route::get('/info-center/useful-info/inn', [UsefulInfoController::class, 'inn'])->name('info-9-1');
Route::get('/info-center/useful-info/snyatiye-zapreta-na-vyezd', [UsefulInfoController::class, 'snyatiye'])->name('info-6');
Route::get('/info-center/useful-info/peresechenie_graniz', [UsefulInfoController::class, 'granizy'])->name('info-10');
Route::get('/info-center/useful-info/pereseleniye_migrantov', [UsefulInfoController::class, 'pereseleniye'])->name('info-11');

Route::get('/smi_o_nas', [MainController::class, 'showPressNews'])->name('press');
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
Route::get('/support/reload-captcha',[CaptchaServiceController::class, 'reloadCaptcha']);

Route::view('/admin-panel', 'admin.admin_home')->middleware('auth')->name('admin');

Route::get('/center-podderzhki', [SecondSiteController::class, 'index'])->name('second_main');
Route::get('/center-podderzhki/reception', [SecondSiteController::class, 'reception'])->name('second.reception');
Route::get('/center-podderzhki/faq', [SecondSiteController::class, 'faq'])->name('second.faq');
Route::get('/center-podderzhki/faq/{id}', [SecondSiteController::class, 'faqSingle'])->name('second.faq.single');
Route::get('/center-podderzhki/lawyer', [SecondSiteController::class, 'lawyer'])->name('second.lawyer');
Route::get('/center-podderzhki/hotline', [SecondSiteController::class, 'hotline'])->name('second.hotline');

Route::view('/404','admin.errors.404');
Route::view('/401','admin.errors.401');
Route::view('/500','admin.errors.500');

Route::put('/uploadImage/{id}', [ UploadController::class, 'summerUpload' ])->name('summer_upload');
Route::put('/uploadNewsImage', [ UploadController::class, 'imageNewsStore' ])->name('image.news.store');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth')->group(function(){

Route::resource('/user', '\App\Http\Controllers\Admin\UsersController', ['except' => ['create', 'show','save']]);
Route::resource('/main', '\App\Http\Controllers\Admin\MainController');
Route::resource('/news', '\App\Http\Controllers\Admin\NewsController');
Route::resource('/pages', '\App\Http\Controllers\Admin\PageController');

Route::resource('/faq-page', '\App\Http\Controllers\Admin\FAQ\ForFaqController');
Route::resource('/faq', '\App\Http\Controllers\Admin\FAQ\AdminFaqController');
Route::resource('/seo', '\App\Http\Controllers\Admin\SeoController');
Route::resource('/contacts', '\App\Http\Controllers\Admin\Contacts\ContactsController');
Route::resource('/company-info', '\App\Http\Controllers\Admin\Contacts\CompanyInfoController');
Route::resource('/projects', '\App\Http\Controllers\Admin\Main\ProjectsController');
Route::resource('/forprojects', '\App\Http\Controllers\Admin\Main\ForProjectsController');
Route::resource('/press', '\App\Http\Controllers\Admin\Press\PressController');

Route::get('/page-hide/{id}', [PageController::class, 'hide'])->name('page.hide');

Route::get('/notifications/all',[NotificationController::class, 'showAll'])->name('notices.all');
Route::get('/notifications/{category}', [NotificationController::class, 'index'])->where('category', '[a-z]+')->name('notice');
Route::get('/notifications/{category}/{id}',[NotificationController::class, 'show'])->name('notice.show');
Route::get('/notifications/feedback-call',[NotificationController::class, 'call'])->name('notices.call');
});

Route::get('/{page}', [ DefaultController::class, 'index' ])->name('index');
