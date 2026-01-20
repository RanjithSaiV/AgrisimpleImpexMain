<?php

use App\Http\Controllers\Admin\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('login', 'AccountController@login')->name('admin.login');
Route::post('login', 'AccountController@loginAction')->name('loginAction');
Route::post('validateAdminEmail', 'AccountController@checkEmail')->name('validateAdminEmail');
Route::group(['middleware' => 'admin'], function () {
    Route::get('dashboard', 'AccountController@dashboard')->name('admin.dashboard');
    Route::get('logout', 'AccountController@logout')->name('admin.logout');
    Route::post('changePassword', 'AccountController@changePassword')->name('changePassword');

    // Site Settings
    Route::resource('sitesettings', 'SiteSettingController');
    Route::resource('contacts', 'ContactController');
    Route::resource('pages', 'PageController');
    Route::resource('setting', 'SettingsController');


});
