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

use App\Http\Controllers\Auth\RegisterController;
use App\Model\Register;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('register');
});
Route::get('/login1', function () {
    return view('login');
});

Route::get('/register/show','RegisterController@show')->name('register.show');
Route::post('/register/save','RegisterController@store')->name('register.store');
Route::post('/login/postLogin','LoginController@postLogin')->name('login.postLogin');
Route::get('/register/edit{id}','RegisterController@edit')->name('register.edit');
Route::post('register/show','CrudController@destroy')->name('register.destroy');
Route::post('/create','CrudController@store')->name('crud.store');
Route::get('/home', 'HomeController@index');



Auth::routes('/register/show');

Route::get('/home', 'HomeController@index')->name('home');
