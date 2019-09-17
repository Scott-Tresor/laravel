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



Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::get('/', 'UtilisateursController@liste');

Route::group(['middleware' => 'App\Http\Middleware\Auth'], function () {
    Route::get('/actualite', 'ActualiteController@liste');
    Route::get('/mon-compte', 'CompteController@accueil');
    Route::get('/deconnexion', 'CompteController@deconnexion');
    Route::post('/modifier-compte', 'CompteController@modificationCompte');
    Route::post('/messages', 'MessageController@nouveau');
    Route::post('/{email}/suivis', 'Suiviscontroller@nouveau');

    Route::delete('/{email}/suivis', 'SuivisController@enlever');
});

Route::get('/{email}', 'UtilisateursController@voir');
