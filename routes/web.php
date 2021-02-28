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


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//captcha
// Route::get('/contact-form', [App\Http\Controllers\CaptchaServiceController::class, 'index']);
Route::post('/captcha-validation', 'CaptchaServiceController@capthcaFormValidate');
Route::get('/reload-captcha', 'CaptchaServiceController@reloadCaptcha');

Route::resource('dropzone', 'DropzoneController');
Route::post('store-media', 'DropzoneController@media');