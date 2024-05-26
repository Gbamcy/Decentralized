<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DonationFormController;
use App\Http\Controllers\PastorFormRequestController;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

 //Admin dashboard route
Route::get('/dashboard', function () {
    return view('backend');
});


Auth::routes();

//post announcement route(admin)

// crud routes
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::post('posts/{id}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{id}/destroy', [PostController::class, 'destroy'])->name('posts.destroy');
// comments routes
Route::post('/comment', [CommentsController::class,'newComment'])->name('Comment');
// admin routes

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/template', [TemplateController::class, 'template'])->name('template');
Route::get('/about', [TemplateController::class, 'about'])->name('about');
// contacts routs

Route::get('/contact', [TemplateController::class, 'contact'])->name('contact');
Route::post('/contact', [contactFormController::class, 'store'])->name('contacts.store');
// pastors routes

Route::get('/pastor', [TemplateController::class, 'pastor'])->name('pastor');
Route::Post('pastor', [PastorFormRequestController::class, 'store'])->name('pastors.store');

Route::get('/gallery', [TemplateController::class, 'gallery'])->name('gallery');
Route::get('/gallery-detail', [TemplateController::class, 'index'])->name('gallery-detail');
Route::get('/activities', [TemplateController::class, 'activities'])->name('activities');
// donation routes
Route::get('/donation', [TemplateController::class, 'donation'])->name('donation');
Route::post('/donation', [DonationFormController::class, 'store'])->name('donations.store');

//Route::get('/announcement', [TemplateController::class, 'announcement'])->name('announcement');

Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.index');
Route::get('/announcement', [AnnouncementController::class, 'create'])->name('announcement.create');
Route::post('/announcement', [AnnouncementController::class, 'store'])->name('announcement.store');
Route::get('/announcement/{id}', [AnnouncementController::class, 'show'])->name('announcement.show');

Route::get('/privacyPolicy', [TemplateController::class, 'privacyPolicy'])->name('PrivacyPolicy');
// admin routes

Route::get('/audio',[TemplateController::class,'audio'])->name('audio');
Route::post('/audio',[PostController::class,'store'])->name('post.store');

Route::middleware(['auth', 'auth.admin'])->prefix('admin')->as('admin.')->group(function (){

    Route::get('/dashboard', [ AdminController::class, 'home'])->name('dashboard');


});

Route::post('payment', [PaystackController::class, 'redirectToGateway'])->name('paystack.pay');
