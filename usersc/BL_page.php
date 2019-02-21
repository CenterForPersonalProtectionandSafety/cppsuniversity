<?php
/*
Landing page for Tier3
*/
?>

<?php
require_once '../lms_master/users/init.php';
require_once $abs_us_root.$us_url_root.'lms_master/users/includes/header.php';
require_once $abs_us_root.$us_url_root.'lms_master/users/includes/navigation.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}
?>

<div id="page-wrapper" class="pagetier2">
    <div class="jumbotron jumbotron-fluid myjumbo2">
        <div class="container">
            <h1 class=tier2display>Beyond Lockdown</h1>
            <h1 class=tier2display2>Enhanced Guidencefor</h1>
            <h1 class=tier2display3>Administrators Teachers Counselors</h1>
        </div>
    </div>
    <div class="container-fluid indexbarplay">
        <div class="text-left">
            <p class="playdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="text-center">
            <a href="/lms_master/usersc/viewBL.php" target="_blank" class="button is-white mybutton">PLAY COURSE</a>
        </div>
    </div>
</div> <!-- /.wrapper -->

<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'lms_master/users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->


<?php require_once $abs_us_root.$us_url_root.'lms_master/users/includes/html_footer.php'; // currently just the closing /body and /html ?>
