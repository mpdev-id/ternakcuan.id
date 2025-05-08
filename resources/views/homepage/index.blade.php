<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $webconfig['meta_maincolor'] }} {{ $seo['meta_title'] }}</title>
    <meta name="description" content="{{ $seo['meta_description'] }}">
    <meta name="keywords" content="{{ $seo['meta_keywords'] }}">
    <meta name="author" content="{{ $seo['meta_author'] }}">
    <meta name="robots" content="{{ $seo['meta_robots'] }}">
    <link rel="canonical" href="{{ $seo['meta_canonical'] }}">
    <meta property="og:title" content="{{ $seo['og_title'] }}">
    <meta property="og:description" content="{{ $seo['og_description'] }}">
    <meta property="og:image" content="{{ url('storage/'.$seo['og_image']) }}">
    <meta name="twitter:title" content="{{ $seo['twitter_title'] }}">
    <meta name="twitter:description" content="{{ $seo['twitter_description'] }}">
    <meta name="twitter:image" content="{{ $seo['twitter_image'] }}">
    <link rel="shortcut icon" href="{{ url('storage/'.$webconfig['favicon']) }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ url('storage/'.$webconfig['favicon']) }}">
    <link rel="stylesheet" href="styles.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="{{ url('storage/'.$webconfig['favicon']) }}" type="image/x-icon">
<style>
        :root {
          --maincolor: {{ $webconfig['main_color'] }};
          font-family: 'Poppins', sans-serif; !important
        }

        /* h2{
        } */
    </style>
  </head>
  <body >
    <div class="page-wrapper ">
      <!-- Header/Navigation -->
      <header class="main-header">
        <div class="container header-container">
          <div class="logo-container">
            <a href="{{ $seo['meta_canonical'] }}" class="logo-link">
              <img
                src="{{ url('storage/'.$webconfig['logo']) }}"
                alt="Ternak Cuan Logo"
                width="180"
                height="180"
                class="logo-image rounded-xl"
              />
              {{-- {{ $seo['meta_title'] }} --}}
            </a>
          </div>
          <nav class="main-nav">
            <a href="https://ternakuang.id/#pricing" class="btn btn-primary"
              >Jadi Member</a
            >
            {{-- <a href="https://ternakuang.id/#" class="btn btn-outline">Login</a> --}}
          </nav>
        </div>
      </header>

      <!-- Hero Section -->
      <section class="hero-section">
        <div class="container hero-container">
          <div class="hero-content">
            <h1 class="hero-title">
                {{ $copywriting['headline']}}
            </h1>
            <p class="hero-subtitle">
                {{ $copywriting['subheadline']}}
            </p>
            <a
              href="{{ $copywriting['CTALink']}}"
              class="btn btn-primary btn-large"
              >{{ $copywriting['CTAButton'] }}</a
            >
          </div>

          <div class="hero-background">
            <img
              src="{{ asset('asset/images/asset_1_10x_6.webp') }}"
              alt=""
              class="hero-bg-image"
              width="1225"
              height="1225"
            />
          </div>

          <div class="hero-video-container">
            @if (pathinfo($copywriting['company_video'], PATHINFO_EXTENSION) === 'mp4')
              <video
                src="{{ $copywriting['company_video'] }}"
                autoplay
                loop
                muted
                playsinline
                controlslist="nodownload"
                class="hero-video"
              ></video>
            @else
              <img
                src="{{ $copywriting['company_video'] }}"
                alt="Hero Image"
                class="hero-image"
              />
            @endif
          </div>
        </div>
      </section>

      <!-- Partners Section -->

      <section class="container">
        <div class="flex flex-col items-center justify-center gap-5">
          <div class="flex gap-8">
           @foreach ($partners->where('type', 'agregator') as $agregator)

           <img
           src="{{ asset('storage/'.$agregator['logo']) }}"
           alt="{{ $agregator['name'] }} logo"
           class="w-16 object-contain"
           />
           @endforeach
          </div>

          <div class="flex gap-8">
            @foreach ($partners->where('type', 'ekspedisi') as $ekspedisi)

            <img
            src="{{ asset('storage/'.$ekspedisi['logo']) }}"
            alt="{{ $ekspedisi['name'] }} logo"
            class="w-20 object-contain"
            />
            @endforeach
          </div>

        </div>
      </section>

      <!-- SUPER QUOTE BANNER -->
      <section class="linkedin-banner mt-5">
        <div class="container">
          <h2 class="text-center text-dark uppercase">
            {{ $webconfig['main_description'] }}
          </h2>
        </div>
      </section>



      <!-- Features Section -->
      <section class="features-section">
        <div class="container features-container">
          <h2 class="section-title">
            Tentang Kami
          </h2>
          <p class="about-subtitle">
           {{ $about['title'] }}
          </p>
          <div class="sm:w-full md:w-3/6 text-justify">
            {{ $about['description']  }}
          </div>
        </div>
      </section>

      <!-- Benefits Section -->
      <section class="benefits-section">
        <div class="container benefits-container">
          <h2 class="section-title" >Layanan {{ $webconfig['title'] }}</h2>
{{--
          <div class="benefits-cards">
            <div class="benefit-card">
              <div class="benefit-card-image-container">
                <img
                  src="https://ternakuang.id/wp-content/uploads/2024/12/frame1.webp"
                  alt="Analisa Saham"
                  class="benefit-card-image"
                  width="1384"
                  height="1342"
                />
              </div>
              <div class="benefit-card-content">
                <h3 class="benefit-card-title">Analisa Saham Dengan mudah</h3>
                <p class="benefit-card-description">
                  Kamu akan diajarin bagaimana analisa sebuah saham untuk tau
                  apakah saham itu bagus atau buruk untuk investasi
                </p>
              </div>
            </div>

            <div class="benefit-card">
              <div class="benefit-card-image-container">
                <img
                  src="https://ternakuang.id/wp-content/uploads/2024/12/frame2.webp"
                  alt="Profit dengan target"
                  class="benefit-card-image"
                  width="410"
                  height="324"
                />
              </div>
              <div class="benefit-card-content">
                <h3 class="benefit-card-title">
                  Profit dengan target buy & sell
                </h3>
                <p class="benefit-card-description">
                  Sampai kamu bisa praktek untuk meraup profit sendiri dengan
                  beli jual saham dengan profit hingga 2x - 3x
                </p>
              </div>
            </div>
          </div> --}}

          <div class="faq-section">

            @php
              $counter = 0;
            @endphp
            @foreach ($services as $item)
              @if ($counter % 2 == 0)
                <div class="faq-column">
              @endif
                <div class="faq-item">
                  <div class="faq-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="40"
                      height="40"
                      viewBox="0 0 40 40"
                      fill="none"
                    >
                      <circle cx="20" cy="20" r="20" fill="#1D1D1D"></circle>
                      <circle
                        cx="19.9995"
                        cy="20"
                        r="8.88889"
                        fill="{{ $webconfig['main_color'] ?? '#75f991' }}"
                      ></circle>
                      <path
                        d="M15.5552 19.8023L18.3835 22.9628L24.4441 17.0369"
                        stroke="#1A1C1F"
                        stroke-width="2"
                      ></path>
                    </svg>
                  </div>
                  <div class="faq-content">
                    <h4 class="faq-title">{{ $item->icon }}{{ $item->title }}</h4>
                    <p class="faq-text">
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
   <section id="pricing" class="membership-section">
        <div class="container membership-container">
            {{-- <div class="membership-background-left">
                <img src="{{ asset('asset/images/asset_1_10x_6.webp') }}" alt=""
                    class="membership-bg-image" width="1725" height="1225" />
            </div>
            <div class="membership-background-right">
                <img src="{{ asset('asset/images/asset_1_10x_6.webp') }}" alt=""
                    class="membership-bg-image" width="1225" height="1225" />
            </div> --}}

            <h2 class="membership-title">
                <span>Meta Ads</span>
                {{-- <span class="bold">
                    <img class="w-24" src="{{ asset('storage/'.$webconfig['logo']) }}" alt=""
                        srcset="{{ asset('storage/'.$webconfig['logo']) }}">
                </span> --}}
            </h2>


            <p class="h-10 bold text-center text-xl">
                🚀 Naikkan Penjualan dengan Iklan Meta Ads yang Tertarget!
            </p>
            <div class="sm:w-full md:w-3/6 text-justify">
                Mau bisnismu tampil di depan ribuan calon pembeli di Facebook & Instagram?
                <strong>Ternak Cuan Digital Marketing</strong> siap bantu kamu tembus pasar dengan
                <strong>strategi Meta Ads yang terbukti menghasilkan!</strong>
            </div>
            <h2 class="text-2xl">Apa yang kamu dapatkan?</h2>



                <div class="space-y-2">
                    @foreach ($benefits as $item)
                        <div class="bg-zinc-900 text-white rounded-xl p-4 shadow-lg transition hover:shadow-2xl border border-zinc-700">
                            <button onclick="toggleAccordion(this)" class="w-full flex items-center justify-between text-left">
                                <div class="flex items-start gap-4">
                                    <div class="flex-shrink-0 mt-1">
                                        <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                                        class="feature-icon">
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
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div class="mt-3 hidden text-sm text-gray-300 transition-all duration-300 ease-in-out">
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



        </div>
    </section>

      <!-- Pricing Cards Section -->

      <section class="">

        <div class="min-h-screen bg-black flex items-center justify-center px-4">
            <div class="max-w-sm w-full rounded-xl p-6 bg-black text-white relative text-center"
                 style="border: 2px solid {{ $webconfig['main_color'] ?? '#75f991' }}">

              <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 px-4 py-1 rounded-full text-sm font-semibold"
                   style="background-color: {{ $webconfig['main_color'] ?? '#75f991' }}; color: black;">
                Best Value
              </div>

              <h3 class="text-3xl font-extrabold mt-6">12 Bulan</h3>
              <p class="text-xl">
                Rp <span class="font-bold">125.000</span><span class="text-gray-400">/bulan</span>
              </p>
              <p class="mt-2 font-bold text-xl"
                 style="color: {{ $webconfig['main_color'] ?? '#75f991' }}">
                 Hemat<br>Rp 1.224.000,-
              </p>

              <button class="text-black font-bold py-2 px-6 rounded-lg mt-6 hover:opacity-90"
                      style="background-color: {{ $webconfig['main_color'] ?? '#75f991' }}">
                Jadi Member
              </button>

              <p class="text-sm text-gray-400 mt-4 flex items-center justify-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3 -3v6m9-9a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Punya Kode Promo?
              </p>
              <p class="text-xs text-gray-400 mt-2">*Pembayaran langsung<br>12 bulan di depan</p>
            </div>
          </div>




      </section>

      <!-- Quote Section -->

      @foreach ($quotes as $quote)
            <div class="{{ $quote->quoted_by !='hadis'?'quote-section':'text-center'}}">
                <div class="container ">
                <div class="{{ $quote->quoted_by !='hadis'?'quote-container':'container'}}">
                    <div class="{{ $quote->quoted_by !='hadis'?'quote-image-container':'disabled'}}">
                    @if ($quote->image)
                    <img
                    src="{{ url('storage/'.$quote->image) }}"
                    alt="Warren Buffett"
                    class="quote-image"
                    width="50%"
                    {{-- height="50" --}}
                    />
                    @endif
                </div>

                <div class="{{ $quote->quoted_by !='hadis'?'quote-content':'text-center'}}">
                    {{ $quote->quoted_by }}
                        <blockquote class="quote-text">
                    {{ $quote->quote }}
                    </blockquote>
                </div>

                </div>
            </div>
        </div>
        @endforeach

      <!-- Testimonials Section -->
      <section class="testimonials-section">
        <div class="container testimonials-container">
          <h2 class="section-title">Apa Kata Mereka</h2>

          <div class="testimonials-grid">
            <div class="testimonial-card">
              <img
                src="https://ternakuang.id/wp-content/uploads/2024/12/rectangle_2460.webp"
                alt="Testimonial"
                class="testimonial-image"
                width="622"
                height="349"
              />
              <p class="testimonial-text">
                Berkat belajar di Ternak Cuan, saya sudah bisa membantu orang
                tua melunasi cicilan, beli hal2 yang saya ingin seperti sepatu
                dan gadget, dan mencapai 50 juta pertama saya di umur 14.
              </p>
              <p class="testimonial-author">Clifferd Oswaldo</p>
            </div>

            <div class="testimonial-card">
              <img
                src="https://ternakuang.id/wp-content/uploads/2024/12/mask_group2.webp"
                alt="Testimonial"
                class="testimonial-image"
                width="622"
                height="349"
              />
              <p class="testimonial-text">
                Dari hasil investasi, saya sudah bisa beli motor R15. Thank you
                Ternak Cuan buat ilmunya! Salam Cuan ☺️
              </p>
              <p class="testimonial-author">Andreas Vivaldi Wong</p>
            </div>

            <div class="testimonial-card">
              <img
                src="https://ternakuang.id/wp-content/uploads/2024/12/rectangle_2460h.webp"
                alt="Testimonial"
                class="testimonial-image"
                width="622"
                height="349"
              />
              <p class="testimonial-text">
                Porto gua dulu minus sampe 20%++ karna slalu ikut2an. Sejak ikut
                Ternak Cuan, gua mulai bisa analisa dan atur psikologis. Skarang
                porto gua udah mulai pulih & bisa bikin plan kapan harus
                beli/jual, ga fomo lgi.
              </p>
              <p class="testimonial-author">Audrey Celia</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <footer class="main-footer">
        <div class="container footer-container">
          <div class="footer-info">
            <h3 class="footer-title">PT. SAHABAT DWIKARYA DIGITAL</h3>
            <p class="footer-address">
              RUKO GRAHA KENCANA BLOK A, Jl. RAYA PERJUANGAN NO. 88,
              Desa/Kelurahan Kebon Jeruk, Kec. Kebon Jeruk, Kota Adm. Jakarta
              Barat, Provinsi DKI Jakarta, Kode Pos 11530
            </p>
            <p class="footer-cs">CS :</p>
            <div class="footer-social">
              <p class="social-title">Ikuti Kami :</p>
              <!-- Social media icons would go here -->
            </div>
          </div>
          <div class="footer-links">
            <h3 class="footer-title">Bantuan & Panduan</h3>
            <p class="footer-link">Syarat & Ketentuan</p>
            <p class="footer-link">Kebijakan Privasi</p>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="container">
            <div class="footer-divider"></div>
            <div class="footer-copyright">
              <img
                src="https://ternakuang.id/wp-content/uploads/2024/12/TERNAKUANG.svg"
                alt="Ternak Cuan"
                class="footer-logo"
                width="196"
                height="18"
              />
              <p class="copyright-text">© 2025 PT. {{ $webconfig['main_title'] }}</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
