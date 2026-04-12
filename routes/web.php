<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', function () {
    $latestNews = Article::where('is_published', true)
        ->latest('published_at')
        ->latest('id')
        ->take(3)
        ->get();
    return view('welcome', compact('latestNews'));
});

Route::get('/arrival-card', function () {
    return view('arrival-card');
})->name('arrival-card');

Route::get('/bali-levy', function () {
    return view('bali-levy');
})->name('bali-levy');

Route::get('/visa', function () {
    return view('visa');
})->name('visa');

Route::get('/steps', function () {
    return view('steps');
})->name('steps');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/news', function () {
    $articles = Article::where('is_published', true)
        ->latest('published_at')
        ->latest('id')
        ->get();
    return view('blog', compact('articles'));
})->name('news');

Route::get('/news/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)
        ->where('is_published', true)
        ->firstOrFail();
    return view('blog-detail', compact('article'));
})->name('news.detail');


// Locale switcher
Route::get('/locale/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'zh', 'es', 'ar', 'hi'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('locale.switch');
