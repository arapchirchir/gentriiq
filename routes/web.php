<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Admin\BlogPosts;
use App\Livewire\Admin\Bookings;
use App\Livewire\Admin\Destinations;
use App\Livewire\Admin\Homepage;
use App\Livewire\Admin\Packages;
use App\Livewire\Pages\AboutUs;
use App\Livewire\Pages\Blogs;
use App\Livewire\Pages\BlogView;
use App\Livewire\Pages\ContactUs;
use App\Livewire\Pages\DestinationView;
use App\Livewire\Pages\Homepage as PagesHomepage;
use App\Livewire\Pages\OurPackages;
use App\Livewire\Pages\PopularDestinations;
use App\Livewire\Pages\ViewPackage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', PagesHomepage::class)->name('homepage');
Route::get('about', AboutUs::class)->name('about.us');
Route::get('contact', ContactUs::class)->name('contact.us');
Route::get('packages', OurPackages::class)->name('our.packages');
Route::get('destinations', PopularDestinations::class)->name('popular.destinations');
Route::get('blog', Blogs::class)->name('our.blog');
Route::get('blog/{slug}', BlogView::class)->name('blog.detail');
Route::get('destination/{slug}', DestinationView::class)->name('destination.detail');
Route::get('package/{package}', ViewPackage::class)->name('package.detail');

Auth::routes();

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('dashboard', Homepage::class)->name('admin.homepage');
    Route::get('packages', Packages::class)->name('admin.packages');
    Route::get('destinations', Destinations::class)->name('admin.destinations');
    Route::get('blog-posts', BlogPosts::class)->name('admin.blog.posts');
    Route::get('bookings', Bookings::class)->name('bookings');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
});
