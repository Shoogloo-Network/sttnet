<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Main\CityController;
use App\Http\Controllers\Main\FerryController;
use App\Http\Controllers\Main\FooterController;
use App\Http\Controllers\Main\JourneyController;
use App\Http\Controllers\Main\OperatorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Main\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/train-companies{extension?}', [OperatorController::class, 'index'])->where('extension', '(?:.html)?')->name('operator.main');
Route::get('/train-companies/{operator}', [OperatorController::class, 'otaDetail'])->where('operator', '.*')->name('operator.detail');
//Route::get('/train-companies/{operator}', [OperatorController::class, 'otaDetail'])->where('operator', '.*');
//Route::get('/train-companies/{operator}', [HomeController::class, 'otaDetail'])->where('operator', '.*');

Route::get('/routes{extension?}', [JourneyController::class, 'index'])->where('extension', '(?:.html)?');
Route::get('/split-train-ticket/{route}', [JourneyController::class, 'routeDetail'])->where('route', '.*')->name('cityroute.main');
//Route::get('/split-train-ticket/{route}', [HomeController::class, 'routeDetail'])->where('route', '.*');

Route::get('/split-train-tickets{extension?}', [CityController::class, 'index'])->where('extension', '(?:.html)?');
Route::get('/split-train-tickets-to-{city}', [CityController::class, 'cityDetail'])->where('city', '.*');
//Route::get('/split-train-tickets-to-{city}', [HomeController::class, 'cityDetail'])->where('city', '.*');
//Route::get('/{navbarUrl}', [HomeController::class, 'navbar'])->where('navbarUrl', '.*');

Route::post('/posts', [PostController::class, 'review'])->name('posts.review');

Route::get('/ferries{extension?}', [FerryController::class, 'index'])->where('extension', '(?:.html)?')->name('ferry.main');
Route::get('/ferries/{ferry}', [FerryController::class, 'ferryDetail'])->where('ferry', '.*')->name('ferry.detail');

/*Route::prefix('')->group(function () {
    Route::get('{site_map_slug}', [SitemapController::class, 'show'])->where('site_map_slug', '(.*)');
});
*/
Route::get('/about-us.html', [FooterController::class, 'staticPage']);
Route::get('/privacy-policy.html', [FooterController::class, 'privacyPolicy']);

