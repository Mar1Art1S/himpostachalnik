<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Models\Article;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

/*
|--------------------------------------------------------------------------
| Language
|--------------------------------------------------------------------------
*/

Route::get('/set-language/{lang}', function ($lang) {

    if (in_array($lang, ['en', 'uk'])) {
        Session::put('locale', $lang);
        App::setLocale($lang);
    }

    return redirect()->back();

})->name('set-language');

/*
|--------------------------------------------------------------------------
| Redirects
|--------------------------------------------------------------------------
*/

Route::get('/main', function () {
    return redirect('/');
})->name('main');

/*
|--------------------------------------------------------------------------
| Sitemap
|--------------------------------------------------------------------------
*/

Route::get('/sitemap.xml', function () {

    $sitemap = Sitemap::create();

    // Статичні сторінки
    $pages = [
        'home',
        'about',
        'projects',
        'shipping',
        'contact',
        'article.index',
    ];

    foreach ($pages as $page) {

        $sitemap->add(
            Url::create(route($page))
                ->setPriority(0.9)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
        );
    }

    // Статті блогу
    Article::query()
        ->latest()
        ->get()
        ->each(function ($article) use ($sitemap) {

            $sitemap->add(
                Url::create(
                    route('article.show', [
                        'category' => $article->category->slug,
                        'article' => $article->slug,
                    ])
                )
                    ->setLastModificationDate($article->updated_at)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.8)
            );
        });

    return $sitemap->toResponse(request());

});

/*
|--------------------------------------------------------------------------
| Main Pages
|--------------------------------------------------------------------------
*/

Route::controller(MainController::class)->group(function () {

    Route::get('/', 'home')->name('home');

    Route::get('/about', 'about')->name('about');

    Route::get('/projects', 'projects')->name('projects');

    Route::get('/shipping', 'shipping')->name('shipping');

    Route::get('/faq', 'faq')->name('faq');

    Route::get('/privacy', 'privacy')->name('privacy');

    Route::get('/terms', 'terms')->name('terms');

    Route::get('/contact', 'contact')->name('contact');

    /*
    |--------------------------------------------------------------------------
    | Blog
    |--------------------------------------------------------------------------
    */

    Route::get('/blog', 'index')->name('article.index');

    Route::get('/blog/tag/{tag}', 'tag')->name('article.tag');

    Route::get('/blog/{category}', 'category')->name('article.category');

    Route::get('/blog/{category}/{article}', 'show')->name('article.show');

    /*
    |--------------------------------------------------------------------------
    | Forms
    |--------------------------------------------------------------------------
    */

    Route::post('/callback-request', 'callbackRequest')
        ->name('callback.request');

    Route::post('/contact-send', 'contactSend')
        ->name('contact.send');

});

/*
|--------------------------------------------------------------------------
| Products
|--------------------------------------------------------------------------
*/

Route::get('/product/{product}', [ProductController::class, 'show'])
    ->whereNumber('product')
    ->name('product.show');

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
