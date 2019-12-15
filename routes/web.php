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

Route::resource('/admin/accounts', 'AccountsController');

*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
//Route::get('users', 'UserController@index');
Route::get('changeStatus', 'UserController@changeStatus');

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/about', 'TestController@about')->name('about');


Route::get('/product', 'TestController@product')->name('product');
Route::get('/testhome', 'HomeController@test')->name('testhome');
Route::get('/dashboard', 'TestController@dashboard')->name('dashboard');

Route::resource('/admin/categories', 'Admin\CategoriesController', ['as'=>'admin']);
Route::resource('/admin/news', 'Admin\NewsController', ['as'=>'admin']);
Route::resource('/admin/accounts', 'Admin\AccountsController', ['as'=>'admin']);
Route::resource('/admin/unpaidbills', 'Admin\UnpaidController', ['as'=>'admin']);
Route::resource('/admin/paidbills', 'Admin\PaidController', ['as'=>'admin']);

Route::get('/admin/accounts/{account}/print', 'Admin\AccountsController@print')->name('admin.accounts.print');

//Route::get('/admin/accounts/{account}/print/{item}', 'Admin\AccountsController@print')->name('admin.accounts.print');

//Route::get('/admin/accounts/{account}/print', 'Admin\AccountsController@print')->name('admin.accounts.print');

Route::resource('/admin/customers', 'Admin\CustomerController', ['as'=>'admin']);

Route::get('/admin/customers/users', 'Admin\UsersController@index');
Route::get('/admin/customers/users-list', 'Admin\UsersController@usersList'); 



















/*
Route::get('/print', 'AccountsController@print')->name('print');
*/