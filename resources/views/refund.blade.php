@extends('layouts.app')

@section('content')
  
  <section class="relative bg-gradient-to-br from-[var(--color-navy)] via-[var(--color-navy-light)] to-[var(--color-navy)] py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('/img/hero-bali.png')] bg-center bg-cover opacity-5"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 80% 20%, rgba(255,193,7,0.2) 0%, transparent 50%);"></div>
    <div class="max-w-[1200px] mx-auto px-6 relative z-10 text-center">
      <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white/90 px-4 py-1.5 rounded-full text-[0.8rem] font-semibold tracking-wider uppercase mb-5">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
        {{ __('site.footer_refund') }}
      </div>
      <h1 class="text-[clamp(2rem,4vw,3.5rem)] font-extrabold text-white mb-4">{{ __('site.refund_title') }}</h1>
      <p class="text-white/70 text-[1.05rem] max-w-[600px] mx-auto leading-relaxed">{{ __('site.refund_intro') }}</p>
    </div>
  </section>

  
  <section class="py-20 bg-[var(--color-bg)]">
    <div class="max-w-[720px] mx-auto px-6 md:px-10">
      
      <div class="flex flex-col gap-20">
        
        
        <div class="reveal">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-red-600 text-white rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-red-600/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.refund_sec1_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm border-t-4 border-t-red-500 text-left">
            <p class="text-[1.05rem] text-slate-600 leading-relaxed m-0">{{ __('site.refund_sec1_d') }}</p>
          </div>
        </div>

        
        <div class="reveal reveal-delay-1">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-amber-500 text-white rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-amber-500/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.refund_sec2_t') }}</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach(['i1','i2','i3','i4','i5'] as $idx)
              <div class="bg-white p-6 rounded-2xl border border-slate-200 flex items-start gap-4 transition-all hover:shadow-md hover:border-amber-200">
                <div class="mt-1 text-amber-500 shrink-0"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg></div>
                <p class="text-[0.935rem] text-slate-600 leading-relaxed m-0 font-medium">{{ __('site.refund_sec2_' . $idx) }}</p>
              </div>
            @endforeach
          </div>
        </div>

        
        <div class="reveal reveal-delay-2">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-blue-600/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.refund_sec3_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm border-t-4 border-t-blue-500 text-left">
            <p class="text-[1.05rem] text-slate-600 leading-relaxed m-0">{{ __('site.refund_sec3_d') }}</p>
          </div>
        </div>

        
        <div class="reveal reveal-delay-3">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-[var(--color-navy)] text-[var(--color-gold)] rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-[var(--color-navy)]/10">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.refund_sec4_t') }}</h2>
          </div>
          <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm space-y-5">
            @foreach(['i1','i2','i3','i4'] as $idx)
              <div class="flex items-start gap-4 p-5 rounded-2xl bg-slate-50 border border-slate-100 transition-all hover:bg-white hover:shadow-md">
                <div class="mt-1 text-[var(--color-gold)] shrink-0"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg></div>
                <p class="text-slate-600 text-[1rem] m-0">{{ __('site.refund_sec4_' . $idx) }}</p>
              </div>
            @endforeach
          </div>
        </div>

        
        <div class="reveal reveal-delay-4">
          <div class="flex flex-col items-start text-left mb-10">
            <div class="w-16 h-16 bg-green-600 text-white rounded-2xl flex items-center justify-center shadow-xl mb-5 ring-4 ring-green-600/5">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <h2 class="text-3xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.refund_sec5_t') }}</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-[2rem] p-10 border border-slate-200 shadow-sm flex items-center justify-start text-left">
                <p class="text-xl font-bold text-[var(--color-navy)] m-0">{{ __('site.refund_sec5_d') }}</p>
            </div>
            <div class="bg-[var(--color-navy)] rounded-[2rem] p-10 shadow-xl text-white">
                <h3 class="text-xl font-bold mb-6 text-[var(--color-gold)] text-left">{{ __('site.refund_sec5_h') }}</h3>
                <ul class="flex flex-col gap-4 list-none m-0 p-0 text-white/80">
                    <li class="flex items-start gap-4">
                        <div class="mt-1.5 w-2 h-2 rounded-full bg-[var(--color-gold)] shrink-0"></div>
                        <p class="text-sm m-0">{{ __('site.refund_sec5_r1') }}</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1.5 w-2 h-2 rounded-full bg-[var(--color-gold)] shrink-0"></div>
                        <p class="text-sm m-0">{{ __('site.refund_sec5_r2') }}</p>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1.5 w-2 h-2 rounded-full bg-[var(--color-gold)] shrink-0"></div>
                        <p class="text-sm m-0">{{ __('site.refund_sec5_r3') }}</p>
                    </li>
                </ul>
            </div>
          </div>
        </div>

        
        <div class="reveal reveal-delay-5">
           <div class="bg-slate-100 rounded-[2rem] p-10 border border-slate-200 text-left">
             <h3 class="text-2xl font-bold text-[var(--color-navy)] mb-4">{{ __('site.refund_sec6_t') }}</h3>
             <p class="text-slate-500 leading-relaxed max-w-[700px] m-0 italic">{{ __('site.refund_sec6_d') }}</p>
           </div>
        </div>

      </div>

      
      <div class="mt-24 text-left reveal">
        <a href="/" class="text-[var(--color-navy)] font-bold text-sm flex items-center justify-start gap-2 hover:text-[var(--color-gold)] transition-colors group">
          <svg class="transition-transform group-hover:-translate-x-1" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="15 18 9 12 15 6"/></svg>
          Back to Home
        </a>
      </div>

    </div>
  </section>
@endsection
