<div class="col-sm-8">
  <div class="page-header float-right">
    <div class="page-title">
      <ol class="breadcrumb text-right">
        <!-- <li><a href="<?=$us_url_root?>users/admin.php">Dashboard</a></li>
        <li>Manage</li>
        <li><a href="<?=$us_url_root?>users/admin.php?view=users">Users</a></li>
        <li class="active">User</li> -->
      </ol>
    </div>
  </div>
</div>
</div>
</header>

<?php
  // Query setup and execution to fetch data
  $query = $db->query("SELECT * FROM email");
  $results = $query->first();
  $userId = Input::get('id');


  //Check if selected user exists
  if(!userIdExists($userId)){
    Redirect::to($us_url_root.'usersc/client_admin.php?view=users&err=That user does not exist.'); die();
  }

  //Fetch user details
  $userdetails = fetchUserDetails(NULL, NULL, $userId);

  // Check if tier2 is complete
  if($userdetails->complete_tier2==0) { $t2=0; }else { $t2=1; }
  // Check if tier3 is complete
  if($userdetails->complete_tier3==0) { $t3=0; }else { $t3=1; }
  // Check if fpdp is complete
  if($userdetails->complete_fpdp==0) { $fpdp=0; }else { $fpdp=1; }
  // Check if wls is complete
  if($userdetails->complete_wls==0) { $wls=0; }else { $wls=1; }
  // Check if sp is complete
  if($userdetails->complete_sp==0) { $sp=0; }else { $sp=1; }
  // Check if bl-elearning is complete
  if($userdetails->complete_elearning==0) { $ble=0; }else { $ble=1; }
  // Check if bl-video is complete
  if($userdetails->complete_video==0) { $blv=0; }else{ $blv=1; }

  //Tier2
  if(!empty($_POST['t2-complete'])){
    $fields=array('complete_tier2'=>1);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from incomplete to complete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }
  if(!empty($_POST['t2-incomplete'])){
    $fields=array('complete_tier2'=>0);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from complete to incomplete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }

  //Tier3
  if(!empty($_POST['t3-complete'])){
    $fields=array('complete_tier3'=>1);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from incomplete to complete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }
  if(!empty($_POST['t3-incomplete'])){
    $fields=array('complete_tier3'=>0);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from complete to incomplete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }

  //FPDP
  if(!empty($_POST['fpdp-complete'])){
    $fields=array('complete_fpdp'=>1);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from incomplete to complete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }
  if(!empty($_POST['fpdp-incomplete'])){
    $fields=array('complete_fpdp'=>0);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from complete to incomplete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }

  //WLS
  if(!empty($_POST['wls-complete'])){
    $fields=array('complete_wls'=>1);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from incomplete to complete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }
  if(!empty($_POST['wls-incomplete'])){
    $fields=array('complete_wls'=>0);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from complete to incomplete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }

  //SP
  if(!empty($_POST['sp-complete'])){
    $fields=array('complete_sp'=>1);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from incomplete to complete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }
  if(!empty($_POST['sp-incomplete'])){
    $fields=array('complete_sp'=>0);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from complete to incomplete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }

  //BL Elearning
  if(!empty($_POST['blelearning-complete'])){
    $fields=array('complete_blelearning'=>1);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from incomplete to complete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }
  if(!empty($_POST['blelearning-incomplete'])){
    $fields=array('complete_blelearning'=>0);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from complete to incomplete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }

  //BL Video
  if(!empty($_POST['blvideo-complete'])){
    $fields=array('complete_blvideo'=>1);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from incomplete to complete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }
  if(!empty($_POST['blvideo-incomplete'])){
    $fields=array('complete_blvideo'=>0);
    $db->update('users',$userId,$fields);
    logger($user->data()->id,"User Manager","Updated status for $userdetails->fname from complete to incomplete.");
    echo "<meta http-equiv='refresh' content='0'>";
  }

?>
<style media="screen">
.customcard {
  min-width: 35%;
}
</style>

<div class="container">
  <h2>Course Edits for <?=$userdetails->fname?></h2>
  <hr />
  <div class="card-deck">
    <div class="card customcard">
      <?php if(!$t2){?><img src="images/modules/tier2.png" class="card-img-top" alt="..."><?php }?>
      <?php if($t2){?><img src="images/modules/tier2_complete.png" class="card-img-top" alt="..."><?php }?>
      <div class="card-body">
        <h5 class="card-title">Tier 2</h5>
        <p class="card-text">Status: <?php if(!$t2){echo "incomplete";}else{echo "complete";}?></p>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <form class="" action="" method="post" name="tier2">
            <input type="submit" name="t2-complete" class="btn btn-primary" value="Mark Complete"/>
            <input type="submit" name="t2-incomplete" class="btn btn-primary" value="Mark Incomplete"/>
          </form>
        </div>
      </div>
    </div>

    <div class="card customcard">
      <?php if(!$t3){?><img src="images/modules/tier3.png" class="card-img-top" alt="..."><?php }?>
      <?php if($t3){?><img src="images/modules/tier3_complete.png" class="card-img-top" alt="..."><?php }?>
      <div class="card-body">
        <h5 class="card-title">Tier 3</h5>
        <p class="card-text">Status: <?php if(!$t3){echo "incomplete";}else{echo "complete";}?></p>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <form class="" action="" method="post" name="tier3">
            <input type="submit" name="t3-complete" class="btn btn-primary" value="Mark Complete"/>
            <input type="submit" name="t3-incomplete" class="btn btn-primary" value="Mark Incomplete"/>
          </form>
        </div>
      </div>
    </div>

    <div class="card customcard">
      <?php if(!$fpdp){?><img src="images/modules/fpdp.png" class="card-img-top" alt="..."><?php }?>
      <?php if($fpdp){?><img src="images/modules/fpdp_complete.png" class="card-img-top" alt="..."><?php }?>
      <div class="card-body">
        <h5 class="card-title">FPDP</h5>
        <p class="card-text">Status: <?php if(!$fpdp){echo "incomplete";}else{echo "complete";}?></p>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <form class="" action="" method="post" name="fpdp">
            <input type="submit" name="fpdp-complete" class="btn btn-primary" value="Mark Complete"/>
            <input type="submit" name="fpdp-incomplete" class="btn btn-primary" value="Mark Incomplete"/>
          </form>
        </div>
      </div>
    </div>

    <div class="card customcard">
      <?php if(!$wls){?><img src="images/modules/wls.png" class="card-img-top" alt="..."><?php }?>
      <?php if($wls){?><img src="images/modules/wls_complete.png" class="card-img-top" alt="..."><?php }?>
      <div class="card-body">
        <h5 class="card-title">WLS</h5>
        <p class="card-text">Status: <?php if(!$wls){echo "incomplete";}else{echo "complete";}?></p>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <form class="" action="" method="post" name="wls">
            <input type="submit" name="wls-complete" class="btn btn-primary" value="Mark Complete"/>
            <input type="submit" name="wls-incomplete" class="btn btn-primary" value="Mark Incomplete"/>
          </form>
        </div>
      </div>
    </div>

    <div class="card customcard">
      <?php if(!$sp){?><img src="images/modules/sp.png" class="card-img-top" alt="..."><?php }?>
      <?php if($sp){?><img src="images/modules/sp_complete.png" class="card-img-top" alt="..."><?php }?>
      <div class="card-body">
        <h5 class="card-title">Safe Passage</h5>
        <p class="card-text">Status: <?php if(!$sp){echo "incomplete";}else{echo "complete";}?></p>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <form class="" action="" method="post" name="sp">
            <input type="submit" name="sp-complete" class="btn btn-primary" value="Mark Complete"/>
            <input type="submit" name="sp-incomplete" class="btn btn-primary" value="Mark Incomplete"/>
          </form>
        </div>
      </div>
    </div>

    <div class="card customcard">
      <?php if(!$ble){?><img src="images/modules/blelearning.png" class="card-img-top" alt="..."><?php }?>
      <?php if($ble){?><img src="images/modules/blelearning_complete.png" class="card-img-top" alt="..."><?php }?>
      <div class="card-body">
        <h5 class="card-title">BL-Elearning</h5>
        <p class="card-text">Status: <?php if(!$ble){echo "incomplete";}else{echo "complete";}?></p>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <form class="" action="" method="post" name="blelearning">
            <input type="submit" name="blelearning-complete" class="btn btn-primary" value="Mark Complete"/>
            <input type="submit" name="blelearning-incomplete" class="btn btn-primary" value="Mark Incomplete"/>
          </form>
        </div>
      </div>
    </div>

    <div class="card customcard">
      <?php if(!$blv){?><img src="images/modules/blvideo.png" class="card-img-top" alt="..."><?php }?>
      <?php if($blv){?><img src="images/modules/blvideo_complete.png" class="card-img-top" alt="..."><?php }?>
      <div class="card-body">
        <h5 class="card-title">BL-Video</h5>
        <p class="card-text">Status: <?php if(!$blv){echo "incomplete";}else{echo "complete";}?></p>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <form class="" action="" method="post" name="blvideo">
            <input type="submit" name="blvideo-complete" class="btn btn-primary" value="Mark Complete"/>
            <input type="submit" name="blvideo-incomplete" class="btn btn-primary" value="Mark Incomplete"/>
          </form>
        </div>
      </div>
    </div>

    <div class="card customcard">
      <img src="images/modules/placeholder.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">COMING SOON</h5>
        <p class="card-text">Status:</p>
      </div>
      <div class="card-footer">
        <div class="text-center">
          <form class="" action="" method="post" name="">
            <input type="submit" name="" class="btn btn-primary" value="Mark Complete" disabled />
            <input type="submit" name="" class="btn btn-primary" value="Mark Incomplete" disabled />
          </form>
        </div>
      </div>
    </div>


  </div>
</div>


<!-- <div class="container">
  <hr />
  <div class="card-deck">




  </div>
</div> -->
