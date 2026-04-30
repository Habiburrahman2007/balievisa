<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;

Route::get('/', function () {
    $latestNews = cache()->remember('latest_news_v2', 3600, function () {
        return Article::where('is_published', true)
            ->latest('published_at')
            ->latest('id')
            ->take(3)
            ->get();
    });
    return view('welcome', compact('latestNews'));
})->middleware('page_cache');

Route::get('/arrival-card', function () {
    return view('arrival-card');
})->name('arrival-card')->middleware('page_cache');

Route::get('/bali-levy', function () {
    return view('bali-levy');
})->name('bali-levy')->middleware('page_cache');

Route::get('/visa', function () {
    return view('visa');
})->name('visa')->middleware('page_cache');

Route::get('/steps', function () {
    return view('steps');
})->name('steps')->middleware('page_cache');

Route::get('/faq', function () {
    return view('faq');
})->name('faq')->middleware('page_cache');

Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy-policy')->middleware('page_cache');

Route::get('/refund-policy', function () {
    return view('refund');
})->name('refund-policy')->middleware('page_cache');

Route::get('/terms-and-conditions', function () {
    return view('terms');
})->name('terms-and-conditions')->middleware('page_cache');

Route::get('/news', function () {
    $articles = cache()->remember('all_articles_v2', 3600, function () {
        return Article::where('is_published', true)
            ->latest('published_at')
            ->latest('id')
            ->get();
    });
    return view('blog', compact('articles'));
})->name('news')->middleware('page_cache');

Route::get('/news/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)
        ->where('is_published', true)
        ->firstOrFail();

    $article->increment('views');

    return view('blog-detail', compact('article'));
})->name('news.detail');


// Locale switcher
Route::get('/locale/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'zh', 'es', 'ar', 'hi'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('locale.switch');
