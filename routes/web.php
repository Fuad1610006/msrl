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
use App\Http\Controllers\GalleryController as gallery;
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

Route::post('contact/store', [contact::class, 'store'])->name('contact.store');//Incomplete
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
    
    Route::get('moderation', [moderation::class, 'index'])->name('moderations.index');
    Route::get('moderation/edit', [moderation::class, 'edit'])->name('moderations.edit');
    Route::post('moderation/update', [moderation::class, 'update'])->name('moderations.update');//Incomplete
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save'); 
});

Route::get('/', function () {
    return view('frontend.home');
})->name('home');
Route::get('about', function () {
    return view('frontend.about.about-us');
})->name('about');
Route::get('contact', function () {
    return view('frontend.contact.contact-us');
})->name('contact');
// Route::get('gallery', function () {
//     return view('frontend.gallery.gallery');
// })->name('gallery');
Route::get('moderation', function () {
    return view('frontend.moderation.moderation');
})->name('moderation');
Route::get('track-record', function () {
    return view('frontend.track-record.track-record');
})->name('track-record');
Route::get('overview', function () {
    return view('frontend.overview.overview');
})->name('overview');