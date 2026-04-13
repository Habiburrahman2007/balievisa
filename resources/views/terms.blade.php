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
    <div class="max-w-[1000px] mx-auto px-6">
      
      <div class="flex flex-col gap-12">
        
        {{-- Section 1: Service Agreement --}}
        <div class="reveal">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg ring-4 ring-[var(--color-navy)]/5">1</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.terms_sec1_t') }}</h2>
          </div>
          <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
            <p class="text-slate-600 leading-relaxed">{{ __('site.terms_sec1_d1') }}</p>
            <p class="text-slate-600 leading-relaxed font-semibold italic text-sm">{{ __('site.terms_sec1_d2') }}</p>
          </div>
        </div>

        {{-- Section 2: Responsibilities --}}
        <div class="reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-blue-600 text-white rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg ring-4 ring-blue-600/5">2</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.terms_sec2_t') }}</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach(['i1', 'i2', 'i3'] as $idx)
              <div class="bg-white p-6 rounded-2xl border border-slate-200 hover:border-blue-300 transition-colors">
                <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-4">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                </div>
                <p class="text-sm font-medium text-slate-700 leading-relaxed">{{ __('site.terms_sec2_' . $idx) }}</p>
              </div>
            @endforeach
          </div>
        </div>

        {{-- Section 3: Fees --}}
        <div class="reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-emerald-600 text-white rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg ring-4 ring-emerald-600/5">3</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.terms_sec3_t') }}</h2>
          </div>
          <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
            <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 italic transition-all hover:bg-white hover:shadow-md">
                <p class="text-slate-600 text-[0.935rem] m-0">{{ __('site.terms_sec3_i1') }}</p>
            </div>
            <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 italic transition-all hover:bg-white hover:shadow-md">
                <p class="text-slate-600 text-[0.935rem] m-0">{{ __('site.terms_sec3_i2') }}</p>
            </div>
            <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 italic transition-all hover:bg-white hover:shadow-md">
                <p class="text-slate-600 text-[0.935rem] m-0 font-bold text-[var(--color-navy)]">{{ __('site.terms_sec3_i3') }}</p>
            </div>
          </div>
        </div>

        {{-- Section 4: Processing Times --}}
        <div class="reveal reveal-delay-3">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-amber-500 text-white rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg ring-4 ring-amber-500/5">4</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.terms_sec4_t') }}</h2>
          </div>
          <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
            <div class="flex items-center gap-4">
               <svg class="text-amber-500 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
               <p class="text-slate-600 leading-relaxed">{{ __('site.terms_sec4_d1') }}</p>
            </div>
            <div class="flex items-center gap-4">
               <svg class="text-amber-500 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
               <p class="text-slate-600 leading-relaxed">{{ __('site.terms_sec4_d2') }}</p>
            </div>
          </div>
        </div>

        {{-- Section 5: Liability --}}
        <div class="reveal reveal-delay-4">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-red-600 text-white rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg ring-4 ring-red-600/5">5</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.terms_sec5_t') }}</h2>
          </div>
          <div class="bg-red-50/30 rounded-3xl p-8 border border-red-100 shadow-sm space-y-5">
            <p class="text-slate-700 leading-relaxed font-medium">{{ __('site.terms_sec5_d1') }}</p>
            <p class="text-slate-700 leading-relaxed">{{ __('site.terms_sec5_d2') }}</p>
          </div>
        </div>

        {{-- Section 6: Communication --}}
        <div class="reveal reveal-delay-5">
          <div class="flex items-center gap-4 mb-6">
            <div class="w-12 h-12 bg-teal-600 text-white rounded-2xl flex items-center justify-center font-bold text-xl shadow-lg ring-4 ring-teal-600/5">6</div>
            <h2 class="text-2xl font-bold text-[var(--color-navy)]">{{ __('site.terms_sec6_t') }}</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-2xl border border-slate-200">
               <p class="text-slate-600 leading-relaxed">{{ __('site.terms_sec6_d1') }}</p>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-200">
               <p class="text-slate-600 leading-relaxed">{{ __('site.terms_sec6_d2') }}</p>
            </div>
          </div>
        </div>

        {{-- Section 7: Governing Law --}}
        <div class="reveal reveal-delay-5">
          <div class="bg-[var(--color-navy)] rounded-3xl p-10 text-center shadow-2xl">
            <h3 class="text-2xl font-bold text-[var(--color-gold)] mb-4">{{ __('site.terms_sec7_t') }}</h3>
            <p class="text-white/80 leading-relaxed max-w-[700px] mx-auto text-lg">{{ __('site.terms_sec7_d') }}</p>
          </div>
        </div>

      </div>

      {{-- Back Home --}}
      <div class="mt-20 text-center reveal">
        <a href="/" class="text-[var(--color-navy)] font-bold text-sm flex items-center justify-center gap-1.5 hover:text-[var(--color-gold)] transition-colors group">
          <svg class="transition-transform group-hover:-translate-x-1" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="15 18 9 12 15 6"/></svg>
          {{ __('site.footer_home') }}
        </a>
      </div>

    </div>
  </section>
@endsection
