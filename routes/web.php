<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


// Laravel's original routes
/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', [LoginController::class, 'showLoginForm']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware' => ['auth']], function()
{
    /* Route::get('stories', [StoriesController::class, 'index'])->name('stories.index');
    Route::get('stories/{story}', [StoriesController::class, 'show'])->name('stories.show'); */
    Route::resource('stories', StoriesController::class);
});


