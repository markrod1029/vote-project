  <!-- Main Header -->
  <header class="main-header" style="background-color: #717A83;">
    <!-- Logo -->
    <a href="#" class="logo" style="background-color: #717A83;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>VS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="color: white; font-size: 22px; font-family: Times;">
        <marquee behavior="scroll" direction="left">Online Voting System</marquee>
      </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color: #717A83;">
      <!-- Sidebar toggle button -->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;">
              <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $user['firstname'].' '.$user['lastname']; ?></span>
            </a>
            <ul class="dropdown-menu" style="background-color: #4d5863; color: white;">
              <!-- User image -->
              <li class="user-header" style="background-color: #4d5863;">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $user['firstname'].' '.$user['lastname']; ?>
                  <small>Member since <?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
                </p>
              </li>
              <li class="user-footer" style="background-color: #90979e;">
                <div class="pull-left">
                  <a href="#profile" data-toggle="modal" class="btn btn-default btn-curve" style="background-color: #d2d5d8;" id="admin_profile">Update</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-curve" style="background-color: #d2d5d8;">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </nav>
    <!-- /.navbar -->
  </header>

<?php include 'includes/profile_modal.php'; ?>
