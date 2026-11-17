<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Gallery;

// Admin Blog Routes - Authentication Required
Route::middleware(['auth'])->group(function () {

    Route::delete('/blogs/bulk-delete', [BlogController::class, 'bulkDestroy'])
        ->name('blogs.bulkDestroy');

    Route::put('/blogs/{blog:slug}', [BlogController::class, 'update'])
        ->name('blogs.update');

    Route::resource('blogs', BlogController::class)
        ->except(['update']);

    Route::get('/galleries', [GalleryController::class, 'index'])
        ->name('galleries.index');

    // Create Gallery Form
    Route::get('/galleries/create', [GalleryController::class, 'create'])
        ->name('galleries.create');

    // Save Gallery Image
    Route::post('/galleries', [GalleryController::class, 'store'])
        ->name('galleries.store');

    // Bulk Delete
    Route::delete('/galleries/bulk-delete', [GalleryController::class, 'bulkDestroy'])
        ->name('galleries.bulkDestroy');

    // View Gallery Image
    Route::get('/galleries/{gallery}', [GalleryController::class, 'show'])
        ->name('galleries.show');

    // Edit Gallery Image
    Route::get('/galleries/{gallery}/edit', [GalleryController::class, 'edit'])
        ->name('galleries.edit');

    // Update Gallery Image
    Route::put('/galleries/{gallery}', [GalleryController::class, 'update'])
        ->name('galleries.update');

    // Delete Gallery Image
    Route::delete('/galleries/{gallery}', [GalleryController::class, 'destroy'])
        ->name('galleries.destroy');


    Route::get('/dashboard', function () {

        $blogCount = Blog::count();

        $galleryCount = Gallery::count();

        $recentBlogs = Blog::latest()->take(3)->get();

        return view('admin.dashboard', compact(
            'blogCount',
            'galleryCount',
            'recentBlogs'
        ));
    });
});

// Frontend Home Page
Route::get('/', [BlogController::class, 'homeBlogs'])->name('home');

Route::get('/home', [BlogController::class, 'homeBlogs']);

// Frontend Blog Detail
Route::get('/blog-page/{slug}', [BlogController::class, 'showFrontend'])
    ->name('frontend.blogs.show');

// Frontend Blog Listing
Route::get('/blog', [BlogController::class, 'publicIndex'])
    ->name('frontend.blogs.index');

// About Page
Route::get('/about', function () {
    return view('Frontend.about.about');
});

// Gallery Page
Route::get('/gallery', function () {
    return view('Frontend.gallery.gallery');
});



require __DIR__ . '/auth.php';
