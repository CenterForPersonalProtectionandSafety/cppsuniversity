

<div class="container-fluid indexbar3">
    <div class="row indexrow">
        <div class="previewcol col-md-4">
            <?php if ($user->data()->complete_tier2 == 0){ ?>
            <img class="img-responsive" src="/usersc/images/tier2.jpg" alt="Generic placeholder image">
            <?php } ?>
            <?php if ($user->data()->complete_tier2 == 1){ ?>
            <img class="img-responsive" src="/usersc/images/tier2_watched.png" alt="Generic placeholder image">
            <?php } ?>
        </div>
        <div class="previewcol col-md-8">
            <h1 class="previewtitle">Workplace Violence Prevention and Response for Employees</h1>
            <p class="previewdescription">Research shows that over 2 million people are affected each year by violent victimizations in the workplace at a cost of over 100 billion dollars to U.S. corporations annually.  Violence, however, is almost always evolutionary with warning signs along the way.  In this 12-minute video, viewers are equipped to:</p>
            <ul>
              <li>Understand what Workplace Violence is</li>
              <li>Recognize Behaviors of Concern before violence occurs</li>
              <li>Understand how to report concerns once they are observed</li>
              <li>Recognize indicators that a co-worker might be involved in a Domestic or Intimate Partner violence relationship…and what to do about it</li>
              <li>Understand key strategies for de-escalating tense situations in the workplace</li>
            </ul>
            <br>
            <a href="/usersc/tier2page.php" target="" class="button is-white mybutton">
                <?php if ($user->data()->complete_tier2 == 0){ ?>
                TAKE ME TO COURSE
                <?php } ?>
                <?php if ($user->data()->complete_tier2 == 1){ ?>
                REVIEW COURSE
                <?php } ?>
            </a>
        </div>
    </div>
</div>
