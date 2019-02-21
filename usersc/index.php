<?php
/*
If logged in, redirect to home.
If not logged in, redirect to login page.
*/
?>
<?php
require_once '../lms_master/users/init.php';
if(isset($user) && $user->isLoggedIn()){
  Redirect::to($us_url_root.'index.php');
}else{
  Redirect::to($us_url_root.'lms_master/usersc/login.php');
}
die();
?>