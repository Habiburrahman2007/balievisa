@extends('layouts.app')

@section('title', 'Indonesia e-Visa on Arrival (e-VOA) | Apply Visa for Bali & Tourist Levy')
@section('meta_description', 'Official Bali E-Visa Portal. Fast Bali Visa Service & Consultation. Apply for Indonesia e-Visa on Arrival (e-VOA), Bali Tourist Levy Payment, and Indonesia Arrival Card.')
@section('meta_keywords', 'Indonesia e-Visa on Arrival, e-VOA, Apply Visa for Bali, Bali Tourist Levy Payment, Fast Bali Visa Service, Bali Visa Consultation, Indonesia Arrival Card, Indonesia Custom Declaration, e-CD, Bali Visa on Arrival Requirements, Electronic Visa Indonesia, Bali Immigration Rules')

@section('structured_data')
{
  "@type": "WebPage",
  "@id": "{{ url('/') }}/#webpage",
  "url": "{{ url('/') }}",
  "name": "Bali E-Visa Portal - Official Assistance",
  "description": "Fast and reliable assistance for Indonesia e-Visa on Arrival, Bali Tourist Levy, and Arrival Card submissions."
}
@endsection

@section('content')
  {{-- ═══════════════════════════════════════════ HERO ═══ --}}
  <section id="hero" class="relative min-h-[85vh] flex items-center overflow-hidden bg-[var(--color-navy)]">
    {{-- LCP image: use real <img> so the <link rel=preload> in <head> is matched --}}
    <img
      id="hero-img"
      src="/img/hero-bali.jpg"
      alt=""
      aria-hidden="true"
      width="1440"
      height="900"
      fetchpriority="high"
      loading="eager"
      decoding="async"
    >
    <div id="hero-overlay"></div>
    {{-- Decorative glows: composited-only, no layout impact --}}
    <div
      class="absolute w-[500px] h-[500px] -right-[80px] top-1/2 -translate-y-1/2 pointer-events-none"
      style="background:radial-gradient(circle,rgba(255,193,7,0.08) 0%,transparent 70%);will-change:transform;"
      aria-hidden="true">
    </div>
    <div
      class="absolute w-[300px] h-[300px] left-[10%] bottom-[10%] pointer-events-none"
      style="background:radial-gradient(circle,rgba(255,193,7,0.06) 0%,transparent 70%);will-change:transform;"
      aria-hidden="true">
    </div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10 py-20">
      <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-10 items-center">

        {{-- Left: Text Content --}}
        <div>
          <div
            class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white/90 px-4 py-1.5 rounded-full text-[0.8rem] font-semibold tracking-wider uppercase mb-7">
            <span class="w-[7px] h-[7px] bg-[var(--color-gold)] rounded-full animate-pulse"></span>
            {{ __('site.hero_badge') }}
          </div>

          <h1 class="text-[clamp(2.2rem,5vw,3.5rem)] font-extrabold text-white leading-tight mb-5">
            {{ __('site.hero_title_1') }}<br>
            <span
              class="bg-gradient-to-r from-[var(--color-gold)] to-[#FFD54F] bg-clip-text text-transparent">{{ __('site.hero_title_hl') }}</span><br>
            {{ __('site.hero_title_2') }}
          </h1>

          <p class="text-[1.125rem] text-white/75 mb-5 leading-relaxed">
            {{ __('site.hero_subtitle') }}
          </p>

          {{-- Entrance text --}}
          <div class="inline-flex items-center gap-3 bg-white/10 border border-white/15 rounded-xl px-5 py-3 mb-9">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-gold)" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
              <polyline points="10 17 15 12 10 7" />
              <line x1="15" y1="12" x2="3" y2="12" />
            </svg>
            <span class="text-white/90 text-[0.9rem] font-medium">{{ __('site.hero_entrance') }}</span>
          </div>

          <div class="flex flex-wrap gap-4">
            <a href="#quick-actions"
              class="inline-flex items-center gap-2.5 bg-[var(--color-gold)] text-[var(--color-navy)] text-base font-bold px-8 py-4 rounded-full transition-all hover:-translate-y-0.5 shadow-[0_8px_32px_rgba(255,193,7,0.35)] hover:shadow-[0_12px_40px_rgba(255,193,7,0.5)] gold-pulse">
              {{ __('site.hero_cta_apply') }}
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
            <a href="https://wa.me/62895330440544"
              class="inline-flex items-center gap-2.5 bg-white/10 border border-white/25 text-white text-base font-semibold px-8 py-4 rounded-full transition-all hover:bg-white/20">
              {{ __('site.hero_cta_status') }}
            </a>
          </div>
        </div>

        {{-- Right: Stats Box --}}
        <div class="bg-white/10 border border-white/20 backdrop-blur-md rounded-2xl p-6 flex flex-col gap-5">
          <div class="text-center border-b border-white/15 pb-4">
            <div class="text-[2.5rem] font-extrabold text-white leading-none" data-count-target="5000"
              data-count-suffix="+" data-count-separator>0</div>
            <div class="text-white/55 text-[0.82rem] mt-1">{{ __('site.hero_stat_visas_l') }}</div>
          </div>
          <div class="text-center border-b border-white/15 pb-4">
            <div class="text-[2.5rem] font-extrabold text-white leading-none" data-count-target="98"
              data-count-suffix="%">0</div>
            <div class="text-white/55 text-[0.82rem] mt-1">{{ __('site.hero_stat_rate_l') }}</div>
          </div>
          <div class="text-center border-b border-white/15 pb-4">
            <div class="text-[2.5rem] font-extrabold text-white leading-none" data-count-target="24"
              data-count-suffix="h">0</div>
            <div class="text-white/55 text-[0.82rem] mt-1">{{ __('site.hero_stat_time_l') }}</div>
          </div>
          <div class="text-center">
            <div class="text-[2.5rem] font-extrabold text-white leading-none" data-count-target="50"
              data-count-suffix="+">0</div>
            <div class="text-white/55 text-[0.82rem] mt-1">{{ __('site.hero_stat_nat_l') }}</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- ═══════════════════════════════════════════ NEW LAYOUT SECTIONS ═══ --}}
  <div class="bg-gray-50 pb-20">
    {{-- TOP CARDS --}}
    <section class="max-w-[1200px] mx-auto px-6 pt-10 pb-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div
          class="bg-white rounded-2xl p-6 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-gray-100 flex flex-col h-full">
          <div class="flex items-start gap-4 mb-4">
            <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
            </div>
            <div>
              <h2 class="font-bold text-gray-900 text-lg mb-1">{{ __('site.top_visa_t') }}</h2>
              <p class="text-sm text-gray-600 leading-relaxed">{{ __('site.top_visa_d') }}</p>
            </div>
          </div>
          <div class="mt-auto pt-4 border-t border-gray-100 flex items-center gap-2 text-sm text-green-600 font-medium">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
              stroke-linecap="round">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg> {{ __('site.top_visa_tag') }}
          </div>
        </div>

        <div
          class="bg-white rounded-2xl p-6 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-gray-100 flex flex-col h-full">
          <div class="flex items-start gap-4 mb-4">
            <div class="w-12 h-12 bg-teal-50 text-teal-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
            </div>
            <div>
              <h2 class="font-bold text-gray-900 text-lg mb-1">{{ __('site.top_arrival_t') }}</h2>
              <p class="text-sm text-gray-600 leading-relaxed">{{ __('site.top_arrival_d') }}</p>
            </div>
          </div>
          <div class="mt-auto pt-4 border-t border-gray-100 flex items-center gap-2 text-sm text-green-600 font-medium">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
              stroke-linecap="round">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg> {{ __('site.top_arrival_tag') }}
          </div>
        </div>

        <div
          class="bg-white rounded-2xl p-6 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-gray-100 flex flex-col h-full">
          <div class="flex items-start gap-4 mb-4">
            <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
            </div>
            <div>
              <h2 class="font-bold text-gray-900 text-lg mb-1">{{ __('site.top_levy_t') }}</h2>
              <p class="text-sm text-gray-600 leading-relaxed">{{ __('site.top_levy_d') }}</p>
            </div>
          </div>
          <div class="mt-auto pt-4 border-t border-gray-100 flex items-center gap-2 text-sm text-green-600 font-medium">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
              stroke-linecap="round">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg> {{ __('site.top_levy_tag') }}
          </div>
        </div>
      </div>
    </section>


    {{-- DON'T WAIT & REVIEWS --}}
    <section class="max-w-[1200px] mx-auto px-6 mb-12">
      <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.3fr] gap-6">

        <div class="relative rounded-3xl overflow-hidden p-8 flex flex-col justify-end text-white min-h-[250px]">
          <img src="/img/hero-bali.jpg" alt="Sunset" width="800" height="500" loading="lazy" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 to-slate-900/40"></div>
          <div class="relative z-10 w-full">
            <h2 class="text-2xl font-bold mb-2">{{ __('site.dont_wait') }}</h2>
            <p class="text-sm text-gray-300 mb-6 w-full lg:w-4/5 leading-relaxed">{{ __('site.dont_wait_desc') }}</p>
            <a href="https://wa.me/62895330440544"
              class="inline-flex items-center gap-2 bg-yellow-400 text-slate-900 font-bold px-5 py-3 rounded-xl text-sm transition hover:bg-yellow-300">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path
                  d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
                </path>
              </svg>
              {{ __('site.dont_wait_btn') }}
            </a>
          </div>
        </div>

        <div class="bg-blue-50/30 rounded-3xl p-8 border border-blue-50 flex flex-col">
          <h2 class="text-xl font-bold text-slate-800 mb-1">{{ __('site.loved_title') }}</h2>
          <p class="text-sm text-slate-500 mb-6">{{ __('site.loved_desc') }}</p>

          <div class="grid grid-cols-3 gap-4 mt-auto">
            <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex flex-col">
              <div class="flex gap-1 text-yellow-400 mb-2">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </div>
              <p class="text-[0.7rem] font-bold text-slate-800 mb-1">{{ __('site.review_1_title') }}</p>
              <p class="text-[0.7rem] text-slate-500 mb-3 flex-1">{{ __('site.review_1_desc') }}</p>
              <span class="text-[0.65rem] text-slate-600">{{ __('site.review_1_author') }}</span>
            </div>

            <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex flex-col">
              <div class="flex gap-1 text-yellow-400 mb-2">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </div>
              <p class="text-[0.7rem] font-bold text-slate-800 mb-1">{{ __('site.review_2_title') }}</p>
              <p class="text-[0.7rem] text-slate-500 mb-3 flex-1">{{ __('site.review_2_desc') }}</p>
              <span class="text-[0.65rem] text-slate-600">{{ __('site.review_2_author') }}</span>
            </div>

            <div class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 flex flex-col">
              <div class="flex gap-1 text-yellow-400 mb-2">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg><svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                  <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                  </polygon>
                </svg>
              </div>
              <p class="text-[0.7rem] font-bold text-slate-800 mb-1">{{ __('site.review_3_title') }}</p>
              <p class="text-[0.7rem] text-slate-500 mb-3 flex-1">{{ __('site.review_3_desc') }}</p>
              <span class="text-[0.65rem] text-slate-600">{{ __('site.review_3_author') }}</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- LATEST NEWS --}}
    @if(isset($latestNews) && $latestNews->isNotEmpty())
    <section class="max-w-[1200px] mx-auto px-6 mb-12">
      <div class="flex items-end justify-between mb-8">
        <div>
          <h2 class="text-3xl font-extrabold text-slate-900 mb-2">{{ __('site.news_title') }}</h2>
          <p class="text-sm text-slate-600">{{ __('site.news_subtitle') }}</p>
        </div>
        <a href="{{ route('news') }}" class="hidden sm:inline-flex items-center gap-1.5 text-blue-600 font-bold hover:text-blue-700 transition">
          {{ __('site.news_view_all') }}
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="translate-y-[0.5px]" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($latestNews as $article)
        <article class="bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] transition-all hover:-translate-y-1 hover:shadow-lg flex flex-col h-full group">
          <div class="w-full aspect-video overflow-hidden relative">
            <img src="{{ $article->image ? asset('storage/' . $article->image) : '/img/hero-bali.jpg' }}" alt="{{ $article->title }}" width="640" height="360" loading="lazy" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
          </div>
          <div class="p-6 flex flex-col flex-1">
            <div class="flex flex-wrap items-center gap-2 text-[0.7rem] font-bold text-slate-600 mb-3 tracking-wide uppercase">
              <div class="flex items-center gap-1" title="{{ number_format($article->views) }} views">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg>
                <span>{{ number_format($article->views) }}</span>
              </div>
              <span class="text-slate-400">&bull;</span>
              <span>{{ $article->published_at ? $article->published_at->format('M d, Y') : $article->created_at->format('M d, Y') }}</span>
            </div>
            <h3 class="text-lg font-bold text-slate-900 mb-3 leading-snug group-hover:text-blue-600 transition-colors line-clamp-2">
              <a href="{{ route('news.detail', $article->slug) }}" class="focus:outline-none">
                <span class="absolute inset-0" aria-hidden="true"></span>
                {{ $article->title }}
              </a>
            </h3>
            <p class="text-sm text-slate-600 mb-5 flex-1 line-clamp-2 leading-relaxed">{{ $article->excerpt }}</p>
            <span class="inline-flex items-center gap-1.5 text-blue-600 font-bold text-[0.8rem] mt-auto">
              {{ __('site.news_read_more') }}
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" class="group-hover:translate-x-1 transition-transform" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </span>
          </div>
        </article>
        @endforeach
      </div>
      <div class="mt-6 text-center sm:hidden">
        <a href="{{ route('news') }}" class="inline-flex items-center gap-1.5 text-blue-600 font-bold hover:text-blue-700 transition">
          {{ __('site.news_view_all') }}
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" class="translate-y-[0.5px]" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>
    </section>
    @endif
  </div>
@endsection
