<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Organization",
      "@id": "{{ url('/') }}/#organization",
      "name": "Bali E-Visa Portal",
      "url": "{{ url('/') }}"
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
    }
    @hasSection('structured_data')
      ,@yield('structured_data')
    @endif
  ]
}
</script>