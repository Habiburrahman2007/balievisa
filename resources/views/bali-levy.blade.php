@extends('layouts.app')

@section('title', 'Bali Tourist Levy Payment | Official Contribution for Bali Protection')
@section('meta_description', 'Pay your mandatory Bali International Tourist Levy online. Secure payment for Bali nature and culture preservation. Instant QR code delivery.')
@section('meta_keywords', 'Bali Tourist Levy Payment, International Tourist Levy Bali, Bali Environment Contribution, Pay Bali Tax, Bali Tourism Fee')

@section('structured_data')
{
  "@type": "Service",
  "@id": "{{ url('/bali-levy') }}/#service",
  "name": "Bali Tourist Levy Payment Assistance",
  "serviceType": "Tax/Levy Payment Service",
  "provider": {
    "@id": "{{ url('/') }}/#organization"
  },
  "areaServed": "Bali, Indonesia",
  "description": "Secure online processing for the International Tourist Levy required for all visitors to Bali."
}
@endsection

@section('content')

  
  <section class="relative min-h-[90vh] flex items-center justify-center pt-20 overflow-hidden bg-[var(--color-navy)]">
    
    <div class="absolute inset-0 z-0">
      <img src="https://images.unsplash.com/photo-1537996194471-e657df975ab4?auto=format&fit=crop&q=80&w=2000"
        alt="Bali Landscape" class="w-full h-full object-cover shadow-2xl" />
      <div
        class="absolute inset-0 bg-gradient-to-br from-[var(--color-navy)]/90 via-[var(--color-navy)]/80 to-[var(--color-navy-dark)]/90">
      </div>
    </div>

    <div class="relative z-10 text-center max-w-4xl mx-auto px-6">
      <div
        class="inline-block mb-4 px-5 py-2 rounded-full border border-white/30 bg-white/10 backdrop-blur-md text-white/95 text-sm font-bold tracking-wider uppercase drop-shadow-sm">
        {{ __('site.levy_hero_badge') }}
      </div>
      <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6 tracking-tight drop-shadow-xl p-2">
        {!! __('site.levy_hero_title') !!}
      </h1>
      <p class="text-lg md:text-2xl text-white/95 mb-10 font-medium drop-shadow-lg max-w-3xl mx-auto leading-relaxed">
        {{ __('site.levy_hero_subtitle') }}
      </p>
    </div>
  </section>

  
  <section class="relative z-20 -mt-24 max-w-5xl mx-auto px-6 mb-24">
    <div
      class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 border border-white flex flex-col md:flex-row gap-10 items-center ring-1 ring-gray-100 ring-offset-4">
      <div class="flex-1 space-y-6">
        <h2 class="text-4xl font-extrabold text-[var(--color-navy)] tracking-tight">{{ __('site.levy_card_title') }}</h2>
        <p class="text-gray-600 leading-relaxed text-lg font-medium">
          {{ __('site.levy_card_desc') }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 pt-2">
          <a href="https://wa.me/62895330440544?text=Hi%2C%20I%E2%80%99m%20traveling%20to%20Bali%20soon%20and%20need%20help%20with%20the%20Bali%20Tourist%20Tax%20payment.%0ACould%20you%20assist%20me%3F"
            class="inline-flex items-center justify-center gap-2 bg-[var(--color-gold)] text-[var(--color-navy)] px-8 py-4 rounded-xl font-bold text-lg transition-all shadow-[0_8px_32px_rgba(255,193,7,0.35)] hover:shadow-[0_12px_40px_rgba(255,193,7,0.5)] hover:-translate-y-1">
            {{ __('site.levy_btn_pay') }}
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="https://wa.me/62895330440544?text=Hi%2C%20I%E2%80%99m%20traveling%20to%20Bali%20soon%20and%20need%20help%20with%20the%20Bali%20Tourist%20Tax%20payment.%0ACould%20you%20assist%20me%3F"
            class="inline-flex items-center justify-center gap-2 bg-white border-2 border-[var(--color-navy)] text-[var(--color-navy)] hover:bg-[var(--color-navy)]/5 px-8 py-4 rounded-xl font-bold text-lg transition-all hover:shadow-lg">
            {{ __('site.levy_btn_status') }}
          </a>
        </div>
      </div>

      <div class="w-full md:w-84 bg-gray-50/80 rounded-2xl p-7 border border-gray-100 shadow-inner">
        <h3 class="font-bold text-[var(--color-navy)] mb-2 uppercase tracking-wide text-sm">
          {{ __('site.levy_amount_label') }}</h3>
        <div class="text-4xl font-black text-gray-900 mb-1">{{ __('site.levy_amount_val') }}</div>
        <p class="text-sm text-gray-500 mb-3 font-medium bg-gray-200 inline-block px-2 py-1 rounded-md">
          {{ __('site.levy_amount_sub') }}</p>

        <div class="flex items-center justify-between border-t border-gray-200 pt-3 mb-6">
          <span class="text-sm font-bold text-slate-700">{{ __('site.levy_fee_label') }}</span>
          <span class="text-xl font-bold text-[var(--color-navy)]">{{ __('site.levy_fee_val') }}</span>
        </div>

        <ul class="space-y-4">
          <li class="flex items-start gap-3 text-sm text-gray-700 font-semibold leading-tight">
            <span class="bg-blue-100 p-1 rounded-full"><svg class="w-4 h-4 text-[var(--color-navy)] shrink-0" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg></span> {{ __('site.levy_feat_secure') }}
          </li>
          <li class="flex items-start gap-3 text-sm text-gray-700 font-semibold leading-tight">
            <span class="bg-blue-100 p-1 rounded-full"><svg class="w-4 h-4 text-[var(--color-navy)] shrink-0" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg></span> {{ __('site.levy_feat_instant') }}
          </li>
          <li class="flex items-start gap-3 text-sm text-gray-700 font-semibold leading-tight">
            <span class="bg-blue-100 p-1 rounded-full"><svg class="w-4 h-4 text-[var(--color-navy)] shrink-0" fill="none"
                stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg></span> {{ __('site.levy_feat_valid') }}
          </li>
        </ul>
      </div>
    </div>
  </section>

  
  <section class="max-w-[1200px] mx-auto px-6 mb-32">
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[var(--color-navy)] mb-6 tracking-tight">
        {{ __('site.levy_grid_title') }}</h2>
      <p class="text-lg md:text-xl text-gray-600 leading-relaxed font-medium">{{ __('site.levy_grid_subtitle') }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
      
      <div
        class="group bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col h-full transform hover:-translate-y-2">
        <div class="h-60 overflow-hidden relative">
          <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&q=80&w=800"
            alt="Nature" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div
            class="absolute inset-0 bg-gradient-to-t from-[var(--color-navy)]/80 via-[var(--color-navy)]/20 to-transparent">
          </div>
          <div
            class="absolute bottom-5 left-6 h-14 w-14 bg-[var(--color-navy)]/90 backdrop-blur-md rounded-2xl flex items-center justify-center border border-[var(--color-gold)]/50 text-[var(--color-gold)] shadow-lg">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
          </div>
        </div>
        <div class="p-8 pb-10 flex-1 flex flex-col">
          <h3 class="text-2xl font-bold text-[var(--color-navy)] mb-4 tracking-tight">{{ __('site.levy_nature_title') }}
          </h3>
          <p class="text-gray-600 leading-relaxed text-base font-medium flex-1">{{ __('site.levy_nature_desc') }}</p>
        </div>
      </div>

      
      <div
        class="group bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col h-full transform hover:-translate-y-2">
        <div class="h-60 overflow-hidden relative">
          <img src="https://images.unsplash.com/photo-1518548419970-58e3b4079ab2?auto=format&fit=crop&q=80&w=800"
            alt="Culture" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div
            class="absolute inset-0 bg-gradient-to-t from-[var(--color-navy)]/80 via-[var(--color-navy)]/20 to-transparent">
          </div>
          <div
            class="absolute bottom-5 left-6 h-14 w-14 bg-[var(--color-navy)]/90 backdrop-blur-md rounded-2xl flex items-center justify-center border border-[var(--color-gold)]/50 text-[var(--color-gold)] shadow-lg">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <circle cx="12" cy="12" r="10"></circle>
              <line x1="2" y1="12" x2="22" y2="12"></line>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
            </svg>
          </div>
        </div>
        <div class="p-8 pb-10 flex-1 flex flex-col">
          <h3 class="text-2xl font-bold text-[var(--color-navy)] mb-4 tracking-tight">{{ __('site.levy_culture_title') }}
          </h3>
          <p class="text-gray-600 leading-relaxed text-base font-medium flex-1">{{ __('site.levy_culture_desc') }}</p>
        </div>
      </div>

      
      <div
        class="group bg-white rounded-[2rem] overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-2xl transition-all duration-500 border border-gray-100 flex flex-col h-full transform hover:-translate-y-2">
        <div class="h-60 overflow-hidden relative">
          <img src="https://images.unsplash.com/photo-1554481923-a6918bd997bc?auto=format&fit=crop&q=80&w=800"
            alt="Infrastructure"
            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
          <div
            class="absolute inset-0 bg-gradient-to-t from-[var(--color-navy)]/80 via-[var(--color-navy)]/20 to-transparent">
          </div>
          <div
            class="absolute bottom-5 left-6 h-14 w-14 bg-[var(--color-navy)]/90 backdrop-blur-md rounded-2xl flex items-center justify-center border border-[var(--color-gold)]/50 text-[var(--color-gold)] shadow-lg">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
              <line x1="4" y1="22" x2="4" y2="15"></line>
            </svg>
          </div>
        </div>
        <div class="p-8 pb-10 flex-1 flex flex-col">
          <h3 class="text-2xl font-bold text-[var(--color-navy)] mb-4 tracking-tight">{{ __('site.levy_infra_title') }}
          </h3>
          <p class="text-gray-600 leading-relaxed text-base font-medium flex-1">{{ __('site.levy_infra_desc') }}</p>
        </div>
      </div>
    </div>
  </section>

  
  <section class="py-24 bg-slate-50 relative z-10 border-t border-slate-200/50">
    <div class="container mx-auto px-6">
      <div class="text-center mb-16">
        <div class="inline-flex items-center gap-2 bg-[var(--color-navy)]/5 border border-[var(--color-navy)]/10 text-[var(--color-navy)] px-4 py-1.5 rounded-full text-[0.8rem] font-bold tracking-wider uppercase mb-5">
            <i class="fa-solid fa-circle-question"></i> FAQ
        </div>
        <h2 class="text-4xl sm:text-5xl font-extrabold text-[var(--color-navy)] mb-4 tracking-tight">{{ __('site.levy_faq_title') }}</h2>
        <p class="text-slate-500 font-bold text-lg">{{ __('site.levy_faq_subtitle') }}</p>
      </div>

      <div class="max-w-4xl mx-auto flex flex-col gap-4">
        @for($i = 16; $i <= 20; $i++)
        <div data-faq class="bg-white border border-slate-200 rounded-2xl overflow-hidden transition-all hover:border-[var(--color-navy)]/30 hover:shadow-lg shadow-sm group/faq">
            <button class="faq-q w-full flex items-center justify-between gap-4 px-6 py-5 text-left cursor-pointer group">
                <span class="flex items-start gap-4">
                    <span class="text-[0.85rem] font-black text-[var(--color-gold)] bg-[var(--color-gold)]/10 w-8 h-8 rounded-xl flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm">{{ $i - 15 }}</span>
                    <span class="text-base sm:text-lg font-bold text-slate-800 group-hover:text-[var(--color-navy)] transition-colors pr-4">{!! __('site.visa_faq_q' . $i) !!}</span>
                </span>
                <div class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center flex-shrink-0 group-hover:bg-blue-50 transition-colors border border-slate-100 group-hover/faq:border-blue-100">
                    <svg class="faq-chevron w-4 h-4 text-slate-400 group-hover:text-blue-600 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                </div>
            </button>
            <div class="faq-a px-6 pb-0 max-h-0 overflow-hidden transition-all duration-300">
                <div class="pb-6 text-slate-600 text-[0.95rem] leading-relaxed border-t border-slate-100 pt-5">
                    {!! __('site.visa_faq_a' . $i) !!}
                </div>
            </div>
        </div>
        @endfor
      </div>
    </div>
  </section>

@endsection