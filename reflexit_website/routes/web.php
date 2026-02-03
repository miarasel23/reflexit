<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact.us');
Route::get('/software-development', [FrontendController::class, 'softwareDevelopment'])->name('software.development');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/web-development', [FrontendController::class, 'webDevelopment'])->name('web.development');
Route::get('/mobile-application-development', [FrontendController::class, 'mobileApplicationDevelopment'])->name('mobile.application.development');
Route::get('/cloud-and-devops', [FrontendController::class, 'cloudAndDevOps'])->name('cloud.and.devops');
Route::get('/product-design', [FrontendController::class, 'productDesign'])->name('product.design');
Route::get('/erp', [FrontendController::class, 'erp'])->name('erp');
Route::get('/e-commerce', [FrontendController::class, 'e_commerce'])->name('e_commerce');

