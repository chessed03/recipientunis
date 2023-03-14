<?php

use App\Http\Controllers\System\PostController;
use App\Http\Controllers\System\SiteController;
use App\Http\Controllers\System\ProgramController;
use App\Http\Controllers\System\EventController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

    # Routes sites
    Route::controller(SiteController::class)
        ->prefix('/')
        ->as('site-')
        ->group(function () {

            Route::get('/', 'maintenance')->name('maintenance'); #ruta temporal vista sitio en mantenimiento
            Route::post('create-surface', 'createSurface')->name('create-surface'); #ruta temporal vista sitio en mantenimiento
            Route::get('index', 'index')->name('index'); #ruta real del sitio
            Route::post('getDataNotices', 'getDataNotices')->name('getDataNotices');

        });

    # Routes programs
    Route::controller(ProgramController::class)
        ->prefix('programas')
        ->as('program-')
        ->group(function () {

            Route::any('/{slug}', 'show')->name('show');

        });

    # Routes posts
    Route::controller(PostController::class)
        ->prefix('posts')
        ->as('post-')
        ->group(function () {

            Route::any('/{slug}', 'show')->name('show');

        });

    # Routes events
    Route::controller(EventController::class)
        ->prefix('eventos')
        ->as('event-')
        ->group(function () {

            Route::any('/{slug}', 'show')->name('show');

        });