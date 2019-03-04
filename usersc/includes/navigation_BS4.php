

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?=$us_url_root?>"><img class="img-responsive" src="<?=$us_url_root?>users/images/logo.png" alt="" /></a>

  <?php if($user->isLoggedIn()){ //anyone is logged in?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#" style="pointer-events: none; cursor: default;" ><?php echo echousername($user->data()->id);?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=$us_url_root?>users/logout.php">Logout</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">

            <?php if (checkMenu(2,$user->data()->id)){  //Links for permission level 2 (Superuser) ?>
              <a class="dropdown-item" href="<?=$us_url_root?>users/admin.php">Admin Dashboard</a>
              <a class="dropdown-item" href="<?=$us_url_root?>users/admin.php?view=users">User Management</a>
              <a class="dropdown-item" href="<?=$us_url_root?>users/admin.php?view=permissions">User Permissions</a>
              <a class="dropdown-item" href="<?=$us_url_root?>users/admin.php?view=pages">System Pages</a>
              <a class="dropdown-item" href="<?=$us_url_root?>users/admin.php?view=messages">Messages Admin</a>
              <a class="dropdown-item" href="<?=$us_url_root?>users/admin.php?view=logs">System Logs</a>
              <div class="dropdown-divider"></div>
            <?php } // if user is logged in ?>


            <?php if (checkMenu(3,$user->data()->id)){  //Links for permission level 3 (Managers) ?>
              <a class="dropdown-item" href="<?=$us_url_root?>usersc/custom_list.php">Manager User List</a>
              <div class="dropdown-divider"></div>
            <?php } // if user is logged in ?>

              <a class="dropdown-item" href="<?=$us_url_root?>users/logout.php">Logout</a>
          </div>
        </li>

    <?php }else{ // if user is not logged in ?>

        <li class="nav-item">
          <a class="nav-link" href="<?=$us_url_root?>users/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=$us_url_root?>users/join.php">Register</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Options</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?=$us_url_root?>users/logout.php">Forgot Password</a>
            <?php if ($email_act){ //Only display following menu item if activation is enabled ?>
              <a class="dropdown-item" href="<?=$us_url_root?>users/login.php">Resend Activation Email</a>
            <?php }?>
          </div>
        </li>
      </ul>
    <?php } // if user is not logged in ?>
  </div>
</nav>
