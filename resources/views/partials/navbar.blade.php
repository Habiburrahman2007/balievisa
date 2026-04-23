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

        {{-- Desktop Menu: Hidden on all screens as requested --}}
        <ul class="hidden items-center gap-8 xl:gap-12">
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

        {{-- Mobile Toggle: Visible on mobile/tablet, hidden on laptop/desktop --}}
        <button id="mobile-toggle"
          class="flex md:hidden items-center justify-center w-10 h-10 bg-slate-100 text-[var(--color-navy)] rounded-full transition-all hover:bg-slate-200 cursor-pointer"
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



  <script>
    window.openMenu = function() {
      const nav      = document.getElementById('nav-links');
      const backdrop = document.getElementById('nav-backdrop');
      if (nav) {
        nav.classList.add('open');
        backdrop?.classList.add('open');
        document.body.classList.add('menu-open');
      }
    };

    window.closeMenu = function() {
      const nav      = document.getElementById('nav-links');
      const backdrop = document.getElementById('nav-backdrop');
      if (nav) {
        nav.classList.remove('open');
        backdrop?.classList.remove('open');
        document.body.classList.remove('menu-open');
      }
    };

    document.addEventListener('DOMContentLoaded', () => {
      const toggle = document.getElementById('mobile-toggle');
      if (toggle) {
        toggle.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          window.openMenu();
        });
      }
    });
  </script>
</nav>

{{-- MOBILE NAVIGATION OVERLAY — outside <nav> so position:fixed works correctly --}}
{{-- The nav has CSS containment (contain: layout style) which traps fixed children --}}
<style>
  #nav-links {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    background: #002b5b;
    transform: translateX(100%);
    transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    pointer-events: none;
    visibility: hidden;
    will-change: transform;
    overflow: hidden;
  }

  #nav-links.open {
    transform: translateX(0);
    pointer-events: auto;
    visibility: visible;
  }

  #nav-backdrop {
    position: fixed;
    inset: 0;
    z-index: 9998;
    background: rgba(0, 0, 0, 0.6);
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.35s ease;
  }

  #nav-backdrop.open {
    opacity: 1;
    pointer-events: auto;
  }

  body.menu-open {
    overflow: hidden;
  }

  .menu-item {
    padding: 14px 16px;
    border-radius: 12px;
    color: white;
    font-weight: 600;
    background: rgba(255, 255, 255, 0.08);
    transition: all 0.2s;
    display: block;
    text-decoration: none;
  }

  .menu-item:hover {
    background: rgba(255, 255, 255, 0.18);
  }

  .menu-item.active {
    background: var(--color-gold);
    color: var(--color-navy);
  }
</style>

<div id="nav-backdrop" onclick="closeMenu()"></div>

<div id="nav-links">
  {{-- HEADER --}}
  <div class="flex items-center justify-between px-6 pt-6 pb-5 border-b border-white/10 shrink-0">
    <a href="/" class="flex items-center gap-3" onclick="closeMenu()">
      <img src="/images/logo-visa.png" class="w-10 h-10 object-contain" alt="Logo">
      <div class="flex flex-col">
        <p class="text-white font-bold leading-tight">Bali E Visa</p>
        <p class="text-white/60 text-[0.65rem] leading-tight">{{ __('site.nav_portal') }}</p>
      </div>
    </a>
    <button onclick="closeMenu()" class="flex items-center justify-center w-10 h-10 rounded-full bg-white/10 text-white hover:bg-white/20 transition-all cursor-pointer" aria-label="Close menu">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
      </svg>
    </button>
  </div>

  {{-- MENU --}}
  <div class="flex flex-col p-4 gap-2 flex-1 overflow-y-auto">
    <a href="/" onclick="closeMenu()" class="menu-item {{ request()->is('/') ? 'active' : '' }}">
      {{ __('site.nav_home') }}
    </a>
    <a href="{{ route('arrival-card') }}" onclick="closeMenu()" class="menu-item {{ request()->is('arrival-card') ? 'active' : '' }}">
      {{ __('site.nav_arrival') }}
    </a>
    <a href="{{ route('visa') }}" onclick="closeMenu()" class="menu-item {{ request()->is('visa') ? 'active' : '' }}">
      {{ __('site.nav_visa') }}
    </a>
    <a href="/bali-levy" onclick="closeMenu()" class="menu-item {{ request()->is('bali-levy') ? 'active' : '' }}">
      {{ __('site.nav_levy') }}
    </a>
    <a href="{{ route('steps') }}" onclick="closeMenu()" class="menu-item {{ request()->is('steps') ? 'active' : '' }}">
      {{ __('site.nav_steps') }}
    </a>
    <a href="{{ route('news') }}" onclick="closeMenu()" class="menu-item {{ request()->routeIs('news*') ? 'active' : '' }}">
      {{ __('site.nav_news') }}
    </a>
  </div>

  {{-- FOOTER --}}
  <div class="p-6 border-t border-white/10 shrink-0 space-y-4">
    <div>
      <p class="text-white text-[0.7rem] uppercase tracking-widest font-semibold mb-3">{{ __('site.nav_language') !== 'site.nav_language' ? __('site.nav_language') : 'Language' }}</p>
      <div class="flex gap-2 flex-wrap">
        @foreach($langs as $code => $info)
          <a href="{{ route('locale.switch', $code) }}"
             class="px-3 py-2 rounded-lg text-sm font-semibold transition-colors {{ app()->getLocale() === $code ? 'bg-[var(--color-gold)] text-[var(--color-navy)]' : 'bg-white/20 text-white hover:bg-white/30' }}">
            {{ $info['flag'] }} {{ strtoupper($code) }}
          </a>
        @endforeach
      </div>
    </div>

    <a href="/faq" onclick="closeMenu()"
       class="flex items-center justify-center gap-2 w-full bg-[var(--color-gold)] text-[var(--color-navy)] text-sm font-bold py-3.5 rounded-xl shadow-lg hover:bg-[var(--color-gold-dark)] transition-all">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
        <path d="M3 18v-6a9 9 0 0 1 18 0v6" />
        <path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z" />
      </svg>
      <span>{{ __('site.nav_help') }}</span>
    </a>
  </div>
</div>