<!-- This is an example widget file.  It will be included on the statistics page of the Dashboard. -->
<h4>Courses Completed</h4></br><hr>
<div class="row">

<!-- Do any php that needs to happen. You already have access to the db -->
<?php
$private = $db->query("SELECT id FROM pages WHERE private = ?",array(1))->count();
$public = $db->query("SELECT id FROM pages WHERE private = ?",array(0))->count();

?>

<style>

.chart:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

</style>

<!-- Create a div to hold your widget -->
<div class="col-lg-6">
    <div class="card chart">
        <div class="card-body">
            <h4 class="mb-3">When Lightning Strikes Completed </h4>
            <!-- id should be unique -->
            <canvas id="wls-chart"></canvas>
        </div>
    </div>
</div>

<!-- Create a div to hold your widget -->
<div class="col-lg-6">
    <div class="card chart">
        <div class="card-body">
            <h4 class="mb-3">Tier 2 Completed </h4>
            <!-- id should be unique -->
            <canvas id="tier2-chart"></canvas>
        </div>
    </div>
</div>

<!-- Create a div to hold your widget -->
<div class="col-lg-6">
    <div class="card chart">
        <div class="card-body">
            <h4 class="mb-3">Tier 3 Completed </h4>
            <!-- id should be unique -->
            <canvas id="tier3-chart"></canvas>
        </div>
    </div>
</div>

<!-- Create a div to hold your widget -->
<div class="col-lg-6">
    <div class="card chart">
        <div class="card-body">
            <h4 class="mb-3">Beyond Lockdown Completed </h4>
            <!-- id should be unique -->
            <canvas id="bl-chart"></canvas>
        </div>
    </div>
</div>


</div> <!-- end of widget -->
<!-- Put any javascript here -->
<script type="text/javascript">
$(document).ready(function() {
  var ctx = document.getElementById( "wls-chart" );
      ctx.height = 125;
      var myChart = new Chart( ctx, {
          type: 'pie',
          data: {
              datasets: [ {
                  data: [ <?=$private?>, <?=$public?> ],
                  backgroundColor: [
                                      "rgba(0, 123, 255,0.9)",
                                      "rgba(123, 0, 255,0.7)"
                                  ],
                  hoverBackgroundColor: [
                                      "rgba(0, 123, 255,0.9)",
                                      "rgba(123, 0, 255,0.7)"
                                  ]

                              } ],
              labels: [
                              "private",
                              "public"
                          ]
          },
          options: {
              responsive: true
          }
      } );

  var ctx = document.getElementById( "tier2-chart" );
      ctx.height = 125;
      var myChart = new Chart( ctx, {
          type: 'pie',
          data: {
              datasets: [ {
                  data: [ <?=$private?>, <?=$public?> ],
                  backgroundColor: [
                                      "rgba(0, 123, 255,0.9)",
                                      "rgba(123, 0, 255,0.7)"
                                  ],
                  hoverBackgroundColor: [
                                      "rgba(0, 123, 255,0.9)",
                                      "rgba(123, 0, 255,0.7)"
                                  ]

                              } ],
              labels: [
                              "private",
                              "public"
                          ]
          },
          options: {
              responsive: true
          }
      } );

  var ctx = document.getElementById( "tier3-chart" );
      ctx.height = 125;
      var myChart = new Chart( ctx, {
          type: 'pie',
          data: {
              datasets: [ {
                  data: [ <?=$private?>, <?=$public?> ],
                  backgroundColor: [
                                      "rgba(0, 123, 255,0.9)",
                                      "rgba(123, 0, 255,0.7)"
                                  ],
                  hoverBackgroundColor: [
                                      "rgba(0, 123, 255,0.9)",
                                      "rgba(123, 0, 255,0.7)"
                                  ]

                              } ],
              labels: [
                              "private",
                              "public"
                          ]
          },
          options: {
              responsive: true
          }
      } );

  var ctx = document.getElementById( "bl-chart" );
      ctx.height = 125;
      var myChart = new Chart( ctx, {
          type: 'pie',
          data: {
              datasets: [ {
                  data: [ <?=$private?>, <?=$public?> ],
                  backgroundColor: [
                                      "rgba(0, 123, 255,0.9)",
                                      "rgba(123, 0, 255,0.7)"
                                  ],
                  hoverBackgroundColor: [
                                      "rgba(0, 123, 255,0.9)",
                                      "rgba(123, 0, 255,0.7)"
                                  ]

                              } ],
              labels: [
                              "private",
                              "public"
                          ]
          },
          options: {
              responsive: true
          }
      } );
});
</script>
