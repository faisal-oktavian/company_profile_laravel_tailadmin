@include('front.themes.header', ['title' => 'Portofolio'])

<div class="content">
  <div class="sub_page">

    @include('front.themes.menu')
    </div> <!-- untuk tutup tag dari v_menu.php -->

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

            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>

            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1 edit.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1 edit.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1 edit.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>

            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1 edit.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1 edit.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>
            <div class="col-md-4 col-sm-6"><div class="img-box"><img src="{{ asset('assets/images/template 1 edit.png') }}" alt=""><a href=""><img src="{{ asset('assets/images/link.png') }}" alt=""></a></div></div>

          </div>
        </div>

      </div>
    </section>
    <!-- end portfolio section -->

  </div>
</div>

@include('front.themes.footer')
