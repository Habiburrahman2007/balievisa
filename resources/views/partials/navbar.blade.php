{{-- ═══════════════════════════════════════════ MAIN NAVBAR --}}
<nav id="main-navbar" class="sticky top-0 z-50 bg-white border-b border-slate-200 transition-all duration-300">
  <div class="max-w-[1200px] mx-auto px-6">
    <div class="flex items-center justify-between h-[68px] gap-6">
      <div class="flex items-center gap-10 h-full">
        {{-- Logo --}}
        <a href="/" class="flex items-center gap-3 shrink-0" id="logo">
          <img src="/images/logo-visa.png" class="w-12 h-12 object-contain" alt="Bali E Visa Logo">
          <div class="flex flex-col">
            <span class="font-bold text-base text-[var(--color-navy)] leading-tight">Bali E Visa</span>
            <span
              class="text-[0.65rem] text-slate-400 font-medium leading-tight hidden sm:block">{{ __('site.nav_portal') }}</span>
          </div>
        </a>

        {{-- Desktop Menu --}}
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

      {{-- Right-side: Language Dropdown + Help --}}
      <div class="flex items-center gap-3">
        {{-- Language Dropdown --}}
        <div class="relative" id="lang-dropdown-wrap">
          <button id="lang-dropdown-btn" type="button"
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
            @php
              $langs = [
                'en' => ['label' => 'English', 'flag' => '🇬🇧'],
                'zh' => ['label' => '中文', 'flag' => '🇨🇳'],
                'es' => ['label' => 'Español', 'flag' => '🇪🇸'],
                'ar' => ['label' => 'العربية', 'flag' => '🇸🇦'],
                'hi' => ['label' => 'हिन्दी', 'flag' => '🇮🇳'],
              ];
            @endphp
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

        {{-- Help Button --}}
        <a href="/faq"
          class="inline-flex items-center gap-2 bg-[var(--color-navy)] text-white text-sm font-bold px-5 py-2.5 rounded-full transition-all hover:-translate-y-px hover:shadow-[0_6px_20px_rgba(0,43,91,0.35)] shadow-[0_4px_12px_rgba(0,43,91,0.2)]">
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
</nav>