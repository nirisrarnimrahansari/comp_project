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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
		\UniSharp\LaravelFilemanager\Lfm::routes();
	});
	Route::get("/media", function(){
		return View::make("pages.file_manager.file_manager");
	 })->name('media');
	Route::resource('/prospect','App\Http\Controllers\ProspectController');
	Route::resource('/state','App\Http\Controllers\StateController');
	Route::resource('/country','App\Http\Controllers\CountryController');
	Route::resource('/generate-quotation','App\Http\Controllers\GenerateQuotationController');
	Route::resource('/measurement','App\Http\Controllers\MeasurementController');
	Route::resource('/rate','App\Http\Controllers\RateController');
	Route::resource('/work-name','App\Http\Controllers\WorkNameController');
	Route::resource('/package','App\Http\Controllers\PackageController');	
	Route::get('/package/{work_name_id}','App\Http\Controllers\PackageController@show', 'show')->name('package');
	
	Route::post('/package/work','App\Http\Controllers\PackageController@getWork')->name('getrate');	

	Route::resource('/service','App\Http\Controllers\ServiceController');
	Route::resource('/discount','App\Http\Controllers\DiscountController');

	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

