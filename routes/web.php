<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ShoppingListController;
use App\Http\Controllers\ConcepDevelopmentController;
use App\Http\Controllers\ProposalDevelopmentController;
use App\Http\Controllers\PsubmissionController;

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
    return view('auth.login');
});

Route::get('admin', AdminDashboardController::class);

Route::resource('products', ProductController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/admin', AdminController::class);
Route::resource('admin-members', MemberController::class);
Route::resource('admin-shoppinglist', ShoppingListController::class);
Route::resource('admin-concepdevelopment', ConcepDevelopmentController::class);
Route::resource('admin-proposaldevelopment', ProposalDevelopmentController::class);
Route::resource('admin-psubmission', PsubmissionController::class);

Auth::routes();
