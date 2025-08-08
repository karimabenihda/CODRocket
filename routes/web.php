<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('landing.home');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/pricing', [PageController::class, 'prices'])->name('prices');
Route::get('/help_center', [PageController::class, 'help_center'])->name('help_center');

Route::get('/operations', [PageController::class, 'operations'])->name('operations');
Route::get('/inventory_tracking', [PageController::class, 'inventory_tracking'])->name('inventory_tracking');
Route::get('/store_landingPage', [PageController::class, 'store_landingPage'])->name('store_landingPage');
Route::get('/integrations', [PageController::class, 'integrations'])->name('integrations');
Route::get('/manage_delivery', [PageController::class, 'manage_delivery'])->name('manage_delivery');
Route::get('/analytics', [PageController::class, 'analytics'])->name('analytics');

// Route::get('/lang/{locale}', [LangController::class, 'switch'])->name('lang.switch');
Route::get('/lang/{locale}', [LangController::class, 'switch'])->name('lang.switch');

// Route::get('/lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'ar'])) {
//         Session::put('locale', $locale);
//     }
//     return redirect()->back();
// })->name('lang.switch');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
