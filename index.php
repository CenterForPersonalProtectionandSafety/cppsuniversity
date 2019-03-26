<?php

require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/header.php';
require_once $abs_us_root.$us_url_root.'usersc/includes/navigation.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}
if(isset($user) && $user->isLoggedIn()){
}
?>

<link rel="stylesheet" type="text/css" href="usersc/css/module.css">

<div class="container-fluid">
    <div class="text-center">
        <p class="indexwelcometo">WELCOME TO</p>
        <img src="/usersc/images/universitylogo.png" alt="..." class="">
    </div>
</div>
<div class="container-fluid descriptionBanner">
    <div class="text-left">
        <p class="indexdescription">CPPS is the leading developer and provider of scalable training and consulting solutions in the U.S. for Workplace Violence Prevention, Active Shooter Response, and International Travel Safety. CPPS has worked together with thousands of organizations–large and small–to include over 50% of Fortune 100 corporations, over 1600 colleges and universities; 2000 hospitals and many of the largest non-profit/charitable organizations in the U.S.</p>
    </div>
</div>
<br>
<div class="centered">
    <section class="cards">

      <!-- Include the When Lightning Strikes Module -->
      <?php include $abs_us_root.$us_url_root.'usersc/modules/WLS_Module.php'; ?>

      <!-- Include the Tier 2 Module -->
      <?php include $abs_us_root.$us_url_root.'usersc/modules/Tier2_Module.php'; ?>

      <!-- Include the Tier 3 Module -->
      <?php include $abs_us_root.$us_url_root.'usersc/modules/Tier3_Module.php'; ?>

      <!-- Include the Beyond Lockdown Module -->
      <?php include $abs_us_root.$us_url_root.'usersc/modules/BL_Module.php'; ?>

    </section><!-- .cards -->

</div><!-- .centered -->


<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
