<?php require_once '../users/init.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'users/includes/header.php'; ?>
<?php require_once $abs_us_root.$us_url_root.'usersc/includes/navigation.php'; ?>
<?php if (!securePage($_SERVER['PHP_SELF'])){die();} ?>

<?php

  if(isset($_POST["Export"])){

    $filename = "usersCompleted_" . date('Y-m-d') . ".csv";

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=' . $filename );

    $output = fopen("php://output", "w");
    fputcsv($output, array('Name', 'Email', 'Last-Sign-In', 'WPV', 'EGML', 'WLS', 'BL'));

    $query = $db->query("SELECT * FROM users WHERE id IN (SELECT user_id FROM user_permission_matches WHERE permission_id = 1)");
    $userData = $query->results();


    // Loop through query and to convert 0's and 1's into complete / incomplete statements for CSV
    foreach ($userData as $person) {

      if($person->complete_tier2==0){
        $tier2 = "incomplete";
      }else {
        $tier2 = "complete";
      }

      if($person->complete_tier3==0){
        $tier3 = "incomplete";
      }else {
        $tier3 = "complete";
      }

      if($person->complete_wls==0){
        $wls = "incomplete";
      }else {
        $wls = "complete";
      }

      if($person->complete_bl==0){
        $bl = "incomplete";
      }else {
        $bl = "complete";
      }

      fputcsv($output, array($person->fname . " " . $person->lname, $person->email, $person->last_login, $tier2, $tier3, $wls, $bl));
    }
      fclose($output);
  }

?>
