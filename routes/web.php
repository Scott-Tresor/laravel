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
    return view('accueil');
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription', function () {
    request()->validate([
        'prenom' => ['required'],
        'email' => ['required','email'],
        'password' => ['required','confirmed','min:7'],
        'password_confirmation' => ['required']
    ]);

    $utilisateur = App\Utilisateur::create([
        'username' => request('prenom'),
        'email' => request('email'),
        'password' => bcrypt(request('password'))
    ]);

    return "salut tu va bien" . request('prenom');
});

Route::get('/utilisateur', function () {
    return view('utilisateur',[
        'utilisateurs' => App\Utilisateur::all()
    ]);
});
