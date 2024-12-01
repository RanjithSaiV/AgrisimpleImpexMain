<?php

use App\Http\Controllers\Admin\LocationController;
use Illuminate\Support\Facades\Route;

Route::get('login', 'AccountController@login')->name('admin.login');
Route::post('login', 'AccountController@loginAction')->name('loginAction');
Route::post('validateAdminEmail', 'AccountController@checkEmail')->name('validateAdminEmail');
Route::group(['middleware' => 'admin'], function () {
    Route::get('dashboard', 'AccountController@dashboard')->name('admin.dashboard');
    Route::get('logout', 'AccountController@logout')->name('admin.logout');
    Route::post('changePassword','AccountController@changePassword')->name('changePassword');

    // Site Settings
    Route::resource('sitesettings', 'SiteSettingController');
    // Route::resource('location','LocationController');
    // Route::resource('branch','BranchController');
    Route::resource('patients','PatientController');
    Route::resource('doctors','DoctorController');
    Route::resource('pages','PageController');
    // Route::resource('fuels','FuelController');
    // Route::resource('orders','OrderController');
    Route::resource('setting','SettingsController');
    // Route::get('rewards', 'OrderController@rewards')->name('rewards');
    // Route::get('redeemHistory', 'RedeemHistoryController@redeemHistory')->name('rewards');

});
