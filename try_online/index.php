<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>QuizzTime</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles1.css"/>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>

		</style>
</head>
<body>

  <!-- Start Header -->
   <header>
   	  <div class="container">
   	  	  <div class="logo">
   	  	  	  <a href=""><span>Q</span>uizzTime</a>
   	  	  </div>
   	  	  <div class="trigger-main">
   	  	  	 <a href="javascript:void(0);" class="ham-burger">
   	  	  	 	 <span></span>
   	  	  	 	 <span></span>
   	  	  	 </a>
   	  	  </div>
   	  	  <div class="navbar">
   	  	  	  <ul>
   	  	  	  	  <li><a href="#home" class="active">Home</a></li>
   	  	  	  	  <li><a href="#about">About</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#port">Login</a></li>
   	  	  	  	  <li><a href="#port">Create or join quiz</a></li>
   	  	  	  	 <!----<li><a href="#team">Team</a></li>-->
   	  	  	  	  <li><a href="#blog">Blog</a></li>
				<li><a href="#contact">Contact</a></li>
   	  	  	  </ul>
   	  	  </div>
   	  </div>
   </header>
  <!-- End Header -->

  <!-- Start Home -->
    <section class="home" id="home">
       <div class="container">
       	   <div class="home-text">
       	   	     <h1>Welcome to QuizzTime</h1>
					   <!--<h3>Frontend Developer</h3>-->
					<a href="#port">  <button class="started" style="width:320px;height: 60px;border-radius: 39px;background-color:  #ad022d;border-color:#ad022d ;font-size: larger; color:white;font-weight: bold ; text-align: center;text-shadow:2px 2px 4px #000000;">Get started  &nbsp;&nbsp; &nbsp;<i class="fas fa-arrow-right fa-10x" style="color:white; font-size: 30px;text-shadow:2px 2px 4px #000000;"></i></button></a> 
			  
					  <!---- <marquee direction="left" behavior="slide" width="1300px">	-->	</div>
       </div>
    </section>
  <!-- End Home -->
 
  <!-- Start About -->
    <section class="about" id="about">
       <div class="container">
       	  <h2 class="title">About</h2>
       	  <div class="about-content">
       	  	  <div class="img">
       	  	<img src="images/person_holding_phone.png" alt="me">
       	  	  </div>
       	  	  <div class="description">
       	  	  	<!--  <h4>Welcome to QuizzTime</h4>-->
						 <h5>Using QuizzTime for Distance Learning</h5>
						 <p style="text-align: justify;">Given the current covid-19 situation where only online classes are
							being conducted, the evaluation of students by traditional tests are
							impossible. So there arises a need to go for other alternatives. One
							such alternative is the online quiz portal system. </p>
							<p style="text-align: justify;">The administrators, instructors, students who are attending the
								online quiz can communicate with the system through this project,
								thus facilitating effective implementation and monitoring of various
								activities of online quizzes like conducting the quiz as per the
								schedule and delivering the result to students. And the details of the
								students who give the quiz will be maintained by the administrator.
								The admin can view and manage the quiz questions, user’s response
								and give them rankings.</p>
       	  	  	  <p>Students ALWAYS see questions on their own screen.</p>
						 <p>Bring people together with live quizzes</p>
						 <p>Assign quizzes and engage </p>
       	  	  	  <p>
       	  	  	  <!----	<button type="button" class="btn-bg">Donwload CV</button>
       	  	  	  	<button type="button" class="btn-light">Hire Me</button>-->
       	  	  	  </p>
       	  	  </div>
       	  </div>
       </div>
    </section>
  <!-- End About -->

  <!-- Start Service -->
    <section class="services" id="services">
    	<div class="container">
    		 <h2 class="title">Services</h2>
    		 <div class="services-content">
    		 	 <div class="card">
    		 	 	  <div class="box">
    		 	 	  	  <div class="icon">
								  <!----<span class="fa fa-laptop"></span>-->
								  <span   class="fas fa-rocket"></span>
    		 	 	  	  </div>
    		 	 	  	  <h3>Brand Identity</h3>
    		 	 	  	  <p>Engage your audience in a unique and fun way and connect them to your brand or learning material.</p>
    		 	 	  </div>
    		 	 </div>
    		 	 <div class="card">
    		 	 	  <div class="box">
    		 	 	  	  <div class="icon">
    		 	 	  	  	 <span class="fas fa-futbol"></span>
    		 	 	  	  </div>
    		 	 	  	  <h3>Sports & events</h3>
    		 	 	  	  <p>Image questions to tell your story  while your guests are waiting for the sport game to begin or continue.</p>
    		 	 	  </div>
    		 	 </div>
    		 	 <div class="card">
    		 	 	  <div class="box">
    		 	 	  	  <div class="icon">
    		 	 	  	  	 <span  class="fas fa-bullhorn"></span>
    		 	 	  	  </div>
    		 	 	  	  <h3>Public Speakers</h3>
    		 	 	  	  <p>Ensure your speaking engagements are memorable by adding the interactivity of a quiz
							</p>
    		 	 	  </div>
    		 	 </div>
    		 	 <div class="card">
    		 	 	  <div class="box">
    		 	 	  	  <div class="icon">
								  <!---- <span class="fas fa-user-tie"></span>-->
								  <span class="fas fa-user-graduate"></span>
    		 	 	  	  </div>
    		 	 	  	  <h3>Corporate training</h3>
    		 	 	  	  <p>Make your training more effective and interesting by adding quizes and enhance the quality of education.
							</p>
    		 	 	  </div>
    		 	 </div>
    		 	 <div class="card">
    		 	 	  <div class="box">
    		 	 	  	  <div class="icon">
    		 	 	  	  	 <span class="fa fa-support"></span>
    		 	 	  	  </div>
    		 	 	  	  <h3>Support</h3>
    		 	 	  	  <p>A large number of participants, with instant results of your online quiz by getting a better overview.</p>
    		 	 	  </div>
    		 	 </div>
    		 	 <div class="card">
    		 	 	  <div class="box">
    		 	 	  	  <div class="icon">
								   <span class="fas fa-chalkboard"></span>
    		 	 	  	  </div>
    		 	 	  	  <h3>Education</h3>
    		 	 	  	  <p>Are your students retaining your lessons? Find out in real time!and help improve their knowledge </p>
    		 	 	  </div>
    		 	 </div>
    		 </div>
    	</div>
    </section>
 <!-- End Service -->


 <!-- Start choose -->
    <section class="port" id="port">
    	<div class="container">
    		 <h2 class="title">I am a..</h2>

    		 <div class="port-content">
    		 	 <a href="Admin/index.php"><div class="card" style="margin-right: 350px;">
    		 	  	  <div class="box">
    		 	  	  	  <h3>Teacher</h3>
    		 	  	  	  <h4>Create quiz</h4>
    		 	  	  	  <img src="images/teacher6.PNG" alt="port"/>
    		 	  	  </div>
    		 	  </div></a>
    		 	 <a href="register.php"> <div class="card">
    		 	  	  <div class="box">
    		 	  	  	  <h3>Student</h3>
    		 	  	  <h4>Attend quiz</h4>
    		 	  	  	  <img src="images/student4.jpg" alt="port"/>
    		 	  	  </div>
    		 	  </div></a>
    		 	
    		 	  
    		 </div>
    	</div>
    </section>
 <!-- End Portfolio -->

 

 <!-- Start Blog -->
   <section class="blog" id="blog">
   	 <div class="container">
   	 	   <h2 class="title">Blog</h2>
   	 	   <div class="blog-content">
   	 	   	  <div class="card">
   	 	   	  	  <div class="box">
   	 	   	  	  	  <img src="images/css3.png" alt="blog" />
   	 	   	  	  	  <h4>july 04,2019 </h4>
   	 	   	  	  	  <h3>What is Css ?</h3>
   	 	   	  	  	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
   	 	   	  	  <!--	  <p><button type="button" class="btn-bg">Read More</button></p>-->
   	 	   	  	  </div>
   	 	   	  </div>
   	 	   	  <div class="card">
   	 	   	  	  <div class="box">
   	 	   	  	  	  <img src="images/html.png" alt="blog" />
   	 	   	  	  	  <h4>jun 12,2019 </h4>
   	 	   	  	  	  <h3>What is Html ?</h3>
   	 	   	  	  	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
   	 	   	  	<!--  	  <p><button type="button" class="btn-bg">Read More</button></p>-->
   	 	   	  	  </div>
   	 	   	  </div>
   	 	   	  <div class="card">
   	 	   	  	  <div class="box">
   	 	   	  	  	  <img src="images/php2.jpg" alt="blog" />
   	 	   	  	  	  <h4>july 16,2019 </h4>
   	 	   	  	  	  <h3>What is Php ?</h3>
   	 	   	  	  	  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
   	 	   	  	  	<!--  <p><button type="button" class="btn-bg">Read More</button></p>-->
   	 	   	  	  </div>
   	 	   	  </div>
   	 	   </div>
   	 </div>
   </section>
 <!-- End Blog -->

 <!-- Start Contact -->
   <section class="contact" id="contact">
   	 <div class="container">
   	 	  <h2 class="title">Contact Us</h2>
   	 	  <div class="contact-content">
   	 	  	  <form action="" method="post" name="form2">
   	 	  	  	 <input type="text" placeholder="Name" name="name"/>
   	 	  	  	 <input type="text" placeholder="Email" name="email"/>
   	 	  	  	 <input type="text" placeholder="Subject" name="Subject"/>
   	 	  	  	 <textarea  placeholder="Message" name="Message" ></textarea>
   	 	  	  	 <button class="btn-light" name="submit1">Send Message</button>
   	 	  	  </form>
   	 	  </div>
   	 </div>
   </section>
 <!-- End Contact -->
 
 <!-- Start Footer -->
   <footer>
   	  <div class="container">
   	  	  <div class="footer-content">
   	  	  	  <div class="box">
   	  	  	  	  <div class="icon">
   	  	  	  	  	 <span class="fa fa-phone"></span>
   	  	  	  	  </div>
   	  	  	  	  <h4>Phone</h4>
   	  	  	  	  <p>+91 8393993993</p>
   	  	  	  </div>
   	  	  	  <div class="box">
   	  	  	  	  <div class="icon">
   	  	  	  	  	 <span class="fa fa-envelope"></span>
   	  	  	  	  </div>
   	  	  	  	  <h4>Eamil</h4>
   	  	  	  	  <p>QuizzTime@info.com</p>
   	  	  	  </div>
   	  	  	  <div class="box">
   	  	  	  	  <div class="icon">
   	  	  	  	  	 <span class="fa fa-map-marker"></span>
   	  	  	  	  </div>
   	  	  	  	  <h4>Location</h4>
   	  	  	  	  <p>Sec-95, New Delhi 110020</p>
   	  	  	  </div>
   	  	  </div>
   	  	  <div class="social-links">
   	  	  	 <ul>
   	  	  	 	 <li><a href=""><span class="fab fa-facebook"></span></a></li>
   	  	  	 	 <li><a href=""><span class="fab fa-linkedin"></span></a></li>
   	  	  	 	 <li><a href=""><span class="fab fa-skype"></span></a></li>
   	  	  	 	 <li><a href=""><span class="fab fa-instagram"></span></a></li>
   	  	  	 </ul>
   	  	  </div>
   	  </div>
   </footer>
 <!-- End Footer -->



<!-- jquery code -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		var bottom=$("header").outerHeight();
		var header=$("header").offset().top + bottom;
     $(window).scroll(function(){
          // header fixed only when window width greater than 991px
         if($(window).width()>991){
     	if($(window).scrollTop()>=header){
     		$("header").addClass("sticky")
     	}
     	else{
     	 $("header").removeClass("sticky")	
     	}
     }
     })

     // navbar active link

     $(".navbar ul li a").click(function(){
     	 $(".navbar ul li a").removeClass("active")
     	 $(this).addClass("active");
     })
  
    $(".ham-burger").click(function(){
    	$(this).toggleClass("active")
    	$(".navbar").toggleClass("open");
    })

	})

</script>
<?php
if (isset($_POST["submit1"]))
{
//echo "testing...";
mysqli_query($link,"insert into contact_home values('$_POST[name]','$_POST[email]','$_POST[Subject]','$_POST[Message]')") or die(mysqli_error($link));
}
?>
</body>
</html>





