<?php
/*
Redirect to user_settings.php
*/
?>

<?php
require_once '../lms_master/users/init.php';
if(isset($user) && $user->isLoggedIn()){
  Redirect::to($us_url_root.'lms_master/usersc/user_settings.php');
}else{
  Redirect::to($us_url_root.'lms_master/usersc/login.php');
}
die();
?>