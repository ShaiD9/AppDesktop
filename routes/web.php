<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Http\Request;

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

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});

//Route tasks

//Voir les taches
Route::get('/taches', (TaskController::class. '@index'))->name('tasks.index');

//Page de création de tache
Route::get('/taches/creation', [TaskController::class, 'create'])->name('tasks.creation');
//Methode de stockage de tache
Route::post('/taches', [TaskController::class, 'store'])->name('tasks.enregistrer');

//Page de modification de tache
Route::get('/taches/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edition');
//Methode de modification de tache
Route::put('/taches/{id}', [TaskController::class, 'update'])->name('tasks.modification');

//Suprimer une tache
Route::delete('/taches/suprimer', (TaskController::class. '@destroy'))->name('tasks.suppression');