<?php
/*
BL Module
*/
?>
<div class="card">
    <input type="checkbox" id="tier3card" class="more" aria-hidden="true">
    <div class="content">
        <?php if ($user->data()->complete_tier3 == 0){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/tier3.png')">
        <?php } ?>
        <?php if ($user->data()->complete_tier3 == 1){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/tier3_complete.png')">
        <?php } ?>
            <div class="inner">
                <h2>Tier 3</h2>
                <label for="tier3card" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Tier 3</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                </div>
                <label for="tier3card" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/courses/Tier3/viewTier3.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"> Play Module</i>
                </a>
            </div>
        </div>
    </div>
</div>
