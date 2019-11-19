<?php
/*
BL Module
*/
?>
<div class="card">
    <input type="checkbox" id="tier2card" class="more" aria-hidden="true">
    <div class="content">
        <?php if ($user->data()->complete_tier2 == 0){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/')">
        <?php } ?>
        <?php if ($user->data()->complete_tier2 == 1){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/')">
        <?php } ?>
            <div class="inner">
                <h2>Module 1</h2>
                <label for="tier2card" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Module 1</h4>
                  <p>Intro</p>
                </div>
                <label for="tier2card" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/courses/Tier2/viewTier2.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"> Play Module</i>
                </a>
            </div>
        </div>
    </div>
</div>
