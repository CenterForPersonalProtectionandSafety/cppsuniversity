<?php


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
