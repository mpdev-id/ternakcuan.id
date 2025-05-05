<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $seo['meta_title'] }}</title>
    <meta name="description" content="{{ $seo['meta_description'] }}">
    <meta name="keywords" content="{{ $seo['meta_keywords'] }}">
    <meta name="author" content="{{ $seo['meta_author'] }}">
    <meta name="robots" content="{{ $seo['meta_robots'] }}">
    <link rel="canonical" href="{{ $seo['meta_canonical'] }}">
    <meta property="og:title" content="{{ $seo['og_title'] }}">
    <meta property="og:description" content="{{ $seo['og_description'] }}">
    <meta property="og:image" content="{{ $seo['og_image'] }}">
    <meta name="twitter:title" content="{{ $seo['twitter_title'] }}">
    <meta name="twitter:description" content="{{ $seo['twitter_description'] }}">
    <meta name="twitter:image" content="{{ $seo['twitter_image'] }}">
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body >
    <div class="page-wrapper ">
      <!-- Header/Navigation -->
      <header class="main-header">
        <div class="container header-container">
          <div class="logo-container">
            <a href="https://akademicrypto.com/" class="logo-link">
              <img
                src="https://ternakuang.id/wp-content/uploads/2023/11/logo-ternakuang.webp"
                alt="Ternak Cuan Logo"
                width="282"
                height="28"
                class="logo-image"
              />
            </a>
          </div>
          <nav class="main-nav">
            <a href="https://ternakuang.id/#pricing" class="btn btn-primary"
              >Jadi Member</a
            >
            <a href="https://ternakuang.id/#" class="btn btn-outline">Login</a>
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
              src="https://ternakuang.id/wp-content/uploads/2024/12/asset_1_10x_6.webp"
              alt=""
              class="hero-bg-image"
              width="1225"
              height="1225"
            />
          </div>
          <div class="hero-video-container">
            <video
              src="{{ $copywriting['company_video'] }}"
              autoplay
              loop
              muted
              playsinline
              controlslist="nodownload"
              class="hero-video"
            ></video>
          </div>
        </div>
      </section>

      <!-- Partners Section -->
      <section class="partners-section">
        <div class="container">
          <div class="partners-grid-top">
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_654035f754.webp"
              alt="Partner logo"
              class="partner-logo"
              width="189"
              height="58"
            />
          
          </div>
          <div class="partners-grid-bottom">
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/image_711.webp"
              alt="Partner logo"
              class="partner-logo"
              width="195"
              height="49"
            />
            
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/image_720.webp"
              alt="Partner logo"
              class="partner-logo"
              width="188"
              height="29"
            />
          </div>
        </div>
      </section>

      <!-- LinkedIn Banner -->
      <section class="linkedin-banner">
        <div class="container linkedin-container">
          <p class="linkedin-text">
            LinkedIn 2022 Top Startups Indonesia Honored to be announced for
          </p>
          <img
            src="https://ternakuang.id/wp-content/uploads/2024/12/image_removebg_preview_10_1.webp"
            alt="LinkedIn logo"
            class="linkedin-logo"
            width="66"
            height="52"
          />
        </div>
      </section>

      <!-- Features Section -->
      <section class="features-section">
        <div class="container features-container">
          <h2 class="section-title">
            Platform Digital #1 untuk bantu kamu Belajar Keuangan & Berinvestasi
          </h2>
          <p class="section-subtitle">
            Belajar dari nol hingga mahir dengan materi video yang mudah
            dipahami, fleksibel, dan selalu diperbarui.
          </p>

          <div class="features-grid">
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_65403087.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_65403182.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_65403184.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_6540357d62.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_654035765.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_654035766.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_654035h762.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_654035767.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_654j035766.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_654035775.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_6540357j62.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/group_65403576l5.webp"
              alt="Feature screenshot"
              class="feature-image"
              width="650"
              height="486"
            />
          </div>

          <a
            href="https://ternakuang.id/#pricing"
            class="btn btn-primary btn-large"
            >Jadi Member Sekarang</a
          >
        </div>
      </section>

      <!-- Mission Section -->
      <section class="mission-section">
        <div class="container mission-container">
          <div class="mission-image-container">
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/imagehh.webp"
              alt="Mission illustration"
              class="mission-image"
              width="1076"
              height="718"
            />
          </div>
          <div class="mission-content">
            <h2 class="mission-title">Dalam misi mencetak 10 juta</h2>
            <div class="mission-text">
              <p>
                Ternak Cuan dibangun untuk membantu masyarakat Indonesia untuk
                lebih "melek" secara finansial. Fokus pertama yaitu
              </p>
              <p>
                Dengen sadarnya finansial kami yakin semua lulusan Ternak Cuan
                akan bisa berinvestasi dan profit besar dalam jangka waktu
                panjang.
              </p>
              <p>-Ternak Cuan Founder.</p>
            </div>
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/TERNAKUANG.svg"
              alt="Ternak Cuan"
              class="mission-logo"
              width="196"
              height="18"
            />
          </div>
        </div>
      </section>

      <!-- Benefits Section -->
      <section class="benefits-section">
        <div class="container benefits-container">
          <h2 class="section-title">Apa yang akan kalian dapat</h2>

          <div class="benefits-cards">
            <div class="benefit-card">
              <div class="benefit-card-image-container">
                <img
                  src="https://ternakuang.id/wp-content/uploads/2024/12/frame1.webp"
                  alt="Analisa Saham"
                  class="benefit-card-image"
                  width="384"
                  height="342"
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
          </div>

          <div class="faq-section">
            <div class="faq-column">
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
                      fill="#5CED7B"
                    ></circle>
                    <path
                      d="M15.5552 19.8023L18.3835 22.9628L24.4441 17.0369"
                      stroke="#1A1C1F"
                      stroke-width="2"
                    ></path>
                  </svg>
                </div>
                <div class="faq-content">
                  <h4 class="faq-title">Gimana kalo masih pemula banget?</h4>
                  <p class="faq-text">
                    Akademi online Ternak Cuan dibuat untuk Kamu dari yang ga
                    ngerti sama sekali, sampai ngerti bagaimana memilih saham
                    yang bagus untuk di investasi
                  </p>
                </div>
              </div>

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
                      fill="#5CED7B"
                    ></circle>
                    <path
                      d="M15.5552 19.8023L18.3835 22.9628L24.4441 17.0369"
                      stroke="#1A1C1F"
                      stroke-width="2"
                    ></path>
                  </svg>
                </div>
                <div class="faq-content">
                  <h4 class="faq-title">Jadwalnya fleksibel ga ya?</h4>
                  <p class="faq-text">
                    Semua materi modul dan rekaman kelas live dapat kamu akses
                    dimana saja kapan saja. Kami sangat menghargai waktu kamu,
                    kamu yang atur sendiri waktu belajar kamu 😉
                  </p>
                </div>
              </div>
            </div>

            <div class="faq-column">
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
                      fill="#5CED7B"
                    ></circle>
                    <path
                      d="M15.5552 19.8023L18.3835 22.9628L24.4441 17.0369"
                      stroke="#1A1C1F"
                      stroke-width="2"
                    ></path>
                  </svg>
                </div>
                <div class="faq-content">
                  <h4 class="faq-title">Apakah akan dijamin profit?</h4>
                  <p class="faq-text">
                    Ternak Cuan tidak menjamin kamu profit, namun kamu akan
                    dituntun, dan banyak sekali member lulusan ternak Cuan telah
                    mengikuti course dan profit yang besar.
                  </p>
                </div>
              </div>

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
                      fill="#5CED7B"
                    ></circle>
                    <path
                      d="M15.5552 19.8023L18.3835 22.9628L24.4441 17.0369"
                      stroke="#1A1C1F"
                      stroke-width="2"
                    ></path>
                  </svg>
                </div>
                <div class="faq-content">
                  <h4 class="faq-title">Butuh modal yang besar gak ya?</h4>
                  <p class="faq-text">
                    Ternak Cuan adalah platform edukasi keuangan pribadi dan
                    investasi mulai dari 83.000/ bulan. Untuk mulai investasi
                    bisa dari 100rb.
                  </p>
                </div>
              </div>
            </div>

            <div class="faq-column">
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
                      fill="#5CED7B"
                    ></circle>
                    <path
                      d="M15.5552 19.8023L18.3835 22.9628L24.4441 17.0369"
                      stroke="#1A1C1F"
                      stroke-width="2"
                    ></path>
                  </svg>
                </div>
                <div class="faq-content">
                  <h4 class="faq-title">Bagaimana cara menjadi Member?</h4>
                  <p class="faq-text">
                    Kunjungi Ternakuang, pilih paket member, daftar atau login,
                    lakukan pembayaran, dan nikmati akses ke materi belajar,
                    webinar, kelas online, serta komunitas eksklusif.
                  </p>
                </div>
              </div>

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
                      fill="#5CED7B"
                    ></circle>
                    <path
                      d="M15.5552 19.8023L18.3835 22.9628L24.4441 17.0369"
                      stroke="#1A1C1F"
                      stroke-width="2"
                    ></path>
                  </svg>
                </div>
                <div class="faq-content">
                  <h4 class="faq-title">Bisa langsung praktek ga?</h4>
                  <p class="faq-text">
                    Tentu ! Ini saat yang sangat tepat untuk kamu mulai belajar
                    dan langsung terjun praktek ke pasar saham
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Membership Section -->
      <section id="pricing" class="membership-section">
        <div class="container membership-container">
          <div class="membership-background-left">
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/asset_1_10x_6.webp"
              alt=""
              class="membership-bg-image"
              width="1225"
              height="1225"
            />
          </div>
          <div class="membership-background-right">
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/asset_1_10x_6.webp"
              alt=""
              class="membership-bg-image"
              width="1225"
              height="1225"
            />
          </div>

          <h2 class="membership-title">
            <span class="highlight">Membership</span>
            <span class="bold">
                <img src="Ternak Cuan Logo - White with Transparent Background.svg" alt="" srcset="">
            </span>
          </h2>

          <div class="membership-features">
            <ul class="membership-features-list">
              <li class="membership-feature-item">
                <svg
                  aria-hidden="true"
                  viewBox="0 0 512 512"
                  xmlns="http://www.w3.org/2000/svg"
                  class="feature-icon"
                >
                  <path
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                  ></path>
                </svg>
                <span>Akses 40+ Video Academy Ternak Cuan</span>
              </li>
              <li class="membership-feature-item">
                <svg
                  aria-hidden="true"
                  viewBox="0 0 512 512"
                  xmlns="http://www.w3.org/2000/svg"
                  class="feature-icon"
                >
                  <path
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                  ></path>
                </svg>
                <span>Download materi rangkuman course</span>
              </li>
              <li class="membership-feature-item">
                <svg
                  aria-hidden="true"
                  viewBox="0 0 512 512"
                  xmlns="http://www.w3.org/2000/svg"
                  class="feature-icon"
                >
                  <path
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                  ></path>
                </svg>
                <span>Komunitas Member Premium</span>
              </li>
            </ul>
            <ul class="membership-features-list">
              <li class="membership-feature-item">
                <svg
                  aria-hidden="true"
                  viewBox="0 0 512 512"
                  xmlns="http://www.w3.org/2000/svg"
                  class="feature-icon"
                >
                  <path
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                  ></path>
                </svg>
                <span>Special Price kelas live & merchandise</span>
              </li>
              <li class="membership-feature-item">
                <svg
                  aria-hidden="true"
                  viewBox="0 0 512 512"
                  xmlns="http://www.w3.org/2000/svg"
                  class="feature-icon"
                >
                  <path
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                  ></path>
                </svg>
                <span>Akses Hasil Analisa Emiten Pilihan</span>
              </li>
              <li class="membership-feature-item">
                <svg
                  aria-hidden="true"
                  viewBox="0 0 512 512"
                  xmlns="http://www.w3.org/2000/svg"
                  class="feature-icon"
                >
                  <path
                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"
                  ></path>
                </svg>
                <span>Ikuti Kelas Live rutin setiap bulan</span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Pricing Cards Section -->
      <section class="pricing-section">
        <div class="container pricing-container">
          <div class="pricing-card">
            <h3 class="pricing-duration">6 Bulan</h3>
            <p class="pricing-price">Rp 166.000</p>
            <div class="pricing-action">
              <form action="#" method="POST">
                <button type="submit" class="btn btn-primary btn-full">
                  Jadi Member
                </button>
              </form>
            </div>
            <div class="pricing-promo">
              <div class="promo-icon">
                <svg
                  width="34"
                  height="34"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_654_120)">
                    <path
                      d="M4.24226 18.3848C4.05473 18.1973 3.94937 17.943 3.94937 17.6777C3.94937 17.4125 4.05473 17.1582 4.24226 16.9706L16.9702 4.24271C17.1577 4.05517 17.4121 3.94981 17.6773 3.94981C17.9425 3.94981 18.1969 4.05517 18.3844 4.24271L22.2735 8.13179C21.8046 8.60063 21.5413 9.23652 21.5413 9.89956C21.5413 10.5626 21.8046 11.1985 22.2735 11.6673C22.7423 12.1362 23.3782 12.3996 24.0413 12.3996C24.7043 12.3996 25.3402 12.1362 25.809 11.6673L29.6981 15.5564C29.8856 15.744 29.991 15.9983 29.991 16.2635C29.991 16.5287 29.8856 16.7831 29.6981 16.9706L16.9702 29.6985C16.7826 29.8861 16.5283 29.9914 16.2631 29.9914C15.9979 29.9914 15.7435 29.8861 15.556 29.6985L4.24226 18.3848ZM19.1516 24.6887C19.0173 24.4086 18.9733 24.0938 19.0255 23.7876C19.0778 23.4815 19.2239 23.1991 19.4435 22.9795C19.6631 22.7598 19.9455 22.6138 20.2517 22.5615C20.5578 22.5092 20.8727 22.5533 21.1527 22.6876L27.5768 16.2635L25.4781 14.1648C24.6837 14.4328 23.8302 14.4734 23.0139 14.2822C22.1975 14.0911 21.4509 13.6756 20.858 13.0828C20.2652 12.4899 19.8498 11.7433 19.6586 10.927C19.4674 10.1106 19.5081 9.25716 19.776 8.46272L17.6773 6.36403L11.2532 12.7881C11.3875 13.0682 11.4316 13.383 11.3793 13.6892C11.327 13.9953 11.181 14.2777 10.9614 14.4973C10.7417 14.717 10.4593 14.863 10.1532 14.9153C9.84702 14.9675 9.53217 14.9235 9.25211 14.7892L6.36358 17.6777L16.2631 27.5772L19.1516 24.6887ZM14.4953 18.0313C14.214 18.3126 13.8325 18.4706 13.4347 18.4706C13.0368 18.4706 12.6553 18.3126 12.374 18.0313C12.0927 17.75 11.9347 17.3685 11.9347 16.9706C11.9347 16.5728 12.0927 16.1913 12.374 15.91C12.6553 15.6287 13.0368 15.4706 13.4347 15.4706C13.8325 15.4706 14.214 15.6287 14.4953 15.91C14.7766 16.1913 14.9347 16.5728 14.9347 16.9706C14.9347 17.3685 14.7766 17.75 14.4953 18.0313ZM18.0308 21.5668C17.7495 21.8481 17.368 22.0062 16.9702 22.0062C16.5724 22.0062 16.1908 21.8481 15.9095 21.5668C15.6282 21.2855 15.4702 20.904 15.4702 20.5062C15.4702 20.1083 15.6282 19.7268 15.9095 19.4455C16.1908 19.1642 16.5724 19.0062 16.9702 19.0062C17.368 19.0062 17.7495 19.1642 18.0308 19.4455C18.3121 19.7268 18.4702 20.1083 18.4702 20.5062C18.4702 20.904 18.3121 21.2855 18.0308 21.5668Z"
                      fill="#FFFFFF"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_654_120">
                      <rect
                        width="24"
                        height="24"
                        fill="#FFFFFF"
                        transform="translate(0 16.9707) rotate(-45)"
                      ></rect>
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="promo-text">Punya Kode Promo?</p>
            </div>
            <p class="pricing-note">*Pembayaran langsung</p>
          </div>

          <div class="pricing-card pricing-card-featured">
            <div class="pricing-badge">Best Value</div>
            <h3 class="pricing-duration">12 Bulan</h3>
            <p class="pricing-price">Rp 125.000</p>
            <p class="pricing-save-label">Hemat</p>
            <p class="pricing-save-amount">Rp 1.224.000,-</p>
            <div class="pricing-action">
              <form action="#" method="POST">
                <button type="submit" class="btn btn-primary btn-full">
                  Jadi Member
                </button>
              </form>
            </div>
            <div class="pricing-promo">
              <div class="promo-icon">
                <svg
                  width="34"
                  height="34"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_654_120)">
                    <path
                      d="M4.24226 18.3848C4.05473 18.1973 3.94937 17.943 3.94937 17.6777C3.94937 17.4125 4.05473 17.1582 4.24226 16.9706L16.9702 4.24271C17.1577 4.05517 17.4121 3.94981 17.6773 3.94981C17.9425 3.94981 18.1969 4.05517 18.3844 4.24271L22.2735 8.13179C21.8046 8.60063 21.5413 9.23652 21.5413 9.89956C21.5413 10.5626 21.8046 11.1985 22.2735 11.6673C22.7423 12.1362 23.3782 12.3996 24.0413 12.3996C24.7043 12.3996 25.3402 12.1362 25.809 11.6673L29.6981 15.5564C29.8856 15.744 29.991 15.9983 29.991 16.2635C29.991 16.5287 29.8856 16.7831 29.6981 16.9706L16.9702 29.6985C16.7826 29.8861 16.5283 29.9914 16.2631 29.9914C15.9979 29.9914 15.7435 29.8861 15.556 29.6985L4.24226 18.3848ZM19.1516 24.6887C19.0173 24.4086 18.9733 24.0938 19.0255 23.7876C19.0778 23.4815 19.2239 23.1991 19.4435 22.9795C19.6631 22.7598 19.9455 22.6138 20.2517 22.5615C20.5578 22.5092 20.8727 22.5533 21.1527 22.6876L27.5768 16.2635L25.4781 14.1648C24.6837 14.4328 23.8302 14.4734 23.0139 14.2822C22.1975 14.0911 21.4509 13.6756 20.858 13.0828C20.2652 12.4899 19.8498 11.7433 19.6586 10.927C19.4674 10.1106 19.5081 9.25716 19.776 8.46272L17.6773 6.36403L11.2532 12.7881C11.3875 13.0682 11.4316 13.383 11.3793 13.6892C11.327 13.9953 11.181 14.2777 10.9614 14.4973C10.7417 14.717 10.4593 14.863 10.1532 14.9153C9.84702 14.9675 9.53217 14.9235 9.25211 14.7892L6.36358 17.6777L16.2631 27.5772L19.1516 24.6887ZM14.4953 18.0313C14.214 18.3126 13.8325 18.4706 13.4347 18.4706C13.0368 18.4706 12.6553 18.3126 12.374 18.0313C12.0927 17.75 11.9347 17.3685 11.9347 16.9706C11.9347 16.5728 12.0927 16.1913 12.374 15.91C12.6553 15.6287 13.0368 15.4706 13.4347 15.4706C13.8325 15.4706 14.214 15.6287 14.4953 15.91C14.7766 16.1913 14.9347 16.5728 14.9347 16.9706C14.9347 17.3685 14.7766 17.75 14.4953 18.0313ZM18.0308 21.5668C17.7495 21.8481 17.368 22.0062 16.9702 22.0062C16.5724 22.0062 16.1908 21.8481 15.9095 21.5668C15.6282 21.2855 15.4702 20.904 15.4702 20.5062C15.4702 20.1083 15.6282 19.7268 15.9095 19.4455C16.1908 19.1642 16.5724 19.0062 16.9702 19.0062C17.368 19.0062 17.7495 19.1642 18.0308 19.4455C18.3121 19.7268 18.4702 20.1083 18.4702 20.5062C18.4702 20.904 18.3121 21.2855 18.0308 21.5668Z"
                      fill="#FFFFFF"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_654_120">
                      <rect
                        width="24"
                        height="24"
                        fill="#FFFFFF"
                        transform="translate(0 16.9707) rotate(-45)"
                      ></rect>
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="promo-text">Punya Kode Promo?</p>
            </div>
            <p class="pricing-note">*Pembayaran langsung</p>
          </div>

          <div class="pricing-card">
            <h3 class="pricing-duration">3 Bulan</h3>
            <p class="pricing-price">Rp 186.000</p>
            <div class="pricing-action">
              <form action="#" method="POST">
                <button type="submit" class="btn btn-primary btn-full">
                  Jadi Member
                </button>
              </form>
            </div>
            <div class="pricing-promo">
              <div class="promo-icon">
                <svg
                  width="34"
                  height="34"
                  viewBox="0 0 34 34"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_654_120)">
                    <path
                      d="M4.24226 18.3848C4.05473 18.1973 3.94937 17.943 3.94937 17.6777C3.94937 17.4125 4.05473 17.1582 4.24226 16.9706L16.9702 4.24271C17.1577 4.05517 17.4121 3.94981 17.6773 3.94981C17.9425 3.94981 18.1969 4.05517 18.3844 4.24271L22.2735 8.13179C21.8046 8.60063 21.5413 9.23652 21.5413 9.89956C21.5413 10.5626 21.8046 11.1985 22.2735 11.6673C22.7423 12.1362 23.3782 12.3996 24.0413 12.3996C24.7043 12.3996 25.3402 12.1362 25.809 11.6673L29.6981 15.5564C29.8856 15.744 29.991 15.9983 29.991 16.2635C29.991 16.5287 29.8856 16.7831 29.6981 16.9706L16.9702 29.6985C16.7826 29.8861 16.5283 29.9914 16.2631 29.9914C15.9979 29.9914 15.7435 29.8861 15.556 29.6985L4.24226 18.3848ZM19.1516 24.6887C19.0173 24.4086 18.9733 24.0938 19.0255 23.7876C19.0778 23.4815 19.2239 23.1991 19.4435 22.9795C19.6631 22.7598 19.9455 22.6138 20.2517 22.5615C20.5578 22.5092 20.8727 22.5533 21.1527 22.6876L27.5768 16.2635L25.4781 14.1648C24.6837 14.4328 23.8302 14.4734 23.0139 14.2822C22.1975 14.0911 21.4509 13.6756 20.858 13.0828C20.2652 12.4899 19.8498 11.7433 19.6586 10.927C19.4674 10.1106 19.5081 9.25716 19.776 8.46272L17.6773 6.36403L11.2532 12.7881C11.3875 13.0682 11.4316 13.383 11.3793 13.6892C11.327 13.9953 11.181 14.2777 10.9614 14.4973C10.7417 14.717 10.4593 14.863 10.1532 14.9153C9.84702 14.9675 9.53217 14.9235 9.25211 14.7892L6.36358 17.6777L16.2631 27.5772L19.1516 24.6887ZM14.4953 18.0313C14.214 18.3126 13.8325 18.4706 13.4347 18.4706C13.0368 18.4706 12.6553 18.3126 12.374 18.0313C12.0927 17.75 11.9347 17.3685 11.9347 16.9706C11.9347 16.5728 12.0927 16.1913 12.374 15.91C12.6553 15.6287 13.0368 15.4706 13.4347 15.4706C13.8325 15.4706 14.214 15.6287 14.4953 15.91C14.7766 16.1913 14.9347 16.5728 14.9347 16.9706C14.9347 17.3685 14.7766 17.75 14.4953 18.0313ZM18.0308 21.5668C17.7495 21.8481 17.368 22.0062 16.9702 22.0062C16.5724 22.0062 16.1908 21.8481 15.9095 21.5668C15.6282 21.2855 15.4702 20.904 15.4702 20.5062C15.4702 20.1083 15.6282 19.7268 15.9095 19.4455C16.1908 19.1642 16.5724 19.0062 16.9702 19.0062C17.368 19.0062 17.7495 19.1642 18.0308 19.4455C18.3121 19.7268 18.4702 20.1083 18.4702 20.5062C18.4702 20.904 18.3121 21.2855 18.0308 21.5668Z"
                      fill="#FFFFFF"
                    ></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_654_120">
                      <rect
                        width="24"
                        height="24"
                        fill="#FFFFFF"
                        transform="translate(0 16.9707) rotate(-45)"
                      ></rect>
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="promo-text">Punya Kode Promo?</p>
            </div>
            <p class="pricing-note">*Pembayaran langsung</p>
          </div>
        </div>
      </section>

      <!-- Quote Section -->
      <section class="quote-section">
        <div class="container quote-container">
          <div class="quote-image-container">
            <img
              src="https://ternakuang.id/wp-content/uploads/2024/12/warren_buffett_images_1.webp"
              alt="Warren Buffett"
              class="quote-image"
              width="1124"
              height="968"
            />
          </div>
          <div class="quote-content">
            <blockquote class="quote-text">
              By far the best investment you can make is in yourself.
            </blockquote>
          </div>
        </div>
      </section>

      <!-- Testimonials Section -->
      <section class="testimonials-section">
        <div class="container testimonials-container">
          <h2 class="section-title">Apa Kata</h2>

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
              <p class="copyright-text">© 2025 PT. Ternak Cuan</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
