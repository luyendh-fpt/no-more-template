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

Route::get('/hello-world', function () {
    $product = new \App\Product();
    $product->name = 'Product 01';
    $product->save();
    return view('hello-world');
});

Route::get('/hi-world', function () {


    return \App\Product::all();
});

Route::get('/home', 'HomeController@index');
Route::get('/cart', 'HomeController@cart');
Route::resource('/game', 'GameController');
Route::post('/game/change-status', 'GameController@changeStatus');
Route::get('/game/get-by-id/{id}', 'GameController@getById');

Route::get('/admin/example/list', function (){
    return view('example.list');
});

Route::get('/admin/example/form', function (){
    return view('example.form');
});
