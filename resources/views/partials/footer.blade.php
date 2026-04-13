{{-- ═══════════════════════════════════════════ FOOTER --}}
<footer id="footer" class="bg-[var(--color-navy-dark)] text-white/65">
  {{-- Gold accent line --}}
  <div class="h-1 bg-gradient-to-r from-[var(--color-gold)] via-[var(--color-gold-dark)] to-[var(--color-gold)]"></div>

  <div class="max-w-[1200px] mx-auto px-6">
    <div class="pt-16 pb-12 border-b border-white/10">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-9 lg:gap-12">
        {{-- Brand --}}
        <div class="lg:col-span-2">
          <div class="flex items-center gap-3 mb-4">
            <img src="/images/logo-visa.png" class="w-14 h-14 object-contain" alt="Bali E Visa Logo">
            <div>
              <span class="text-base font-bold text-white block">Bali E Visa</span>
              <span class="text-[0.7rem] text-[var(--color-gold)] font-medium">{{ __('site.nav_portal') }}</span>
            </div>
          </div>
          <p class="text-sm leading-relaxed mb-6 max-w-[280px]">{{ __('site.footer_desc') }}</p>
          <div class="flex gap-4">
            <a href="https://wa.me/62895330440544" target="_blank" rel="noopener"
              class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#25D366] transition-colors">
              <svg viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path
                  d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z">
                </path>
              </svg>
            </a>
            <a href="mailto:balievisabusiness@gmail.com"
              class="w-9 h-9 bg-white/10 rounded-full flex items-center justify-center hover:bg-[var(--color-gold)] hover:text-[var(--color-navy)] transition-colors">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
            </a>
          </div>
        </div>

        {{-- Navigation --}}
        <div>
          <div class="text-[13px] font-bold text-white mb-5 uppercase tracking-wide">{{ __('site.footer_nav') }}</div>
          <ul class="flex flex-col gap-2.5 list-none">
            <li><a href="/" class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.nav_home') }}</a>
            </li>
            <li><a href="{{ route('arrival-card') }}"
                class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.nav_arrival') }}</a></li>
            <li><a href="{{ route('visa') }}"
                class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.nav_visa') }}</a></li>
            <li><a href="/bali-levy"
                class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.nav_levy') }}</a></li>
            <li><a href="{{ route('steps') }}"
                class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.nav_steps') }}</a></li>
            <li><a href="{{ route('news') }}"
                class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.nav_news') }}</a></li>
          </ul>
        </div>

        {{-- Legal --}}
        <div>
          <div class="text-[13px] font-bold text-white mb-5 uppercase tracking-wide">{{ __('site.footer_legal') }}</div>
          <ul class="flex flex-col gap-2.5 list-none">
            <li><a href="{{ route('privacy-policy') }}"
                class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.footer_privacy') }}</a>
            </li>
            <li><a href="{{ route('terms-and-conditions') }}"
                class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.footer_terms') }}</a>
            </li>
            <li><a href="{{ route('refund-policy') }}"
                class="text-[14px] text-white/60 hover:text-[var(--color-gold)] transition-colors">{{ __('site.footer_refund') }}</a>
            </li>
          </ul>
        </div>

        {{-- Contact --}}
        <div>
          <div class="text-[13px] font-bold text-white mb-5 uppercase tracking-wide">{{ __('site.footer_contact') }}
          </div>
          <div class="text-[14px] leading-relaxed flex flex-col gap-2">
            <p class="flex items-start gap-2">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                class="w-4 h-4 mt-0.5 shrink-0 text-[var(--color-gold)]">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg>
              <a href="mailto:balievisabusiness@gmail.com">balievisabusiness@gmail.com</a>
            </p>
            <p class="flex items-start gap-2">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                class="w-4 h-4 mt-0.5 shrink-0 text-[var(--color-gold)]">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
              <span>Jl. Raya Kuta No. 88, Kuta, Bali 80361, Indonesia</span>
            </p>
            <p class="flex items-start gap-2">
              <svg viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mt-0.5 shrink-0 text-[#25D366]">
                <path
                  d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
              </svg>
              <a href="https://wa.me/62895330440544" class="text-[#25D366]">+62 895-3304-40544</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="py-6 flex flex-wrap items-center justify-between gap-3">
      <span class="text-[13px]">{{ __('site.footer_copyright') }}</span>
      <div class="flex gap-5">
        <a href="{{ route('privacy-policy') }}"
          class="text-[13px] text-white/50 hover:text-[var(--color-gold)] transition-colors">{{ __('site.footer_privacy') }}</a>
        <a href="{{ route('terms-and-conditions') }}"
          class="text-[13px] text-white/50 hover:text-[var(--color-gold)] transition-colors">{{ __('site.footer_terms') }}</a>
        <a href="{{ route('refund-policy') }}"
          class="text-[13px] text-white/50 hover:text-[var(--color-gold)] transition-colors">{{ __('site.footer_refund') }}</a>
      </div>
    </div>
  </div>
</footer>