<?php

use App\Http\Controllers\System\PostController;
use App\Http\Controllers\System\SiteController;
use App\Http\Controllers\System\ProgramController;
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

            Route::get('/', 'index')->name('index');
            Route::post('getDataNotices', 'getDataNotices')->name('getDataNotices');

        });

    # Routes posts
    Route::controller(PostController::class)
        ->prefix('posts')
        ->as('post-')
        ->group(function () {

            Route::get('/', 'index')->name('index');
            Route::any('/{slug}', 'show')->name('show');

        });

    # Routes programs
    Route::controller(ProgramController::class)
        ->prefix('programs')
        ->as('program-')
        ->group(function () {

            Route::any('/{slug}', 'show')->name('show');

        });
