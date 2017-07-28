<?php 
$page_title = "products";
include_once "resource/header.php"
?>

<body>

<div style="padding-top: 0px" class="container"><!-- Page Content -->

  <nav class="navbar navbar-default" role="navigation">  <!-- navigation bar for the product page  -->
    
    <div class="container-fluid"> <!-- Brand and toggle get grouped for better mobile display -->
      
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><b>&nbsp; &nbsp;Categories</b></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">list-view</a></li>
          <li><a href="#">grid-view</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
  </nav><!-- /.navbar -->
  <div class="bottom_line" style="background-color: #D3D3D3 ; margin-bottom: 10px; padding-left: 0px; padding-right: 0px; padding-top: 3px; padding-bottom: 3px;"></div>
    <!-- = = = = = = = = = = = = = = = = = = = = = = = = = = = NAVIGATION BAR ENDS = = = = = = = = = = = = = = = = = = = = = = = = = = = = = -->

  <div class="row">
   
    <div class="col-sm-4 col-md-3 sidebar"> 
      <div class="mini-submenu"> <!-- this is the collapse button -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </div>
      <div class="list-group">
        <span href="#" class="list-group-item active">Products<span class="pull-right" id="slide-submenu"><i class="fa fa-times"></i></span> </span>
        <?php 
          echo "<a href=\"#\" class=\"list-group-item\">
              <i class=\"fa fa-book fa-fw\"></i> Lorem ipsum <span class=\"badge\">34</span>
              </a>"?>
      </div>    
    </div>

    <div class="col-md-9">
      <div class="row carousel-holder">

        <div style="padding-bottom: 10px" class="col-md-12">             <!-- slider -->

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
                  <img class="slide-image" src="images/bridge.jpeg" alt="">
                </div>
                <div class="item">
                  <img class="slide-image" src="images/bridge.jpeg" alt="">
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
              <!--= = = = = = = = = = = = = = = = = = = = =  slider ends = = = = = = = = = = = = = = = = = = = = = = = = = = =  -->
      </div>
              
                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$24.99</h4>
                                <h4><a href="#">First Product</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$64.99</h4>
                                <h4><a href="#">Second Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div></div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$84.99</h4>
                                <h4><a href="#">Fourth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$94.99</h4>
                                <h4><a href="#">Fifth Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

</body>

<!-- 
<div class="row">
    <div class="col-sm-4 col-md-3 sidebar">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div class="list-group">
        <span href="#" class="list-group-item active">
            Submenu
            <span class="pull-right" id="slide-submenu">
                <i class="fa fa-times"></i>
            </span>
        </span>
        <?php 
          // while () {
          // }
          echo "<a href=\"#\" class=\"list-group-item\">
          <i class=\"fa fa-book fa-fw\"></i> Lorem ipsum <span class=\"badge\">34</span>
          </a>"
         ?>
    </div>        
</div>
</div>



<div class="col-md-3">
      <div class="list-group">
        <span href="#" class="list-group-item active">
            Submenu
            <span class="pull-right" id="slide-submenu">
                <i class="fa fa-times"></i>
            </span>
        </span>
        <?php 
          // while () {
          // }
          echo "<a href=\"#\" class=\"list-group-item\">
          <i class=\"fa fa-book fa-fw\"></i> Lorem ipsum <span class=\"badge\">34</span>
          </a>"
         ?>
    </div>
    </div>
     -->
<div style="padding-top: 10px"> <?php include_once "resource/footer.php" ?>  </div>