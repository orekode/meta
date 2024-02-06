<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Program;
use App\Http\Controllers\Contact;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\GalleryController;
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

// Route::get('/', function() {
//     return view('coming');
// })->name('comming');

Route::get('/', [Home::class, 'index'])->name('home');

Route::get('/home', [Home::class, 'index'])->name('home');

Route::get('/about', [About::class, 'index'])->name('about');

Route::get('/programmes',  [Program::class, 'index'])->name('programmes');

Route::get('/contact', [Contact::class, 'index'])->name('contact');
Route::get('/donate', [DonateController::class, 'index'])->name('donate');

Route::resource('/gallery', GalleryController::class);

Route::get('/login', [GalleryController::class, 'login'])->name('login');

Route::post('/login', [GalleryController::class, 'authenticate'])->name('authenticate');

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/upload', [GalleryController::class, 'upload'])->name('upload');
});


//programmes description and details

Route::get('/programmes/special', function () {
    return view('programmes/special');
})->name('special_kids_programme');


Route::get('/admin',  [Home::class, 'admin'])->name('home_settings');
Route::post('/admin', [Home::class, 'create']);

Route::get('/admin/about',  [About::class, 'admin'])->name('about_settings');
Route::post('/admin/about', [About::class, 'create']);


Route::get('/admin/program',  [Program::class, 'admin'])->name('program_settings');
Route::post('/admin/program', [Program::class, 'create']);


Route::get('/admin/contact', [Contact::class, 'admin'])->name('contact_settings');
Route::post('/admin/contact', [Contact::class, 'create']);