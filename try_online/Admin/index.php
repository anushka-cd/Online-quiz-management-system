
<?php 
include "../connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>


</style>
</head>

<body style="background-image: url(../images/back21.jpg);background-repeat: no-repeat;
        min-height: 100vh;
    background-size: cover;
	background-position: center;
	float: left;
	width: 100%;
	padding:0px 15px;
	position: relative;" >

<div class="container" >
  <h2 style="text-align: center;">Register</h2>

  <form action="" method="post" name= "form1" style="background: white;
text-shadow: none;height:650px;margin: auto;width: 50%;padding: 10px;"><!--background: #b3d4fc;-->
  
  <div class="form-group col-lg-10" >
      <label for="name">FirstName:</label>
      <input type="text" class="form-control" id="usr" placeholder="" name="f_name" style="text-align:left;
            width: 507px;">
    </div>
    <div class="form-group col-lg-10">
      <label for="name">LastName:</label>
      <input type="text" class="form-control" id="usr" placeholder="" name="l_name" style="text-align:left;
            width: 507px;">
    </div>
    <div class="form-group col-lg-10">
      <label for="name">UserName:</label>
      <input type="text" class="form-control" id="usr" placeholder="" name="username" style="text-align:left;
            width: 507px;">
    </div>
   
    <div class="form-group col-lg-10">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="e_mail" style="text-align:left;
            width: 507px;">
    </div>
    <div class="form-group col-lg-10">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass_word" style="text-align:left;
            width: 507px;">
    </div>
    <div class="form-group col-lg-10">
      <label for="name">Contact:</label>
      <input type="tel" name="contact" pattern="[0-9]{10}"class="form-control" style="text-align:left;
            width: 507px;">
     
    </div>

   <div class="form-group col-lg-8">
   <button type="submit" name="submit" class="btn btn-default" style="text-align:center;
            width: 507px;font-size: 16px;
color: #ad022d;
background-color: transparent;
font-weight: 400;
border: 1px solid #ad022d;
letter-spacing: .5px;
cursor: pointer;
transition: all .5s ease;
box-sizing: border-box;
    text-decoration: none;
    outline: none;">Register</button>
   </div>
   <div class="form-group col-lg-10" style="padding-right: 90px;
padding-left: 63px;">
   <a href="login.php" style="background:#f9f5f600;color:black;text-align: center;margin: 89px;"> Already have an account? <span style="color: blue;">Login</span></a>
   <div>
   <div class="form-group col-lg-8">
   <div class="alert alert-success" id="success"style="margin-top: 40px; display: none;width: 400px; text-align:center">
                                 <strong>Success!</strong> Registration successful.
                          </div>
                          <div class="alert alert-danger" id="failure" style="margin-top: 40px; display:none;width: 400px;  text-align:center">
                                 <strong>Already exists!</strong> Username already exists.
                          </div>
                          </div>
  </form>
 
</div>
<?php
if (isset($_POST["submit"]))
{

$count=0;
$res=mysqli_query($link,"select * from registrationadmin where username='$_POST[username]'") or die(mysqli_error($link));
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
mysqli_query($link,"insert into registrationadmin values(NULL,'$_POST[f_name]','$_POST[l_name]','$_POST[username]','$_POST[e_mail]','$_POST[pass_word]','$_POST[contact]')") or die(mysqli_error($link));

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

</body>
</html>
