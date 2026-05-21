<?php

use App\Http\Controllers\MainController;
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

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'home')->name('main');
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

Route::get('/product/{product}', [\App\Http\Controllers\ProductController::class, 'show'])
    ->whereNumber('product')
    ->name('product.show');
