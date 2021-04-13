<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function()
{
    /* Route::get('stories', [StoriesController::class, 'index'])->name('stories.index');
    Route::get('stories/{story}', [StoriesController::class, 'show'])->name('stories.show'); */
    Route::resource('stories', StoriesController::class);
});


