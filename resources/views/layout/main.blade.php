<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#056996">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Insightful Community</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

  <div id="root">

      <section class="hero is-info is-bold is-fullheight">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
          <header class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item">
                  <img src="images/icon-light.png" alt="Insightful Community Logo">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                  <span></span>
                <span></span>
                <span></span>
                </span>
              </div>
              <div id="navbarMenuHeroC" class="navbar-menu">
                <div class="navbar-end">
                  <a class="navbar-item">Tentang Kami</a>
                  <a class="navbar-item">Visi dan Misi</a>
                </div>
              </div>
            </div>
          </header>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container has-text-centered">

            <figure class="image share-your-joy" style="margin: auto;">
              <img class="animated infinite bounce" src="images/shareyourjoy.png">
            </figure>
            <h2 class="subtitle">Mari berbagi “Joy” bersama Anak-Anak & Teman - Teman Pemuda. “Joy” Anda akan kami salurkan dalam bentuk bingkisan Natal dan
            Pelaksanaan Workshop dalam bidang Komputer .</h2>

            <div class="columns section">

              <div class="column">
                <div class="box">
                  <p style="font-size: 1.3em;">
                  <strong>Sabtu, 8 Desember 2018,</strong> <br> Workshop Perakitan Komputer dan Instalasi Sistem Operasi <br><br> <strong>Minggu, 9 Desember 2018,</strong> <br> Ibadah Bersama Anak Sekolah Minggu dan Penyaluran Bingkisan
                  </p>
                </div>
              </div> {{-- Column 1 --}}

              <div class="column">
                <div class="box">
                  <h3 style="font-size: 1.3em; font-weight: 700">Pilihan Donasi</h3>
                    <p><strong>Silver</strong>: Rp. 50K (1 bingkisan)</p>
                    <p><strong>Gold</strong>: Rp. 100K (2 bingkisan)</p>
                    <p><strong>Platinum</strong>: Rp. 250K (5 bingkisan)</p>
                    <p><strong>Emerald</strong>: Rp. 500K (10 bingkisan)</p>
                    <p><strong>Diamond</strong>: Rp. 1000K (20 bingkisan)</p>
                    <p>
                    Transfer melalui rekening BNI: <br><strong>Nomor 0371791146 <br>a.n. Pascal Andre Albertho Monareh</strong>
                    </p>
                </div>
              </div> {{-- Column 2 --}}

            </div> {{-- Columns --}}

          </div>
        </div>

        <!-- Hero footer: will stick at the bottom -->
      </section>

    <main class="icon-main">

    </main> {{-- Main --}}
  </div>


<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>