<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />

    <title>CLOTHING</title>
    <link
      rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css"/>
    
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <style>

    </style>

    <div class="container-fluid">
     <div class="row" style="margin:0px;">
         
        <div class="col-lg-3">
      <div id="title">
        <p><span>Fashion</span> Closet</p>
      </div>
      </div>
     <div class="col-lg-6 col-md-10">
      <nav class="navbar navbar-default equinav" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="navbar-brand">Menu</span>
        </div>
        <!-- /.navbar-header -->

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav" style="width:100.1%;">
            <li><a href="#">HOME</a></li>
            <li><a href="#">POPULAR</a></li>
            <li><a href="#">CLOTHING</a></li>
            <li><a href="#">YOU MAY LIKE</a></li>
            <!--				<li><a href="#">Contact Us</a></li>-->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
      </div>
      <div id="user-sign" class="col-lg-3 col-md-2">             
<!--
      <div id="sign">
        <ul>
            <li><a href="login.html">Sign in</a></li>
            <li><a href="signup.php">Sign up</a></li>
        </ul>
       </div>
-->
       <div id="user">
        <ul>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <img src="icon/AI_user.png" alt="user icon"><span class="caret"></span>
                </a>
            <ul class="dropdown-menu">
            <li>
                <a href="#">Cart</a></li>
            <li>
                <a href="#">Closet</a>
            </li>
            <li>
                <a href="#">My profile</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">Log out</a></li>
            </ul>
            </li>
            <li><p>User</p></li>
            
        </ul>
        </div>
      </div>
       </div>
    </div>
    <div class="gray">
       <div id="product_msg"></div>
        <div class="tabbar">
            <ol class="breadcrumb">
	           <li class="active">Clothing</li>
            </ol>
        </div>
        <div class="row">
            <div class="col col-md-2">
                    <div id="get_category">
                        
                    </div>
            </div>
            <div class="col col-md-10">
                <div class="shopping-list">
                    <div id="get_product"> 
                       <div class="product_box">
                            <a href="itmedetail.php">
                                <img src="" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfloat"></div>
    </div>
    <div id="footer">
      <p>&copy;2019 Fashion Closet Company. All Rights Reserved</p>
    </div>
    <script src="js/index.js"></script>
  </body>
</html>
