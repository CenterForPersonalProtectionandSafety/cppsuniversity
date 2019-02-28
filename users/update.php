<?php
require_once '../users/init.php';
$db = DB::getInstance();
//require_once $abs_us_root.$us_url_root.'users/includes/header.php';
//require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';
//if (!securePage($_SERVER['PHP_SELF'])){die();}
$count = 0;
$updates = $db->query("SELECT * FROM updates")->results();
$existing_updates=[];
foreach($updates as $u){
  $existing_updates[] = $u->migration;
}

include($abs_us_root.$us_url_root.'users/includes/migrations.php');
$update=Input::get('override');
if(!in_array($update,$existing_updates) && $update!='' && !is_null($update)) {
  $db->insert('updates',['migration'=>$update,'update_skipped'=>1]);
  logger(1,"System Updates","Update $update overridden, no update completed.");
  echo "Update ".$update." overridden.";
  include($abs_us_root.$us_url_root.'users/includes/migrations.php');
}
?>
<div id="page-wrapper">

<div class="container">

<!-- Page Heading -->
<div class="row">
<div class="col-sm-12"><br><br><br>
<?php
$update = '2ZB9mg1l0JXe';
if(!in_array($update,$existing_updates)){

  $db->query("ALTER TABLE logs ADD ip varchar(75)");
  logger(1,"System Updates","Update $update successfully deployed.");
  echo "Applied update ".$update."<br>";
  $db->insert('updates',['migration'=>$update]);
 $count++;
}

//UPDATE TEMPLATE
// $update = '';
// if(!in_array($update,$existing_updates)){
//
//   $db->insert('updates',['migration'=>$update]);
//   logger(1,"System Updates","Update $update successfully deployed.");
//   echo "Applied update ".$update."<br>";
//  $count++;
// }



if($count == 1){
echo "Finished applying ".$count." update.<br>";
}else{
echo "Finished applying ".$count." updates.<br>";
}

if(isset($user) && $user->isLoggedIn()){
?>
<a href="admin.php">Return to the Admin Dashboard</a>
<?php }else{ ?>
<a href="login.php">Click here to login!</a>
<?php } ?>
</div></div></div></div>
