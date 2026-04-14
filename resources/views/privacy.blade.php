@extends('layouts.app')

@section('content')
  {{-- ═══════════════════════════════════════════ PRIVACY HERO ═══ --}}
  <section class="relative bg-gradient-to-br from-[var(--color-navy)] via-[var(--color-navy-light)] to-[var(--color-navy)] py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('/img/hero-bali.png')] bg-center bg-cover opacity-5"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 80% 20%, rgba(255,193,7,0.2) 0%, transparent 50%);"></div>
    <div class="max-w-[1200px] mx-auto px-6 relative z-10 text-center">
      <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white/90 px-4 py-1.5 rounded-full text-[0.8rem] font-semibold tracking-wider uppercase mb-5">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        {{ __('site.footer_legal') }}
      </div>
      <h1 class="text-[clamp(2rem,4vw,3.5rem)] font-extrabold text-white mb-4">{{ __('site.privacy_title') }}</h1>
      <p class="text-white/70 text-[1.05rem] max-w-[600px] mx-auto leading-relaxed">{{ __('site.privacy_intro') }}</p>
    </div>
  </section>

  {{-- ═══════════════════════════════════════════ PRIVACY CONTENT ═══ --}}
  <section class="py-20 bg-[var(--color-bg)]">
    <div class="max-w-[900px] mx-auto px-6">
      
      <div class="flex flex-col gap-20">
        
        {{-- Section 1: Collection --}}
        <div class="reveal">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.privacy_sec1_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm">
            <ul class="flex flex-col gap-5 list-none m-0 p-0 text-left">
              <li class="flex items-start gap-4">
                <div class="mt-1.5"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-gold)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
                <p class="text-slate-600 leading-relaxed m-0">{{ __('site.privacy_sec1_d1') }}</p>
              </li>
              <li class="flex items-start gap-4">
                <div class="mt-1.5"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-gold)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
                <p class="text-slate-600 leading-relaxed m-0">{{ __('site.privacy_sec1_d2') }}</p>
              </li>
              <li class="flex items-start gap-4">
                <div class="mt-1.5"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-gold)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
                <p class="text-slate-600 leading-relaxed m-0">{{ __('site.privacy_sec1_d3') }}</p>
              </li>
            </ul>
          </div>
        </div>

        {{-- Section 2: Retention --}}
        <div class="reveal reveal-delay-1">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.privacy_sec2_t') }}</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-7 rounded-3xl border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
              <div class="text-[var(--color-navy)] font-bold mb-4 flex items-center gap-2">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/><path d="M12 18v-6"/><path d="m9 15 3 3 3-3"/></svg>
                Visa Application
              </div>
              <p class="text-[0.935rem] text-slate-600 leading-relaxed">{{ __('site.privacy_sec2_d1') }}</p>
            </div>
            <div class="bg-white p-7 rounded-3xl border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
              <div class="text-[var(--color-navy)] font-bold mb-4 flex items-center gap-2">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg>
                Physical Data
              </div>
              <p class="text-[0.935rem] text-slate-600 leading-relaxed">{{ __('site.privacy_sec2_d2') }}</p>
            </div>
            <div class="bg-white p-7 rounded-3xl border border-slate-200 transition-all hover:shadow-lg hover:-translate-y-1">
              <div class="text-[var(--color-navy)] font-bold mb-4 flex items-center gap-2">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="2" y1="21" x2="22" y2="21"/><line x1="7" y1="21" x2="7" y2="17"/><line x1="17" y1="21" x2="17" y2="17"/></svg>
                Electronic Records
              </div>
              <p class="text-[0.935rem] text-slate-600 leading-relaxed">{{ __('site.privacy_sec2_d3') }}</p>
            </div>
          </div>
        </div>

        {{-- Section 3: Disclosure --}}
        <div class="reveal reveal-delay-2">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.privacy_sec3_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm space-y-7">
            @foreach(['d1' => 'Service Providers', 'd2' => 'Authorities', 'd3' => 'Marketing'] as $key => $label)
              <div class="flex flex-col sm:flex-row sm:items-center gap-4 p-5 rounded-2xl bg-slate-50 border border-slate-100 transition-all hover:bg-white hover:shadow-md">
                <span class="font-bold text-[var(--color-navy)] sm:w-40 shrink-0">{{ $label }}:</span>
                <p class="text-slate-600 text-[0.935rem] m-0">{{ __('site.privacy_sec3_' . $key) }}</p>
              </div>
            @endforeach
          </div>
        </div>

        {{-- Section 4 & 5 --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 reveal reveal-delay-3">
          <div>
            <div class="flex flex-col items-start text-left mb-8">
              <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <h2 class="text-2xl font-bold text-[var(--color-navy)] tracking-tight">{{ __('site.privacy_sec4_t') }}</h2>
            </div>
            <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm h-full text-left">
              <p class="text-slate-600 leading-relaxed m-0">{{ __('site.privacy_sec4_d') }}</p>
            </div>
          </div>
          <div>
            <div class="flex flex-col items-start text-left mb-8">
              <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/5">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
              </div>
              <h2 class="text-2xl font-bold text-[var(--color-navy)] tracking-tight">{{ __('site.privacy_sec5_t') }}</h2>
            </div>
            <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm h-full text-left">
              <p class="text-slate-600 leading-relaxed m-0">{{ __('site.privacy_sec5_d') }}</p>
            </div>
          </div>
        </div>

      </div>

      {{-- Back Home --}}
      <div class="mt-24 text-left reveal">
        <a href="/" class="text-[var(--color-navy)] font-bold text-sm flex items-center justify-start gap-2 hover:text-[var(--color-gold)] transition-colors group">
          <svg class="transition-transform group-hover:-translate-x-1" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="15 18 9 12 15 6"/></svg>
          Back to Home
        </a>
      </div>

    </div>
  </section>
@endsection
