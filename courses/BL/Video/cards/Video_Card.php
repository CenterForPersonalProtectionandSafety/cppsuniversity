<?php
/*
BL Module
*/
?>
<div class="card">
    <input type="checkbox" id="blvideo" class="more" aria-hidden="true">
    <div class="content">
        <?php if ($user->data()->complete_blvideo == 0){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/blvideo.png')">
        <?php } ?>
        <?php if ($user->data()->complete_blvideo == 1){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/blvideo_complete.png')">
        <?php } ?>
            <div class="inner">
                <h2>VIDEO</h2>
                <label for="blvideo" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Beyond Lockdown</h4>
                  <p>This is our Beyond Lockdown video training.</p>
                </div>
                <label for="blvideo" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/courses/BL/Video/viewVideo.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"> Play Module</i>
                </a>
            </div>
        </div>
    </div>
</div>
