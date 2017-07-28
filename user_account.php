<?php 
$page_title = "User Account";
include_once "resource/header.php"
?>

<body>
  <div class="container">
        <div class="row profile">
        <div class="col-md-3">
          <div class="profile-sidebar">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
              <img src="images/default_user.jpg" class="img-responsive" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">
                user-name 
              </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <div class="profile-userbuttons">
              <button type="button" class="btn btn-success btn-sm">change pic</button>
              <button type="button" class="btn btn-danger btn-sm">Edit profile</button>
            </div>
            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
              <ul class="nav">
                <li class="active">
                  <a href="#"><i class="glyphicon glyphicon-home"></i>Overview </a></li>
                <li>  <a href="#"><i class="glyphicon glyphicon-user"></i>Account Settings </a> </li>
                <li>  <a href="#" target="_blank"><i class="glyphicon glyphicon-ok"></i>History </a>  </li>
                <li>  <a href="#"><i class="glyphicon glyphicon-flag"></i>Help </a> </li>
              </ul>
            </div>
            <!-- END MENU -->
          </div>
        </div>
        <div class="col-md-9">
                <div class="profile-content">
                  Some user related content goes here...
                </div>
        </div>
      </div>
    </div>
    <center>
    <strong>Powered by <a href="index.php" >The Shop</a></strong>
    </center>
    <br>
    <br>

</body>

<div style="padding-top: 87px"> <?php include_once "resource/footer.php" ?>  </div>