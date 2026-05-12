<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| USER / PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

// -- Pages
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// -- Layouts 
Route::get('/footer', function () {
    return view('layout.footer');
})->name('layout.footer');

// -- Components
Route::get('/featured-articles', function () {
    return view('components.featured-articles');
})->name('components.featured-articles');

Route::get('/symptom-checker', function () {
    return view('components.symptom-checker');
})->name('components.symptom-checker');

Route::get('/health-categories', function () {
    return view('components.health-categories');
})->name('components.health-categories');

Route::get('/daily-health-tips', function () {
    return view('components.daily-health-tips');
})->name('components.daily-health-tips');

Route::get('/interactive', function () {
    return view('components.interactive');
})->name('components.interactive');

Route::get('/about', function () {
    return view('components.about');
})->name('components.about');

Route::get('/testimonial', function () {
    return view('components.testimonial');
})->name('components.testimonial');

Route::get('/contact', function () {
    return view('components.contact');
})->name('components.contact');


/*
|--------------------------------------------------------------------------
| ADMIN DASHBOARD ROUTES
|--------------------------------------------------------------------------
*/

// FORM LOGIN
Route::get('/{key}', function ($key) {
    
    // Ambil kunci rahasia dari .env
    $secretKey = env('ADMIN_LOGIN_KEY');

    // Validasi apakah parameter yang diketik di URL cocok dengan .env
    if ($key !== $secretKey) {
        // Jika tidak cocok, lempar ke 404 atau halaman utama
        abort(404);
    }

    // Jika cocok, tampilkan view login
    return view('admin.form_login');
})->name('admin.form_login');

// DASHBOARD OVERVIEW
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard');

// ARTICLES
Route::get('/admin/articles', function () {
    return view('admin.articles.index');
})->name('articles.index');

Route::get('/admin/articles/create', function () {
    return view('admin.articles.create');
})->name('articles.create');

Route::get('/admin/articles/edit', function () {
    return view('admin.articles.edit');
})->name('articles.edit');

Route::get('/admin/articles/show', function () {
    return view('admin.articles.show');
})->name('articles.show');

// HEALTH TIPS
Route::get('/admin/health-tips', function () {
    return view('admin.health-tips.index');
})->name('health-tips.index');

Route::get('/admin/health-tips/create', function () {
    return view('admin.health-tips.create');
})->name('health-tips.create');

Route::get('/admin/health-tips/edit', function () {
    return view('admin.health-tips.edit');
})->name('health-tips.edit');

// SYMPTOM CHECKER
Route::get('/admin/symptom-checker', function () {
    return view('admin.symptom-checker.index');
})->name('symptom-checker.index');

Route::get('/admin/symptom-checker/create', function () {
    return view('admin.symptom-checker.create');
})->name('symptom-checker.create');

Route::get('/admin/symptom-checker/edit', function () {
    return view('admin.symptom-checker.edit');
})->name('symptom-checker.edit');

// USERS
Route::get('/admin/users', function () {
    return view('admin.users.index');
})->name('users.index');

Route::get('/admin/users/edit', function () {
    return view('admin.users.edit');
})->name('users.edit');

// MESSAGES
Route::get('/admin/messages', function () {
    return view('admin.messages.index');
})->name('messages.index');

// ANALYTICS
Route::get('/admin/analytics', function () {
    return view('admin.analytics.index');
})->name('analytics.index');

// SETTINGS
Route::get('/admin/settings', function () {
    return view('admin.settings.index');
})->name('settings.index');