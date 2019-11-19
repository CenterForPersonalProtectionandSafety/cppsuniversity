<?php
/*
BL Module
*/
?>
<div class="card">
    <input type="checkbox" id="blelearning" class="more" aria-hidden="true">
    <div class="content">
        <?php if ($user->data()->complete_blelearning == 0){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/blelearning.png')">
        <?php } ?>
        <?php if ($user->data()->complete_blelearning == 1){ ?>
        <div class="front" style="background-image: url('/usersc/images/modules/blelearning_complete.png')">
        <?php } ?>
            <div class="inner">
                <h2>E-LEARNING</h2>
                <label for="blelearning" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Beyond Lockdown</h4>
                  <p>This is our Beyond Lockdown E-Learning course.</p>
                </div>
                <label for="blelearning" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/courses/BL/ELearning/viewELearning.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"> Play Module</i>
                </a>
            </div>
        </div>
    </div>
</div>
