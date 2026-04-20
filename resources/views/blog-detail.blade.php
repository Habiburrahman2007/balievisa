@extends('layouts.app')

@section('content')
  <div class="bg-gray-50 pt-16 lg:pt-24 pb-20 min-h-screen">
    <div class="max-w-[800px] mx-auto px-6">
      <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-blue-600 font-bold text-sm mb-8 hover:text-blue-800 transition-colors">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        Back to News
      </a>

      <article class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100">
        @if($article->image)
        <div class="w-full aspect-video">
          <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" width="1200" height="675" loading="eager" fetchpriority="high" class="w-full h-full object-cover">
        </div>
        @endif

        <div class="p-8 md:p-12">
          <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-3 text-sm font-semibold text-slate-600 tracking-wide uppercase">
              <div class="flex items-center gap-1.5" title="{{ number_format($article->views) }} people have read this article">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg>
                <span>{{ number_format($article->views) }} Views</span>
              </div>
              <span class="text-slate-400">&bull;</span>
              <span>{{ $article->published_at ? $article->published_at->format('F d, Y') : $article->created_at->format('F d, Y') }}</span>
            </div>
            
            <x-copy-link />
          </div>
          
          <h1 class="text-[clamp(1.75rem,3vw,2.5rem)] font-extrabold text-slate-900 mb-8 leading-tight">
            {{ $article->title }}
          </h1>

          <div class="prose prose-lg prose-slate max-w-none prose-img:rounded-xl">
            {!! $article->content !!}
          </div>
        </div>
      </article>
    </div>
  </div>
@endsection
