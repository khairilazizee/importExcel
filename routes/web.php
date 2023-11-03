<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/login', [LoginController::class, 'loginView']);
Route::post('/userLogin', [LoginController::class, 'loginProcess'])->name('login.process');

Route::get('/register', [RegisterController::class, 'registerView']);

Route::get('/import-file', [BudgetController::class, 'importView'])->name('import-view');
Route::post('/import', [BudgetController::class, 'import'])->name('import');
Route::get('/export-budget', [BudgetController::class, 'exportBudget'])->name('export-budgets');
