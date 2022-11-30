<?php

use Illuminate\Support\Facades\Route;

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

/************************* PAGE - CONNEXION */

Route::get('/connexion', [\App\Http\Controllers\RpgController::class, 'connexion'])->name('connecte.index');

/************************* PAGE - PROFILE */

Route::get('/profile', [\App\Http\Controllers\RpgController::class, 'profile'])->name('profile.index');

/************************* LOG IN */

Route::post('/login', [\App\Http\Controllers\RpgController::class, 'login'])->name('log.in');

/************************* LOG OUT */

Route::get('/logout', [\App\Http\Controllers\RpgController::class, 'logout'])->name('log.out');

/************************* INSCRIPTION */

Route::get('/inscription', [\App\Http\Controllers\RpgController::class, 'inscription'])->name('inscription.index');

/************************* ACCUEIL */

Route::get('/accueil', [\App\Http\Controllers\RpgController::class, 'index'])->name('accueil.rpg');

/************************* CREATION PERSONNAGE / AFFICHAGE DE LA LISTE DES PERSONNAGES */

Route::get('/personnage', [\App\Http\Controllers\RpgController::class, 'personnage'])->name('personnage.rpg');

Route::get('/personnageListe', [\App\Http\Controllers\RpgController::class, 'personnageListe'])->name('personnage.liste');

/************************* CREATION DU GROUPE / AFFICHAGE DE LA LISTE DES GROUPES */

Route::get('/groupe', [\App\Http\Controllers\RpgController::class, 'groupe'])->name('groupe.rpg');

Route::get('/groupesListe', [\App\Http\Controllers\RpgController::class, 'groupesListe'])->name('groupe.liste');

/************************* CREATION DES TABLES */

Route::post('/store', [\App\Http\Controllers\RpgController::class, 'store'])->name('rpg.store');

Route::post('/store2', [\App\Http\Controllers\RpgController::class, 'store2'])->name('rpg.store2');

Route::post('/store3', [\App\Http\Controllers\RpgController::class, 'store3'])->name('rpg.store3');

/************************* EFFACER DES DONNEES */

Route::delete('/personnages/{personnage}', [\App\Http\Controllers\RpgController::class, 'destroy'])->name('personnage.destroy');

Route::delete('/groupes/{groupe}', [\App\Http\Controllers\RpgController::class, 'destroy2'])->name('groupe.destroy');

Route::delete('/comptes/{compte}', [\App\Http\Controllers\RpgController::class, 'destroy3'])->name('compte.destroy');

/***********************************************************/

Route::get('/register', [\App\Http\Controllers\RpgController::class, 'createLogin'])->name('create.login');
Route::post('register', [\App\Http\Controllers\RpgController::class, 'storeLogin'])->name('store.login');
