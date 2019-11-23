<?php
require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
}
//Redirect user on first login if haven't reset password
if($user->data()->first_login_pass_reset == 0) {
  Redirect::to($us_url_root.'usersc/user_settings.php');
}
?>

<!-- Custom Beyond Lockdown CSS -->
<link rel="stylesheet" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/css/home.css">

  <header>
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3500">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="heroOverlay">
          <div class="container">
            <div class=" text-left bg-transparent">
              <h1 class="display-4">WELCOME TO</h1>
              <div class="text-center">
                <img src="images/cpps_white_logo.png" alt="">
              </div>
              <div class="text-center">
                <a href="Corporate.php" class="btn btn-md" role="button">Corporate</a>
                <a href="SafePassage.php" class="btn btn-md" role="button">Safe Passage</a>
                <a href="BeyondLockdown.php" class="btn btn-md" role="button">Beyond Lockdown</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide One -->
        <div class="carousel-item active" style="background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('images/hero/corporate_hero.jpg')"></div>
        <!-- Slide Two -->
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('images/hero/sp_hero.jpg')"></div>
        <!-- Slide Three -->
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('images/hero/logged_out_hero.jpg')"></div>
        <!-- Slide Four -->
        <div class="carousel-item" style="background-image: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('images/hero/bl_hero.jpg')"></div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


<?php  languageSwitcher();?>
<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
