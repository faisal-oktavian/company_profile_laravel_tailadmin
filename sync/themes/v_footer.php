    <div class="footer_bg">
      <!-- info section -->
      <section class="info_section ">
        <div class="container">
          <div class="footer-columns">

            <div class="col-md-4 mb-4 mb-md-0 d-flex d-md-block flex-column align-items-center text-center text-md-left ">
              <div class="info_info">
                <div class="footer-tagline accent">
                  Memberikan Solusi Digital untuk Masa Depan Bisnis Anda
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4 mb-md-0 d-flex d-md-block flex-column align-items-center text-center text-md-left ">
              <div class="info_contact">
                <h5>
                  Tentang Kami
                </h5>
                <div>
                  <div class="img-box">
                    <img src="images/location-white.png" width="18px" alt="">
                  </div>
                  <p>
                    Mojokerto, Jawa Timur
                  </p>
                </div>
                <div>
                  <div class="img-box">
                    <img src="images/telephone-white.png" width="12px" alt="">
                  </div>
                  <p>
                    +62 813 3452 3020
                  </p>
                </div>
                <div>
                  <div class="img-box">
                    <img src="images/envelope-white.png" width="18px" alt="">
                  </div>
                  <p>
                    oktavianfaisal97@gmail.com
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4 mb-md-0 d-flex d-md-block flex-column align-items-center text-center text-md-left ">
              <div class="info_form ">
                <h5>
                  Sosial Media
                </h5>
                <div class="social_box">
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/instagram.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/youtube.png" alt="">
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- end info_section -->

      <!-- footer section -->
      <section class="container-fluid footer_section">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <p>
                Copyright &copy; <?php echo Date('Y');?> <a href="http://faio.my.id/" target="_blank">Faisal Oktavian</a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- footer section -->
    </div>

    <!-- contact WA -->
    <a href="javascript:void(0);" class="float" id="whatsapp-link" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
    </a>
    <!-- end contact WA -->

    <!-- Scroll-to-top button -->
    <button id="scrollTop" aria-label="Kembali ke atas" class="scroll-top">↑</button>
    <!-- end Scroll-to-top button -->

    <button id="themeToggle">🌙/☀️</button>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <!-- script untuk contact WA -->
    <script>
      // Mendapatkan waktu server (di sini menggunakan objek Date di JavaScript)
      var currentTime = new Date();
      var hours = currentTime.getHours();

      // Menentukan kata pembuka sesuai waktu (pagi, siang, atau sore)
      var greeting = "Selamat Pagi";
      if (hours >= 12 && hours <= 15) {
          greeting = "Selamat Siang";
      } 
      else if (hours > 15 && hours <= 18) {
          greeting = "Selamat Sore";
      }
      else if (hours >= 18) {
          greeting = "Selamat Malam";
      }

      // Membuat pesan WhatsApp dengan kata pembuka yang sesuai
      var message = greeting + ",\n\nSaya tertarik dengan profil yang Anda tampilkan. Apakah saya dapat bertanya lebih lanjut?";

      // Encode pesan untuk memastikan format yang benar di URL
      var encodedMessage = encodeURIComponent(message);

      // Debug: cek apakah pesan sudah benar
      console.log("Pesan yang akan dikirim: " + message);
      console.log("Pesan yang sudah diencode: " + encodedMessage);

      // Membuat URL WhatsApp API dengan nomor dan pesan
      var whatsappURL = "https://api.whatsapp.com/send?phone=6281334523020&text=" + encodedMessage;

      // Debug: cek apakah URL sudah terbentuk dengan benar
      console.log("WhatsApp Link: " + whatsappURL);

      // Mengatur href link untuk WhatsApp API dengan pesan yang sudah disesuaikan
      document.getElementById("whatsapp-link").setAttribute("href", whatsappURL);
      
      // Debug: cek apakah atribut href sudah ter-set dengan benar
      console.log("Atribut href telah diperbarui di elemen: " + document.getElementById("whatsapp-link").getAttribute("href"));
    </script>

    <!-- script untuk animasi menampilkan konten -->
    <script>
      const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if(e.isIntersecting) e.target.classList.add('revealed');
        });
      }, {threshold: 0.12});
      document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
    </script>
  </body>
</html>