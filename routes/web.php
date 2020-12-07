<?php

// use App\Http\Controllers\CoachController;
// use App\Http\Controllers\CourseController;
// use App\Http\Controllers\GameController;
// use App\Http\Controllers\LessonController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

/**
 * If your route will be called via AJAX add that in this group.
 */
Route::prefix('ajax')->middleware([
    'ajax-only',
])->group(function () {
        Route::prefix('lessons')->group(function () {
            Route::get('/newest', 'LessonController@getNewest');
            Route::get('/{lesson}', 'LessonController@show');
        });

    Route::prefix('course')->group(function () {
        Route::post('{course}/lesson', 'LessonController@store');
    });
});

Route::group([
    'middleware' => ['auth'],
], function () {
  Route::get('/{any}', 'MainController@index')->where('any', '.*');
});



