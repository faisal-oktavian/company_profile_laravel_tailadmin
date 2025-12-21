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
      
      <!-- contact section -->
	  <section class="contact_section layout_padding">
	    <div class="container">

	      <div class="heading_container">
	        <h2>
	          Request A Call Back
	        </h2>
	      </div>
	      <div class="">
	        <div class="">
	          <div class="row">
	            <div class="col-md-9 mx-auto">
	              <div class="contact-form">
	                <form action="">
	                  <div>
	                    <input type="text" placeholder="Full Name ">
	                  </div>
	                  <div>
	                    <input type="text" placeholder="Phone Number">
	                  </div>
	                  <div>
	                    <input type="email" placeholder="Email Address">
	                  </div>
	                  <div>
	                    <input type="text" placeholder="Message" class="input_message">
	                  </div>
	                  <div class="d-flex justify-content-center">
	                    <button type="submit" class="btn_on-hover">
	                      Send
	                    </button>
	                  </div>
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </section>
	  <!-- end contact section -->

    </div>
  </div>

<?php
  require 'themes/v_footer.php';
?>