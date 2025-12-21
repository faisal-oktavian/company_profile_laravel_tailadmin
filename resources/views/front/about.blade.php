@include('front.themes.header', ['title' => 'Tentang Kami'])

<div class="content">
  <div class="sub_page">

    @include('front.themes.menu')

    <!-- about section -->
    <section class="about_section layout_padding">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="img-box">
              <img src="{{ asset('assets/images/about-img.png') }}" alt="" />
            </div>
          </div>
          <div class="col-md-5">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Tentang Kami
                </h2>
              </div>
              <p>
                Kami adalah tim pengembang web profesional yang berfokus pada menciptakan solusi digital inovatif dan custom untuk setiap klien. Dengan pengalaman dalam berbagai industri, kami menggabungkan kreativitas dan teknologi terbaru untuk membangun situs web, aplikasi, dan platform digital yang tidak hanya fungsional tetapi juga memberikan pengalaman pengguna yang luar biasa.
                <br><br>
                Kami memahami bahwa setiap bisnis memiliki kebutuhan unik, oleh karena itu kami bekerja sama dengan klien untuk memahami tujuan mereka dan menyediakan solusi yang dapat meningkatkan efisiensi serta mendukung pertumbuhan bisnis secara berkelanjutan.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about section -->

  </div>
</div>

@include('front.themes.footer')
