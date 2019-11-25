<!-- This is an example widget file.  It will be included on the statistics page of the Dashboard. -->
<h4>Courses Completed</h4></br>


<!-- Do any php that needs to happen. You already have access to the db -->
<?php
//Queries for BL E-Learning Course
$tier2Complete = $db->query("SELECT id FROM users WHERE complete_tier2 = 1",array(1))->count();
$tier2Incomplete = $db->query("SELECT id FROM users WHERE complete_tier2 = 0",array(0))->count();
//Queries for BL E-Learning Course
$tier3Complete = $db->query("SELECT id FROM users WHERE complete_tier3 = 1",array(1))->count();
$tier3Incomplete = $db->query("SELECT id FROM users WHERE complete_tier3 = 0",array(0))->count();
//Queries for BL E-Learning Course
$FPDPComplete = $db->query("SELECT id FROM users WHERE complete_fpdp = 1",array(1))->count();
$FPDPIncomplete = $db->query("SELECT id FROM users WHERE complete_fpdp = 0",array(0))->count();
//Queries for BL E-Learning Course
$WLSComplete = $db->query("SELECT id FROM users WHERE complete_wls = 1",array(1))->count();
$WLSIncomplete = $db->query("SELECT id FROM users WHERE complete_wls = 0",array(0))->count();
//Queries for BL E-Learning Course
$SPComplete = $db->query("SELECT id FROM users WHERE complete_sp = 1",array(1))->count();
$SPIncomplete = $db->query("SELECT id FROM users WHERE complete_sp = 0",array(0))->count();
//Queries for BL E-Learning Course
$BLElearningComplete = $db->query("SELECT id FROM users WHERE complete_blelearning = 1",array(1))->count();
$BLElearningIncomplete = $db->query("SELECT id FROM users WHERE complete_blelearning = 0",array(0))->count();
//Queries for BL Video Course
$BLVideoComplete = $db->query("SELECT id FROM users WHERE complete_blvideo = 1",array(1))->count();
$BLVideoIncomplete = $db->query("SELECT id FROM users WHERE complete_blvideo = 0",array(0))->count();

?>

<style>
.chart:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  transition-timing-function: ease;
  transition: 0.5s;
}
</style>


  <!-- Corporate -->
  <div class="row">
    <div class="col-lg-6">
      <!-- <h4>Corporate Courses</h4></br> -->
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <a href="<?=$us_url_root?>usersc/client_admin.php?view=tier2">
        <div class="card chart">
          <div class="card-body">
            <h4 class="mb-3">Tier 2 </h4>
            <canvas id="tier2-chart"></canvas>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-6">
      <a href="<?=$us_url_root?>usersc/client_admin.php?view=tier3">
        <div class="card chart">
          <div class="card-body">
            <h4 class="mb-3">Tier 3 </h4>
            <canvas id="tier3-chart"></canvas>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <a href="<?=$us_url_root?>usersc/client_admin.php?view=fpdp">
        <div class="card chart">
          <div class="card-body">
            <h4 class="mb-3">FPDP </h4>
            <canvas id="fpdp-chart"></canvas>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-6">
      <a href="<?=$us_url_root?>usersc/client_admin.php?view=wls">
        <div class="card chart">
          <div class="card-body">
            <h4 class="mb-3">WLS </h4>
            <canvas id="wls-chart"></canvas>
          </div>
        </div>
      </a>
    </div>
  </div>

  <!-- Safe Passage -->
  <div class="row">
    <div class="col-lg-6">
      <h4>Safe Passage</h4></br>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <a href="<?=$us_url_root?>usersc/client_admin.php?view=sp">
        <div class="card chart">
          <div class="card-body">
            <h4 class="mb-3">Safe Passage </h4>
            <canvas id="sp-chart"></canvas>
          </div>
        </div>
      </a>
    </div>
  </div>


  <!-- Beyond Lockdown -->
  <div class="row">
    <div class="col-lg-6">
      <h4>Beyond Lockdown</h4></br>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6">
      <a href="<?=$us_url_root?>usersc/client_admin.php?view=blelearning">
        <div class="card chart">
          <div class="card-body">
            <h4 class="mb-3">E-Learning </h4>
            <canvas id="blelearning-chart"></canvas>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-6">
      <a href="<?=$us_url_root?>usersc/client_admin.php?view=blvideo">
        <div class="card chart">
          <div class="card-body">
            <h4 class="mb-3">Video </h4>
            <canvas id="blvideo-chart"></canvas>
          </div>
        </div>
      </a>
    </div>
  </div>


<!-- end of widget -->
<!-- Put any javascript here -->
<script type="text/javascript">
$(document).ready(function() {
var ctx = document.getElementById( "tier2-chart" );
    ctx.height = 125;
    var blChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?=$tier2Complete?>, <?=$tier2Incomplete?> ],
                backgroundColor: [
                                    "rgba(224, 87, 106, 1)",
                                    "rgba(93, 225, 207, 1)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(224, 87, 106, .6)",
                                    "rgba(93, 225, 207, .7)"
                                ]

                            } ],
            labels: [
                            "Complete",
                            "Incomplete"
                        ]
        },
        options: {
            responsive: true
        }
    } );
var ctx = document.getElementById( "tier3-chart" );
    ctx.height = 125;
    var blChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?=$tier3Complete?>, <?=$tier3Incomplete?> ],
                backgroundColor: [
                                    "rgba(224, 87, 106, 1)",
                                    "rgba(93, 225, 207, 1)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(224, 87, 106, .6)",
                                    "rgba(93, 225, 207, .7)"
                                ]

                            } ],
            labels: [
                            "Complete",
                            "Incomplete"
                        ]
        },
        options: {
            responsive: true
        }
    } );
var ctx = document.getElementById( "fpdp-chart" );
    ctx.height = 125;
    var blChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?=$FPDPComplete?>, <?=$FPDPIncomplete?> ],
                backgroundColor: [
                                    "rgba(224, 87, 106, 1)",
                                    "rgba(93, 225, 207, 1)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(224, 87, 106, .6)",
                                    "rgba(93, 225, 207, .7)"
                                ]

                            } ],
            labels: [
                            "Complete",
                            "Incomplete"
                        ]
        },
        options: {
            responsive: true
        }
    } );
var ctx = document.getElementById( "wls-chart" );
    ctx.height = 125;
    var blChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?=$WLSComplete?>, <?=$WLSIncomplete?> ],
                backgroundColor: [
                                    "rgba(224, 87, 106, 1)",
                                    "rgba(93, 225, 207, 1)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(224, 87, 106, .6)",
                                    "rgba(93, 225, 207, .7)"
                                ]

                            } ],
            labels: [
                            "Complete",
                            "Incomplete"
                        ]
        },
        options: {
            responsive: true
        }
    } );
var ctx = document.getElementById( "sp-chart" );
    ctx.height = 125;
    var blChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?=$SPComplete?>, <?=$SPIncomplete?> ],
                backgroundColor: [
                                    "rgba(224, 87, 106, 1)",
                                    "rgba(93, 225, 207, 1)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(224, 87, 106, .6)",
                                    "rgba(93, 225, 207, .7)"
                                ]

                            } ],
            labels: [
                            "Complete",
                            "Incomplete"
                        ]
        },
        options: {
            responsive: true
        }
    } );
var ctx = document.getElementById( "blelearning-chart" );
    ctx.height = 125;
    var blChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?=$BLElearningComplete?>, <?=$BLElearningIncomplete?> ],
                backgroundColor: [
                                    "rgba(224, 87, 106, 1)",
                                    "rgba(93, 225, 207, 1)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(224, 87, 106, .6)",
                                    "rgba(93, 225, 207, .7)"
                                ]

                            } ],
            labels: [
                            "Complete",
                            "Incomplete"
                        ]
        },
        options: {
            responsive: true
        }
    } );
var ctx = document.getElementById( "blvideo-chart" );
    ctx.height = 125;
    var blChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?=$BLVideoComplete?>, <?=$BLVideoIncomplete?> ],
                backgroundColor: [
                                    "rgba(224, 87, 106, 1)",
                                    "rgba(93, 225, 207, 1)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(224, 87, 106, .6)",
                                    "rgba(93, 225, 207, .7)"
                                ]

                            } ],
            labels: [
                            "Complete",
                            "Incomplete"
                        ]
        },
        options: {
            responsive: true
        }
    } );
});
</script>
