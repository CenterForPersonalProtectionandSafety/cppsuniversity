<?php
/*
Admin Dashboard ex. page
*/
?>

<?php require_once '../users/init.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/header.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'usersc/includes/navigation.php'; ?>
<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>

<?php
  $learners_query = $db->query("SELECT * FROM users WHERE id IN (SELECT user_id FROM user_permission_matches WHERE permission_id = 1)");
  $userData = $learners_query->results();

  if($_GET['csvButton']){exportUsers();}

  function exportUsers() {
    $query = $db->query("SELECT * FROM users WHERE id IN (SELECT user_id FROM user_permission_matches WHERE permission_id = 1)");

    if($query->num_rows > 0){
        $delimiter = ",";
        $filename = "usersCompleted_" . date('Y-m-d') . ".csv";

        //create a file pointer
        $f = fopen('php://memory', 'w');

        //set column headers
        $fields = array('Name', 'Email', 'Last-Sign-In', 'WPV', 'EGML', 'WLS', 'BL');
        fputcsv($f, $fields, $delimiter);

        //output each row of the data, format line as csv and write to file pointer
        while($row = $query->fetch_assoc()){
            $lineData = array($row['fname'], $row['email'], $row['last_login'], $row['complete_tier2'], $row['complete_tier3'], $row['complete_wls'], $row['complete_bl']);
            fputcsv($f, $lineData, $delimiter);
        }

        //move back to beginning of file
        fseek($f, 0);

        //set headers to download file rather than displayed
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        //output all remaining data on a file pointer
        fpassthru($f);
      }
    exit;
  }

?>

<div id="page-wrapper">
    <div class="container">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h1>Manage Users</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
              <div class="row">
                  <hr />
                  <button type="button" class="btn btn-success" onClick='location.href="?csvButton"'>Export Users</button>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="alluinfo">&nbsp;</div>
                          <div class="allutable">
                              <table id="paginate" class='table table-hover table-list-search'>
                                  <thead>
                                      <tr>
                                          <th>Name</th><th>Email</th>
                                          <th>Last Sign In</th>
                                          <th>WPV</th>
                                          <th>EGML</th>
                                          <th>WLS</th>
                                          <th>BL</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php
                                      //Cycle through users
                                      foreach ($userData as $v1) {
                                      ?>
                                      <tr>
                                          <td><?=$v1->fname?> <?=$v1->lname?></td>
                                          <td><?=$v1->email?></td>
                                          <td><?php if($v1->last_login != 0) { echo $v1->last_login; } else {?> <i>Never</i> <?php }?></td>
                                          <td><?php if($v1->complete_tier2==0) {?> <p>incomplete</p> <?php } else {?> <p>complete</p> <?php }?></td>
                                          <td><?php if($v1->complete_tier3==0) {?> <p>incomplete</p> <?php } else {?> <p>complete</p> <?php }?></td>
                                          <td><?php if($v1->complete_wls==0) {?> <p>incomplete</p> <?php } else {?> <p>complete</p> <?php }?></td>
                                          <td><?php if($v1->complete_bl==0) {?> <p>incomplete</p> <?php } else {?> <p>complete</p> <?php }?></td>
                                      </tr>
                                      <?php } ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>


<!-- End of main content section -->

<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->
<script src="js/pagination/jquery.dataTables.js" type="text/javascript"></script>
<script src="js/pagination/dataTables.js" type="text/javascript"></script>
<script src="js/jwerty.js"></script>
<script>
    $(document).ready(function() {
        jwerty.key('esc', function(){
            $('.modal').modal('hide');
        });
        $('#paginate').DataTable({"pageLength": 25,"aLengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]], "aaSorting": []});

        $('.password_view_control').hover(function () {
            $('#password').attr('type', 'text');
            $('#confirm').attr('type', 'text');
        }, function () {
            $('#password').attr('type', 'password');
            $('#confirm').attr('type', 'password');
        });


        $('[data-toggle="popover"], .pwpopover').popover();
        $('.pwpopover').on('click', function (e) {
            $('.pwpopover').not(this).popover('hide');
        });
        $('.modal').on('hidden.bs.modal', function () {
            $('.pwpopover').popover('hide');
        });
    });
</script>

<?php if($settings->auto_assign_un==0) { ?>
<script type="text/javascript">
    $(document).ready(function(){
        var x_timer;
        $("#username").keyup(function (e){
            clearTimeout(x_timer);
            var username = $(this).val();
            if (username.length > 0) {
                x_timer = setTimeout(function(){
                    check_username_ajax(username);
                }, 500);
            }
            else $('#usernameCheck').text('');
        });

        function check_username_ajax(username){
            $("#usernameCheck").html('Checking...');
            $.post('parsers/existingUsernameCheck.php', {'username': username}, function(response) {
                if (response == 'error') $('#usernameCheck').html('There was an error while checking the username.');
                else if (response == 'taken') $('#usernameCheck').html('<i class="glyphicon glyphicon-remove" style="color: red; font-size: 12px"></i> This username is taken.');
                else if (response == 'valid') $('#usernameCheck').html('<i class="glyphicon glyphicon-ok" style="color: green; font-size: 12px"></i> This username is not taken.');
                else $('#usernameCheck').html('');
            });
        }
    });
</script>
<?php } ?>

<!-- Content Ends Here -->
<!-- footers -->
<?php require_once $abs_us_root.$us_url_root.'users/includes/page_footer.php'; // the final html footer copyright row + the external js calls ?>

<!-- Place any per-page javascript here -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php'; // currently just the closing /body and /html ?>
