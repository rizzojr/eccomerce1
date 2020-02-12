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

/*Route::get('/', function () {
    return view('pages.index');
});*/

//routes for pages
Route::redirect('/','home');
Route::get('/home','PagesController@index');

// Route::get('product','PagesController@product');
Route::get('checkout/{id}','PagesController@checkout');
Route::get('shop','PagesController@shop');

//route resource
Route::resources([
    'admin' => 'AdminController',
    'shippers' => 'shippersController'
]);

Auth::routes(['register' => false]);//we dont need registrtion for admins


Route::get('show/{id}','ProductdetailsController@show');

//route for shopingcart
Route::get('addToCart','shopingCart@store');
Route::get('shopingCart','shopingCart@index');

//route for checkout
Route::post('checkout','checkoutController@store');

//route for categories
Route::get('chairs/{id}','categoriesandbrandsController@chairs');
Route::get('beds/{id}','categoriesandbrandsController@beds');
Route::get('Accesories/{id}','categoriesandbrandsController@Accesories');
Route::get('Furniture/{id}','categoriesandbrandsController@Furniture');
Route::get('Home Deco/{id}','categoriesandbrandsController@Home Deco');
Route::get('Dressings/{id}','categoriesandbrandsController@Dressings');
Route::get('Tables/{id}','categoriesandbrandsController@Tables');

//route for brands
Route::get('Amado','categoriesandbrandsController@Amado');
Route::get('Ikea','categoriesandbrandsController@Ikea');
Route::get('Furniture','categoriesandbrandsController@Furniture');
Route::get('factory','categoriesandbrandsController@factory');
Route::get('Artdeco','categoriesandbrandsController@Artdeco');












