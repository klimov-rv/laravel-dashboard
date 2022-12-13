<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
 

Route::group(['prefix' => 'user', 'middleware' => 'auth'],
    function() {  
        Route::get('/{id}', [UserController::class, 'show']);
    }
);

Route::group(['prefix' => 'books', 'middleware' => 'auth'],
    function() { 
        Route::get('', [BookController::class, 'index'])->name('books');
        Route::get('/create', [BookController::class, 'create'])->name('books.create');
        Route::get('/edit/{book}', [BookController::class, 'edit'])->name('books.edit');
        Route::post('/add/', [BookController::class, 'add'])->name('books.add');
        Route::post('/save/{id}', [BookController::class, 'save'])->name('books.save');
        Route::get('/delete/{id}', [BookController::class, 'delete'])->name('books.delete'); 
    }
);



require __DIR__.'/auth.php';
