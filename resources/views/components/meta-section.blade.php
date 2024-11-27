@props(['locale', 'robots'])
<meta charset="utf-8">
{{-- Meta section --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="@lang('meta.description')">
<meta name="keywords" content="@lang('meta.keywords')">
<meta name="author" content="Palemma Academy | Ozgur Murat Tunca @ tunca.development@gmail.com">
<meta property="og:title" content="@lang('meta.og_title')">
<meta property="og:description" content="@lang('meta.og_description')">
<meta property="og:locale" content="{{$locale}}">
<meta name="robots" content="{{$robots}}">

<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('images/emma-01.webp') }}">
<meta property="og:image:alt" content="@lang('meta.og_image_alt')">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@lang('meta.og_title')">
<meta name="twitter:description" content="@lang('meta.og_description')">
<meta name="twitter:image" content="{{ asset('images/emma-01.webp') }}">
<meta name="twitter:image:alt" content="@lang('meta.og_image_alt')">
<meta name="twitter:site" content="@PalemmaAcademy">
<meta name="twitter:creator" content="@YourTwitterHandle">

<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
{{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('path/to/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('path/to/favicon-16x16.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('path/to/apple-touch-icon.png') }}">
<link rel="manifest" href="{{ asset('path/to/site.webmanifest') }}"> --}}

<meta name="theme-color" content="#ffffff">


<title>{{ $title }} | Palemma Academy</title>

<link rel="canonical" href="{{ url()->current() }}">
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

<!-- Scripts -->
<script src="https://kit.fontawesome.com/d4521e1f6c.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{--
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Palemma Academy",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('path/to/logo.png') }}",
      "sameAs": [
        "https://www.facebook.com/PalemmaAcademy",
        "https://twitter.com/PalemmaAcademy",
        "https://www.instagram.com/PalemmaAcademy"
      ]
    }
    </script>
--}}

@vite(['resources/css/app.css','resources/js/app.js'])

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LZ2ZJMLDP0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LZ2ZJMLDP0');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-T6QC54VR');</script>
<!-- End Google Tag Manager -->
