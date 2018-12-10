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


// Route les pages de la racine
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

// Route les pages de etudiant
Route::get('/etudiant/cycledeux', function () {
    return view('cycledeux');
});

Route::get('/etudiant/cycletrois', function () {
    return view('cycletrois');
});

Route::get('/etudiant/cycleungenie', function () {
    return view('cycleungenie');
});

Route::get('/etudiant/cycleuninfo', function () {
    return view('cycleuninfo');
});

// Route les pages de programmes
Route::get('/programmes/cycledeuxtrois', function () {
    return view('cycledeuxtrois');
});

Route::get('/programmes/premiercycle', function () {
    return view('premiercycle');
});

Route::get('/programmes/plancours', function () {
    return view('plancours');
});

// Route les pages de recherche
Route::get('/recherche/domaine', function () {
    return view('domaine');
});

Route::get('/recherche/equipe', function () {
    return view('equipe');
});

// Route les pages de personnel
Route::get('/personnel/personnel', function () {
    return view('personnel/personnel');
});

Route::get('/personnel/professeurs', function () {
    return view('personnel/professeurs');
});

Route::get('/emploi/creer', function() {
    return view('emploi/creer');
});

Route::post('/emploi/creer', 'HomeController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
