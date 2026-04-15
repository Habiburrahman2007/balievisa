@extends('layouts.app')

@section('title', 'Bali E-Visa FAQ | Frequently Asked Questions about Immigration')
@section('meta_description', 'Find answers to common questions about Indonesia e-Visa on Arrival, Bali Tourist Levy, and Arrival Card requirements.')
@section('meta_keywords', 'Bali E-Visa FAQ, Indonesia Visa Questions, Bali Immigration Help, Visa on Arrival Bali Questions, Bali E-Visa Assistance')

@section('structured_data')
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long does the arrival process take in Bali?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Without preparation: Immigration: 2–3 hours, Baggage: 30–60 minutes, Customs: 30–60 minutes. Total: 3–5 hours after landing."
      }
    },
    {
      "@type": "Question",
      "name": "Can I really avoid long queues?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, with proper preparation (eVOA + forms completed), you can significantly reduce waiting time."
      }
    },
    {
      "@type": "Question",
      "name": "Why should I use your service instead of doing it myself?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Because small mistakes can cost hours at the airport. We ensure: Everything is done correctly, No confusion, Faster arrival experience, Peace of mind before travel."
      }
    }
  ]
}
@endsection

@section('content')
  {{-- ═══════════════════════════════════════════ FAQ HERO ═══ --}}
  <section class="relative bg-gradient-to-br from-[var(--color-navy)] via-[var(--color-navy-light)] to-[var(--color-navy)] py-20 overflow-hidden">
    <div class="absolute inset-0 bg-[url('/img/hero-bali.png')] bg-center bg-cover opacity-5"></div>
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle at 80% 20%, rgba(255,193,7,0.2) 0%, transparent 50%);"></div>
    <div class="max-w-[1200px] mx-auto px-6 relative z-10 text-center">
      <div class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white/90 px-4 py-1.5 rounded-full text-[0.8rem] font-semibold tracking-wider uppercase mb-5">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
        {{ __('site.faq_badge') }}
      </div>
      <h1 class="text-[clamp(2rem,4vw,3rem)] font-extrabold text-white mb-4">{{ __('site.faq_title') }}</h1>
      <p class="text-white/70 text-[1.05rem] max-w-[560px] mx-auto leading-relaxed">{{ __('site.faq_subtitle') }}</p>
    </div>
  </section>

  {{-- ═══════════════════════════════════════════ FAQ CONTENT ═══ --}}
  <section class="py-16 bg-[var(--color-bg)]">
    <div class="max-w-[1200px] mx-auto px-6">

      @php
        $categories = [
          ['key' => 'airport', 'icon' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>', 'items' => [21,22]],
          ['key' => 'service', 'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>', 'items' => [23,24,25,26,27]],
          ['key' => 'trigger', 'icon' => '<path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/>', 'items' => [28]],
        ];
      @endphp

      @foreach($categories as $ci => $cat)
        <div class="mb-10 reveal {{ $ci > 0 ? 'reveal-delay-1' : '' }}">
          {{-- Category Header --}}
          <div class="flex items-center gap-3 mb-5">
            <div class="w-10 h-10 bg-[var(--color-navy)]/10 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-navy)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">{!! $cat['icon'] !!}</svg>
            </div>
            <h2 class="text-lg font-bold text-[var(--color-navy)]">{{ __('site.faq_cat_' . $cat['key']) }}</h2>
          </div>

          {{-- Accordion Items --}}
          <div class="flex flex-col gap-3">
            @foreach($cat['items'] as $num)
              <div data-faq class="bg-white border border-slate-200 rounded-xl overflow-hidden transition-all hover:border-[var(--color-navy)]/20 shadow-sm hover:shadow-md">
                <button class="faq-q w-full flex items-center justify-between gap-4 px-6 py-4 text-left cursor-pointer group">
                  <span class="flex items-center gap-3">
                    <span class="text-[0.78rem] font-bold text-[var(--color-gold)] bg-[var(--color-gold)]/10 w-7 h-7 rounded-lg flex items-center justify-center flex-shrink-0">{{ $num }}</span>
                    <span class="text-[0.93rem] font-semibold text-[var(--color-navy)] group-hover:text-[var(--color-navy-light)] transition-colors">{{ __('site.faq_q' . $num) }}</span>
                  </span>
                  <svg class="faq-chevron w-5 h-5 text-slate-600 flex-shrink-0 transition-transform duration-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                </button>
                <div class="faq-a px-6 pb-0 max-h-0 overflow-hidden transition-all duration-300">
                  <div class="pb-5 text-slate-600 text-[0.875rem] leading-relaxed border-t border-slate-100 pt-4">{!! __('site.faq_a' . $num) !!}</div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      @endforeach

      {{-- Contact CTA --}}
      <div class="bg-gradient-to-r from-[var(--color-navy)] to-[var(--color-navy-light)] rounded-2xl p-8 text-center mt-6 reveal">
        <h3 class="text-xl font-bold text-white mb-3">{{ __('site.faq_cta_title') }}</h3>
        <p class="text-white/80 text-[0.9rem] mb-6 max-w-[400px] mx-auto">{{ __('site.faq_cta_desc') }}</p>
        <a href="https://wa.me/62895330440544" target="_blank"
          class="inline-flex items-center gap-2.5 bg-[var(--color-gold)] text-[var(--color-navy)] font-bold px-7 py-3.5 rounded-full transition-all hover:-translate-y-0.5 shadow-[0_8px_24px_rgba(255,193,7,0.35)] hover:shadow-[0_12px_32px_rgba(255,193,7,0.5)]">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          {{ __('site.faq_cta_btn') }}
        </a>
      </div>

    </div>
  </section>
@endsection
