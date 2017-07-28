<?php include_once "resource/databaseConnection.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo $page_title; ?></title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.7/js/tests/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.7/docs/dist/js/bootstrap.min.js"></script>

  <!--  for user account  added from   http://bootsnipp.com  -->
  <link rel="stylesheet" href="custom_CSS/user_account.css">
  <link rel="stylesheet" href="custom_CSS/navbar_highlight_color.css">
  <link rel="stylesheet" href="custom_CSS/adminLInk.css">

  <!--  for user account  added from   http://bootsnipp.com  -->
  <link href="css/shop-homepage.css" rel="stylesheet">

  <!--  Side bar css and js , added from   http://bootsnipp.com/tags/sidebar  -->
  <link rel="stylesheet" href="custom_CSS/simple-sidebar.css" >
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" >
  <script src="custom_JS/sidebar.js"></script>

  <!--  js  & css for navbar highliting -->  
  <script src="custom_JS/navbar_highlight.js"></script>

  <!--  js  & css for view (grid and list) highliting -->  
  <link rel="stylesheet" type="text/css" href="view/view.css">
  <script type="text/javascript" src="view/view.js"></script>

  
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 0px;
      border-radius: 0;
    }
    .bottom_line {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    /*  mine search box   */
    .add-on .input-group-btn > .btn {
    border-left-width:0;left:-2px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }
    /* stop the glowing blue shadow */
    .add-on .form-control:focus {
     \box-shadow:none;
     -webkit-box-shadow:none; 
     border-color:#cccccc; 
    }
    .form-control {
    width:60%;
    background-color:#D3D3D3;
    color:black;}
  </style>

  <?php if($page_title == "Student Cart"): ?> <!-- Then show the slider -->
    <div class="row carousel-holder">
        <div class="col-md-12">             <!-- slider -->

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                  <img class="slide-image" src="images/bridge.jpeg" alt="">
                </div>
                <div class="item">
                  <img class="slide-image" src="images/slider1.jpg" alt="">
                </div>
                <div class="item">
                  <img class="slide-image" src="images/slider2.jpg" alt="">
                </div>
              </div>
              
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>
        </div>
      </div>
  <?php endif ?>
  <!-- = = = = = = = = = = = = = = = = = = = = = = = = =  navigation bar  starts  = = = = = = = = = = = = = = = = = = = = = = = =  -->
<nav class="navbar navbar-default" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php"><img src="images/dog_power.jpg" height="40px" width="40px" ></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active" onclick="glow1()" >  <a onclick="glow1()" href="home.php">Home</a>  </li>
        <li>  <a id="Test1"  href="products.php">Products</a>  </li>
        <li class="active">  <a href="deals.php">Deals</a> </li>
        <li>  <a href="stores.php">Stores</a> </li>
        <li>  <a href="contact.php" target="_blank">Contact Us</a>  </li>
        <!-- <li>  <a href="home.php">Home</a>  </li> -->

        <li>
          <form class="navbar-form" role="search">
                <div class="input-group add-on">
                  <input class="form-control" placeholder="   Search" name="search" id="search_id" type="text" >
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                  </div>
                </div>
          </form>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!--temp variable set in session varivale --> 
        <?php  $SESSION["u_name"] = "prashkant";   $SESSION["u_id"] = 874;  ?>

        <?php if($SESSION["u_name"] == "prashkant"|| $SESSION["u_id"] == 34) :?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user" ></span><?php echo "&nbsp;".$SESSION["u_name"] ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="user_account.php"><span class="glyphicon glyphicon-home "></span> &nbsp;&nbsp;Account</a></li>
                <li><a href="wishlist.php"><span class="glyphicon glyphicon-flag"></span> &nbsp;&nbsp;Wish List</a></li>
                <li><a href="likes.php"><span class="glyphicon glyphicon-heart"></span> &nbsp;&nbsp;Likes</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> <b> &nbsp;&nbsp;Logout</b></a></li>
            </ul>
          </li>
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <?php else: ?>
          <li><a href="signin_signup.php"><span class="glyphicon glyphicon-user"></span> Sign-in / Sign-up</a></li>
        <?php  endif ?>
      </ul>
    </div>
  </div>
</nav>
 <!-- = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = -->
<div class="bottom_line" style="background-color: #D3D3D3 ; margin-bottom: 10px; padding-left: 0px; padding-right: 0px; padding-top: 0px; padding-bottom: 1px;"></div>

<?php if($page_title != "Student Cart"):?>
  
<?php endif ?> 

</head>
