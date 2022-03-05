<?php 
session_start();
include "../connection.php";
?>


<!doctype html>

<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark"  style="background-image: url(../images/back21.jpg);background-repeat: no-repeat;
        min-height: 100vh;
    background-size: cover;
	background-position: center;
	float: left;
	width: 100%;
	padding:0px 15px;
	position: relative;">


    <div style="background-color: #21252900; font-size: 15px;font-weight: bold;" class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content" style="max-width: 671px;">
                <div style="color: white;margin-bottom: 78px;font-size: 60px" class="login-logo">
                  Login
                </div>
                <div class="login-form" style="height: 379px;">
                    <form action="" method="post" name= "form1">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="username" required>
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass_word" class="form-control" placeholder="Password" required>
                        </div>
                             <!--   <div class="checkbox">
                                    <label>
                                <input type="checkbox"> Remember Me
                            </label>
                                    <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                                </div>-->
                                <button type="submit" name="submit1" class="btn-light btn btn-primary btn-lg btn-block" style="border-radius:5px;padding: 12px 40px;

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
    outline: none;
">Sign in</button>
                                <a class="btn-light btn btn-primary btn-lg btn-block" href="index.php" style="border-radius:5px;margin: 4px 0px 0px 0px;font-size: 16px;
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
                                <div class="alert alert-danger" id="errormsg" style="margin-top: 10px;display: none;"><strong>Invalid!</strong> Username or Password :(
                             </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>

<?php
/*if(isset($_POST['submit1'])){
$count=0;
        $username=mysqli_real_escape_string($link,$_POST['username']);
        $password=mysqli_real_escape_string($link,$_POST['password']);
        $res=mysqli_query($link,"select * from  registrations where username='$username' && password='$password'");
        $count=mysqli_num_rows($res);
        if($count==0)
        {
            ?>
            <script>
            document.getElementById("errormsg").style.display="block";
            </script>
            <?php
        }
        else{
            $_SESSION["admin"]=$username;
              ?>
            <script>

                window.location="exam_category.php";
            </script>
            <?php
        }
  
  

}*/

if(isset($_POST['submit1']))
{
    $count=0;
    $res=mysqli_query($link,"select * from registrationadmin where username='$_POST[username]' && pass_word='$_POST[pass_word]'");
    $count=mysqli_num_rows($res);
    if($count==0)
    {
        ?>
        <script>
document.getElementById("errormsg").style.display="block";
</script>
<?php
    }
    else{
$_SESSION["admin"]=$_POST["username"];
          ?>
        <script>

            window.location="exam_category.php";
        </script>
        <?php
    }
}
?>
