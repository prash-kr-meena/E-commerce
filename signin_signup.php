
<!-- **********************************************   HTML PART   *******************************************************-->
<?php 	$page_title = 'Login form';
		include_once 'resource/header.php'; 	?>

<body> 

  <?php include_once 'partials/parseSignin.php'; #contain all login validation, processing , security 
        include_once 'partials/parseSignup.php';
  ?>

  <!-- ================================================   SIGN_UP  PART   ================================================-->
  <div class="container" style="padding-top: 30px;">    
      <div class="row">

        <div class="col-sm-8">
          <div class="panel panel-primary">
            <div class="panel-heading"><h2> &nbsp;&nbsp;Sign-up</h2><hr></div>
            <div class="panel-body">

              <form action="#" method="post" >
                <div class="form-group">
                  <label >E-mail:</label>
                  <input type="text" class="form-control" name="u_email" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <label >Username:</label>
                  <input type="text" class="form-control" name="u_name"  placeholder="Username">
                </div>
                <div class="form-group">
                  <label >Password:</label>
                  <input type="password" class="form-control" name="u_pass" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary pull-right" name="signup_sbt">Sign up</button>
              </form>

            </div>
            <div class="panel-footer"><b>signup through</b> -> gmail facebook and other social media</div>
          </div>
        </div>

          <!-- ================================================   SIGN_IN  PART   ================================================-->
        <div class="col-sm-4"> 

          <div class="panel panel-success">
            <div class="panel-heading"><h4> &nbsp;&nbsp;Sign-in</h4></div>
              <div class="panel-body">

              <form action="#" method="post" >
                <div class="form-group">
                  <label >Username:</label>
                  <input type="text" class="form-control" name="u_name"  placeholder="Username">
                </div>
                <div class="form-group">
                  <label >Password:</label>
                  <input type="password" class="form-control" name="u_pass"  placeholder="Password">
                </div>
                <div class="checkbox">
                  <label>   <!--the value 'yes' will be sent when it is set and the form is submitted , so in the $_POST['remember']-->
                  <input type="checkbox" checked="true" value="yes" name="u_remember">Remember me. <!--one remember can be used for remembering the card-->
                  </label>
                  <button type="submit" class="btn btn-primary pull-right" name="signin_sbt">Sign in</button>
                </div>
              </form>
            </div>
            <div class="panel-footer"><a href="password_recovery.php">Forgot password ?</a> </div>
          </div>

          <!-- = = = == = = == = = == = = == = = =     SHOWING ERRORS      = = = == = = == = = == = = == = = = = =-->  
        
          <!-- ===============================   php for signin part   ============================-->
          <?php if (isset($formErrors_signin) && $formErrors_signin != NULL) :?>
              <div class='alert alert-danger'> 
                <?php //print_r($formErrors_signin); 
                  foreach ($formErrors_signin as $key => $value) {
                    echo "- ".$value."<br>";
                  }
                ?> 
              </div>
          <?php endif ?> 
          <!-- ===============================   php for signup part   ============================-->
          <?php if (isset($formErrors_signup) && $formErrors_signup != NULL) :?>
              <div class='alert alert-danger'> 
                <?php //print_r($formErrors_signup); 
                  foreach ($formErrors_signup as $key => $value) {
                    echo "- ".$value."<br>";
                  }
                ?> 
              </div>
          <?php endif ?> 
          <!-- ===================================================================================-->
        </div>
      </div>
    </div>
</body>

<div style="padding-top: 180px"> <?php include_once "resource/footer.php" ?>  </div>



