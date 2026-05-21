<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/set-language/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'uk'])) {
        Session::put('locale', $lang);
        App::setLocale($lang);
    }

    return redirect()->back();
})->name('set-language');

Route::get('/main', function () {
    return redirect('/');
})->name('main');

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/shipping', 'shipping')->name('shipping');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/blog', 'index')->name('article.index');

    Route::get('/blog/{category}', 'category')->name('article.category');
    Route::get('/blog/{category}/{article}', 'show')->name('article.show');
    Route::get('/blog/tag/{tag}', 'tag')->name('article.tag');

    Route::post('/callback-request', 'callbackRequest')->name('callback.request');
    Route::post('/contact-send', 'contactSend')->name('contact.send');
});

Route::get('/product/{product}', [ProductController::class, 'show'])
    ->whereNumber('product')
    ->name('product.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
