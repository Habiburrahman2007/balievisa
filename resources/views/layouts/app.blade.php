<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  @yield('preload')
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5">

  <title>@yield('title', __('site.nav_portal') . ' | ' . __('site.nav_portal_sub'))</title>
  <meta name="description" content="@yield('meta_description', __('site.hero_subtitle'))">
  <meta name="keywords"
    content="@yield('meta_keywords', 'Indonesia e-Visa on Arrival, e-VOA, Apply Visa for Bali, Bali Tourist Levy, Fast Bali Visa Service, Bali Visa Consultation, Indonesia Arrival Card, Indonesia Custom Declaration, e-CD, Bali Immigration Rules')">
  <link rel="canonical" href="{{ url()->current() }}{{ request()->has('lang') ? '?lang=' . request()->query('lang') : '' }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://www.googletagmanager.com">
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ request()->fullUrl() }}">
  <meta property="og:title" content="@yield('title', __('site.nav_portal'))">
  <meta property="og:description" content="@yield('meta_description', __('site.hero_subtitle'))">
  <meta property="og:image" content="{{ asset('images/bali_preview_website.jpg') }}">

  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="{{ request()->fullUrl() }}">
  <meta property="twitter:title" content="@yield('title', __('site.nav_portal'))">
  <meta property="twitter:description" content="@yield('meta_description', __('site.hero_subtitle'))">
  <meta property="twitter:image" content="{{ asset('images/bali_preview_website.jpg') }}">

  <link rel="alternate" hreflang="en" href="{{ url()->current() }}?lang=en">
  <link rel="alternate" hreflang="zh" href="{{ url()->current() }}?lang=zh">
  <link rel="alternate" hreflang="es" href="{{ url()->current() }}?lang=es">
  <link rel="alternate" hreflang="ar" href="{{ url()->current() }}?lang=ar">
  <link rel="alternate" hreflang="hi" href="{{ url()->current() }}?lang=hi">
  <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">

  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap">
  </noscript>

  @vite(['resources/css/app.css'])

  
  <style>
    /* ── Font-swap CLS prevention: size-adjusted fallbacks ──────────────
       These @font-face rules make system-ui/Arial match Inter/Roboto metrics
       so that when the web font swaps in, zero layout shift occurs.
       size-adjust compensates for x-height differences between font families. */
    @font-face {
      font-family: 'Inter';
      src: local('Inter');
      font-weight: 100 900;
      font-display: optional;
    }
    @font-face {
      font-family: 'Inter-fallback';
      src: local('Arial'), local('Helvetica Neue'), local('system-ui');
      size-adjust: 100%;
      ascent-override: 90%;
      descent-override: 22%;
      line-gap-override: 0%;
    }
    @font-face {
      font-family: 'Roboto';
      src: local('Roboto');
      font-weight: 100 900;
      font-display: optional;
    }
    @font-face {
      font-family: 'Roboto-fallback';
      src: local('Arial'), local('Helvetica Neue'), local('system-ui');
      size-adjust: 100%;
      ascent-override: 92%;
      descent-override: 24%;
      line-gap-override: 0%;
    }

    /* Hero section critical styles — prevents 3s+ LCP render delay */
    #hero {
      position: relative;
      min-height: 85vh;
      display: flex;
      align-items: center;
      overflow: hidden;
      background-color: #002B5B;
    }
    #hero-img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }
    #hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom right, rgba(0,43,91,0.90), rgba(0,43,91,0.80), rgba(0,27,61,0.90));
    }
    /* Prevent layout shift on navbar */
    #main-navbar { min-height: 68px; contain: layout style; }
    /* Prevent FOUT flash while fonts async-load — use adjusted fallback */
    body { font-family: Inter, Inter-fallback, Roboto, Roboto-fallback, system-ui, sans-serif; }
    /* Navbar scrolled state (critical) */
    #main-navbar.scrolled { background:#fff; box-shadow:0 4px 24px rgba(0,43,91,.12); }
    /* content-visibility: skip layout/paint of off-screen sections on mobile.
       contain-intrinsic-size provides a height placeholder so scrollbar stays stable.
       Only apply to below-fold sections — hero is excluded (it's above fold). */
    .cv-auto { content-visibility: auto; contain-intrinsic-size: 0 600px; }
    footer.cv-auto { contain-intrinsic-size: 0 300px; }
    /* NOTE: goldPulse, reveal, animate-pulse rules live in welcome.css — no duplication here */
  </style>

  
  @if(!request()->is('/'))
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous" referrerpolicy="no-referrer">
  @endif
  <style>
    /* Prevent icon flash (FA SVG approach) */
    .fa-svg-icon { height: 1em; width: auto; display: inline-block; vertical-align: -0.125em; }
  </style>

  
  <link rel="preload" as="style" href="/css/welcome.css">
  <link rel="stylesheet" href="/css/welcome.css" media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="/css/welcome.css">
  </noscript>
  <!-- Favicon for Google Search and standard browsers -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('images/favicon-48.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon-192.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('images/logo-visa.png') }}">
  <meta name="google-site-verification" content="v3a4GIxrzeL_-CREGIxh637YuJXf8SUANTbLrCCQ45c" />

  
  @yield('head_extra')

  <!-- Google tag (gtag.js) - Optimized: Load on interaction or 4s delay -->
  <script>
    (function() {
      var gtmLoaded = false;
      function loadGTM() {
        if (gtmLoaded) return;
        gtmLoaded = true;
        var s = document.createElement('script');
        s.async = true;
        s.src = 'https://www.googletagmanager.com/gtag/js?id=G-W9S0JHC6XS';
        document.head.appendChild(s);
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-W9S0JHC6XS');
      }
      
      // Load after 4 seconds if no interaction
      var gtmTimeout = setTimeout(loadGTM, 4000);
      
      // Load on interaction
      ['mousemove', 'scroll', 'touchstart', 'keydown'].forEach(function(event) {
        window.addEventListener(event, function() {
          clearTimeout(gtmTimeout);
          loadGTM();
        }, { once: true, passive: true });
      });
    })();
  </script>

  <!-- Structured Data: Organization Logo -->
  <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Organization",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logo-visa.png') }}"
    }
  </script>
  
  <!-- Alpine JS (pinned version for reliability) - loaded after page scripts to reduce forced reflow -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js"></script>
  
  <!-- Welcome JS (deferred) - Dipindahkan ke head agar didownload lebih awal -->
  <script defer src="/js/welcome.js"></script>
</head>

<body class="font-sans bg-[var(--color-bg)] text-slate-900 leading-relaxed antialiased">

  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  
  <button id="back-to-top"
    class="fixed bottom-6 right-6 z-[9999] w-12 h-12 rounded-full bg-[var(--color-navy)] text-white border-2 border-[var(--color-gold)] flex items-center justify-center cursor-pointer shadow-[0_4px_20px_rgba(0,43,91,0.3)] transition-all hover:scale-110 hover:shadow-[0_6px_28px_rgba(0,43,91,0.4)] opacity-0 pointer-events-none"
    aria-label="Back to top" title="Back to top">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
      stroke-linecap="round" stroke-linejoin="round">
      <polyline points="18 15 12 9 6 15" />
    </svg>
  </button>

  <a href="https://wa.me/62895330440544" target="_blank" rel="noopener noreferrer"
    class="fixed bottom-6 left-6 z-[9999] w-12 h-12 rounded-full bg-[var(--color-navy)] text-white border-2 border-[var(--color-gold)] flex items-center justify-center cursor-pointer shadow-[0_4px_20px_rgba(0,43,91,0.3)] transition-all hover:scale-110 hover:shadow-[0_6px_28px_rgba(0,43,91,0.4)]"
    aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z">
      </path>
    </svg>
  </a>
</body>

</html>