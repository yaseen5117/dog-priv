<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('members', 'App\Http\Controllers\HomeController@member');
Route::get('/provinces','App\Http\Controllers\HomeController@province');
Route::get('/cities','App\Http\Controllers\HomeController@city');
// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/validate_email','App\Http\Controllers\HomeController@validateuseremail');
Route::resource('user_profile', 'App\Http\Controllers\ProfileController');
Route::post('subscriber', 'App\Http\Controllers\HomeController@subscriber');
Auth::routes();
Route::resource('post_uploads', 'App\Http\Controllers\PostController');
Route::resource('post_comments', 'App\Http\Controllers\CommentController');
Route::post('change_user_image', 'App\Http\Controllers\UsersController@chagneUserProfileImage');
Route::post('rate_user', 'App\Http\Controllers\UsersController@rateUser');
Route::post('report_user', 'App\Http\Controllers\UsersController@reportingUser');
Route::post('favourite_posts', 'App\Http\Controllers\PostController@favouritePost');
Route::post('favourites', 'App\Http\Controllers\DashBoardController@favourite');
Route::resource('dashboard', 'App\Http\Controllers\UsersController');
Route::get('get_race_names', 'App\Http\Controllers\HomeController@getRaceName');

/* Route some new pages */ 
Route::get('policy', function (){return view('pages.policy');});
Route::get('about', function (){return view('pages.about');});
Route::get('faqs', function (){return view('pages.faq');});
Route::get('blog', function (){return view('blog.blog');});

Route::get('/create_storage_link','App\Http\Controllers\HomeController@createLink');

