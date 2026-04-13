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
    <div class="max-w-[1000px] mx-auto px-6">
      
      <div class="flex flex-col gap-16">
        
        {{-- Section 1 --}}
        <div class="reveal">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg shadow-[var(--color-navy)]/10">1</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.privacy_sec1_t') }}</h2>
          </div>
          <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
            <ul class="flex flex-col gap-4 list-none m-0 p-0">
              <li class="flex items-start gap-4">
                <div class="mt-1.5"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-navy)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
                <p class="text-slate-600 leading-relaxed">{{ __('site.privacy_sec1_d1') }}</p>
              </li>
              <li class="flex items-start gap-4">
                <div class="mt-1.5"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-navy)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
                <p class="text-slate-600 leading-relaxed">{{ __('site.privacy_sec1_d2') }}</p>
              </li>
              <li class="flex items-start gap-4">
                <div class="mt-1.5"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-navy)" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
                <p class="text-slate-600 leading-relaxed">{{ __('site.privacy_sec1_d3') }}</p>
              </li>
            </ul>
          </div>
        </div>

        {{-- Section 2 --}}
        <div class="reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg shadow-[var(--color-navy)]/10">2</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.privacy_sec2_t') }}</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl border border-slate-200">
              <div class="text-[var(--color-navy)] font-bold mb-3 flex items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 22h14a2 2 0 0 0 2-2V7.5L14.5 2H6a2 2 0 0 0-2 2v4"/><polyline points="14 2 14 8 20 8"/><path d="m3 15 2 2 4-4"/></svg>
                Visa Application
              </div>
              <p class="text-sm text-slate-600 leading-relaxed">{{ __('site.privacy_sec2_d1') }}</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200">
              <div class="text-[var(--color-navy)] font-bold mb-3 flex items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 6h18"/><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/><line x1="10" y1="11" x2="10" y2="17"/><line x1="14" y1="11" x2="14" y2="17"/></svg>
                Physical Destruction
              </div>
              <p class="text-sm text-slate-600 leading-relaxed">{{ __('site.privacy_sec2_d2') }}</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200">
              <div class="text-[var(--color-navy)] font-bold mb-3 flex items-center gap-2">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                Electronic Records
              </div>
              <p class="text-sm text-slate-600 leading-relaxed">{{ __('site.privacy_sec2_d3') }}</p>
            </div>
          </div>
        </div>

        {{-- Section 3 --}}
        <div class="reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg shadow-[var(--color-navy)]/10">3</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.privacy_sec3_t') }}</h2>
          </div>
          <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-6">
            <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 italic transition-all hover:bg-white hover:shadow-md">
              <span class="font-bold text-[var(--color-navy)] whitespace-nowrap">Service Providers:</span>
              <p class="text-slate-600 text-sm m-0">{{ __('site.privacy_sec3_d1') }}</p>
            </div>
            <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 italic transition-all hover:bg-white hover:shadow-md">
              <span class="font-bold text-[var(--color-navy)] whitespace-nowrap">Authorities:</span>
              <p class="text-slate-600 text-sm m-0">{{ __('site.privacy_sec3_d2') }}</p>
            </div>
            <div class="flex gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 italic transition-all hover:bg-white hover:shadow-md">
              <span class="font-bold text-[var(--color-navy)] whitespace-nowrap">Marketing:</span>
              <p class="text-slate-600 text-sm m-0">{{ __('site.privacy_sec3_d3') }}</p>
            </div>
          </div>
        </div>

        {{-- Section 4 & 5 --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 reveal reveal-delay-3">
          <div class="space-y-6">
            <div class="flex items-center gap-4 mb-2">
              <div class="w-12 h-12 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg shadow-[var(--color-navy)]/10">4</div>
              <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.privacy_sec4_t') }}</h2>
            </div>
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm h-full">
              <p class="text-slate-600 leading-relaxed m-0">{{ __('site.privacy_sec4_d') }}</p>
            </div>
          </div>
          <div class="space-y-6">
            <div class="flex items-center gap-4 mb-2">
              <div class="w-12 h-12 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg shadow-[var(--color-navy)]/10">5</div>
              <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.privacy_sec5_t') }}</h2>
            </div>
            <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm h-full">
              <p class="text-slate-600 leading-relaxed m-0">{{ __('site.privacy_sec5_d') }}</p>
            </div>
          </div>
        </div>

      </div>

      {{-- Back Home --}}
      <div class="mt-20 text-center reveal">
        <a href="/" class="text-[var(--color-navy)] font-bold text-sm flex items-center justify-center gap-1.5 hover:text-[var(--color-gold)] transition-colors group">
          <svg class="transition-transform group-hover:-translate-x-1" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="15 18 9 12 15 6"/></svg>
          Back to Home
        </a>
      </div>

    </div>
  </section>
@endsection
