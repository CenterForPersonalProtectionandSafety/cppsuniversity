<?php
/*
Flashpoint De-escalation and Prevention Module
*/
?>
<div class="card">
    <input type="checkbox" id="card5" class="more">
    <div class="content">
      <?php if ($user->data()->complete_fpdp == 0){ ?>
      <div class="front" style="background-image: url('/usersc/images/wls.jpg')">
      <?php } ?>
      <?php if ($user->data()->complete_fpdp == 1){ ?>
      <div class="front" style="background-image: url('/usersc/images/wls_watched.png')">
      <?php } ?>
            <div class="inner">
                <h2>Flashpoint De-escalation and Prevention</h2>
                <label for="card5" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Flashpoint De-escalation and Prevention</h4>
                  <p>CPPS has created this latest program to prepare any individual to become situationally aware of their surroundings, pick up on early indicators that something might be wrong, and respond effectively if “Lightning Does Strike” and they find themselves in an Extreme Violence event.</p>
                </div>
                <label for="card5" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/usersc/viewFPDP.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>
