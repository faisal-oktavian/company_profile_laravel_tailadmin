@include('front.themes.header', ['title' => 'Layanan / Service'])

<div class="content">
  <div class="sub_page">

    @include('front.themes.menu')
    </div> <!-- untuk tutup tag dari v_menu.php -->

    <!-- service section -->
    <section class="service_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>
            Solusi Digital Terbaik untuk Bisnis Anda
          </h2>
        </div>

        <div class="service_container">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('assets/images/s-1.png') }}" class="img1" alt="">
              <img src="{{ asset('assets/images/s-1-color.png') }}" class="img2" alt="">
            </div>
            <div class="detail-box">
              <h5>Analisis Data</h5>
              <p>Membantu Anda memahami data untuk pengambilan keputusan yang lebih tepat.</p>
            </div>
          </div>
          <div class="box active">
            <div class="img-box">
              <img src="{{ asset('assets/images/s-2.png') }}" class="img1" alt="">
              <img src="{{ asset('assets/images/s-2-color.png') }}" class="img2" alt="">
            </div>
            <div class="detail-box">
              <h5>Pengembangan Web</h5>
              <p>Membangun situs web dan aplikasi yang intuitif dan mudah digunakan.</p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('assets/images/s-3.png') }}" class="img1" alt="">
              <img src="{{ asset('assets/images/s-3-color.png') }}" class="img2" alt="">
            </div>
            <div class="detail-box">
              <h5>Pemasaran Digital</h5>
              <p>Strategi pemasaran untuk memperluas jangkauan dan hasil bisnis.</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end service section -->

  </div>
</div>

@include('front.themes.footer')
