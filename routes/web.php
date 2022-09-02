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
Route::get('/province1', function () {
    return view('province');
});
Route::get('/', 'RegisterController@index')->name('register.index');
Route::get('/register/show','RegisterController@show')->name('register.show');
Route::post('/register/save','RegisterController@store')->name('register.store');
Route::post('/login/postLogin','LoginController@postLogin')->name('login.postLogin');
Route::get('/formEdit/edit/{id}','CrudController@edit')->name('register.edit');
Route::get('/delete/{id}','CrudController@destroy')->name('crud.destroy');
Route::post('/create','CrudController@store')->name('crud.store');
Route::post('/update/save','CrudController@update')->name('crud.update');
Route::get('/province/fetch','RegisterController@fetch')->name('province.fetch');
Route::get('/home', 'HomeController@index');
Route::post('/province/create','ProvinceController@createprovince')->name('province.create');
Route::get('/province/show','ProvinceController@showprovince')->name('province.show');
Route::get('/edit/province/{id}','ProvinceController@edit')->name('province.edit');
Route::get('/delete/province/{id}','ProvinceController@destroy')->name('province.destroy');
Route::post('/update/province','ProvinceController@update')->name('province.update');
  
Auth::routes('/register/show');

Route::get('/home', 'HomeController@index')->name('home');
