<?php
  require 'themes/v_header.php';
  // require 'themes/v_menu.php';
?>

  <div class="content">
    <div class="sub_page">

      <?php
        require 'themes/v_menu.php';
      ?>
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
                <img src="images/s-1.png" class="img1" alt="">
                <img src="images/s-1-color.png" class="img2" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Analisis Data
                </h5>
                <p>
                  Membantu Anda memahami data untuk pengambilan keputusan yang lebih tepat.
                </p>
              </div>
            </div>
            <div class="box active">
              <div class="img-box">
                <img src="images/s-2.png" class="img1" alt="">
                <img src="images/s-2-color.png" class="img2" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pengembangan Web
                </h5>
                <p>
                  Membangun situs web dan aplikasi yang intuitif dan mudah digunakan.
                </p>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="images/s-3.png" class="img1" alt="">
                <img src="images/s-3-color.png" class="img2" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Pemasaran Digital
                </h5>
                <p>
                  Strategi pemasaran untuk memperluas jangkauan dan hasil bisnis.
                </p>
              </div>
            </div>
          </div>
          <!-- <div class="btn-box">
            <a href="">
              Read More
            </a>
          </div> -->
        </div>
      </section>
      <!-- end service section -->

    </div>
  </div>

<?php
  require 'themes/v_footer.php';
?>