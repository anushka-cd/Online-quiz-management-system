<?php 
include "connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register Now</title>
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
    top: 50%;
    transform: translateY(2%);
    left: auto;
    z-index: 10;
}
      </style>
</head>

<body>

    <div class="error-pagewrap" style="background-image: url(images/back21.jpg);background-repeat: no-repeat;
        min-height: 100vh;
    background-size: cover;
	background-position: center;
	float: left;
	width: 100%;
	padding:0px 15px;
	position: relative;">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3 style="color: white;">Register Now</h3>

			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" method="post" name="form1">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>FirstName</label>
                                    <input class="form-control" type="text" name="fname">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>LastName</label>
                                    <input type="text" name="lname"class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" name="password"class="form-control">
                            </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Contact</label>
                                    <input type="tel" name="contact" pattern="[0-9]{10}"class="form-control">
                                </div>
                              </div>
                            <div class="text-center">
                                <button type="submit" name="submit1"class="btn btn-success loginbtn"  style="border-radius:5px;color: #ad022d;background-color: transparent;border: 1px solid #ad022d;">Register</button>

                            </div>
                <!--hang on-->            <a href="login.php" style="background:#f9f5f600;color:black;text-align: center;margin-left: 89px;"> Already have an account? <span style="color: blue;">Login</span></a>
                            <div class="alert alert-success" id="success"style="margin-top: 10px; display: none;">
                                 <strong>Success!</strong> Registration successful.
                          </div>
                          <div class="alert alert-danger" id="failure" style="margin-top: 10px; display:none">
                                 <strong>Already exists!</strong> Username already exists.
                          </div>
                        </form>
                    </div>
                </div>
			</div>

		</div>   
    </div>
  <?php
if (isset($_POST["submit1"]))
{
//echo "testing...";
$count=0;
$res=mysqli_query($link,"select * from registrations where username='$_POST[username]'") or die(mysqli_error($link));
$count=mysqli_num_rows($res);
if($count>0){
?>
<script type="text/javascript">
document.getElementById("success").style.display="none";
document.getElementById("failure").style.display="block";
</script>
<?php
}
else{
mysqli_query($link,"insert into registrations values(NULL,'$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')") or die(mysqli_error($link));

?>
<script type="text/javascript">
document.getElementById("failure").style.display="none";
document.getElementById("success").style.display="block";
</script>
<?php
?>
<script>

    window.location="login.php";
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
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>