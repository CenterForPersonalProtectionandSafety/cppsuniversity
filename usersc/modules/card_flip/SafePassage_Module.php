<?php
/*
Safe Passage Module
*/
?>
<div class="card">
    <input type="checkbox" id="card6" class="more">
    <div class="content">
      <?php if ($user->data()->complete_sp == 0){ ?>
      <div class="front" style="background-image: url('/usersc/images/wls.jpg')">
      <?php } ?>
      <?php if ($user->data()->complete_sp == 1){ ?>
      <div class="front" style="background-image: url('/usersc/images/wls_watched.png')">
      <?php } ?>
            <div class="inner">
                <h2>Safe Passage</h2>
                <label for="card6" class="button" aria-hidden="true">
                    Details
                </label>
            </div>
        </div>
        <div class="back">
            <div class="inner">
                <div class="description">
                  <h4>Safe Passage</h4>
                  <p>CPPS has created this latest program to prepare any individual to become situationally aware of their surroundings, pick up on early indicators that something might be wrong, and respond effectively if “Lightning Does Strike” and they find themselves in an Extreme Violence event.</p>
                </div>
                <label for="card6" class="button return" aria-hidden="true">
                    <i class="fa fa-arrow-left"></i>
                </label>
                <a href="/usersc/viewSP.php" class="button return button-play" aria-hidden="true">
                  <i class="fa fa-play"></i>
                </a>
            </div>
        </div>
    </div>
</div>
