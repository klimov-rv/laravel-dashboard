<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;

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
})->name('mainpage');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['verified'])->name('dashboard');

Route::group(
    ['prefix' => 'user', 'middleware' => 'verified'],
    function () {
        Route::get('/{id}', [UserController::class, 'show']);
    }
);

Route::group(
    ['prefix' => 'cakes', 'middleware' => 'verified'],
    function () {
        Route::get('', [CakeController::class, 'index'])->name('cakes');
        Route::get('/create', [CakeController::class, 'create'])->name('goods.create');
        Route::get('/edit/{cake}', [CakeController::class, 'edit'])->name('goods.edit');
        Route::group(
            ['middleware' => \App\Http\Middleware\AdminMiddleware::class],
            function () {
                Route::post('/add/', [CakeController::class, 'add'])->name('goods.add');
                Route::post('/save/{id}', [CakeController::class, 'save'])->name('goods.save');
                Route::get('/delete/{id}', [CakeController::class, 'delete'])->name('goods.delete');
            }
        );
    }
);

// Route::post('/image/upload', [ImageController::class, 'upload'])->name('image.upload');

Route::get('access-denied', function () {
    return view('user.access-denied');
})->name('access-denied');;


require __DIR__ . '/auth.php';
