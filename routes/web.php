<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('services', [HomeController::class, 'services']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('portfolio', [HomeController::class, 'portfolio']);
Route::get('blog', [HomeController::class, 'blog']);
Route::get('business-consultancy', [HomeController::class, 'businessconsultancy']);
Route::get('it-solution', [HomeController::class, 'itsolution']);
Route::get('marketing-solution', [HomeController::class, 'marketingsolution']);
Route::get('effective-social-media-marketing-tips', [HomeController::class, 'effectivesocialmedia']);
Route::get('exploring-the-future-of-AI', [HomeController::class, 'exploringthefutureofAI']);
Route::get('simplifying-web-cms,app-development', [HomeController::class, 'simplifyingwebcmsappdevelopment']);


Route::get('bsphotography-project', [HomeController::class, 'bsphotographyproject']);


Route::get('cookiepolicy', [HomeController::class, 'cookiepolicy']);
Route::get('privacypolicy', [HomeController::class, 'privacypolicy']);
Route::get('securitypolicy', [HomeController::class, 'securitypolicy']);








