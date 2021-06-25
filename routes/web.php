<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CoursController;

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


Route::get('/contact', function () {
    return view('contact');
});


Route::post('/contact', [ContactController::class, 'submitAction']);




Route::get('/etudiant', function () {
    return view('etudiant');
});


Route::post('/etudiant', [EtudiantController::class, 'etudianAction']);




Route::get('/cours',function (){
    return view('cours');
});




Route::post('/cours',[CoursController::class,"CoursAction",]);
