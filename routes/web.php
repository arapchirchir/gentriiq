<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Admin\Homepage;
use App\Livewire\Admin\Packages;
use App\Livewire\Pages\AboutUs;
use App\Livewire\Pages\ContactUs;
use App\Livewire\Pages\Homepage as PagesHomepage;
use App\Livewire\Pages\OurPackages;
use App\Livewire\Pages\PopularDestinations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', PagesHomepage::class)->name('homepage');
Route::get('about', AboutUs::class)->name('about.us');
Route::get('contact', ContactUs::class)->name('contact.us');
Route::get('packages', OurPackages::class)->name('our.packages');
Route::get('destinations', PopularDestinations::class)->name('popular.destinations');

Auth::routes();

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', Homepage::class)->name('admin.homepage');
    Route::get('/packages', Packages::class)->name('admin.packages');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
});
