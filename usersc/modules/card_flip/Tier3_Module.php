<?php
/*
Tier 3 Module
Only for managers
*/
?>
<div class="card">
    <input type="checkbox" id="card3" class="more">
    <div class="content">
      <?php if ($user->data()->complete_tier3 == 0){ ?>
      <div class="front" style="background-image: url('/usersc/images/tier3.jpg')">
      <?php } ?>
      <?php if ($user->data()->complete_tier3 == 1){ ?>
      <div class="front" style="background-image: url('/usersc/images/tier3_watched.png')">
      <?php } ?>
            <div class="inner">
                <h2>Enhanced Guidance for Managers and Leaders</h2>
                <label for="card3" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Enhanced Guidance for Managers and Leaders</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <label for="card3" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/usersc/viewtier3.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>
