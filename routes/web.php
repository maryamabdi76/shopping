<?php
use Illuminate\Support\Facades\Route;
use App\Models\Kala;
use App\Models\Images;
use App\Models\Tags;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SiteController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('Role');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('Role')->group(function(){
    Route::get('alluserdatatables', 'UserController@alluserdatatables')->name('users.alluserdatatables');
    Route::resource('/users','UserController');
    Route::resource('/category','CategoryController');
    Route::resource('/product','ProductController');
    Route::resource('/review','ReviewController');
});

Route::get('/edit/{id}', 'Admin\UserController@edit')->middleware('Role');
Route::post('/update', 'Admin\UserController@update')->middleware('Role');
Route::get('/delete/{id}', 'Admin\UserController@destroy')->middleware('Role');


Route::get('/addPro', 'Admin\CategoryController@create')->middleware('Role');
Route::post('/createPro', 'Admin\CategoryController@store')->middleware('Role');
Route::get('/editPro/{id}', 'Admin\CategoryController@edit')->middleware('Role');
Route::post('/updatePro', 'Admin\CategoryController@update')->middleware('Role');
Route::get('/deletePro/{id}', 'Admin\CategoryController@destroy')->middleware('Role');


Route::get('/addProduct', 'Admin\ProductController@create')->middleware('Role');
Route::post('/createProduct', 'Admin\ProductController@store')->middleware('Role');
Route::get('/editProduct/{id}', 'Admin\ProductController@edit')->middleware('Role');
Route::post('/updateProduct', 'Admin\ProductController@update')->middleware('Role');
Route::get('/deleteProduct/{id}', 'Admin\ProductController@destroy')->middleware('Role');

Route::get('/addReview', 'Admin\ReviewController@create')->middleware('Role');
Route::post('/createReview', 'Admin\ReviewController@store')->middleware('Role');
Route::get('/editReview/{id}', 'Admin\ReviewController@edit')->middleware('Role');
Route::post('/updateReview', 'Admin\ReviewController@update')->middleware('Role');
Route::get('/deleteReview/{id}', 'Admin\ReviewController@destroy')->middleware('Role');

Route::get('/deletePhoto/{id}/{pid}', 'Admin\ProductController@deletePhoto')->middleware('Role');


Route::get('/all', ['as'=>'all','uses'=>'SiteController@getall']);

Route::get('/updateusers/{id}', ['as'=>'update','uses'=>'SiteController@update']);
Route::post('/validateUpdate', 'SiteController@validateUpdate');
Route::get('/deleteusers/{id}', ['as'=>'all','uses'=>'SiteController@delete']);

Route::get('/digitalproduct', ['as'=>'products.products','uses'=>'ProductController@product']);
Route::get('/clothesproduct', ['as'=>'products.products','uses'=>'ProductController@product']);
Route::get('/productinfo/{id}', ['as'=>'products.productinfo','uses'=>'ProductController@productinfo']);


// Route::get('/product/filter', ['as'=>'products.all','uses'=>'ProductController@filter']);

Route::get('/support', ['as'=>'support.support','uses'=>'SupportController@support']);


Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::get('/proinfoedit', ['as'=>'profile.proinfoedit','uses'=>'ProfileController@proinfoedit']);

Route::get('/addressedit', ['as'=>'profile.addressedit','uses'=>'ProfileController@addressedit']);

Route::get('/wallet', ['as'=>'profile.wallet','uses'=>'ProfileController@wallet']);

Route::get('/lastfactors', ['as'=>'profile.lastfactors','uses'=>'ProfileController@lastfactors']);

Route::get('/liked', ['as'=>'profile.liked','uses'=>'ProfileController@liked']);



Route::get('/cart', ['as'=>'cart.cart','uses'=>'CartController@cart']);

Route::get('/factor', ['as'=>'factor.factor','uses'=>'FactorController@factor']);

Route::get('/transaction', ['as'=>'transaction.transaction','uses'=>'TransactionController@transaction']);

Route::get('/thank', ['as'=>'transaction.thank','uses'=>'TransactionController@thank']);

Route::get('/clothesproduct/tags/{id}', 'ProductController@filterTag')->name('filterTag');
Route::get('/clothesproduct/category/{id}', 'ProductController@filterCategory')->name('filterCategory');
