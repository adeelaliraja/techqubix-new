<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    // Portfolio routes
    Route::resource('portfolios', PortfolioController::class);

    // SEO routes
    Route::get('seo', [SeoController::class, 'index'])->name('seo.index');
    Route::post('seo', [SeoController::class, 'update'])->name('seo.update');

    // Contact inquiries
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::delete('contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

