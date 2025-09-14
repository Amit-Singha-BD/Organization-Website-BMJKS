<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\CommitteeActivitieController;
use App\Http\Controllers\CommitteeManageController;
use App\Http\Controllers\CommitteeYearController;
use App\Http\Controllers\CommitteeMemberController;


// Frontend Routes Start -->
route::get('/',[FrontendController::class,'home_view'])->name('home');
route::get('commitee',[FrontendController::class,'commitee'])->name('commitee');
route::get('notices',[FrontendController::class,'notice'])->name('frontend.notice');
route::get('contact',[FrontendController::class,'contact'])->name('contact');
route::get('about',[FrontendController::class,'about'])->name('about');
route::get('service',[FrontendController::class,'service'])->name('frontend.service');
route::get('lifetime-member',[FrontendController::class,'lifetime_member'])->name('lifetime.member');
route::get('general-member',[FrontendController::class,'general_member'])->name('general.member');
route::get('techteam',[FrontendController::class,'techteam'])->name('techteam');
route::get('budget',[FrontendController::class,'budget'])->name('budget');
route::get('comitee-activities',[FrontendController::class,'comitee_activities'])->name('comitee.activities');
// Frontend Routes End <--




Route::get('/Login', [AuthenticationController::class, 'showLoginFrom'])->name('login');
Route::post('/Login', [AuthenticationController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout.submit');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/central.committee', [AdminController::class, 'centralCommittee'])->name('central.committee');

//comittee manage
Route::get('/committee/create', [CommitteeManageController::class, 'committeeCreate'])->name('committee.create');
//committee year
Route::post('/committee/year/create', [CommitteeYearController::class, 'committeeYearCreate'])->name('committee.year.create');
Route::get('/committee/list', [CommitteeManageController::class, 'committeeListView'])->name('committee.list.view');
Route::resource('committeeMember', CommitteeMemberController::class);

// এক্টিভ কমিটির সাল ও নাম
Route::get('active/committee/{slug}', [CommitteeYearController::class, 'activeCommittee'])->name('active.committee');


Route::get('/special/person', [AdminController::class, 'specialPerson'])->name('special.person');
Route::get('/life/time/person', [AdminController::class, 'lifeTimePerson'])->name('life.time.person');
Route::get('/general/person', [AdminController::class, 'generalPerson'])->name('general.person');
Route::get('/person/create', [AdminController::class, 'personCreate'])->name('person.create');

// Account Routes Start -->
Route::get('/users/manage', [AccountController::class, 'users'])->name('users.manage');
Route::post('/users/create', [AccountController::class, 'userStore'])->name('users.store');
Route::put('/users/password/update/{id}', [AccountController::class, 'passwordUpdate'])->name('password.update');
// Account Routes End <--

// Notice Routes Start -->
Route::resource('notice', NoticeController::class);
// Notice Routes End <--

// Activities Routes Start -->
Route::resource('committeeActivities', CommitteeActivitieController::class);
// Activities Routes End <--




// Finance Routes Start -->
Route::get('/finance/sheet', [FinanceController::class, 'finance'])->name('finance.sheet');
Route::post('/finance/sheet/create', [FinanceController::class, 'sheetCreate'])->name('finance.sheet.create');
Route::get('/finance/sheet/download/{fileName}', [FinanceController::class, 'sheetDownload'])->name('finance.sheet.download');
Route::put('/finance/sheet/update/{id}', [FinanceController::class, 'sheetUpdate'])->name('finance.sheet.update');
Route::delete('/finance/sheet/destroy/{id}', [FinanceController::class, 'sheetDestroy'])->name('finance.sheet.destroy');
// Finance Routes End <--

//Contact Routes Start -->
Route::get('/contact/unread', [ContactController::class, 'contactUnread'])->name('contact.unread');
Route::get('/contact/read', [ContactController::class, 'contactRead'])->name('contact.read');
Route::patch('/contact/read/confirm/{id}', [ContactController::class, 'readConfirm'])->name('contact.read.confirm');
Route::patch('/contact/unread/confirm/{id}', [ContactController::class, 'unreadConfirm'])->name('contact.unread.confirm');
//Contact Routes End <--

// Services Routes Start
Route::get('/services', [ServiceController::class, 'services'])->name('services');
Route::post('/service/store', [ServiceController::class, 'serviceStore'])->name('service.store');
Route::post('/service/update/{id}', [ServiceController::class, 'serviceUpdate'])->name('service.update');
Route::delete('/service/destroy/{id}', [ServiceController::class, 'serviceDestroy'])->name('service.destroy');
// Services Routes End

// Settings Routes Start
Route::get('/site/settings', [SettingController::class, 'siteSettings'])->name('site.settings');
Route::put('/site/settings/branding', [SettingController::class, 'brandingUpdate'])->name('branding.update');
Route::put('/site/settings/seo', [SettingController::class, 'seoUpdate'])->name('seo.update');

Route::put('/site/settings/slide-one', [SettingController::class, 'slideOneUpdate'])->name('slide.one.update');
Route::put('/site/settings/slide-two', [SettingController::class, 'slideTwoUpdate'])->name('slide.two.update');
Route::put('/site/settings/slide-three', [SettingController::class, 'slideThreeUpdate'])->name('slide.three.update');
Route::put('/site/settings/slide-four', [SettingController::class, 'slideFourUpdate'])->name('slide.four.update');
Route::put('/site/settings/slide-five', [SettingController::class, 'slideFiveUpdate'])->name('slide.five.update');
Route::put('/site/settings/slide-six', [SettingController::class, 'slideSixUpdate'])->name('slide.six.update');

Route::put('/site/settings/footer-link', [SettingController::class, 'footerLinkUpdate'])->name('footer.link.update');
Route::put('/site/settings/social', [SettingController::class, 'socialUpdate'])->name('social.update');
Route::put('/site/settings/contact', [SettingController::class, 'contactInfoUpdate'])->name('contact.update');
// Settings Routes End


Route::get('/change/password', [AdminController::class, 'changePassword'])->name('change.password');




