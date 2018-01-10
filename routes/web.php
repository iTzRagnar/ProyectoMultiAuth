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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

/** ROUTES Administradores AUTENTIFICACION*/
Route::prefix('admin')->group(function()
{
    Route::get('/login','Auth\AdministradorLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdministradorLoginController@login')->name('admin.login.submit');
    Route::get('/','ControllerAdministrador@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdministradorLoginController@logout')->name('admin.logout');

    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});