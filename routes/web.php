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

// Route::get('/homepagesite/{id}', function ($id) {
//     if($id>10)
//     echo "homepage $id";
//     else
//     echo "sorry";
// });
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


// Route::resource('/admin/users','Admin\UserController', ['except'=>['show','create','store']]);
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('alluserdatatables', 'UserController@alluserdatatables')->name('users.alluserdatatables');
    Route::resource('/users','UserController', ['except'=>['show','create','store']]);

    Route::resource('/category','CategoryController');
    Route::resource('/product','ProductController');
});


Route::get('/edit/{id}', 'Admin\UserController@edit');
Route::post('/update', 'Admin\UserController@update');
Route::get('/delete/{id}', 'Admin\UserController@destroy');


Route::get('/addPro', 'Admin\CategoryController@add');
Route::post('/createPro', 'Admin\CategoryController@create');
Route::get('/editPro/{id}', 'Admin\CategoryController@edit');
Route::post('/updatePro', 'Admin\CategoryController@update');
Route::get('/deletePro/{id}', 'Admin\CategoryController@destroy');


Route::get('/addProduct', 'Admin\ProductController@add');
Route::post('/createProduct', 'Admin\ProductController@create');
Route::get('/editProduct/{id}', 'Admin\ProductController@edit');
Route::post('/updateProduct', 'Admin\ProductController@update');
Route::get('/deleteProduct/{id}', 'Admin\ProductController@destroy');



Route::get('/all', ['as'=>'all','uses'=>'SiteController@getall']);

Route::get('/updateusers/{id}', ['as'=>'update','uses'=>'SiteController@update']);
Route::post('/validateUpdate', 'SiteController@validateUpdate');

Route::get('/deleteusers/{id}', ['as'=>'all','uses'=>'SiteController@delete']);

Route::get('/digitalproduct', ['as'=>'products.products','uses'=>'ProductController@product']);
Route::get('/clothesproduct', ['as'=>'products.products','uses'=>'ProductController@product']);
Route::get('/productinfo/{id}', ['as'=>'products.productinfo','uses'=>'ProductController@productinfo']);


// Route::get('/product/filter', ['as'=>'products.all','uses'=>'ProductController@filter']);

Route::get('/support', ['as'=>'support.support','uses'=>'SupportController@support']);


Route::get('/profile', ['as'=>'profile.profile','uses'=>'ProfileController@profile']);

Route::get('/proinfoedit', ['as'=>'profile.proinfoedit','uses'=>'ProfileController@proinfoedit']);

Route::get('/addressedit', ['as'=>'profile.addressedit','uses'=>'ProfileController@addressedit']);

Route::get('/wallet', ['as'=>'profile.wallet','uses'=>'ProfileController@wallet']);

Route::get('/lastfactors', ['as'=>'profile.lastfactors','uses'=>'ProfileController@lastfactors']);

Route::get('/liked', ['as'=>'profile.liked','uses'=>'ProfileController@liked']);



Route::get('/cart', ['as'=>'cart.cart','uses'=>'CartController@cart']);

Route::get('/factor', ['as'=>'factor.factor','uses'=>'FactorController@factor']);

Route::get('/transaction', ['as'=>'transaction.transaction','uses'=>'TransactionController@transaction']);

Route::get('/thank', ['as'=>'transacti