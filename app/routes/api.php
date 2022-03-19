<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\SubtypesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('types', [TypesController::class, 'index']);
Route::get('subtypes', [SubtypesController::class, 'index']);
Route::get('cards', [CardController::class, 'index']);
Route::get('card/{id}', [CardController::class, 'show']);
Route::post('card', [CardController::class, 'store']);
Route::put('card/{id}', [CardController::class, 'update']);
Route::delete('card/{id}', [CardController::class, 'destroy']);

/*
Route::get('cards', 'CardController@index');
Route::get('card/{id}', 'CardController@show');
Route::post('card', 'CardController@store');
Route::put('card/{id}', 'CardController@update');
Route::delete('card/{id}', 'CardController@delete');
*/

