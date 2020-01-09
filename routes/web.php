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
    return view('home');
});



Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');
Route::get('/create', 'LoginController@create')->name('user.create');

Route::get('/login/logout', 'LoginController@logout')->name('logout');

//Route::get('/mail', 'mailController@index');




Route::get('/home', 'HomeController@index')->name('home');





//Route::resource('/customer', 'CustomerController');



Route::get('/menu','OrderController@index')->name('menu');




Route::get('/product/details/{id}', 'ProductController@detail')->name('product.details');
Route::post('/product/details/{id}', 'ProductController@cart');

Route::get('/cart','OrderController@cart');

Route::get('/showorder','OrderController@show')->name('cart.show');

Route::post('/showorder','OrderController@store');

Route::get('/removeitem/{id}','OrderController@remove')->name('cart.remove');

Route::post('/updateitem','OrderController@update');



//Route::post('/ajax','OrderController@store')->name('order.show');

 Route::get('/ajaxx','OrderController@showw');


 Route::get('/mail','OrderController@mail');


Route::group(['middleware' => 'session'],function(){

Route::get('/product', 'ProductController@list')->name('product.list');
Route::get('/category', 'CategoryController@list')->name('category.list');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/create', 'CategoryController@store');


Route::get('/category/show/{id}', 'CategoryController@show')->name('category.show');
Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/category/edit/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@delete')->name('category.delete');
Route::post('/category/delete/{id}', 'CategoryController@destroy');



Route::get('/product/create', 'ProductController@create')->name('product.create');

Route::post('/product/create', 'ProductController@store');

Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/edit/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::post('/product/delete/{id}', 'ProductController@destroy');

Route::get('/admin', 'adminController@index')->name('admin');

//Route::resource('/user', 'UserController');
Route::get('/user', 'UserController@index')->name('user.list');

Route::get('/user/create', 'UserController@create')->name('user.create');
Route::post('/user/create', 'UserController@store');


Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');

Route::post('/user/edit/{id}', 'UserController@update');

Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
Route::post('/user/delete/{id}', 'UserController@destroy');


Route::get('/notification','OrderController@notification')->name('order.notify');

Route::get('/current/{id}','OrderController@current')->name('order.current');

Route::get('/current','OrderController@currentshow')->name('current');

Route::get('/pending/{id}','OrderController@pending')->name('order.pending');
Route::get('/pending','OrderController@pendingshow')->name('pending');
Route::get('/complete/{id}','OrderController@complete')->name('order.complete');

Route::get('/completed','OrderController@showcomplete');

Route::get('/orderdelete/{id}','OrderController@orderDelete')->name('order.dd');


});