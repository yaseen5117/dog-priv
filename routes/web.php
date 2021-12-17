<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('petitions', 'App\Http\Controllers\PetitionsController');
Route::resource('users', 'App\Http\Controllers\UsersController');
Route::resource('petition_documents', 'App\Http\Controllers\PetitionDocumentsController');
Route::post('upload_petition_documents', 'App\Http\Controllers\PetitionDocumentsController@uploadPetitionDocuments');
Route::get('fetch_petition_documents', [App\Http\Controllers\PetitionDocumentsController::class, 'fetchPetitionDocuments']);