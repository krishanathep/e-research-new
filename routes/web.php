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
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProgressReportController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\general\PrefixController;
use App\Http\Controllers\general\DepartmentController;

use App\Http\Controllers\old\ProjectBController;
use App\Http\Controllers\old\ProjectAController;

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
Route::middleware(['auth'])->group(function(){
    Route::resource('/admin', AdminController::class);
    Route::resource('admin-members', MemberController::class);
    Route::resource('admin-shoppinglist', ShoppingListController::class);
    Route::resource('admin-shoppinglist-categorys', CategorysController::class);
    Route::resource('admin-shoppinglist-additional', AdditionalController::class);

    Route::resource('admin-concepdevelopment', ConcepDevelopmentController::class);
    Route::resource('admin-proposaldevelopment', ProposalDevelopmentController::class);
    Route::resource('admin-psubmission', PsubmissionController::class);
    Route::resource('admin-progress', ProgressController::class);
    Route::resource('admin-report', ReportController::class);
    Route::resource('admin-progressreport', ProgressReportController::class);
    Route::resource('admin-settings', SettingsController::class);

    Route::resource('admin-general-prefix', PrefixController::class);
    Route::resource('admin-general-department', DepartmentController::class);
 
    Route::resource('admin-old-projectbudget', ProjectBController::class);
    Route::resource('admin-old-projectapprove', ProjectAController::class);

});



Auth::routes();
