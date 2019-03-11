

<div class="container-fluid indexbar3">
    <div class="row indexrow">
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
            <p class="previewdescription">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
