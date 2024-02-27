<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController as user;
use App\Http\Controllers\RoleController as role;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\DashboardController as dashboard;
use App\Http\Controllers\PermissionController as permission;
use App\Http\Controllers\ModerationController as moderation;
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
Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'signOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function(){
    Route::get('dashboard', [dashboard::class,'index'])->name('dashboard');
    Route::get('change_password', [user::class,'index'])->name('change_password');
});

Route::middleware(['checkrole'])->prefix('admin')->group(function(){
    Route::resource('user', user::class);
    Route::resource('role', role::class);
    
    Route::get('moderation', [moderation::class, 'index'])->name('moderations.index');
    Route::get('moderation/edit', [moderation::class, 'edit'])->name('moderations.edit');
    Route::post('moderation/update', [moderation::class, 'update'])->name('moderations.update');
    Route::get('permission/{role}', [permission::class,'index'])->name('permission.list');
    Route::post('permission/{role}', [permission::class,'save'])->name('permission.save'); 
});

Route::get('/', function () {
    return view('frontend.home');
})->name('home');
Route::get('/about', function () {
    return view('frontend.about.about-us');
})->name('about');
Route::get('/contact', function () {
    return view('frontend.contact.contact-us');
})->name('contact');
Route::get('/management', function () {
    return view('frontend.management.management');
})->name('management');
Route::get('/moderation', function () {
    return view('frontend.moderation.moderation');
})->name('moderation');
Route::get('/track-record', function () {
    return view('frontend.track-record.track-record');
})->name('track-record');
Route::get('/overview', function () {
    return view('frontend.overview.overview');
})->name('overview');