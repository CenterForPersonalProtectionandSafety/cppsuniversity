<?php
/*
Tier 3 Module
Only for managers
*/
?>
<?php if (checkMenu(3,$user->data()->id)){ //Links for permission (level 3 Manager) ?>
<div class="container-fluid moduleColorOdd">
    <div class="row">
        <div class="previewcol col-md-4">
            <?php if ($user->data()->complete_tier3 == 0){ ?>
            <img class="img-responsive" src="/usersc/images/tier3.jpg" alt="Generic placeholder image">
            <?php } ?>
            <?php if ($user->data()->complete_tier3 == 1){ ?>
            <img class="img-responsive" src="/usersc/images/tier3_watched.png" alt="Generic placeholder image">
            <?php } ?>
        </div>
        <div class="previewcol col-md-8">
            <h1 class="previewtitle">Enhanced Guidance for Managers and Leaders</h1>
            <p class="previewdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="/usersc/tier3page.php" target="" class="button is-white moduleButton">
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
<?php } //is user an admin ?>
