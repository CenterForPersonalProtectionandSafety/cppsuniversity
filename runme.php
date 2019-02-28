<?php
require_once 'users/init.php';

require_once $abs_us_root.$us_url_root.'users/includes/header.php';
require_once $abs_us_root.$us_url_root.'users/includes/navigation.php';
//if (!securePage($_SERVER['PHP_SELF'])){die();}
$count = 0;
$updates = $db->query("SELECT * FROM updates")->results();
$existing_updates=[];
foreach($updates as $u){
$existing_updates[] = $u->migration;
}
$update=Input::get('override');
if(!in_array($update,$existing_updates) && $update!='' && !is_null($update)) {
$db->insert('updates',['migration'=>$update]);
logger(1,"System Updates","Update $update overridden, no update completed.");
echo "Update ".$update." overridden.";
$updates = $db->query("SELECT * FROM updates")->results();
$existing_updates=[];
foreach($updates as $u){
$existing_updates[] = $u->migration;
}
}
?>
<div id="page-wrapper">

<div class="container">

<!-- Page Heading -->
<div class="row">
<div class="col-sm-12"><br><br><br>
<?php
echo "Updating Database.  If you see errors, please contact UserSpice support at userspice.com/bugs<br>";
$update = '23rqAv5elJ3G';
if(!in_array($update,$existing_updates)){
//4.3.25 ->4.4.0
$db->query("ALTER TABLE settings ADD template varchar(255) DEFAULT 'default'");
  if($db->error()){dump($db->errorInfo());}
$db->query("ALTER TABLE settings ADD saas tinyint(1)");
  if($db->error()){dump($db->errorInfo());}
$db->query("ALTER TABLE settings ADD redirect_uri_after_login text");
  if($db->error()){dump($db->errorInfo());}
$db->query("ALTER TABLE settings ADD show_tos tinyint(1) DEFAULT '1'");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE updates ADD update_skipped tinyint(1) DEFAULT NULL");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE users ADD org int(11)");
  if($db->error()){dump($db->errorInfo());}
$db->query("ALTER TABLE users ADD account_mgr int(11) DEFAULT '0'");
  if($db->error()){dump($db->errorInfo());}
$db->query("ALTER TABLE users ADD oauth_tos_accepted tinyint(1) DEFAULT NULL");
  if($db->error()){dump($db->errorInfo());}

$db->query("CREATE TABLE `us_announcements` (
`id` int(11) NOT NULL,
`dismissed` int(11) NOT NULL,
`link` varchar(255) DEFAULT NULL,
`title` varchar(255) DEFAULT NULL,
`message` varchar(255) DEFAULT NULL,
`ignore` varchar(50) DEFAULT NULL,
`class` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE `us_announcements`
ADD PRIMARY KEY (`id`);
");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE `us_announcements`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;");
  if($db->error()){dump($db->errorInfo());}

$db->query("CREATE TABLE `us_plugins` (
`id` int(11) NOT NULL,
`plugin` varchar(255) DEFAULT NULL,
`status` varchar(255) DEFAULT NULL,
`updates` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  if($db->error()){dump($db->errorInfo());}


$db->query("ALTER TABLE `us_plugins`
ADD PRIMARY KEY (`id`);
");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE `us_plugins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;");
  if($db->error()){dump($db->errorInfo());}

$db->query("CREATE TABLE `us_saas_levels` (
`id` int(11) NOT NULL,
`level` varchar(255) NOT NULL,
`users` int(11) NOT NULL,
`details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE `us_saas_levels`
ADD PRIMARY KEY (`id`);
");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE `us_saas_levels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;");
  if($db->error()){dump($db->errorInfo());}

$db->query("CREATE TABLE `us_saas_orgs` (
`id` int(11) NOT NULL,
`org` varchar(255) NOT NULL,
`owner` int(11) NOT NULL,
`level` int(11) NOT NULL,
`active` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE `us_saas_orgs`
ADD PRIMARY KEY (`id`);
");
  if($db->error()){dump($db->errorInfo());}

$db->query("ALTER TABLE `us_saas_orgs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;");
  if($db->error()){dump($db->errorInfo());}

logger(1,"System Updates","Update $update successfully deployed.");
$db->insert('updates',['migration'=>$update]);
echo "Applied update ".$update."<br>";
$count++;
}

if($count == 1){
echo "Finished applying ".$count." update.<br>";
}else{
echo "Finished applying ".$count." updates.<br>";
}

echo "Taking a look at your menu system.<br>";
if($settings->navigation_type == 1){
  echo "We see that you are using database-driven navigation.<br> We are going to check your usersc folder to see if you are using customized files.<br>  If you aren't, we will update your navigation links for you.<br>";
}else{
  echo "We see that you are using file-based navigation.<br> We will update the database so your links will be ready if you decide to use it,<br> however, may want to go through your navigation files to point links to the new admin.php.<br>";
}
  if(!file_exists($abs_us_root.$us_url_root.'usersc/admin_users.php')){
    $links = $db->query("SELECT * FROM menus WHERE link = ?",array("users/admin_users.php"))->results();
    foreach($links as $l){
      $db->update('menus',$l->id,['link'=>'users/admin.php?view=users']);
    }
  }

    if(!file_exists($abs_us_root.$us_url_root.'usersc/admin_permissions.php')){
      $links = $db->query("SELECT * FROM menus WHERE link = ?",array("users/admin_permissions.php"))->results();
      foreach($links as $l){
        $db->update('menus',$l->id,['link'=>'users/admin.php?view=permissions']);
      }
    }

    if(!file_exists($abs_us_root.$us_url_root.'usersc/admin_pages.php')){
      $links = $db->query("SELECT * FROM menus WHERE link = ?",array("users/admin_pages.php"))->results();
      foreach($links as $l){
        $db->update('menus',$l->id,['link'=>'users/admin.php?view=pages']);
      }
    }

    if(!file_exists($abs_us_root.$us_url_root.'usersc/admin_messages.php')){
      $links = $db->query("SELECT * FROM menus WHERE link = ?",array("users/admin_messages.php"))->results();
      foreach($links as $l){
        $db->update('menus',$l->id,['link'=>'users/admin.php?view=messages']);
      }
    }

    if(!file_exists($abs_us_root.$us_url_root.'usersc/admin_logs.php')){
      $links = $db->query("SELECT * FROM menus WHERE link = ?",array("users/admin_logs.php"))->results();
      foreach($links as $l){
        $db->update('menus',$l->id,['link'=>'users/admin.php?view=logs']);
      }
    }
echo "UserSpice 4.4 has a new integrated dashboard that replaces most of the other admin pages in the users directory.<br>You can continue to use the old pages, or you can feel free to delete them. We will post a list on userspice.com/updates of the files that can be deleted.<br>";
echo "<h3>For security reasons, please delete the runme.php file</h3>";
?>
Make sure you are logged in and also run <a href="users/update.php">Update.php</a>
</div></div></div></div>
