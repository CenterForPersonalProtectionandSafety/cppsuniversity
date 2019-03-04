
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="" href="<?=$us_url_root?>"><img class="img-responsive" src="<?=$us_url_root?>users/images/logo.png" alt="" /></a>
      </div>


      <?php if($user->isLoggedIn()){ //anyone is logged in?>

        <!-- Menu items for user logged in -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="">
              <a href="#" style="pointer-events: none; cursor: default;" ><?php echo echousername($user->data()->id);?></a>
            </li>
            <li>
              <a href="<?=$us_url_root?>users/logout.php">Logout</a>
            </li>
          </ul>

          <!-- Navbar that's justified right -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Dropdown menu for user logged in -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options </a>
              <ul class="dropdown-menu">

                <?php if (checkMenu(2,$user->data()->id)){  //Links for permission level 2 (Superuser) ?>
                <li><a href="<?=$us_url_root?>users/admin.php">Admin Dashboard</a></li>
                <li><a href="<?=$us_url_root?>users/admin.php?view=users">User Management</a></li>
                <li><a href="<?=$us_url_root?>users/admin.php?view=permissions">User Permissions</a></li>
                <li><a href="<?=$us_url_root?>users/admin.php?view=pages">System Pages</a></li>
                <li><a href="<?=$us_url_root?>users/admin.php?view=messages">Messages Admin</a></li>
                <li><a href="<?=$us_url_root?>users/admin.php?view=logs">System Logs</a></li>
                <li role="separator" class="divider"></li>
                <?php } // if user is logged in ?>

                <?php if (checkMenu(3,$user->data()->id)){  //Links for permission level 3 (Managers) ?>
                <li><a href="<?=$us_url_root?>usersc/custom_list.php">Manager User List</a></li>
                <li role="separator" class="divider"></li>
                <?php } // if user is logged in ?>

                <li><a href="<?=$us_url_root?>users/logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>

            <?php }else{// if user is logged in ?>

            <!-- Dropdown menu for users not logged in -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Help </a>
              <ul class="dropdown-menu">
                <li><a href="<?=$us_url_root?>users/logout.php">Forgot Password</a></li>
                <?php if ($email_act){ //Only display following menu item if activation is enabled ?>
                  <li><a href="<?=$us_url_root?>users/login.php">Resend Activation Email</a></li>
                <?php }?>
              </ul>
            </li>

          <!-- Menu items for users not logged in -->
          <ul class="nav navbar-nav navbar-right">
            <li class="">
              <a href="<?=$us_url_root?>users/login.php">Login</a>
            </li>
            <li>
              <a href="<?=$us_url_root?>users/join.php">Register</a>
            </li>
          </ul>

      <?php } // if user is not logged in ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
