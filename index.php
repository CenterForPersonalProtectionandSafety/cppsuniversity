<?php

require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/header.php';
require_once $abs_us_root.$us_url_root.'usersc/includes/navigation.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}
if(isset($user) && $user->isLoggedIn()){
}
?>


<div id="page-wrapper">
    <div class="container-fluid indexbar1">
        <div class="text-center">
            <p class="indexwelcometo">WELCOME TO</p>
            <img src="/usersc/images/universitylogo.png" alt="..." class="">
        </div>
    </div>
    <div class="container-fluid indexbar2">
        <div class="text-left">
            <p class="indexdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <div class="container-fluid indexbar2">
        <a href="/usersc/learners_list.php" class="btn btn-info" role="button">Learners List</a>
    </div>

    <!--

      <?php //echo $abs_us_root.$us_url_root.'usersc/Modules/WLS_Module.php';?>
      <br></br>
      <?php //echo $abs_us_root.$us_url_root.'usersc/Modules/Tier2_Module.php';?>
      <br></br>
      <?php //echo $abs_us_root.$us_url_root.'usersc/Modules/Tier3_Module.php';?>
      <br></br>
      <?php //echo $abs_us_root.$us_url_root.'usersc/Modules/BL_Module.php';?>

    -->
</div> <!-- /.wrapper -->

    <!-- Include the When Lightning Strikes Module -->
    <?php include $abs_us_root.$us_url_root.'usersc/modules/WLS_Module.php'; ?>

    <!-- Include the Tier 2 Module -->
    <?php include $abs_us_root.$us_url_root.'usersc/modules/Tier2_Module.php'; ?>

    <!-- Include the Tier 3 Module -->
    <?php include $abs_us_root.$us_url_root.'usersc/modules/Tier3_Module.php'; ?>

    <!-- Include the Beyond Lockdown Module -->
    <?php include $abs_us_root.$us_url_root.'usersc/modules/BL_Module.php'; ?>




<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
