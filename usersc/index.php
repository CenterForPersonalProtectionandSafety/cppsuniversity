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

	<!-- Hero Banner Welcome Section -->
	<header id="hero-section"class="jumbotron jumbotron-fluid hero">
    <div class="text-center">
      <h3>WELCOME TO</h3>
      <br>
      <img src="images/cpps_white_logo.png" alt="">
      <hr class="style-one">
      <p class="home-text">Keeping Your People Safe in the Workplace</p>
	  </div>
	</header>


<?php  languageSwitcher();?>
<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
