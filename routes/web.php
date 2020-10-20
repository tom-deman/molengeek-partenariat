<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\UserController;

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

Route::get( '/', function() {
    return view( 'welcome' );
});

Route::middleware( [ 'auth:sanctum', 'verified' ] ) -> get( '/dashboard', function () {
    return view( 'dashboard.main-content' );
} ) -> name( 'dashboard' );

Route::get( '/dashboard/form', function() {
    return view( 'dashboard.form' );
} );

Route::post( '/register', [ UserController::class, 'create' ] )->name( 'register' );

Route::get( 'locale/{lang}', [ LocalizationController::class, 'setLang' ]) -> name ( 'setlang' );
