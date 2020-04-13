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

use App\Http\Controllers\ContactController;
use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('team/index', 'TeamController@index')->name('team.index');
Route::get('team/show/{id}', 'TeamController@show')->name('team.show');

Route::group(['prefix' => 'team', 'middleware' => 'auth'], function () {
    Route::get('create', 'TeamController@create')->name('team.create');
    Route::post('confirm', 'TeamController@confirm')->name('team.confirm');
    Route::post('store', 'TeamController@store')->name('team.store');
    Route::get('edit/{id}', 'TeamController@edit')->name('team.edit');
    Route::post('update/{id}', 'TeamController@update')->name('team.update');
    Route::post('destroy/{id}', 'TeamController@destroy')->name('team.destroy');
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('input', 'ContactController@input')->name('contact.input');
    Route::post('confirm', 'ContactController@confirm')->name('contact.confirm');
    Route::post('send', 'ContactController@send')->name('contact.send');
});
