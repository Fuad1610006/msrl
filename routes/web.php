<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController as user;
use App\Http\Controllers\RoleController as role;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\DashboardController as dashboard;
use App\Http\Controllers\PermissionController as permission;
use App\Http\Controllers\ModerationController as moderation;
use App\Http\Controllers\ContactController as contact;
use App\Http\Controllers\ShipController as ship;
use App\Http\Controllers\AboutController as about;
use App\Http\Controllers\AboutUsController as aboutUs;
use App\Http\Controllers\ChairmanController as chairman;
use App\Http\Controllers\ManagementController as management;
use App\Http\Controllers\OverviewController as overview;
use App\Http\Controllers\SisterConcernController as sister;
use App\Http\Controllers\SettingController as settings;
use App\Http\Controllers\GalleryController as gallery;
use App\Http\Controllers\CarouselController as carousel;
use App\Http\Controllers\TrackRecordController as track;
use App\Http\Controllers\BuyerLogoController as buyer;
use App\Http\Controllers\SisterLogoController as sisterLogo;
use App\Http\Controllers\CompanyInfoController as company;
use App\Http\Controllers\HistoryController as history;

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
Route::get('register', [auth::class,'signUpForm'])->name('register');
Route::post('register', [auth::class,'signUpStore'])->name('register.store');
Route::get('login', [auth::class,'signInForm'])->name('login');
Route::post('login', [auth::class,'signInCheck'])->name('login.check');
Route::get('logout', [auth::class,'signOut'])->name('logOut');

// Route::post('about_us/ckfinder/upload', [aboutUs::class, 'upload'])->name('ckfinder_upload');

Route::post('contact/store', [contact::class, 'store'])->name('contact.store');//Incomplete
Route::get('sister', [sister::class, 'sister'])->name('sister');//mostly done
Route::get('about', [about::class, 'about'])->name('about');//mostly done
Route::get('overview', [overview::class, 'overview'])->name('overview');//mostly done
Route::get('/yard', [moderation::class, 'moderation'])->name('yard');//mostly done
Route::get('gallery', [gallery::class, 'gallery'])->name('gallery');//mostly done
Route::get('gallery/filter/{category}', [gallery::class, 'filter'])->name('frontend.gallery.filter');//mostly done

Route::middleware(['checkauth'])->prefix('admin')->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
    Route::get('change_password', [user::class,'index'])->name('change_password');
});

Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    Route::resource('track-records', ship::class);//mostly done
    Route::resource('gallery', gallery::class);//In-progress
    Route::resource('industry', overview::class);//In-progress
    Route::resource('management', management::class);//In-progress
    Route::resource('sister-concern', sister::class);//In-progress
    Route::resource('chairman', chairman::class);//In-progress
    Route::resource('settings', settings::class);//In-progress
    Route::resource('moderation', moderation::class);//In-progress
    Route::resource('about-us', about::class);//In-progress
    Route::resource('carousel', carousel::class);//In-progress
    Route::resource('info', company::class);//In-progress
    Route::resource('sister-logo', sisterLogo::class);//In-progress
    Route::resource('buyer-logo', buyer::class);//In-progress
    Route::resource('track-no', track::class);//In-progress
    Route::resource('history', history::class);//In-progress
    Route::resource('about_us', aboutUs::class);//In-progress

    Route::get('contacts', [contact::class, 'index'])->name('contacts');

    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save'); 
});

Route::get('/', function () {
    return view('frontend.home');
})->name('home');
// Route::get('about', function () {
//     return view('frontend.about.about');
// })->name('about');
Route::get('chairman', function () {
    return view('frontend.chairman.chairman');
})->name('chairman');
// Route::get('sister-concern', function () {
//     return view('frontend.sister-concern.sister');
// })->name('sister');
Route::get('contact', function () {
    return view('frontend.contact.contact');
})->name('contact');
Route::get('moderation', function () {
    return view('frontend.moderation.moderation');
})->name('moderation');
Route::get('management', function () {
    return view('frontend.management.management');
})->name('management');
Route::get('track-record', function () {
    return view('frontend.track-record.track');
})->name('track');
