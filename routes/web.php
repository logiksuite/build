<?php

use Illuminate\Support\Facades\Route;
use LogikSuite\Build\Controllers\TranslationController;
use LogikSuite\Build\LogikBuild;

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
    return view('ui');
});


Route::get('/translation/language', [TranslationController::class, 'languages']);

Route::get('/translation/editor/{file?}', [TranslationController::class, 'editor']);
Route::get('/translation/get/{file}/{key}/{locale}', [TranslationController::class, 'get']);
Route::post('/translation/get', [TranslationController::class, 'getBatch']);

Route::post('/translation/locale', [TranslationController::class, 'addLocale']);
Route::delete('/translation/locale', [TranslationController::class, 'removeLocale']);

Route::post('/translation/translate', [TranslationController::class, 'translate']);

Route::post('/translation/save', [TranslationController::class, 'save']);
