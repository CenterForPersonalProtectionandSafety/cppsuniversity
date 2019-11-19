<?php
/*
BL Module
*/
?>
<div class="card">
    <input type="checkbox" id="fpdpcard" class="more" aria-hidden="true">
    <div class="content">
        <?php if ($user->data()->complete_fpdp == 0){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/fpdp.png')">
        <?php } ?>
        <?php if ($user->data()->complete_fpdp == 1){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/fpdp_complete.png')">
        <?php } ?>
            <div class="inner">
                <h2>Flashpoint</h2>
                <label for="fpdpcard" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Flashpoint</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <label for="fpdpcard" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/courses/FPDP/viewFPDP.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"> Play Module</i>
                </a>
            </div>
        </div>
    </div>
</div>
