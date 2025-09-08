<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;

Route::get('/', [AuthenticationController::class, 'showLoginFrom'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login.submit');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout.submit');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/notice', [AdminController::class, 'notice'])->name('notice');
Route::get('/central.committee', [AdminController::class, 'centralCommittee'])->name('central.committee');
Route::get('/branch/committee', [AdminController::class, 'branchCommittee'])->name('branch.committee');
Route::get('/branch/committee/list', [AdminController::class, 'branchCommitteeList'])->name('branch.committee.list');
Route::get('/committee/create', [AdminController::class, 'committeeCreate'])->name('committee.create');
Route::get('/special/person', [AdminController::class, 'specialPerson'])->name('special.person');
Route::get('/life/time/person', [AdminController::class, 'lifeTimePerson'])->name('life.time.person');
Route::get('/general/person', [AdminController::class, 'generalPerson'])->name('general.person');
Route::get('/person/create', [AdminController::class, 'personCreate'])->name('person.create');


Route::get('/users/manage', [AdminController::class, 'usersShow'])->name('users.manage');
Route::post('/users', [AdminController::class, 'userStore'])->name('users.store');

Route::get('/finance/sheet', [AdminController::class, 'finance'])->name('finance.sheet');
Route::get('/activities', [AdminController::class, 'activities'])->name('activities');
Route::get('/contact', [AdminController::class, 'contact'])->name('contact');


Route::get('/services', [AdminController::class, 'services'])->name('services');
Route::post('/service/store', [AdminController::class, 'serviceStore'])->name('service.store');
Route::post('/service/update/{id}', [AdminController::class, 'serviceUpdate'])->name('service.update');
Route::delete('/service/destroy/{id}', [AdminController::class, 'serviceDestroy'])->name('service.destroy');


// Settings Controller Route Start
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
// Settings Controller Route End


Route::get('/change/password', [AdminController::class, 'changePassword'])->name('change.password');




