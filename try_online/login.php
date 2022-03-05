<?php 
session_start();
include "connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style>

.error-pagewrap::before{
	content: '';
	position: absolute;
	left:0;
	top:0;
	height: 100%;
	width: 100%;
	z-index: 1;
	background-color: #000000;
	opacity: 0.7;
}
.content-error{
position: absolute;
    top: 171%;
    transform: translateY(2%);
    left: auto;
    z-index: 10;
    width: 477px;
}


      </style>
</head>

<body style="background-image: url(images/back21.jpg);background-repeat: no-repeat;
        min-height: 100vh;
    background-size: cover;
	background-position: center;
	float: left;
	width: 100%;
	padding:0px 15px;
	position: relative;">

	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3 style="font-size:40px;  color: white;">LOGIN</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" method="post" name="form1">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                 </div>

                            <button type="sumbit" name="loginbtn" class="btn btn-success btn-block loginbtn" style="
font-size: 16px;
color: #ad022d;
background-color: transparent;
font-weight: 400;
border: 1px solid #ad022d;
letter-spacing: .5px;
cursor: pointer;
transition: all .5s ease;
box-sizing: border-box;
    text-decoration: none;
    outline: none;">Login</button>
                            <a class="btn btn-default btn-block" href="register.php" style="height:39px;border-radius:5px;margin: 4px 0px 0px 0px;
                            
font-size: 16px;
color: #ad022d;
background-color: transparent;
font-weight: 400;
border: 1px solid #ad022d;
letter-spacing: .5px;
cursor: pointer;
transition: all .5s ease;
box-sizing: border-box;
    text-decoration: none;
    outline: none;">Register</a>

                            <div class="alert alert-danger" id="failure" style="margin-top: 10px;display: none">
                                 <strong>Does not match</strong> Invalid Username or Password.
                          </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>   
    </div>
    <?php

    if(isset($_POST['loginbtn']))
    {
        $count=0;
        $res=mysqli_query($link,"select * from registrations where username='$_POST[username]' && password='$_POST[password]'");
        $count=mysqli_num_rows($res);
        if($count==0)
        {
            ?>
            <script>
document.getElementById("failure").style.display="block";
</script>
<?php
        }
        else{
            $_SESSION["username"]=$_POST["username"];
              ?>
            <script>

                window.location="select_exam.php";
            </script>
            <?php
        }
    }
    ?>

    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery-price-slider.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>


</body>

</html>