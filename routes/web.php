<?php

use App\Http\Controllers\ImportExportController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('export', [ImportExportController::class,'export'])->name('export');
Route::get('custom-export', [ImportExportController::class,'customExport']);
Route::get('save-excel-file', [ImportExportController::class,'saveExcelFile']);
Route::get('import-export', [ImportExportController::class,'import']);
Route::post('import', [ImportExportController::class,'saveImport'])->name('import');
Route::post('import-with-validation', [ImportExportController::class,'importWithValidation'])->name('import_with_validation');
