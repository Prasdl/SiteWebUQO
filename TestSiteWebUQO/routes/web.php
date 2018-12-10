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

Route::get('/partenaire', function () {
    return view('partenaires');
});

// Route les pages de etudiant
Route::get('/etudiant/cycledeux', function () {
    return view('/etudiant/cycledeux');
});

Route::get('/etudiant/cycletrois', function () {
    return view('/etudiant/cycletrois');
});

Route::get('/etudiant/cycleungenie', function () {
    return view('/etudiant/cycleungenie');
});

Route::get('/etudiant/cycleuninfo', function () {
    return view('/etudiant/cycleuninfo');
});

// Route les pages de programmes
Route::get('/programmes/cycledeuxtrois', function () {
    return view('/etudiant/cycledeuxtrois');
});

Route::get('/programmes/premiercycle', function () {
    return view('/programmes/premiercycle');
});

Route::get('/programmes/plancours', function () {
    return view('/programmes/plancours');
});

// Route les pages de recherche
Route::get('/recherche/domaine', function () {
    return view('/recherche/domaine');
});

Route::get('/recherche/equipe', function () {
    return view('/recherche/equipe');
});

// Route les pages de personnel
Route::get('/personnel/personnel', function () {
    return view('/personnel/personnel');
});

Route::get('/personnel/professeurs', function () {
    return view('/personnel/professeurs');
});




