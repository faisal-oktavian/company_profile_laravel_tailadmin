@include('front.themes.header', ['title' => 'Faisal Arvia Oktavian – Web Developer & IT Specialist'])

<!-- slider / hero -->
<section class="slider_section">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="detail_box">
                <h1 style="color: #fbb03b;">Mewujudkan Solusi Web yang Inovatif untuk Memajukan Bisnis Anda</h1>
                <p>Kami berfokus pada pengembangan perangkat lunak dan web yang efektif, menarik, dan mudah digunakan untuk membantu bisnis Anda berkembang.</p>
                <a href="{{ url('about') }}">Read More</a>
              </div>
            </div>
            <div class="col-md-5 offset-md-1">
              <div class="img-box">
                <img src="{{ asset('assets/images/slider-img.png') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div> <!-- tutup .hero_area -->

<div class="content">

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container"><h2>Solusi Digital Terbaik untuk Bisnis Anda</h2></div>
      <div class="service_container">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('assets/images/s-1.png') }}" class="img1" alt="">
            <img src="{{ asset('assets/images/s-1-color.png') }}" class="img2" alt="">
          </div>
          <div class="detail-box"><h5>Analisis Data</h5><p>Membantu Anda memahami data untuk pengambilan keputusan yang lebih tepat.</p></div>
        </div>
        <div class="box active">
          <div class="img-box">
            <img src="{{ asset('assets/images/s-2.png') }}" class="img1" alt="">
            <img src="{{ asset('assets/images/s-2-color.png') }}" class="img2" alt="">
          </div>
          <div class="detail-box"><h5>Pengembangan Web</h5><p>Membangun situs web dan aplikasi yang intuitif dan mudah digunakan.</p></div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('assets/images/s-3.png') }}" class="img1" alt="">
            <img src="{{ asset('assets/images/s-3-color.png') }}" class="img2" alt="">
          </div>
          <div class="detail-box"><h5>Pemasaran Digital</h5><p>Strategi pemasaran untuk memperluas jangkauan dan hasil bisnis.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6"><div class="img-box"><img src="{{ asset('assets/images/about-img.png') }}" alt="" /></div></div>
        <div class="col-md-5"><div class="detail-box">
          <div class="heading_container"><h2>Tentang Kami</h2></div>
          <p>Kami adalah tim pengembang web yang berdedikasi untuk menciptakan solusi digital inovatif. Dengan pengalaman di berbagai bidang, kami fokus pada pengembangan web yang dapat membantu bisnis Anda berkembang lebih cepat dan efisien.</p>
        </div></div>
      </div>
    </div>
  </section>

  <!-- portfolio section -->
  <section class="portfolio_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>Portofolio</h2>
        <p>Kami mengubah ide dan keinginan Anda menjadi proyek web yang unik, menginspirasi Anda dan pelanggan Anda.</p>
      </div>

      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/portofolio/si_peka.png') }}" alt=""><a href="https://si-peka.faio.my.id/" target="_blank"><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
          <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/portofolio/noval.png') }}" alt=""><a href="https://si-eka.faio.my.id/" target="_blank"><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
          <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/portofolio/sisko.png') }}" alt=""><a href="https://sisko.faio.my.id/" target="_blank"><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
        </div>
      </div>
      <div class="btn-box"><a href="{{ url('portfolio') }}">View More</a></div>
    </div>
  </section>

</div>

@include('front.themes.footer')
