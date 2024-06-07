<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\PagesController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', [PagesController::class, 'home'])->name('home');
    // Route::get('/aktualności', [PagesController::class, 'newses'])->name('newses');
});
