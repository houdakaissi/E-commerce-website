<?php

use Illuminate\Support\Facades\Route;
if(version_compare(PHP_VERSION,'7.3.26')>=0){
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
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

 
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/activate/{code}', 'ActivationController@activateUserAccount')->name('user.activate');
Route::get('/resend/{email]', 'ActivationController@resendActivationCode')->name('code.resend');
Route::resource('products','ProductController');
Route::get('products/category/{category}','HomeController@getProductByCategory')->name('category.products');
Route::get('/cart','CartController@index')->name('cart.index');
Route::post('add/cart/{product}}','CartController@addProductToCart')->name('add.cart');
Route::delete('remove/{product}/cart','CartController@removeProductFromCart')->name('remove.cart');
Route::put('update/{product}/cart','CartController@updateProductOnCart')->name('update.cart');
Route::get('/handle-payment', 'PaypalPaymentController@handlePayment')->name('make.payment');
Route::get('/cancel-payment', 'PaypalPaymentController@paymentCancel')->name('cancel.payment');
Route::get('/payment-success', 'PaypalPaymentController@paymentSuccess')->name('success.payment');Route:
Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/login', 'AdminController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'AdminController@adminLogin')->name('admin.login');
Route::get('/admin/logout', 'AdminController@adminLogout')->name('admin.logout');
Route::get('/admin/products', 'AdminController@getProducts')->name('admin.products');
Route::get('/admin/orders', 'AdminController@getOrders')->name('admin.orders');
Route::get('/admin/users', 'AdminController@getUsers')->name('admin.users');
Route::get('/admin/categories', 'AdminController@getCategories')->name('admin.categories');
Route::get('/admin/admins', 'AdminController@getAdmins')->name('admin.admins');
Route::resource('orders', 'OrderController');
Route::resource('categories', 'CategoryController');
Route::resource('admins', 'AdminController');
Route::get('/Accueil', 'HomeController@get1')->name('products.acceuil');
Route::get('/Contact', 'HomeController@get2')->name('products.contact');
 
Route::get('/gf', 'ProductController@search')->name('products.search');
Route::get('/promotions', 'HomeController@getPromo')->name('products.promo1');
Route::get('/Nouveautés', 'HomeController@getNouveau')->name('products.nouveau1');
