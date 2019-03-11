

<div class="container-fluid indexbar3">
    <div class="row indexrow">
        <div class="previewcol col-md-4">
            <?php if ($user->data()->complete_tier2 == 0){ ?>
            <img class="img-responsive" src="/usersc/images/tier2.jpg" alt="Generic placeholder image">
            <?php } ?>
            <?php if ($user->data()->complete_tier2 == 1){ ?>
            <img class="img-responsive" src="/usersc/images/tier2_watched.png" alt="Generic placeholder image">
            <?php } ?>
        </div>
        <div class="previewcol col-md-8">
            <h1 class="previewtitle">Workplace Violence Prevention and Response for Employees</h1>
            <p class="previewdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
