<?php

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');
Route::get('/organization','UtilityController@organization');
Route::get('/news','UtilityController@news');
Route::get('/news/{id}','UtilityController@fullNews');
Route::get('/my-profile', 'ProfileController@index');
Route::get('/my-profile/edit', 'ProfileController@editProfile');
Route::post('/my-profile/edit', 'ProfileController@updateProfile');
Route::get('/contact-us', 'UtilityController@contactUs');
Route::post('/contact-us', 'UtilityController@storeContact');
Route::get('/team', function (){
    return view('team');
});
 
Route::group(['middleware'=>'otp'], function ()
{
    Route::get('/home', 'HomeController@index')->name('home');
    //Route::post('/home', 'PostController@storePost');
    Route::get('/search-donor', 'PostController@searchDonor');
    Route::get('/request', 'PostController@requestDonor');
    Route::get('/send-request', 'PostController@sendRequest');
    Route::get('/receive-request', 'PostController@receiveRequest');
    Route::get('/cancel-request', 'PostController@cancelRequest');
    Route::get('/accept-request', 'PostController@acceptRequest');
    Route::get('/donor-request', 'PostController@donorRequest');
    Route::get('/complete-request', 'PostController@completeRequest');
    Route::post('/cancel-post', 'PostController@cancelPost');
    Route::post('/complete-post', 'PostController@completePost');


    Route::get('/blood-post', 'PostController@bloodPost');

});


Route::group(['middleware'=>'NotOtp'], function ()
{

    Route::get('/verification', function () {
        return view('two_factor');
    });
    Route::post('/otpverification', 'VerefyController@verification')->name('otpverification');
    Route::post('/resend', 'VerefyController@resend')->name('resend');

});

/*Route::get('/verification', function () {
    return view('two_factor');
})->middleware('NotOtp');

Route::post('/otpverification', 'VerefyController@verification')->name('otpverification')->middleware('NotOtp');

Route::post('/resend', 'VerefyController@resend')->name('resend');*/


