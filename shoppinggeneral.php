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
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ab88174f9a49214"></script>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript">
        <?php  if(isset($_SESSION['user'])&&!empty($_SESSION['user'])){?>
        $(document).ready(function(){
            $("#sign").hide(); 
            $("#user").show();
        });
        <?php }?>
    </script>
</head>
<body>
    <div id="navigation">
        <div id="title">
            <p>Fashion Closet</p>
        </div>
        <ul id="nav">
            <li>HOME</li>
            <li>POPULAR</li>
            <li>GUESS YOU LIKE...</li>
            <li>CLOTHING</li>
        </ul>
        <div id="sign">
            <ul>
                <li><a href="login.html">Sign in</a></li>
                <li><a href="signup.php">Sign up</a></li>
            </ul>
        </div>
        <div id="user">
            <ul>
                <li>Welcome, <a><?php echo $_SESSION['user']?></a>
                    <ul class="subnav2">
                        <li><a href="userProfile.php">Profile</a></li>
                        <li><a href="includes/logout.php">Log out</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </div>
    <div class="gray">
       <div id="product_msg"></div>
        <div class="tabbar">
            <ol class="breadcrumb">
	           <li class="active">Shopping</li>
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
            <p>&copy;2018 eMeal Company. All Rights Reserved</p>
    </div>

</body>
</html>