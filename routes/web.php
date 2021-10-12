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

Route::get('/bagas', function () {
    echo "Hello World";
});

Route::get('/name/{bagas}', function ($bagas) {
    return "Hello " . $bagas;
});

Route::get('/name/{bagas}', function ($bagas) {
    return "Hello " . $bagas;
})->where('bagas', '[A-Za-z]+');

Route::get('/name/{nrp}/{bagas}', function ($nrp,$bagas) {
    return $nrp ." " . $bagas;
});
