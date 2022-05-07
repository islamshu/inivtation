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
Route::resource('invivation', InvitationController::class);
Route::get('pdf/{id}','InvitationController@generate_pdf')->name('pdf');
Route::get('show_invitation/{id}','InvitationController@get_form')->name('form');
Route::post('store_user','InvitationController@store_inv')->name('store_user');
Route::post('store_user_new','InvitationController@store_inv_new')->name('store_user_new');
Route::get('export', 'InvitationController@export')->name('export');

Route::get('show_invitation_request','InvitationController@get_form_new')->name('form_new');
