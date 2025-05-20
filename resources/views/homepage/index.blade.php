<!doctype html>
<html lang="id">
  <head>
      <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q79YS1G65F"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  
  gtag('consent', 'default', {
    'ad_user_data': 'allowed',
    'ad_personalization': 'allowed',
    'ad_storage': 'allowed',
    'analytics_storage': 'allowed',
    'wait_for_update': 200,
  });
  
  
  gtag('event', 'install', {
      app_name: 'Ternak Cuan - Your Passive Income Solution',
      version: '1.12'
    });

        
          // Track install event when user installs PWA
    window.addEventListener('appinstalled', () => {
      gtag('event', 'install', {
        event_category: 'PWA',
        event_label: 'User installed the app',
        app_name: 'Ternak Cuan - Your Passive Income Solution',
        version: '1.12'
      });
      console.log('PWA installed and tracked in analytics.');
    });

  gtag('config', 'G-Q79YS1G65F');
</script>

 <script>
//         window.dataLayer = window.dataLayer || [];
//         function gtag(){dataLayer.push(arguments);}
//         gtag('js', new Date());
//         gtag('consent', 'default', {
//             'ad_user_data': 'allowed',
//             'ad_personalization': 'allowed',
//             'ad_storage': 'allowed',
//             'analytics_storage': 'allowed',
//             'wait_for_update': 200,
//         });
//         // Trigger the install event when the page loads
//         window.onload = function() {
//             gtag('event', 'install', {
//                 app_name: 'Ternak Cuan - Your Passive Income Solution',
//                 version: '1.12'
//             });
//         };
//         gtag('config', 'G-Q79YS1G65F');
     </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo['meta_title'] }}</title>
    <meta name="description" content="{{ $seo['meta_description'] }}">
    <meta name="theme-color" content="{{ $webconfig['main_color'] }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $seo['meta_keywords'] }}">
    <meta name="author" content="{{ $seo['meta_author'] }}">
    <meta name="robots" content="{{ $seo['meta_robots'] }}">
    <link rel="canonical" href="{{ $seo['meta_canonical'] }}">
    <meta property="og:title" content="{{ $seo['og_title'] }}">
    <meta property="og:description" content="{{ $seo['og_description'] }}">
    <meta property="og:image" content="{{ url('storage/'.$seo['og_image']) }}">
    <meta property="og:url" content="{{ $seo['meta_canonical'] }}">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="{{ $seo['twitter_title'] }}">
    <meta name="twitter:description" content="{{ $seo['twitter_description'] }}">
    <meta name="twitter:image" content="{{ url('storage/'.$seo['twitter_image']) }}">
    <meta name="twitter:card" content="summary_large_image">
    <!--<meta name="twitter:site" content="{{ $seo['twitter_site'] }}">-->
    <link rel="shortcut icon" href="{{ url('storage/'.$webconfig['favicon']) }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('storage/'.$webconfig['favicon']) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('storage/'.$webconfig['favicon']) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('storage/'.$webconfig['favicon']) }}">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="{{ url('storage/'.$webconfig['favicon']) }}" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
       <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "AgricultureBusiness",
        "name": "Ternak Cuan",
        "url": "https://ternakcuan.id",
        "logo": "{{ url('storage/'.$webconfig['favicon']) }}",
        "description": "{{ $seo['og_description'] }}",
        "telephone": "+62{{$webconfig['phone']}}",
        "email": "info@ternakcuan.id",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "{{$webconfig['main_address']}}",
            "addressLocality": "Serang",
            "addressRegion": "Kota Serang",
            "postalCode": "42123",
            "addressCountry": "ID"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5",
            "bestRating": "5",
            "reviewCount": "77"
        },
        "sameAs": [
            "https://www.instagram.com/ternakcuan"
        ]
    }
    </script>

<style>
        :root {
          --maincolor: {{ $webconfig['main_color'] }};
          font-family: 'Poppins', sans-serif !important;
          scroll-behavior: smooth;
          transition: all 3s ease;
        }

        /* h2{
        } */
    </style>
  </head>
 <body>
    <div id="loading-screen" class="fixed inset-0 bg-black z-50 flex items-center justify-center">
        <img src="{{ url('storage/'.$webconfig['favicon']) }}" alt="Loading..."
            class="h-24 w-auto animate-pulse" />
    </div>

    <script>
        window.addEventListener('load', function () {
          const loader = document.getElementById('loading-screen');
          if (loader) {
            loader.style.opacity = '0';
            loader.style.transition = 'opacity 0.5s ease';
            setTimeout(() => loader.remove(), 500);
          }
        });
    </script>

    <div class="page-wrapper ">
        <!-- Header/Navigation -->
        <header class="main-header">
            <div class="container header-container">
                <div class="logo-container">
                    <a href="{{ $seo['meta_canonical'] }}" class="logo-link">
                        <img src="{{ url('storage/'.$webconfig['logo']) }}"
                            alt="{{ __('Ternak Cuan Logo') }}" width="180" height="180"
                            class="logo-image rounded-2xl" />
                        {{-- {{ $seo['meta_title'] }} --}}
                    </a>
                </div>
                <nav class="main-nav hidden md:block">
                    <a href="{{ $copywriting['CTAlink'] }}" class="btn btn-primary z-40">Jadi
                        Member</a>

                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="md:hero-section my-20" data-aos="fade-up">
            <div class="container hero-container">
            <div class="hero-content" data-aos="fade-right">
                <h1 class="hero-title">
                {{ $copywriting['headline']}}
                </h1>
                <p class="hero-subtitle py-5">
                {!! $copywriting['subheadline']!!}
                </p>

                <div class="hidden md:block">
                <a href="{{ $copywriting['CTAlink'] }}"
                    class="btn btn-primary btn-large ">{{ $copywriting['CTAButton'] }}</a>
                </div>
            </div>

            <div class="hero-background -z-20" data-aos="fade-left">
                <img src="{{ asset('asset/images/asset_1_10x_6.webp') }}" alt=""
                class="hero-bg-image" width="1225" height="1225" />
            </div>

            <div class="hero-video-container gap-5 z-10 " data-aos="zoom-in">
                @if (pathinfo($copywriting['company_video'], PATHINFO_EXTENSION) === 'mp4')
                <video src="{{ url('storage/'.$copywriting['company_video']) }}" autoplay loop
                muted playsinline controlslist="nodownload" class="hero-video"></video>

                @else
                <img src="{{ url('storage/'.$copywriting['company_video']) }}" alt="Hero Image"
                class="hero-image" />
                @endif
                <div class="md:hidden w-full mx-auto flex justify-center m-3">
                <a href="{{ $copywriting['CTAlink'] }}" class="btn btn-primary btn-large">{{
                    $copywriting['CTAButton'] }}</a>
                </div>
            </div>
            </div>
        </section>


        <!-- SUPER QUOTE BANNER -->
        <section class="linkedin-banner" >
            <div class="container"  data-aos="flip-up">
                <h2 class="text-center text-dark ">
                    {{ $webconfig['main_description'] }}
                </h2>
            </div>
        </section>



        <!-- Features Section -->
        <section class="md:features-section my-10">
            <div class="container features-container">
                <h2 class="section-title md:text-center " data-aos="fade-up">
                    Tentang Kami
                </h2>
                <span class="btn btn-primary text-2xl" data-aos="slide-up">
                    {{ $about['title'] }}
                </span>
                <div class="sm:w-full md:w-3/6 text-justify" style="font-size:13pt !important" data-aos="slide-up">
                    {{ $about['description'] }}
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section" data-aos="fade-up" hidden="true">
            <div class="container benefits-container">
            <h2 class="section-title" data-aos="zoom-in">Layanan Kemitraan <strong class="text-primary">{{
                $webconfig['title'] }}</strong></h2>
            <div class="faq-section">

                @php
                $counter = 0;
                @endphp
                @foreach ($services as $item)
                @if ($counter % 2 == 0)
                <div class="faq-column" data-aos="fade-right">
                @endif
                <div class="faq-item" data-aos="flip-up">
                    <div class="faq-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                        viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#1D1D1D"></circle>
                        <circle cx="19.9995" cy="20" r="8.88889"
                        fill="{{ $webconfig['main_color'] ?? '#75f991' }}"></circle>
                        <path d="M15.5552 19.8023L18.3835 22.9628L24.4441 17.0369"
                        stroke="#1A1C1F" stroke-width="2"></path>
                    </svg>
                    </div>
                    <div class="faq-content">
                    <h4 class="faq-title">{{ $item->icon }}{{ $item->title }}</h4>
                    <p class="faq-text" style="font-size:13pt !important">
                        {!! $item->description !!}
                    </p>
                    </div>
                </div>
                @if ($counter % 2 == 1)
                </div>
                @endif
                @php
                $counter++;
                @endphp
                @endforeach
                @if ($counter % 2 == 1)
            </div>
            @endif



            </div>
        </div>
        </section>

    <!-- Membership Section -->
    <section id="join" class="membership-section" data-aos="fade-up" data-aos-duration="1500">
        <div class="container membership-container">
            <h2 class="section-title" data-aos="zoom-in" data-aos-delay="300">
                <span class="text-primary">Meta</span> Ads
            </h2>

            <p class="sm:h-14 bold md:text-center text-start text-xl" data-aos="fade-right" data-aos-delay="500">
                🚀 Naikkan Penjualan dengan Iklan Meta Ads yang Tertarget!
            </p>
            <div class="sm:w-full md:w-4/6 md:text-center text-justify" data-aos="fade-left" data-aos-delay="700">
                Mau bisnismu tampil di depan ribuan calon pembeli di Facebook & Instagram?
                <strong class="btn-primary px-1 rounded m-1">Ternak Cuan Digital Marketing</strong> siap bantu kamu tembus pasar dengan
                <strong class="btn-primary px-1 rounded m-1">strategi Meta Ads yang terbukti menghasilkan!</strong>
            </div>
            <h2 class="text-xl" data-aos="zoom-in" data-aos-delay="900">Apa yang kamu dapatkan?</h2>
            <div class="space-y-1">
                @foreach ($benefits as $item)
                <div class="bg-zinc-900 text-white rounded-xl p-4 shadow-lg transition hover:shadow-2xl border border-zinc-700"
                    style="max-width: 475px !important;" data-aos="flip-up" data-aos-delay="{{ 1000 + $loop->index * 200 }}">
                    <button onclick="toggleAccordion(this)"
                        class="w-full flex items-center justify-between text-left">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 mt-1">
                                <svg aria-hidden="true" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg" class="feature-icon">
                                    <path
                                        d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-lg font-semibold">{{ $item->title }}</span>
                        </div>

                        <svg class="w-5 h-5 transition-transform duration-300 ease-in-out text-[{{ $webconfig['main_color'] ?? '#75f991' }}]"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        class="pl-10 mt-3 hidden text-sm text-gray-300 transition-all duration-300 ease-in-out">
                        <p>{{ $item->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <script>
                function toggleAccordion(button) {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('svg:last-of-type');

                    const isHidden = content.classList.contains('hidden');
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180', isHidden);
                }
            </script>
        </div>
    </section>

    <!-- Pricing Cards Section -->

    <section class="hidden" hidden="true">

        <div class="min-h-screen flex items-center justify-center px-5">
            <div class="max-w-sm w-full rounded-xl p-6 bg-gray-900 text-white relative shadow-2xl transition-transform transform hover:scale-105"
                style="border: 2px solid {{ $webconfig['main_color'] ?? '#75f991' }}" data-aos="zoom-in">

                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 px-4 py-1 rounded-full text-sm font-semibold"
                    style="background-color: {{ $webconfig['main_color'] ?? '#75f991' }}; color: black;">
                    PAKET MODAL
                </div>

                <h3 class="text-3xl font-extrabold mt-6 text-center">Rp. 15.000.000</h3>
                <table class="w-full mt-6">
                    <tbody>
                        <tr
                            class="text-lg border-b border-gray-700 py-3 hover:bg-gray-800 transition duration-200">
                            <td class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 inline text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </td>
                            <td>
                                <span class="font-bold">Budget Ads :</span> Rp.<span
                                    class="font-bold">700.000</span> <span class="text-gray-400">/
                                    Hari</span>
                            </td>
                        </tr>
                        <tr
                            class="text-lg border-b border-gray-700 py-3 hover:bg-gray-800 transition duration-200">
                            <td class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 inline text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </td>
                            <td>
                                <span class="font-bold">Admin :</span> <span
                                    class="font-bold">2</span> <span class="text-gray-400">User
                                </span>
                            </td>
                        </tr>
                        <tr
                            class="text-lg border-b border-gray-700 py-3 hover:bg-gray-800 transition duration-200">
                            <td class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 inline text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </td>
                            <td>
                                <span class="font-bold">Akun Ads (FB) :</span> <span
                                    class="font-bold">2</span> <span class="text-gray-400">Akun
                                    Gacor</span>
                            </td>
                        </tr>
                        <tr
                            class="text-lg border-b border-gray-700 py-3 hover:bg-gray-800 transition duration-200">
                            <td class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 inline text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </td>
                            <td>
                                <span class="font-bold">Minimal Saldo :</span> Rp.<span
                                    class="font-bold">4.000.000</span>
                            </td>
                        </tr>
                        <tr
                            class="text-lg border-b border-gray-700 py-3 hover:bg-gray-800 transition duration-200">
                            <td class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 inline text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </td>
                            <td>
                                <span class="font-bold">Support Team :</span> <span
                                    class="font-bold">CS Prioritas</span>
                            </td>
                        </tr>
                        <tr
                            class="text-lg border-b border-gray-700 py-3 hover:bg-gray-800 transition duration-200">
                            <td class="pr-2">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 inline text-primary" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </td>
                            <td>
                                <span class="font-bold">Valuasi :</span> Rp.<span
                                    class="font-bold">100.000.000</span> <span
                                    class="text-gray-400">/ bulan</span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <a href="#form-join"
                    class="block text-white font-bold py-3 px-8 rounded-lg mt-6 text-center hover:opacity-90 transition duration-300"
                    style="background-color: {{ $webconfig['main_color'] ?? '#75f991' }}; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);">
                    {{ $copywriting['CTAButton'] }}
                </a>

            </div>
        </div>

    </section>






    <!-- Quote Section -->

    @foreach ($quotes as $quote)
    <div class="bg-gray-800 bg-opacity-40 text-white py-5 my-10" data-aos="fade-up">
        <div class="container mx-auto px-4">
            @if ($quote->quoted_by != 'hadis')
            <div
                class="flex flex-col md:flex-row items-center justify-center gap-6 filter grayscale"
                data-aos="fade-right">
                {{-- Gambar --}}
                @if ($quote->image)
                <div class="w-full md:w-1/2 flex justify-center" data-aos="zoom-in">
                    <img src="{{ url('storage/' . $quote->image) }}" alt="{{ $quote->quoted_by }}"
                        class="max-w-xs md:max-w-md rounded shadow-lg">
                </div>
                @endif

                {{-- Konten Kutipan --}}
                <div class="w-full md:w-1/2" data-aos="fade-left">
                    <blockquote class="italic text-lg md:text-xl leading-relaxed mb-4">
                        &ldquo;{{ $quote->quote }}&rdquo;
                    </blockquote>
                    <p class="font-semibold">{{ $quote->quoted_by }}</p>
                </div>
            </div>
            @else
            {{-- Tampilan khusus untuk hadis --}}
            <div class="text-center max-w-2xl mx-auto" data-aos="zoom-in">
                <blockquote class="italic text-lg md:text-xl leading-relaxed mb-4">
                    &ldquo;{{ $quote->quote }}&rdquo;
                </blockquote>
                <p class="font-semibold">{{ ucfirst($quote->quoted_by) }}</p>
            </div>
            @endif
        </div>
    </div>
    @endforeach



    <!-- Testimonials Section -->
    <section class="testimonials-section container">
        <h2 class="section-title text-center text-xl my-5">
            {{-- Tentang Kami --}}
            Apa Kata <span class="text-primary">Peternak Cuan</span>
        </h2>
        {{-- <strong class="testimonial-title md:text-center md:text-2xl text-xl bold">
        </strong> --}}
        <div class="swiper-container overflow-hidden">
            <div class="swiper-wrapper">
                @foreach ($testimonies as $testimonial)
                <div class="swiper-slide ">
                    <div class="rounded-lg shadow-md p-6 h-96 bg-gray-800 bg-opacity-40">
                        <img src="{{ $testimonial->image ? url('storage/'.$testimonial->image) : 'https://via.placeholder.com/800x200' }}"
                            alt="Testimonial" class="w-full h-44 object-cover rounded-t-lg">
                        <p class="mt-6 ">{{ $testimonial->quote }}</p>
                        <div class="mt-4 flex justify-start items-center">
                            <p class="font-bold">{{ $testimonial->quoted_by }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            {{-- <div class="swiper-pagination"></div> --}}
            <!-- Add Navigation -->
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> --}}
        </div>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            var swiper = new Swiper('.swiper-container', {
              slidesPerView: 'auto',
              spaceBetween: 20,
              loop: true,
              autoplay: {
            delay: 3000, // Set delay for automatic sliding (in milliseconds)
            disableOnInteraction: false, // Keep autoplay running even after user interaction
              },
              pagination: {
            el: '.swiper-pagination',
            clickable: true,
              },
              breakpoints: {
            1024: {
              slidesPerView: 3,
            },
            768: {
              slidesPerView: 2,
            },
            640: {
              slidesPerView: 1,
            },
            320: {
              slidesPerView: 1,
            },
              },
            });
          });
        </script>
    </section>

    <section class="container md:w-3/5 w-full p-6 rounded-lg shadow-md mt-10 md:mt-60"
        id="form-join">
        <h2
            class="mailer-title md:text-2xl text-xl font-bold text-white tracking-wide leading-tight bg-clip-text">
            Yuk, Mulai <strong class="btn-primary rounded px-2 animate-pulse ">Ternak Cuan</strong> Hari Ini!</h2>
        <p class="mailer-text text-gray-400 my-4">Hubungi tim kami untuk pertanyaan, kerjasama, atau
            sekadar ngobrol santai soal digital marketing.</p>
        @if (session('success'))
        <div class="alert alert-success my-5">
            <strong>{{ session('success') }}</strong>
        </div>
        @else
        <form action="{{ route('send.wa') }}" method="POST" id="form-wa"
            onsubmit="document.getElementById('btn-submit').style.display = 'none'; document.getElementById('loading').style.display = 'block'">
            @csrf
            <div class="form-group mb-6">
                <label for="name" class="block text-white text-sm font-bold mb-2">Nama</label>
                <input type="text" name="name" id="name"
                    class="form-control block w-full px-4 py-2 text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}" required>
                @error('name')
                <span class="text-red-500 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group mb-6">
                <label for="email" class="block text-white text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" id="email"
                    class="form-control block w-full px-4 py-2 text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}" required>
                @error('email')
                <span class="text-red-500 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group mb-6">
                <label for="message" class="block text-white text-sm font-bold mb-2">Pesan</label>
                <textarea name="message" id="message"
                    class="form-control block w-full px-4 py-2 text-gray-700 bg-gray-100 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 @error('message') border-red-500 @enderror"
                    required>{{ old('message') }}</textarea>
                @error('message')
                <span class="text-red-500 text-sm" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit"
                class="btn btn-primary  inline-flex items-center px-4 py-2 bg-primary-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:ring-primary active:bg-primary-700 transition ease-in-out duration-150"
                id="btn-submit">
                Kirim Pesan
            </button>
            <div id="loading" style="display: none">
                <svg class="animate-spin h-5 w-5 text-primary-600"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
            </div>
        </form>
        @endif
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div
            class="flex flex-col justify-center md:flex-row md:items-center md:justify-between md:container md:w-10/12 md:p-20 p-5 sm:w-full mx-auto">

            <div class="gap-5 py-10">
                <h3 class="footer-title">{{ $webconfig['main_title'] }}</h3>
                <p class="footer-address my-5">
                    {{$webconfig['main_address']}}
                </p>
                <p class="footer-cs text-sm font-medium leading-5 text-white/85">CS : <a
                        href="mailto:{{ $webconfig['email'] }}">{{ $webconfig['email'] }}</a></p>
                <div class="md:footer-social my-5 flex sm:flex-col md:flex-row gap-5">
                    <p class="social-title">Ikuti Kami :</p>

                    @if (!is_null($webconfig['facebook']))
                    <a href="https://www.facebook.com/{{ $webconfig['facebook'] }}" target="_blank"
                        rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="{{ $webconfig['main_color'] }}"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-facebook">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path
                                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-3V7a1 1 0 0 1 1-1h3z">
                            </path>
                        </svg>
                    </a>
                    @endif
                    @if (!is_null($webconfig['instagram']))
                    <a href="https://www.instagram.com/{{ $webconfig['instagram'] }}"
                        target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="{{ $webconfig['main_color'] }}"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-instagram">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    @endif
                    @if (!is_null($webconfig['twitter']))
                    <a href="https://www.twitter.com/{{ $webconfig['twitter'] }}" target="_blank"
                        rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="{{ $webconfig['main_color'] }}"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-twitter">
                            <path
                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-1.25A4.38 4.38 0 0 0 23 3z">
                            </path>
                        </svg>
                    </a>
                    @endif
                    @if (!is_null($webconfig['linkedin']))
                    <a href="https://www.linkedin.com/in/{{ $webconfig['linkedin'] }}"
                        target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="{{ $webconfig['main_color'] }}"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-linkedin">
                            <rect x="4.3" y="3.3" width="3" height="12"></rect>
                            <line x1="8" y1="3.3" x2="19" y2="3.3"></line>
                            <line x1="8" y1="9.3" x2="19" y2="9.3"></line>
                            <line x1="8" y1="15.3" x2="10.3" y2="15.3"></line>
                            <line x1="12" y1="3.3" x2="12" y2="21.3"></line>
                        </svg>
                    </a>
                    @endif
                    @if (!is_null($webconfig['youtube']))
                    <a href="https://www.youtube.com/channel/{{ $webconfig['youtube'] }}"
                        target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="{{ $webconfig['main_color'] }}"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-youtube">
                            <rect x="3" y="3" width="18" height="18" rx="4" ry="4"></rect>
                            <path d="M15 3h6v18H15zM10 8.25L6 12.25l4 4V8.25zM16 8.25l-4 4V8.25z">
                            </path>
                        </svg>
                    </a>
                    @endif


                </div>
            </div>

            <div class="md:gap-5">
                <h3 class="footer-title">Bantuan & Panduan</h3>
                <p class="text-sm font-medium leading-5 text-white/85 my-2"> <button
                        data-modal-target="modal-syarat"
                        class="text-sm font-medium text-white/85 hover:underline">
                        Syarat & Ketentuan
                    </button></p>
                <p class="text-sm font-medium leading-5 text-white/85 my-2"><button
                        data-modal-target="modal-privasi"
                        class="text-sm font-medium text-white/85 hover:underline">
                        Kebijakan Privasi
                    </button></p>
            </div>

            <!-- Modal: Syarat & Ketentuan -->
            <div id="modal-syarat"
                class="hidden fixed inset-0 bg-black/60 flex items-center justify-center z-50">
                <div class="bg-white text-black w-full max-w-2xl rounded-xl shadow-lg p-6 relative">
                    <button
                        class="absolute top-3 right-4 text-gray-600 hover:text-black text-xl font-bold"
                        onclick="closeModal('modal-syarat')">×</button>
                    <h2 class="text-xl font-semibold mb-4">Syarat & Ketentuan</h2>
                    <div class="max-h-[60vh] overflow-y-auto space-y-3">
                        {{-- Ganti konten ini --}}
                        <p>Syarat dan ketentuan akan di tuliskan disini...</p>
                    </div>
                </div>
            </div>

            <!-- Modal: Kebijakan Privasi -->
            <div id="modal-privasi"
                class="hidden fixed inset-0 bg-black/60 flex items-center justify-center z-50">
                <div class="bg-white text-black w-full max-w-2xl rounded-xl shadow-lg p-6 relative">
                    <button
                        class="absolute top-3 right-4 text-gray-600 hover:text-black text-xl font-bold"
                        onclick="closeModal('modal-privasi')">×</button>
                    <h2 class="text-xl font-semibold mb-4">Kebijakan Privasi</h2>
                    <div class="max-h-[60vh] overflow-y-auto space-y-3">
                        {{-- Ganti konten ini --}}
                        <p>Privasi Anda penting bagi kami. Berikut adalah detail kebijakan privasi
                            kami...</p>
                    </div>
                </div>
            </div>
            <script>
                // Buka modal
    document.querySelectorAll('[data-modal-target]').forEach(btn => {
      btn.addEventListener('click', () => {
        const target = btn.getAttribute('data-modal-target');
        document.getElementById(target).classList.remove('hidden');
      });
    });

    // Tutup modal
    function closeModal(id) {
      document.getElementById(id).classList.add('hidden');
    }

    // Tutup modal jika klik di luar konten
    document.addEventListener('click', function (e) {
      const modals = document.querySelectorAll('[id^="modal-"]');
      modals.forEach(modal => {
        if (!modal.classList.contains('hidden') && e.target === modal) {
          modal.classList.add('hidden');
        }
      });
    });
            </script>


        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-divider"></div>
                <div class="footer-copyright">
                    <img src="{{ url('storage/'.$webconfig['logo']) }}"
                        alt="{{ $webconfig['title'] }}" class="footer-logo" width="196"
                        height="18" />
                    <p class="copyright-text">© {{ date('Y') }} PT. {{ $webconfig['main_title'] }}
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </div>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // durasi animasi
    once: false      // hanya sekali animasi
  });
</script>
</body>

</html>
