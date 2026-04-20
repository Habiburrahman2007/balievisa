@extends('layouts.app')

@section('content')
  <div class="bg-gray-50 pt-16 lg:pt-24 pb-20 min-h-screen">
    <div class="max-w-[1200px] mx-auto px-6">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-800 px-4 py-1.5 rounded-full text-[0.8rem] font-bold uppercase tracking-wider mb-4 border border-blue-200">
          Latest Updates
        </div>
        <h1 class="text-[clamp(2rem,4vw,3.5rem)] font-extrabold text-slate-900 mb-4 leading-tight">Bali E Visa <span class="bg-gradient-to-r from-blue-600 to-blue-400 bg-clip-text text-transparent">News</span></h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">Stay up to date with the latest travel requirements, visa regulations, and tips for your journey to Bali.</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($articles as $article)
        <article class="bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-2 hover:shadow-[0_12px_30px_-4px_rgba(0,0,0,0.1)] flex flex-col h-full group">
          <div class="w-full aspect-video overflow-hidden relative">
            <img src="{{ $article->image ? asset('storage/' . $article->image) : '/img/hero-bali.png' }}" alt="{{ $article->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/50 to-transparent"></div>
          </div>
          <div class="p-7 flex flex-col flex-1">
            <div class="flex items-center gap-2 text-[0.75rem] font-semibold text-slate-600 mb-4 tracking-wide uppercase">
              <div class="flex items-center gap-1" title="{{ number_format($article->views) }} views">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg>
                <span>{{ number_format($article->views) }}</span>
              </div>
              <span class="text-slate-400">&bull;</span>
              <span>{{ $article->published_at ? $article->published_at->format('F d, Y') : $article->created_at->format('F d, Y') }}</span>
            </div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-blue-600 transition-colors line-clamp-2">{{ $article->title }}</h2>
            <p class="text-slate-600 text-sm mb-6 flex-1 line-clamp-3 leading-relaxed">{{ $article->excerpt }}</p>
            <a href="{{ route('news.detail', $article->slug) }}" class="inline-flex items-center gap-1.5 text-blue-600 font-bold text-sm mt-auto max-w-max pb-1 border-b-2 border-transparent hover:border-blue-600 transition-all">
              Read Article
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="group-hover:translate-x-1.5 transition-transform" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </article>
        @empty
        <div class="col-span-full py-20 text-center text-slate-500">
           No articles published yet. Check back soon!
        </div>
        @endforelse
      </div>

    </div>
  </div>
@endsection
