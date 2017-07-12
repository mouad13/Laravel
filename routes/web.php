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




Route::get('customers',  'Customers@getAllCustomers');

Route::get('customer/{id}', 'Customers@getCustomer');


Route::get('products',  'ProductController@getAllProducts');

Route::get('product/{id}', 'ProductController@getProduct');


// Route::post('customer', function () {
//     return 'Hello World';
// });


// Route::delete('customer/{id}', function () {
//     return 'Hello World';
// });


// Route::put('customer/{id}', function () {
//     return 'Hello World';
// });