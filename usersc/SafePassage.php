<?php
require_once '../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if(isset($user) && $user->isLoggedIn()){
}
?>
<!-- Custom Safe Passage CSS -->
<link rel="stylesheet" href="<?=$us_url_root?>usersc/templates/<?=$settings->template?>/assets/css/sp.css">

	<!-- Hero Banner Welcome Section -->
	<header id="hero-section"class="jumbotron jumbotron-fluid hero">
    <div class="text-center">
	   <h1>SAFE</h1>
     <h3>PASSAGE</h3>
     <hr class="style-one">
     <p class="header-text">Keeping Your People Safe While Traveling</p>
	   <a href="#" id="sp_link" class="btn btn-md" role="button">Get Started</a>
	  </div>
	</header>

	<!-- Course Modules -->
<section id="sp">
	<div class="row">
		<div class="col-xl custom-col">
			<div class="container">
				<h2 class="display-4 text-center mt-5 mb-3">SAFE PASSAGE</h2>
				<hr>
				<p class="sec-description"></p>
			</div>
			<div class="wrapper">
				<?php include $abs_us_root.$us_url_root.'courses/SP/cards/SP_Card.php';?>
			</div>
		</div>
	</div>
</section>


<?php  languageSwitcher();?>
<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>
