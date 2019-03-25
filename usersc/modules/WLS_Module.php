<?php
/*
When Lightning Strikes Module
*/
?>
<div class="container-fluid moduleColorOdd">
    <div class="row">
        <div class="previewcol col-md-4">
            <?php if ($user->data()->complete_wls == 0){ ?>
            <img class="img-responsive" src="/usersc/images/wls.jpg" alt="Generic placeholder image">
            <?php } ?>
            <?php if ($user->data()->complete_wls == 1){ ?>
            <img class="img-responsive" src="/usersc/images/wls_watched.png" alt="Generic placeholder image">
            <?php } ?>
        </div>
        <div class="previewcol col-md-8">
            <h1 class="previewtitle">When Lightning Strikes</h1>
            <p class="previewdescription">CPPS has created this latest program to prepare any individual to become situationally aware of their surroundings, pick up on early indicators that something might be wrong, and respond effectively if “Lightning Does Strike” and they find themselves in an Extreme Violence event.</p>
            <a href="/usersc/wls_page.php" target="" class="button is-white moduleButton">
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
