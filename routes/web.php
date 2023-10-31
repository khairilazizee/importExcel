<?php

use App\Http\Controllers\BudgetController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/file-import', [BudgetController::class, 'importView'])->name('import-view');
Route::post('/import', [BudgetController::class, 'import'])->name('import');
Route::get('/export-budget', [BudgetController::class, 'exportBudget'])->name('export-budgets');
