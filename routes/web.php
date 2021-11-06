<?php

use Illuminate\Support\Facades\Route;
use LogikSuite\Build\Controllers\TranslationController;

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

Route::prefix('logikbuild')->group(function () {

    Route::get('/', function () {

        return view('logikbuild::ui')
        ->with('page_subtitle', 'LogikBuild')
        ->with('page_title', 'Editor')
        ->with('page_content', "");
    });


    Route::get('/translation/language', [TranslationController::class, 'languages'])->name('translation-language');
    Route::get('/translation/editor/{file?}', [TranslationController::class, 'editor'])->name('translation-editor');
    Route::get('/translation/get/{file}/{key}/{locale}', [TranslationController::class, 'get'])->name('translation-get');
    Route::post('/translation/get', [TranslationController::class, 'getBatch'])->name('translation-get-batch');
    Route::post('/translation/locale', [TranslationController::class, 'addLocale'])->name('translation-addlocale');
    Route::delete('/translation/locale', [TranslationController::class, 'removeLocale'])->name('translation-removelocale');
    Route::post('/translation/translate', [TranslationController::class, 'translate'])->name('translation-translate');
    Route::post('/translation/save', [TranslationController::class, 'save'])->name('translation-save');
});
