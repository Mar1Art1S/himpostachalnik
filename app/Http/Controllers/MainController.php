<?php

namespace App\Http\Controllers;

use App\Mail\CallbackRequestMail;
use App\Mail\ContactMail;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function home()
    {
        $latestArticles = Article::with('category')
            ->where('active', true)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('main', compact('latestArticles'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projects()
    {
        return view('projects');
    }

    public function shipping()
    {
        return view('shipping');
    }

    public function faq()
    {
        return view('faq');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function index()
    {
        $articles = Article::where('active', true)->latest('published_at')->paginate(12);

        return view('article.index', compact('articles'));
        // $categories = ArticleCategory::where('active', true)->get();
        // return view('article.index', compact('categories'));
    }

    public function category($category)
    {
        return view('article.category', compact('category'));
    }

    public function show($category, $article)
    {
        $article = Article::where('slug', $article)->firstOrFail();

        return view('article.show', compact('article'));
    }

    public function tag($tag)
    {
        return view('article.tag', compact('tag'));
    }

    public function callbackRequest(Request $request)
    {
        $request->validateWithBag('callback', [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'message' => 'nullable|string|max:2000',
        ]);

        Mail::to(config('services.admin.email'))->send(new CallbackRequestMail($request->only('name', 'phone', 'message')));

        return back()->with('callback-success', __('Дякуємо! Наш менеджер передзвонить вам найближчим часом.'));
    }

    public function contactSend(Request $request)
    {
        $request->validateWithBag('contact', [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to(config('services.admin.email'))->send(new ContactMail($request->only('name', 'phone', 'email', 'message')));

        return back()->with('contact-success', __('Дякуємо! Ваше повідомлення надіслано. Ми зв’яжемося з вами найближчим часом.'));
    }
}
