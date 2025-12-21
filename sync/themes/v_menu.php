<?php
  // Menentukan apakah HTTPS atau HTTP
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' 
              || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

  // Menggabungkan menjadi URL penuh
  $currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

  $filename = basename($currentURL);

  // echo $filename;

  $tab_home = '';
  $tab_about = '';
  $tab_service = '';
  $tab_portfolio = '';
  $tab_contact = '';

  if ($filename == "index.php") {
    $tab_home = "active";
  }
  else if ($filename == "about.php") {
    $tab_about = "active";
  }
  else if ($filename == "service.php") {
    $tab_service = "active";
  }
  else if ($filename == "portfolio.php") {
    $tab_portfolio = "active";
  }
  else if ($filename == "contact.php") {
    $tab_contact = "active";
  }
?>

<div class="hero_area">

  <!-- header section strats -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            Faisal
          </span>
        </a>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="s-1"> </span>
          <span class="s-2"> </span>
          <span class="s-3"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item <?php echo $tab_home ;?>">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item <?php echo $tab_about ;?>">
                <a class="nav-link" href="about.php"> About</a>
              </li>
              <li class="nav-item <?php echo $tab_service ;?>">
                <a class="nav-link" href="service.php"> Service </a>
              </li>
              <li class="nav-item <?php echo $tab_portfolio ;?>">
                <a class="nav-link" href="portfolio.php"> Portfolio </a>
              </li>
              <li class="nav-item <?php echo $tab_contact ;?>">
                <a class="nav-link" href="contact.php">Contact </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->