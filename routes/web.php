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
    return view('welcome');
});



Route::get('/test/func', [App\Http\Controllers\TestController::class, 'func']);
Route::get('/contact/page1', [App\Http\Controllers\TestController::class, 'page1']);
Route::get('/contact/page2', [App\Http\Controllers\TestController::class, 'page2']);


//入力フォームページ
// Route::get('/contact', 'ContactsController@index')->name('contact.index');
Route::get('/contact',  [App\Http\Controllers\ContactsController::class, 'index'])->name('contact.index');

//確認フォームページ
// Route::post('/contact/confirm', 'ContactsController@confirm')->name('contact.confirm');
Route::post('/contact/confirm',  [App\Http\Controllers\ContactsController::class, 'confirm'])->name('contact.confirm');


//送信完了ページ
// Route::post('/contact/thanks', 'ContactsController@send')->name('contact.send');
Route::post('/contact/thanks',  [App\Http\Controllers\ContactsController::class, 'send'])->name('contact.send');