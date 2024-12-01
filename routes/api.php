<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middelware' => 'auth:sanctum'], function () {

});
Route::POST('register', 'AccountController@userRegistration');
Route::post('login', 'AccountController@login');
Route::post('verifylogin', 'AccountController@verifylogin');
Route::post('resendotp', 'AccountController@resendotp');
Route::get('logout', 'AccountController@logout');
Route::get('pages', 'PageController@pageController');
Route::get('getProfile', 'ProfileController@getProfile');
Route::get('getRewards', 'ProfileController@getRewards');
Route::post('updateProfile', 'ProfileController@updateProfile');
Route::post('updateProfilePic', 'ProfileController@updateProfilePic');
Route::post('createOrder', 'OrderController@orderPlaced');
Route::get('getOrders', 'OrderController@getOrders');
Route::get('notifications', 'SiteSettingsController@notification');
Route::get('siteSettings', 'SiteSettingsController@siteSettings');
Route::get('settings', 'SiteSettingsController@settings');
Route::get('branch', 'BranchController@branch');



