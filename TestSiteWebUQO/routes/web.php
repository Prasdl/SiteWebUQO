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


/*
Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact/submit', 'MessagesController@submit');

*/

Route::get('/', function () {
    return view('accueil');
});


Route::get('/plansite', function () {
    return view('plansite');
});


Route::get('/genie', function () {
    return view('genie');
});

Route::get('/informatique', function () {
    return view('informatique');
});

Route::get('/', function () {
    return view('accueil');
});

Route::get('/partenaire', function () {
    return view('partenaires');
});
