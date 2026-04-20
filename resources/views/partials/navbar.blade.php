{{-- ═══════════════════════════════════════════ MAIN NAVBAR --}}
@php
  $langs = [
    'en' => ['label' => 'English', 'flag' => '🇬🇧'],
    'zh' => ['label' => '中文', 'flag' => '🇨🇳'],
    'es' => ['label' => 'Español', 'flag' => '🇪🇸'],
    'ar' => ['label' => 'العربية', 'flag' => '🇸🇦'],
    'hi' => ['label' => 'हिन्दी', 'flag' => '🇮🇳'],
  ];
@endphp

<nav id="main-navbar" class="sticky top-0 z-50 bg-white border-b border-slate-200 transition-all duration-300">
  <div class="max-w-[1200px] mx-auto px-6">
    <div class="flex items-center justify-between h-[68px] gap-6">

      <div class="flex items-center gap-10 h-full">
        {{-- Logo --}}
        <a href="/" class="flex items-center gap-3 shrink-0" id="logo" aria-label="Bali E Visa Home">
          <img src="/images/logo-visa.png" class="w-12 h-12 object-contain" alt="Bali E Visa Logo" width="48" height="48" loading="eager" fetchpriority="high">
          <div class="flex flex-col">
            <span class="font-bold text-base text-[var(--color-navy)] leading-tight">Bali E Visa</span>
            <span class="text-[0.65rem] text-slate-600 font-medium leading-tight hidden sm:block">
              {{ __('site.nav_portal') }}
            </span>
          </div>
        </a>

        {{-- Desktop Menu: Muncul hanya di LG ke atas --}}
        <ul class="hidden lg:flex items-center gap-8 xl:gap-12">
          <li>
            <a href="/"
              class="text-[0.9rem] {{ request()->is('/') ? 'font-bold text-[var(--color-navy)] border-b-2 border-[var(--color-gold)]' : 'font-semibold text-slate-600 hover:text-[var(--color-navy)] border-b-2 border-transparent hover:border-[var(--color-gold)]' }} transition-all pb-1">{{ __('site.nav_home') }}</a>
          </li>
          <li>
            <a href="{{ route('arrival-card') }}"
              class="text-[0.9rem] {{ request()->is('arrival-card') ? 'font-bold text-[var(--color-navy)] border-b-2 border-[var(--color-gold)]' : 'font-semibold text-slate-600 hover:text-[var(--color-navy)] border-b-2 border-transparent hover:border-[var(--color-gold)]' }} transition-all pb-1">{{ __('site.nav_arrival') }}</a>
          </li>
          <li>
            <a href="{{ route('visa') }}"
              class="text-[0.9rem] {{ request()->is('visa') ? 'font-bold text-[var(--color-navy)] border-b-2 border-[var(--color-gold)]' : 'font-semibold text-slate-600 hover:text-[var(--color-navy)] border-b-2 border-transparent hover:border-[var(--color-gold)]' }} transition-all pb-1">{{ __('site.nav_visa') }}</a>
          </li>
          <li>
            <a href="/bali-levy"
              class="text-[0.9rem] {{ request()->is('bali-levy') ? 'font-bold text-[var(--color-navy)] border-b-2 border-[var(--color-gold)]' : 'font-semibold text-slate-600 hover:text-[var(--color-navy)] border-b-2 border-transparent hover:border-[var(--color-gold)]' }} transition-all pb-1">{{ __('site.nav_levy') }}</a>
          </li>
          <li>
            <a href="{{ route('steps') }}"
              class="text-[0.9rem] {{ request()->is('steps') ? 'font-bold text-[var(--color-navy)] border-b-2 border-[var(--color-gold)]' : 'font-semibold text-slate-600 hover:text-[var(--color-navy)] border-b-2 border-transparent hover:border-[var(--color-gold)]' }} transition-all pb-1">{{ __('site.nav_steps') }}</a>
          </li>
          <li>
            <a href="{{ route('news') }}"
              class="text-[0.9rem] {{ request()->routeIs('news*') ? 'font-bold text-[var(--color-navy)] border-b-2 border-[var(--color-gold)]' : 'font-semibold text-slate-600 hover:text-[var(--color-navy)] border-b-2 border-transparent hover:border-[var(--color-gold)]' }} transition-all pb-1">{{ __('site.nav_news') }}</a>
          </li>
        </ul>
      </div>

      {{-- Right-side --}}
      <div class="flex items-center gap-3">

        {{-- Mobile Toggle: DIPERBAIKI (Tambah lg:hidden, hapus inline style) --}}
        <button id="mobile-toggle"
          class="flex lg:hidden items-center justify-center w-10 h-10 bg-slate-100 text-[var(--color-navy)] rounded-full transition-all hover:bg-slate-200 cursor-pointer"
          aria-label="Toggle menu">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12" />
            <line x1="3" y1="6" x2="21" y2="6" />
            <line x1="3" y1="18" x2="21" y2="18" />
          </svg>
        </button>

        {{-- Language Dropdown: Sembunyi di mobile, muncul di MD ke atas --}}
        <div class="relative hidden md:block" id="lang-dropdown-wrap">
          <button id="lang-dropdown-btn" type="button" aria-label="Select Language"
            class="inline-flex items-center gap-1.5 bg-slate-100 text-[var(--color-navy)] text-sm font-semibold px-4 py-2.5 rounded-full transition-all hover:bg-slate-200 cursor-pointer">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <line x1="2" y1="12" x2="22" y2="12" />
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
            </svg>
            <span id="lang-current">{{ strtoupper(app()->getLocale()) }}</span>
            <svg class="w-3.5 h-3.5 opacity-50 transition-transform duration-200" id="lang-chevron" viewBox="0 0 24 24"
              fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="6 9 12 15 18 9" />
            </svg>
          </button>

          <div id="lang-dropdown-menu"
            class="absolute right-0 top-full mt-2 w-44 bg-white border border-slate-200 rounded-xl shadow-xl py-1.5 opacity-0 pointer-events-none scale-95 transition-all duration-200 origin-top-right z-50">
            @foreach($langs as $code => $info)
              <a href="{{ route('locale.switch', $code) }}"
                class="flex items-center gap-3 px-4 py-2.5 text-sm transition-colors hover:bg-slate-50 {{ app()->getLocale() === $code ? 'text-[var(--color-navy)] font-bold bg-[var(--color-navy)]/5' : 'text-slate-700' }}">
                <span class="text-base">{{ $info['flag'] }}</span>
                <span>{{ $info['label'] }}</span>
                @if(app()->getLocale() === $code)
                  <svg class="w-4 h-4 ml-auto text-[var(--color-gold)]" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12" />
                  </svg>
                @endif
              </a>
            @endforeach
          </div>
        </div>

        {{-- Help Button: hidden on mobile, visible md+ --}}
        <a href="/faq"
          class="hidden md:inline-flex shrink-0 whitespace-nowrap items-center gap-2 bg-[var(--color-navy)] text-white text-sm font-bold px-5 py-2.5 rounded-full transition-all hover:-translate-y-px hover:shadow-[0_6px_20px_rgba(0,43,91,0.35)] shadow-[0_4px_12px_rgba(0,43,91,0.2)]">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 18v-6a9 9 0 0 1 18 0v6" />
            <path
              d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z" />
          </svg>
          <span>{{ __('site.nav_help') }}</span>
        </a>
      </div>
    </div>
  </div>

  {{-- Mobile Navigation Overlay --}}
  <style>
    #nav-links { background: linear-gradient(160deg, #001e46 0%, #002b5b 100%); }
    #nav-links.open { opacity: 1 !important; pointer-events: auto !important; transform: translateX(0) !important; }
    #nav-links .mobile-link { display: flex; align-items: center; justify-content: space-between; width: 100%; }
    #nav-links .mobile-link .link-label { display: flex; align-items: center; gap: 0.75rem; }
  </style>
  <div id="nav-links" class="fixed inset-0 z-[100] flex flex-col overflow-y-auto opacity-0 pointer-events-none translate-x-8 transition-all duration-300 ease-in-out lg:!hidden">

    {{-- Header row --}}
    <div class="flex items-center justify-between px-6 pt-6 pb-5 border-b border-white/10 shrink-0">
      <a href="/" class="flex items-center gap-3" onclick="document.getElementById('nav-links').classList.remove('open')">
        <img src="/images/logo-visa.png" class="w-10 h-10 object-contain" alt="Bali E Visa Logo">
        <div class="flex flex-col">
          <span class="font-bold text-white leading-tight">Bali E Visa</span>
          <span class="text-[0.65rem] text-white/60 leading-tight">{{ __('site.nav_portal') }}</span>
        </div>
      </a>
      <button
        class="flex items-center justify-center w-10 h-10 rounded-full bg-white/10 text-white hover:bg-white/20 transition-all cursor-pointer"
        onclick="document.getElementById('nav-links').classList.remove('open')" aria-label="Close menu">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>

    {{-- Nav Links --}}
    <nav class="flex flex-col px-4 py-4 gap-1 flex-1">
      <a href="/" onclick="document.getElementById('nav-links').classList.remove('open')"
        class="mobile-link px-4 py-4 rounded-xl {{ request()->is('/') ? 'bg-white/15 text-[var(--color-gold)]' : 'text-white hover:bg-white/10' }} text-base font-semibold transition-all">
        <span class="link-label">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          {{ __('site.nav_home') }}
        </span>
        @if(request()->is('/'))<svg class="w-4 h-4 text-[var(--color-gold)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>@endif
      </a>

      <a href="{{ route('arrival-card') }}" onclick="document.getElementById('nav-links').classList.remove('open')"
        class="mobile-link px-4 py-4 rounded-xl {{ request()->is('arrival-card') ? 'bg-white/15 text-[var(--color-gold)]' : 'text-white hover:bg-white/10' }} text-base font-semibold transition-all">
        <span class="link-label">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
          {{ __('site.nav_arrival') }}
        </span>
        @if(request()->is('arrival-card'))<svg class="w-4 h-4 text-[var(--color-gold)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>@endif
      </a>

      <a href="{{ route('visa') }}" onclick="document.getElementById('nav-links').classList.remove('open')"
        class="mobile-link px-4 py-4 rounded-xl {{ request()->is('visa') ? 'bg-white/15 text-[var(--color-gold)]' : 'text-white hover:bg-white/10' }} text-base font-semibold transition-all">
        <span class="link-label">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          {{ __('site.nav_visa') }}
        </span>
        @if(request()->is('visa'))<svg class="w-4 h-4 text-[var(--color-gold)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>@endif
      </a>

      <a href="/bali-levy" onclick="document.getElementById('nav-links').classList.remove('open')"
        class="mobile-link px-4 py-4 rounded-xl {{ request()->is('bali-levy') ? 'bg-white/15 text-[var(--color-gold)]' : 'text-white hover:bg-white/10' }} text-base font-semibold transition-all">
        <span class="link-label">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
          {{ __('site.nav_levy') }}
        </span>
        @if(request()->is('bali-levy'))<svg class="w-4 h-4 text-[var(--color-gold)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>@endif
      </a>

      <a href="{{ route('steps') }}" onclick="document.getElementById('nav-links').classList.remove('open')"
        class="mobile-link px-4 py-4 rounded-xl {{ request()->is('steps') ? 'bg-white/15 text-[var(--color-gold)]' : 'text-white hover:bg-white/10' }} text-base font-semibold transition-all">
        <span class="link-label">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
          {{ __('site.nav_steps') }}
        </span>
        @if(request()->is('steps'))<svg class="w-4 h-4 text-[var(--color-gold)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>@endif
      </a>

      <a href="{{ route('news') }}" onclick="document.getElementById('nav-links').classList.remove('open')"
        class="mobile-link px-4 py-4 rounded-xl {{ request()->routeIs('news*') ? 'bg-white/15 text-[var(--color-gold)]' : 'text-white hover:bg-white/10' }} text-base font-semibold transition-all">
        <span class="link-label">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 0-2 2zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6z"/></svg>
          {{ __('site.nav_news') }}
        </span>
        @if(request()->routeIs('news*'))<svg class="w-4 h-4 text-[var(--color-gold)]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>@endif
      </a>
    </nav>

    {{-- Footer area: language + help --}}
    <div class="shrink-0 px-6 pb-8 pt-4 border-t border-white/10 space-y-4">
      {{-- Language Selector --}}
      <p class="text-[0.7rem] text-white/40 uppercase tracking-widest font-semibold mb-2">{{ __('site.nav_language') !== 'site.nav_language' ? __('site.nav_language') : 'Language' }}</p>
      <div class="flex flex-wrap gap-2">
        @foreach($langs as $code => $info)
          <a href="{{ route('locale.switch', $code) }}"
            class="flex items-center gap-1.5 text-sm px-3 py-2 rounded-lg font-semibold {{ app()->getLocale() === $code ? 'bg-[var(--color-gold)] text-[var(--color-navy)]' : 'bg-white/10 text-white hover:bg-white/20' }} transition-colors">
            <span>{{ $info['flag'] }}</span>
            <span>{{ strtoupper($code) }}</span>
          </a>
        @endforeach
      </div>

      {{-- Help CTA --}}
      <a href="/faq" onclick="document.getElementById('nav-links').classList.remove('open')"
        class="flex items-center justify-center gap-2 w-full bg-white text-[var(--color-navy)] text-sm font-bold px-6 py-3.5 rounded-xl shadow-lg hover:bg-[var(--color-gold)] transition-all">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M3 18v-6a9 9 0 0 1 18 0v6" />
          <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z" />
        </svg>
        <span>{{ __('site.nav_help') }}</span>
      </a>
    </div>
  </div>
</nav>