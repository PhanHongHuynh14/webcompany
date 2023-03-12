<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\OptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


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

// Route::get('/', function () {
//     return view('base');
// });

// Route::get('/index', function () {
//     return view('index', ['options' => []], );
// });
Route::get('/index', [App\Http\Controllers\HomeController::class, 'trangchu'])->name('trangchu');
Route::get('/product', function () {
    return view('product');
});
Route::get('/product_1', function () {
    return view('product_1');
});
Route::get('/product_1_ud', function () {
    return view('product_1_ud');
});
Route::get('/product_1_tc', function () {
    return view('product_1_tc');
});
Route::get('/product_1_da', function () {
    return view('product_1_da');
});
Route::get('/product_2', function () {
    return view('product_2');
});
Route::get('/product_2_ud', function () {
    return view('product_2_ud');
});
Route::get('/product_2_tc', function () {
    return view('product_2_tc');
});
Route::get('/product_2_da', function () {
    return view('product_2_da');
});
Route::get('/product_3', function () {
    return view('product_3');
});
Route::get('/product_3_ud', function () {
    return view('product_3_ud');
});
Route::get('/product_3_tc', function () {
    return view('product_3_tc');
});
Route::get('/product_3_da', function () {
    return view('product_3_da');
});
Route::get('/product_4', function () {
    return view('product_4');
});
Route::get('/product_4_ud', function () {
    return view('product_4_ud');
});
Route::get('/product_4_tc', function () {
    return view('product_4_tc');
});
Route::get('/product_4_da', function () {
    return view('product_4_da');
});
Route::get('/service', function () {
    return view('service');
});
// Route::get('/contactinfo', function () {
//     return view('contactinfo');
// });
Route::get('/contactinfo', [App\Http\Controllers\HomeController::class, 'contactinfo'])->name('contactinfo');

Route::get('/login', function () {
    return view('login');
});
Route::get('/new', function () {
    return view('new');
});
Route::get('/new_1', function () {
    return view('new_1');
});
Route::get('/new_2', function () {
    return view('new_2');
});
Route::get('/new_3', function () {
    return view('new_3');
});
Route::get('/new_4', function () {
    return view('new_4');
});
Route::get('/new_5', function () {
    return view('new_5');
});
Route::get('/new_6', function () {
    return view('new_6');
});
Route::get('/new_7', function () {
    return view('new_7');
});
Route::get('/new_8', function () {
    return view('new_8');
});
Route::get('/new_9', function () {
    return view('new_9');
});
Route::get('/service_1', function () {
    return view('service_1');
});
Route::get('/service_1_vdc', function () {
    return view('service_1_vdc');
});
Route::get('/service_1_gc', function () {
    return view('service_1_gc');
});
Route::get('/service_2', function () {
    return view('service_2');
});
Route::get('/service_2_tq', function () {
    return view('service_2_tq');
});
Route::get('/service_2_gn', function () {
    return view('service_2_gn');
});
Route::get('/service_3', function () {
    return view('service_3');
});
Route::get('/service_3_gt', function () {
    return view('service_3_gt');
});
Route::get('/service_3_qt', function () {
    return view('service_3_qt');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/contact', ContactController::class);
Route::resource('/option', OptionController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
