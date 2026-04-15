{{-- ─── JSON-LD Structured Data ────────────────────────── --}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "{{ url('/') }}/#organization",
      "name": "Bali E-Visa Portal",
      "url": "{{ url('/') }}",
      "logo": {
        "@type": "ImageObject",
        "@id": "{{ url('/') }}/#logo",
        "url": "{{ asset('images/logo-visa.png') }}",
        "contentUrl": "{{ asset('images/logo-visa.png') }}",
        "caption": "Bali E-Visa Portal"
      },
      "image": {
        "@id": "{{ url('/') }}/#logo"
      },
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+62895330440544",
        "contactType": "customer service",
        "availableLanguage": ["English", "Indonesian"]
      }
    },
    {
      "@type": "WebSite",
      "@id": "{{ url('/') }}/#website",
      "url": "{{ url('/') }}",
      "name": "Bali E-Visa Portal",
      "publisher": {
        "@id": "{{ url('/') }}/#organization"
      },
      "inLanguage": "{{ app()->getLocale() }}"
    }@if(trim($__env->yieldContent('structured_data'))),@yield('structured_data')@endif
  ]
}
</script>
