<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\controllers\chauffeurcontroller;
use App\Http\controllers\voiturecontroller;
use App\Http\controllers\servicecontroller;
use App\Http\controllers\fonctioncontroller;
use App\Http\controllers\lieucontroller;
use App\Http\controllers\responsablecontroller;
use App\Http\controllers\coursecontroller;
use App\Http\Controllers\detailcoursecontroller;
use App\Http\controllers\Utilisateurcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('login.login');
});
//les routes d'authentification manuel
Route::post('auth/check', [App\Http\Controllers\loginController::class, 'check'])->name('login.check');
Route::post('auth/save', [App\Http\Controllers\loginController::class, 'save'])->name('login.save');
Route::get('auth/logout', [App\Http\Controllers\loginController::class, 'logout'])->name('login.logout');
Route::get('auth/profil', [App\Http\Controllers\loginController::class, 'profil'])->name('login.profil');
Route::group(['middleware'=>['AuthCheck']],function(){

    Route::get('auth/login', [App\Http\Controllers\loginController::class, 'login'])->name('login.login');
    Route::get('auth/register', [App\Http\Controllers\loginController::class, 'register'])->name('login.register');
    Route::get('dashboard', [App\Http\Controllers\loginController::class, 'dashboard'])->name('login.dashboard');
    Route::get('auth/profil', [App\Http\Controllers\loginController::class, 'profil'])->name('login.profil');
    Route::resource('chauffeur',chauffeurcontroller::class);
    Route::resource('voiture',voiturecontroller::class);
    Route::resource('service',servicecontroller::class);
    Route::resource('fonction',fonctioncontroller::class);
    Route::resource('lieu',lieucontroller::class);
    Route::resource('responsable',responsablecontroller::class);
    Route::resource('course',coursecontroller::class);
    Route::resource('utilisateur',Utilisateurcontroller::class);
    Route::resource('detail',detailcoursecontroller::class);
});
//endroute auth
//les routes des authentification integrer
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//fin des routes d'authentification
