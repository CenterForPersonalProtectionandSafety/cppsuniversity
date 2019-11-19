<?php
/*
BL Module
*/
?>
<div class="card">
    <input type="checkbox" id="spcard" class="more" aria-hidden="true">
    <div class="content">
        <?php if ($user->data()->complete_sp == 0){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/sp.png')">
        <?php } ?>
        <?php if ($user->data()->complete_sp == 1){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/sp_complete.png')">
        <?php } ?>
            <div class="inner">
                <h2>Safe Passage</h2>
                <label for="spcard" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Safe Passage</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <label for="spcard" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/courses/SP/viewSP.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"> Play Module</i>
                </a>
            </div>
        </div>
    </div>
</div>
