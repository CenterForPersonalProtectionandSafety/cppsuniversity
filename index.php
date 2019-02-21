<?php

require_once 'users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/header.php';
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';
if (!securePage($_SERVER['PHP_SELF'])){die();}
if(isset($user) && $user->isLoggedIn()){
}
?>

<div id="page-wrapper">
    <!-- <div class="container-fluid indexbar2">
<div class="text-left">
<p class="indexdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div> -->
    <div class="container-fluid indexbar1">
        <!-- <p class="indexwelcometo">WELCOME TO</p> -->
        <div class="text-center">
            <img src="/usersc/images/universitylogo.png" alt="..." class="index-logo" width="160px" height="auto">
        </div>
        <div class="text-justify">
            <p class="indexdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <?php if (checkMenu(3,$user->data()->id)){ //Links for permission level 2 (default admin) ?>
    <div class="container-fluid">
        <div class="row indexbaradmin-row">
            <div class="col-md-2">
                <div class="text-center indexbaradmin1">
                    <h2 class="indexdashboard">Manager Dashboard</h2>
                    <a href="/usersc/custom_list.php" class="button is-white mybutton">TAKE ME TO DASHBOARD</a>
                </div>
            </div>
        </div>
    </div>
    <?php } //is user an admin ?>
    <div class="container-fluid indexbar3">
        <div class="row">
            <div class="col-md-6">
                <div class="row indexrow row-card-left">
                    <div class="previewcol col-md-4">
                        <?php if ($user->data()->complete_wls == 0){ ?>
                        <img class="img-responsive img-course" src="/usersc/images/tier2.jpg" alt="">
                        <?php } ?>
                        <?php if ($user->data()->complete_wls == 1){ ?>
                        <img class="img-responsive img-course" src="/usersc/images/wls_watched.jpg" alt="">
                        <?php } ?>
                    </div>
                    <div class="previewcol col-md-8 text-col">
                        <h1 class="previewtitle">When Lightning Strikes</h1>
                        <p class="previewdescription text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="/usersc/wls_page.php" target="" class="button is-white mybutton">
                            <?php if ($user->data()->complete_wls == 0){ ?>
                            TAKE ME TO VIDEO
                            <?php } ?>
                            <?php if ($user->data()->complete_wls == 1){ ?>
                            REWATCH VIDEO
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row indexrow row-card-right">
                    <div class="previewcol col-md-4">
                        <?php if ($user->data()->complete_tier2 == 0){ ?>
                        <img class="img-responsive img-course" src="/usersc/images/tier2_new.jpg" alt="Generic placeholder image">
                        <?php } ?>
                        <?php if ($user->data()->complete_tier2 == 1){ ?>
                        <img class="img-responsive img-course" src="/usersc/images/tier2_watched.jpg" alt="Generic placeholder image">
                        <?php } ?>
                    </div>
                    <div class="previewcol col-md-8 text-col">
                        <h1 class="previewtitle">Workplace Violence Prevention and Response for Employees</h1>
                        <p class="previewdescription text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="/usersc/tier2page.php" target="" class="button is-white mybutton">
                            <?php if ($user->data()->complete_tier2 == 0){ ?>
                            TAKE ME TO COURSE
                            <?php } ?>
                            <?php if ($user->data()->complete_tier2 == 1){ ?>
                            REVIEW COURSE
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (checkMenu(3,$user->data()->id)){ //Links for permission level 2 (default admin) ?>
    <div class="container-fluid indexbar4">
        <div class="row">
            <div class="col-md-6">
                <div class="row indexrow row-card-left">
                    <div class="previewcol col-md-4">
                        <?php if ($user->data()->complete_tier3 == 0){ ?>
                        <img class="img-responsive img-course" src="/usersc/images/tier3.jpg" alt="Generic placeholder image">
                        <?php } ?>
                        <?php if ($user->data()->complete_tier3 == 1){ ?>
                        <img class="img-responsive img-course" src="/usersc/images/tier3_watched.jpg" alt="Generic placeholder image">
                        <?php } ?>
                    </div>
                    <div class="previewcol col-md-8 text-col">
                        <h1 class="previewtitle">Enhanced Guidance for Managers and Leaders</h1>
                        <p class="previewdescription text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="/usersc/tier3page.php" target="" class="button is-white mybutton">
                            <?php if ($user->data()->complete_tier3 == 0){ ?>
                            TAKE ME TO COURSE
                            <?php } ?>
                            <?php if ($user->data()->complete_tier3 == 1){ ?>
                            REVIEW COURSE
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <?php } //is user an admin ?>
</div> <!-- /.wrapper -->

<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->


<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
