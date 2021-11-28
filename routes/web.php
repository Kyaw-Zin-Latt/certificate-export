<?php

use App\Http\Controllers\ExportCertificateController;
use App\Http\Controllers\GitHubController;
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

Route::prefix("student")->middleware("auth")->group(function (){


    Route::post("certificate-export",[\App\Http\Controllers\ExportCertificateController::class,'export'])->name("certificate.export");
    Route::resource("certificate",\App\Http\Controllers\ExportCertificateController::class);
    Route::view("dashboard","frontend/dashboard")->name("dashboard");
    Route::view("request-certificate","frontend/request-certificate")->name("request-certificate");
    Route::post("download/{id}",[ExportCertificateController::class,"download"])->name("download.file");

});





Auth::routes();

Route::get('auth/github', [GitHubController::class, 'gitHubLogin'])->name("github.login");
Route::get('auth/github/callback', [GitHubController::class, 'gitHubCallback'])->name("github.callback");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
