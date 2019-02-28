<?php
    include "includes/db.php";
    session_start();
    #$connect = mysqli_connect("localhost", "root", "", "emeal");  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CLOTHING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab88174f9a49214"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--    <script type="text/javascript" src="js/main.js"></script>-->
    <script type="text/javascript">
        <?php  if(isset($_SESSION['user'])&&!empty($_SESSION['user'])){?>
        $(document).ready(function(){
            $("#sign").hide(); 
            $("#user").show();
        });
        <?php }?>
    </script>
    <style>
    .navbar-nav > li > a:hover {background:#8e7c69 !important;color:#fff !important;}
    .navbar-nav > li:last-of-type > a {border:0;}
    .navbar-default{
        background-color:#a79785;
        border-color:#a79785;
    }
    .navbar-default .navbar-nav>li>a {
        color: #fff;
        font-size: 1.5rem;
    }
    .navbar-default .navbar-brand{
        color: white;
    }
    .navbar-default .navbar-toggle .icon-bar{
        background-color: white;
    }
    @media ( min-width: 768px) {
        .navbar-nav > li > a {text-align:center;border-right:1px solid rgba(0,0,0,0.1)}
    }
    </style>

</head>
<body>
<div class="container-fluid">
    <div id="title">
        <p><span>Fashion</span> Closet</p>
    </div>
    <div id="user">
        
    </div>
	<nav class="navbar navbar-default equinav" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand">Menu</span>
		</div><!-- /.navbar-header -->
		
		<div class="collapse navbar-collapse">    
			<ul class="nav navbar-nav">
				<li><a href="#">HOME</a></li>
				<li><a href="#">POPULAR</a></li>
				<li><a href="#">CLOTHING</a></li>
				<li><a href="#">YOU MAY LIKE</a></li>
<!--				<li><a href="#">Contact Us</a></li>-->
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</div>
    <div class="gray">
       <div id="product_msg"></div>
        <div class="tabbar">
            <ol class="breadcrumb">
	           <li class="active">Clothing</li>
            </ol>
        </div>
                <div class="col col-md-2">
                <div id="get_size"></div>
            </div>
            <div class="col col-md-10">
                <div class="shopping-list">
                <div id="get_product"></div>
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