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

// le slash représente la racine
Route::get('/', function () {
    return view('accueil');
});

Route::get('apropos', function () {
    return view('apropos');
});

Route::get('accueil', function () {
    return view('accueil');
});

Route::get('cuisine', function () {
    return view('cuisine');
});

Route::get('developpeurweb', function () {
    return view('developpeurweb');
});

Route::get('formationcuisine', function () {
    return view('formationcuisine');
});

Route::get('listeformations', function () {
    return view('listeformations');
});

Route::get('magnetisme', function () {
    return view('magnetisme');
});

Route::get('metiersinformatique', function () {
    return view('metiersinformatique');
});

Route::get('techniciendemaintenance', function () {
    return view('techniciendemaintenance');
});

Route::get('webdesigner', function () {
    return view('webdesigner');
});

Route::get('formationmedecinedouce', function () {
    return view('formationmedecinedouce');
});

Route::resource('lieu','lieuController');
Route::resource('formation','FormationController');
Route::resource('commentaires','CommentairesControlleur');

