@extends('layouts.app')

@section('content')
  {{-- ═══════════════════════════════════════════ TERMS HERO ═══ --}}
  <section class="relative bg-gradient-to-br from-[var(--color-navy)] via-[var(--color-navy-light)] to-[var(--color-navy)] py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('/img/hero-bali.png')] bg-center bg-cover opacity-5"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 80% 20%, rgba(255,193,7,0.2) 0%, transparent 50%);"></div>
    <div class="max-w-[1200px] mx-auto px-6 relative z-10 text-center">
      <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white/90 px-4 py-1.5 rounded-full text-[0.8rem] font-semibold tracking-wider uppercase mb-5">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
        {{ __('site.footer_terms') }}
      </div>
      <h1 class="text-[clamp(2rem,4vw,3.5rem)] font-extrabold text-white mb-4">{{ __('site.terms_title') }}</h1>
      <p class="text-white/70 text-[1.05rem] max-w-[600px] mx-auto leading-relaxed">{{ __('site.terms_intro') }}</p>
    </div>
  </section>

  {{-- ═══════════════════════════════════════════ TERMS CONTENT ═══ --}}
  <section class="py-20 bg-[var(--color-bg)]">
    <div class="max-w-[900px] mx-auto px-6">
      
      <div class="flex flex-col gap-20">
        
        {{-- Section 1: Service Agreement --}}
        <div class="reveal">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M7 11V7l5-5 5 5v4"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.terms_sec1_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm space-y-5 text-left">
            <p class="text-[1.05rem] text-slate-600 leading-relaxed m-0">{{ __('site.terms_sec1_d1') }}</p>
            <p class="text-sm text-slate-400 leading-relaxed font-semibold italic m-0">{{ __('site.terms_sec1_d2') }}</p>
          </div>
        </div>

        {{-- Section 2: Responsibilities --}}
        <div class="reveal reveal-delay-1">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><polyline points="16 11 18 13 22 9"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.terms_sec2_t') }}</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach(['i1', 'i2', 'i3'] as $idx)
              <div class="bg-white p-8 rounded-3xl border border-slate-200 hover:border-[var(--color-gold)] transition-all hover:shadow-lg hover:-translate-y-1 text-left">
                <div class="w-12 h-12 bg-slate-50 text-[var(--color-navy)] rounded-xl flex items-center justify-center mb-5">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <p class="text-[0.935rem] font-medium text-slate-700 leading-relaxed m-0">{{ __('site.terms_sec2_' . $idx) }}</p>
              </div>
            @endforeach
          </div>
        </div>

        {{-- Section 3: Fees --}}
        <div class="reveal reveal-delay-2">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/><path d="M7 15h.01"/><path d="M11 15h2"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.terms_sec3_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm space-y-5">
            @foreach(['i1', 'i2', 'i3'] as $idx)
              <div class="flex items-start gap-5 p-5 rounded-2xl bg-slate-50 border border-slate-100 transition-all hover:bg-white hover:shadow-md">
                <div class="mt-1 text-[var(--color-gold)] shrink-0"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
                <p class="text-slate-600 text-[1rem] m-0 {{ $idx == 'i3' ? 'font-bold' : '' }}">{{ __('site.terms_sec3_' . $idx) }}</p>
              </div>
            @endforeach
          </div>
        </div>

        {{-- Section 4: Processing --}}
        <div class="reveal reveal-delay-3">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/><path d="M3.3 7a9 9 0 1 1 0 10"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.terms_sec4_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm space-y-6 text-left">
            <p class="text-[1.05rem] text-slate-600 leading-relaxed m-0">{{ __('site.terms_sec4_d1') }}</p>
            <div class="pt-6 border-t border-slate-100">
               <p class="text-sm text-slate-400 italic m-0">{{ __('site.terms_sec4_d2') }}</p>
            </div>
          </div>
        </div>

        {{-- Section 5: Liability --}}
        <div class="reveal reveal-delay-4">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-red-600 text-white rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-red-600/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.terms_sec5_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-red-100 shadow-sm text-left space-y-6">
            <p class="text-[1.1rem] font-bold text-red-600 leading-relaxed m-0">{{ __('site.terms_sec5_d1') }}</p>
            <p class="text-slate-600 leading-relaxed m-0">{{ __('site.terms_sec5_d2') }}</p>
          </div>
        </div>

        {{-- Section 6: Communication --}}
        <div class="reveal reveal-delay-5">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.terms_sec6_t') }}</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-[2rem] border border-slate-200 text-left">
               <p class="text-slate-600 leading-relaxed m-0">{{ __('site.terms_sec6_d1') }}</p>
            </div>
            <div class="bg-white p-8 rounded-[2rem] border border-slate-200 text-left">
               <p class="text-slate-600 leading-relaxed m-0">{{ __('site.terms_sec6_d2') }}</p>
            </div>
          </div>
        </div>

        {{-- Section 7: Law --}}
        <div class="reveal reveal-delay-5">
          <div class="bg-[var(--color-navy)] rounded-[2.5rem] p-12 text-left shadow-2xl relative overflow-hidden">
            <div class="absolute inset-0 opacity-10 bg-[url('/img/pattern.png')]"></div>
            <div class="relative z-10">
              <h3 class="text-3xl font-extrabold text-[var(--color-gold)] mb-6 tracking-tight">{{ __('site.terms_sec7_t') }}</h3>
              <p class="text-white/90 leading-relaxed max-w-[700px] text-xl font-medium">{{ __('site.terms_sec7_d') }}</p>
            </div>
          </div>
        </div>

      </div>

      {{-- Back Home --}}
      <div class="mt-24 text-left reveal">
        <a href="/" class="text-[var(--color-navy)] font-bold text-sm flex items-center justify-start gap-2 hover:text-[var(--color-gold)] transition-colors group">
          <svg class="transition-transform group-hover:-translate-x-1" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="15 18 9 12 15 6"/></svg>
          {{ __('site.footer_home') }}
        </a>
      </div>

    </div>
  </section>
@endsection
