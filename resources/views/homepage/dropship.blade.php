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

            @media only screen and (max-width: 500px) {
            #map {
                height: 400px;
                }
            }
            /* h2{
            } */
            #map {
                width: 100%;
                height: 600px;
            }
            #maps {
                margin-top: -90px;
            }

        </style>

    	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                <div class="logo-container ">
                    <a href="{{ url('') }}" class="logo-link ">
                        <img src="{{ url('storage/'.$webconfig['logo']) }}"
                            alt="{{ __('Ternak Cuan Logo') }}"
                            class="logo-image rounded-2xl" />
                        {{-- {{ $seo['meta_title'] }} --}}
                    </a>
                </div>
                <nav class="main-nav hidden md:block">
                    <a href="#form-join" class="btn btn-primary z-40 text-white">Gabung Sekarang</a>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="md:hero-section my-20 " data-aos="fade-up">
            <div class="mx-auto hero-container items-center">
                <div class="md:w-3/4 w-full md:mx-5 text-center md:text-left px-2" data-aos="fade-right">
                    <h1 class="hero-title sm:text-center md:text-justify">
                       Pusat Dropship <strong class="text-primary">Ternak Cuan</strong>
                    </h1>
                    <p class="hero-subtitle py-5">
                       Bergabunglah di <span class="text-primary">dropship.ternakcuan.id</span> Produk paling cuan yang sudah winning selama lebih dari 8 Tahun. Tumbuhkan bisnismu bareng TernakCuan.id!
                    </p>

                    <div class="hidden md:block">
                        <a href="#form-join" class="btn btn-primary btn-large text-white z-50">{{
                            $dropship['CTAButton'] }}</a>
                    </div>
                </div>

                <div class="hero-background -z-20" data-aos="fade-left" style="z-index: -50!important;">
                    <img src="{{ asset('asset/images/asset_1_10x_6.webp') }}" alt="" class="hero-bg-image"
                        width="1225" height="1225" />
                </div>

                <div class="hero-video-container gap-5 -z-10" data-aos="zoom-in">

                    <img src="{{ url('img-display.png') }}" alt="Hero Image" class="hero-image2 mx-auto" >

                    <div class="md:hidden w-full mx-auto flex justify-center m-3">
                        <a href="{{ $dropship['CTAlink'] }}" class="btn btn-primary btn-large text-white z-50">Gabung Sekarang</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- SUPER QUOTE BANNER -->
      <section class="container mx-auto px-4 py-12 md:w-3/4">
  <div class="flex flex-col-reverse md:flex-row items-center gap-8 " data-aos="flip-up">

    <!-- Text Content -->
    <div class="md:w-1/2">
      <p class="text-sm font-semibold uppercase mb-2 text-primary">Peluang Usaha</p>
      <h2 class="text-2xl md:text-3xl font-bold mb-4">
        Jualan Dengan <strong class="text-primary"> Facebook Ads + COD </strong>
      </h2>
      <p class=" mb-6">
        Bagi anda yang menguasai iklan di social media seperti Facebook, anda bisa mencoba berjualan dengan menggunakan <strong class="text-primary">Facebook Ads</strong> dengan metode <Strong class="text-primary">Dropship TernakCuan.id</Strong></p>
    </div>

    <!-- Image Content -->
   <div class="md:w-1/2">
  <img
    src="{{ url('ad.10.png') }}"
    alt="Facebook image"
    class="w-full max-w-md mx-auto rounded-2xl shadow-xl mix-blend-multiply filter brightness-95"
  >
</div>


  </div>
</section>




        <!-- Features Section -->
        <section class="md:features-section my-10">
            <div class="container features-container">
                <h2 class="section-title md:text-center" data-aos="fade-up">
                    Tentang <span class="text-primary">Kami</span>
                </h2>
            <strong class=" md:text-center text-start text-xl" data-aos="fade-right" data-aos-delay="500">
                Siapa kami?
            </strong>
                <div class="sm:w-full md:w-3/6 text-justify" style="font-size:12pt !important" data-aos="slide-up">
                    TernakCuan.id adalah platform Imers (Internet Marketers) digital marketing yang menghubungkan pebisnis dengan para ahli pemasaran digital terbaik. Misi kami sederhana: mempercepat pertumbuhan bisnis dan membantu semua orang 'beternak cuan' di dunia digital.
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <style>
			#map {
				width: 100%;
				height: 600px;
			}

			@media only screen and (max-width: 500px) {
				#map {
					height: 400px;
				}
			}

			.preloader {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				z-index: 9999;
				background-color: #fff;
			}

			.preloader .loading {
				position: absolute;
				left: 50%;
				top: 50%;
				transform: translate(-50%, -50%);
				font: 14px arial;
			}

			/* #maps {
				margin-top:5px;
			} */

			#anggota {
				margin-top: -250px;
			}

			@media only screen and (min-width: 492px) and (max-width: 760px) {
				#fitur {
					margin-top: 200px;
				}
			}

		</style>

        {{-- modal mapnya --}}

        <!-- Modal: Cabang Dropship Ternak Cuan -->
            <div id="modal-cabang"
                class="hidden fixed inset-0  flex items-center justify-center z-50 transition-opacity duration-500" style="backdrop-filter: blur(8px) !important;">
                <div class="bg-white text-black w-full max-w-2xl rounded-xl shadow-lg p-6 relative">
                <div class="blur-2xl fixed inset-0 z-40 bg-slate-500" style="display: none;" id="blur-modal"></div>
                    <button
                        class="absolute top-3 right-4 text-gray-600 hover:text-black text-xl font-bold"
                        onclick="closeModal('modal-cabang')">×</button>
                    <h2 class="text-xl font-semibold mb-4">Cabang Dropship Ternak Cuan</h2>
                    <div class="max-h-[60vh] overflow-y-auto space-y-3">


                        <p class="text-lg font-semibold">Lokasi <strong id="location" class="btn-primary px-2 shadow-lg rounded-md">Indonesia</strong></p>


                        <table class="table-auto w-full border-collapse hover:shadow-lg">
                            <tbody class="group">
                                 <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 border-b border-gray-300 font-semibold text-left">Jangkauan</td>
                                    <td class="px-4 py-2 border-b border-gray-300 text-left" id="jangkauan"></td>
                                </tr>

                                <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 border-b border-gray-300 font-semibold text-left">Product</td>
                                    <td class="px-4 py-2 border-b border-gray-300 text-left" id="product"></td>
                                </tr>

                                 <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 border-b border-gray-300 font-semibold text-left">License 3PL</td>
                                    <td class="px-4 py-2 border-b border-gray-300 text-left" id="license3pl"></td>
                                </tr>

                                  <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 border-b border-gray-300 font-semibold text-left">HPP</td>
                                    <td class="px-4 py-2 border-b border-gray-300 text-left" id="hpp"></td>
                                </tr>

                                <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 border-b border-gray-300 font-semibold text-left">Avg Cost Return</td>
                                    <td class="px-4 py-2 border-b border-gray-300 text-left" id="avgcostreturn"></td>
                                </tr>
                                <hr>
                                <tr class="hover:bg-gray-100">
                                    <td class="px-4 py-2 font-semibold text-left">Avg Net Profit</td>
                                    <td class="px-4 py-2 text-left" id="avgnetprofit"></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        {{-- mapnya --}}
        <section class="benefits-section" data-aos="fade-up" >
            <div class="container benefits-container">
            <h2 class="section-title" data-aos="zoom-in">

                <strong class="text-primary">Gudang</strong>
                <strong class="text-white">Kami</strong>
            </h2>
            <strong class=" -mt-8 md:text-center text-start text-xl" data-aos="fade-up" data-aos-delay="500">
               Akses <strong class="text-primary">17 titik </strong> tersebar di seluruh kota indoneisa
            </strong>

            <div class="w-full" >
            <div id="maps" >
			<div class="layer my-24">
				<div id="map" class="rounded-3xl shadow-2xl" data-aos="flip-left" data-aos-duration="1500"></div>
			</div>

<div class="flex flex-col gap-5 ">

<div class="my-24">

    <blockquote class="italic text-center mx-auto w-full md:w-3/6 text-4xl"
        style="font-size:16pt !important" data-aos="zoom-out" data-aos-duration="1500" data-aos-easing="ease-in-out">
        &ldquo;Penjualan naik, tapi margin terus menipis karena biaya return? Saatnya <strong class="text-primary">HENTIKAN KEBOCORAN CUANMU</strong> sekarang!&rdquo;
    </blockquote>
</div>

    <div class="md:text-center text-start text-xl" data-aos="zoom-in" data-aos-duration="1500" data-aos-easing="ease-in-out">
        <strong>Solusi Dropshipper TernakCuan.id</strong>
    </div>

<div class="flex flex-col gap-3 justify-center items-center">

    <div class="bg-zinc-900 text-white rounded-xl p-4 shadow-lg  hover:shadow-2xl hover:border-purple-400 ease-in-out transition-all duration-500  hover:animate-pulse hover:border-5 border border-zinc-700"
        style="max-width: 475px !important;" data-aos="flip-up" data-aos-delay="{{ 1000 * 200 }}">
        <div class="w-full flex items-center justify-between text-left">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0 mt-1">
                    <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                        class="feature-icon">
                        <path
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                        </path>
                    </svg>
                </div>
                <span class="text-lg ">
                    <p>Dropshipper ternakcuan.id meta ads untuk menjangkau customer, yang
                        mengutamakan
                        pengiriman ke pelosok indonesia.</p>

                </span>
            </div>

        </div>

    </div>
    <div class="bg-zinc-900 text-white rounded-xl p-4 shadow-lg  hover:shadow-2xl hover:border-purple-400 ease-in-out transition-all duration-500  hover:animate-pulse hover:border-5 border border-zinc-700"
        style="max-width: 475px !important;" data-aos="flip-up" data-aos-delay="{{ 1000 * 200 }}">
        <div class="w-full flex items-center justify-between text-left">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0 mt-1">
                    <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                        class="feature-icon">
                        <path
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                        </path>
                    </svg>
                </div>
                <span class="text-lg ">
                    <p>Tingginya biaya pengiriman dan distribusi ke daerah terpencil</p>

                </span>
            </div>

        </div>

    </div>
    <div class="bg-zinc-900 text-white rounded-xl p-4 shadow-lg  hover:shadow-2xl hover:border-purple-400 ease-in-out transition-all duration-500  hover:animate-pulse hover:border-5 border border-zinc-700"
        style="max-width: 475px !important;" data-aos="flip-up" data-aos-delay="{{ 1000 * 200 }}">
        <div class="w-full flex items-center justify-between text-left">
            <div class="flex items-start gap-4">
                <div class="flex-shrink-0 mt-1">
                    <svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"
                        class="feature-icon">
                        <path
                            d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                        </path>
                    </svg>
                </div>
                <span class="text-lg ">
                    <p>Menawarkan pengiriman yang efisien dan terjangkau, dengan 17 titik fullfilment yang menjangkau hingga plosok daerah</p>

                </span>
            </div>

        </div>

    </div>
</div>

</div>



		    </div>

            </div>
        </div>
        	<script type="text/javascript" crossorigin>
			$(document).ready(function () {

				//median add delay input
				function delay(callback, ms) {
					var timer = 0;
					return function () {
						var context = this,
							args = arguments;
						clearTimeout(timer);
						timer = setTimeout(function () {
							callback.apply(context, args);
						}, ms || 0);
					};
				}

				maps();
			});

			function maps() {
                 const cabangData = {
                    'SERANG': {
                        lat: -6.1754,
                        lon: 106.865,
                        avgNetProfit: 71382,
                        jangkauan: 'Pulau Jawa',
                        radius: 50000
                    },
                    'MATARAM': {
                        lat: -8.59239,
                        lon: 116.11116,
                        avgNetProfit: 66441,
                        jangkauan: 'Nusa Tenggara Barat + Bali',
                        radius: 50000
                    },
                    'MEDAN': {
                        lat: 3.5849,
                        lon: 98.6789,
                        avgNetProfit: 75256,
                        jangkauan: 'Banda Aceh, Sumatra Utara, Sumatra Barat, Jambi, Kep Riau',
                        radius: 80000
                    },
                    'KUPANG': {
                        lat: -10.17083,
                        lon: 123.60694,
                        avgNetProfit: 103536,
                        jangkauan: 'Nusa Tenggara Timur',
                        radius: 60000
                    },
                    'MAKASAR': {
                        lat: -5.13178,
                        lon: 119.4121,
                        avgNetProfit: 72183,
                        jangkauan: 'Sulawesi Selatan, Sulawesi Barat, Sulawesi Tengah, Sulawesi Tenggara',
                        radius: 80000
                    },
                    'BANJARMASIN': {
                        lat: -3.3194,
                        lon: 114.5908,
                        avgNetProfit: 79442,
                        jangkauan: 'Kalimantan Selatan, Kalimantan Tengah',
                        radius: 70000
                    },
                    'PONTIANAK': {
                        lat: -0.0222,
                        lon: 109.3426,
                        avgNetProfit: 81607,
                        jangkauan: 'Kalimantan Barat',
                        radius: 60000
                    },
                    'TERNATE': {
                        lat: 0.79065,
                        lon: 127.38424,
                        avgNetProfit: 122318,
                        jangkauan: 'Maluku Utara',
                        radius: 50000
                    },
                    'SORONG': {
                        lat: -0.88279,
                        lon: 131.28945,
                        avgNetProfit: 153709,
                        jangkauan: 'Papua Barat Daya',
                        radius: 60000
                    },
                    'AMBON': {
                        lat: -3.6956,
                        lon: 128.1814,
                        avgNetProfit: 129385,
                        jangkauan: 'Maluku',
                        radius: 50000
                    },
                    'JAYAPURA': {
                        lat: -2.58216,
                        lon: 140.69095,
                        avgNetProfit: 127232,
                        jangkauan: 'Papua, Papua Pegunungan',
                        radius: 70000
                    },
                    'MERAUKE': {
                        lat: -8.4932,
                        lon: 140.4018,
                        avgNetProfit: 149168,
                        jangkauan: 'Papua Selatan',
                        radius: 60000
                    },
                    'TIMIKA': {
                        lat: -4.5283,
                        lon: 136.8881,
                        avgNetProfit: 181594,
                        jangkauan: 'Papua Tengah',
                        radius: 60000
                    },
                    'MANOKWARI': {
                        lat: -0.8615,
                        lon: 134.0781,
                        avgNetProfit: 166667,
                        jangkauan: 'Papua Barat',
                        radius: 60000
                    },
                    'MANADO': {
                        lat: 1.4748,
                        lon: 124.8421,
                        avgNetProfit: 87341,
                        jangkauan: 'Sulawesi Utara, Gorontalo',
                        radius: 60000
                    },
                    'TARAKAN': {
                        lat: 2.8391,
                        lon: 117.3755,
                        avgNetProfit: 81218,
                        jangkauan: 'Kalimantan Utara, Kalimantan Timur',
                        radius: 70000
                    },
                    'BANDARLAMPUNG': {
                        lat: -5.3971,
                        lon: 105.2668,
                        avgNetProfit: 60856,
                        jangkauan: 'Lampung, Sumatra Selatan, Riau, Kep Bangka Belitung',
                        radius: 70000
                    }
                    };

				var map = new L.Map('map', {
                    center: [0,0],
					dragging: true,
					scrollWheelZoom: "center",
					maxZoom: 8,
					minZoom: 5,
				});

				L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
					maxZoom: 8,
					minZoom: 5,
				}).addTo(map);

				map.attributionControl.setPrefix('Cabang Dropship - Ternak Cuan');

				var indonesia = new L.LatLng(-1.7674664, 120.5888634);
				map.setView(indonesia, 5);

                var markers = [
                    ['-6.1754', '106.865', 'Serang'],
                    ['-0.0222', '109.3426', 'Pontianak'],
                    ['-10.17083', '123.60694', 'Kupang'],
                    ['-2.58216', '140.69095', 'Jayapura'],
                    ['-8.4932', '140.4018', 'Merauke'],
                    ['0.79065', '127.38424', 'Ternate'],
                    ['-3.3194', '114.5908', 'Banjarmasin'],
                    ['-3.6956', '128.1814', 'Ambon'],
                    ['-0.88279', '131.28945', 'Sorong'],
                    ['-5.13178', '119.4121', 'Makassar'],
                    ['3.5849', '98.6789', 'Medan'],
                    ['-8.503187088369891', '140.39879635896543', 'Merauke'],
                    ['-8.59239', '116.11116', 'Mataram'],
                    ['-0.8615', '134.0781', 'Manokwari'],
                    ['1.4748', '124.8421', 'Manado'],
                    ['-4.5283', '136.8881', 'Timika'],
                    ['-5.3971', '105.2668', 'Bandar Lampung'],
                    ['2.8391', '117.3755', 'TARAKAN(Tanjung Selor)']
                ];


            var violetIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-violet.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
                });

				//Loop through the markers array
				// for (var i = 0; i < markers.length; i++) {
				// 	var lon = markers[i][1];
				// 	var lat = markers[i][0];
				// 	var cabang = markers[i][2];
				// 	var markerLocation = new L.LatLng(lat, lon);
				// 	var marker = new L.Marker(markerLocation, {
                //         icon: violetIcon
                //     }).addTo(map);
				// 	map.addLayer(marker);
				// 	marker.on('click', markerOnClick);
				// 	marker.key = cabang;

				// }

                 // Tambahkan marker dan interaksi
                    for (var cabang in cabangData) {
                    if (cabangData.hasOwnProperty(cabang)) {
                        var data = cabangData[cabang];
                        var markerLocation = new L.LatLng(data.lat, data.lon);
                        var marker = new L.Marker(markerLocation,{icon: violetIcon}).addTo(map);

                        // Konten popup
                        var popupContent = `
                        <strong>${cabang}</strong><br/>
                        Avg Net Profit: ${data.avgNetProfit.toLocaleString()}<br/>
                        Jangkauan: ${data.jangkauan}
                        `;
                        marker.bindPopup(popupContent);


                        // Interaksi hover
                        (function(marker, data) {
                        var circle;
                        marker.on('mouseover', function() {
                            this.openPopup();
                            circle = L.circle([data.lat, data.lon], {
                            color: 'purple',
                            fillColor: '#30f',
                            fillOpacity: 0.2,
                            radius: data.radius,

                            }).addTo(map);
                        });
                        marker.on('mouseout', function() {
                            this.closePopup();
                            if (circle) {
                            map.removeLayer(circle);
                            }
                        });
                         marker.on('click', markerOnClick);

                         marker.key = cabang;
                        })(marker, data);
                    }}
			}

			function markerOnClick(e) {
                // console.log(e);
                // console.log(this.key);
				var cabang = this.key.toUpperCase();
				var get_data = $.ajax({
					type: "POST",
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					},
					url: "https://dropship.ternakcuan.id/filter-data",
					data: {
						cabang: cabang
					},
					success: function (hasil) {
                        // console.log(hasil);
						$('[data-modal-target="modal-cabang"]').click();

                        // console.log(hasil.location);
						$('#location').text(hasil.location);
						var jangkauanList = hasil.jangkauan.split(',').map(function(item) {
						    return '<li class="list-disc px-2 py-1 rounded text-purple text-left">' + item.trim() + '</li>';
						}).join(' ');
						$('#jangkauan').html('<ol>' + jangkauanList + '</ol>');
						$('#jangkauan').html(jangkauanList);
						$('#product').text('Rp. ' + hasil.product.toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).replace(/\B(?=(\d{3})+(?!\d))/g, "."));
						$('#license3pl').text('Rp. ' + hasil.license3pl.toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).replace(/\B(?=(\d{3})+(?!\d))/g, "."));
						$('#hpp').text('Rp. ' + hasil.hpp.toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).replace(/\B(?=(\d{3})+(?!\d))/g, "."));
						$('#avgcostreturn').text('Rp. ' + hasil.avgcostreturn.toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).replace(/\B(?=(\d{3})+(?!\d))/g, "."));
						$('#avgnetprofit').text('Rp. ' + hasil.avgnetprofit.toLocaleString('id-ID', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).replace(/\B(?=(\d{3})+(?!\d))/g, "."));

						// map.setView(e.target.getLatLng());
					}
				});
			}



		</script>
        </section>

    <!-- Membership Section -->
    <section id="join" class="membership-section" data-aos="fade-up" data-aos-duration="1500">
        <div class="container membership-container">
            <h2 class="section-title text-center" data-aos="zoom-in" data-aos-delay="300">
                <span>Meta</span>
                <span class="text-primary">Ads
                </span>
            </h2>

            <strong class=" md:text-center text-start text-xl" data-aos="fade-right" data-aos-delay="500">
                🚀 Naikkan Penjualan dengan Iklan Meta Ads yang Tertarget!
            </strong>
            <div class="sm:w-full md:w-3/6 text-justify" style="font-size:12pt !important" data-aos="slide-up">
                Mau bisnismu tampil di depan ribuan calon pembeli di Facebook
                <strong class="btn-primary px-1 rounded m-1">Ternak Cuan Digital Marketing</strong> siap bantu
                kamu tembus pasar wilayah indonesia timur, dengan kolaborasi 17 titik tersebar di seluruh kota Indonesia dengan
                <strong class="btn-primary px-1 rounded m-1">strategi Meta Ads yang terbukti
                    menghasilkan!</strong>
            </div>
            <h2 class="text-xl" data-aos="zoom-in" data-aos-delay="900">Apa yang kamu dapatkan?</h2>
            <div class="space-y-2">
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

          <h2 class="section-title text-center mb-4" data-aos="fade-up">

            Apa kata <span class="text-primary">Peternak Cuan</span>
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
            Yuk, Mulai <strong class="btn-primary rounded px-2 animate-pulse ">Dropshiper Ternak Cuan</strong> Hari Ini!</h2>
        <p class="mailer-text text-gray-400 my-4">Hubungi tim kami untuk pertanyaan, kerjasama, atau
            sekadar ngobrol santai soal digital marketing.</p>
        @if (session('success'))
        <div class="alert alert-success my-5">
            <strong>{{ session('success') }}</strong>
        </div>
        @else
        <form action="{{ route('send.wa') }}" method="POST" id="form-wa"
            onsubmit="document.getElementById('btn-submit').style.display = 'none'; document.getElementById('loading').style.display = 'block'" hidden="true">
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

          <div >
             <a href="https://wa.me/6287771098835?text=halo%20min%2C%20info%20dong%20terkait%20dropship%20ternak%20cuan" class="btn btn-primary btn-large text-white z-50 sm:w-full ">Gabung Sekarang</a>
        </div>
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
                <p class="text-sm font-medium leading-5 text-white/85 my-2" hidden> <button
                        data-modal-target="modal-cabang"
                        class="text-sm font-medium text-white/85 hover:underline">
                        Cabang Dropship Ternak Cuan
                    </button></p>
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
                <div class="footer-copyright flex justify-between">
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
