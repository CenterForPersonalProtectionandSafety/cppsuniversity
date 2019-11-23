<?php
require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
}
?>

<!-- Custom Beyond Lockdown CSS -->
<link rel="stylesheet" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/css/corporate.css">

	<!-- Hero Banner Welcome Section -->
	<header id="hero-section"class="jumbotron jumbotron-fluid hero">
    <div class="text-center">
	   <h1>CPPS</h1>
     <h3>CORPORATE TRAINING</h3>
     <hr class="style-one">
     <p class="header-text">Keeping Your People Safe in the Workplace</p>
	   <a href="#" id="about_link" class="btn btn-md" role="button">About</a>
     <a href="#" id="video_link" class="btn btn-md" role="button">Videos</a>
     <a href="#" id="elearning_link" class="btn btn-md" role="button">Elearnings</a>
	  </div>
	</header>

	<!-- About Us Section -->
  <section id="aboutus">
    <div class="row">
      <div class="col-xl custom-col">
        <div class="container">
          <h2 class="display-4 text-center mt-5 mb-3">Who We Are?</h2>
          <hr>
          <p class="sec-description">CPPS is the leading developer and provider of scalable training and consulting solutions in the U.S. for Workplace Violence Prevention, Active Shooter Response, and International Travel Safety. CPPS has worked together with thousands of organizations large and small.</p>
        </div>
        <div class="wrapper">
          <div class="aboutcard">
              <input type="checkbox" class="more" aria-hidden="true">
              <div class="content">
                  <div class="front" style="background-image: url('/usersc/images/aboutus/company.png')">
                      <div class="inner">
                          <h4>50% of Fortune 100 corporations</h4>
                      </div>
                  </div>
              </div>
          </div>
          <div class="aboutcard">
              <input type="checkbox" class="more" aria-hidden="true">
              <div class="content">
                  <div class="front" style="background-image: url('/usersc/images/aboutus/university.png')">
                      <div class="inner">
                          <h4>1600 colleges and universities</h4>
                      </div>
                  </div>
              </div>
          </div>
          <div class="aboutcard">
              <input type="checkbox" class="more" aria-hidden="true">
              <div class="content">
                  <div class="front" style="background-image: url('/usersc/images/aboutus/hospital.png')">
                      <div class="inner">
                          <h4>2000 hospitals & many non-profit organizations</h4>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

	<!-- Video Modules -->
  <section id="videos">
    <div class="row row-title">
      <div class="col">
        <div id="fpdp" class="row">
          <div class="col-xl custom-col">
            <div class="container">
              <h2 class="display-4 text-center mt-5 mb-3">FLASHPOINT</h2>
              <hr>
              <p class="sec-description"></p>
            </div>
            <div class="wrapper">
              <?php include $abs_us_root.$us_url_root.'courses/FPDP/cards/FPDP_Card.php';?>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div id="wls" class="row">
          <div class="col-xl custom-col">
            <div class="container">
              <h2 class="display-4 text-center mt-5 mb-3">WHEN LIGHTNING STRIKES</h2>
              <hr>
              <p class="sec-description"></p>
            </div>
            <div class="wrapper">
              <?php include $abs_us_root.$us_url_root.'courses/WLS/cards/WLS_Card.php';?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Video Modules -->
  <section id="elearnings">
    <div class="row row-title">
      <div class="col">
        <div id="tier2" class="row">
          <div class="col-xl custom-col">
            <div class="container">
              <h2 class="display-4 text-center mt-5 mb-3">TIER 2</h2>
              <hr>
              <p class="sec-description"></p>
            </div>
            <div class="wrapper">
              <?php include $abs_us_root.$us_url_root.'courses/Tier2/cards/Tier2_Card.php';?>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div id="tier3" class="row">
          <div class="col-xl custom-col">
            <div class="container">
              <h2 class="display-4 text-center mt-5 mb-3">TIER 3</h2>
              <hr>
              <p class="sec-description"></p>
            </div>
            <div class="wrapper">
              <?php include $abs_us_root.$us_url_root.'courses/Tier3/cards/Tier3_Card.php';?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





<?php  languageSwitcher();?>
<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
