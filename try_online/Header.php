

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Online Quiz System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles1.css">

</head>

<body>

    <div class="all-content-wrapper">

        <div class="header-advance-area">
            <div class="header-top-area">
                <!--<div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Select Exam &nbsp;&nbsp;<i class="fas fa-pencil-alt"></i></a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Last results &nbsp;&nbsp;<i class="fas fa-poll"></i></a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Log out &nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/avatar-mini2.jpg" alt="" />
															<span class="admin-name">User</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                             
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--->
                <header  style="padding: 0px;    height: 58px; background:#272c33;position: fixed;
background-color: #222222;">
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
                         <?php
                         if(!isset($_SESSION["exam_category"]))
                         {
                             ?>
   	  	  	  	  <li><a href="index.php" class="active">Home</a></li>
   	  	  	  	  
                    <li><a href="select_exam.php">Select Exam </a></li>
                    <li><a href="old_exam_results.php">Results</a></li>
                    <?php
                         }
                    ?>
					<li><a href="logout.php">Logout</a></li>
   	  	  	  	 <!-- <li><a href="#port">Create or join quiz</a></li>-->
   	  	  	  	 <!----<li><a href="#team">Team</a></li>-->
   	  	  	  	 <!-- <li><a href="#blog">Blog</a></li>-->
              <!--  <li><a href="#contact">Contact</a></li>&nbsp;-->
              <span>  <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"  >
														<!--<img src="img/avatar-mini2.jpg" alt="" />-->
                                                        <i class="far fa-user-circle" style="font-size:20px;color:white;font-weight:4px;margin-right:0px">&nbsp;&nbsp;&nbsp;<span class="admin-name" style="color: white;margin-right:0px;"><?php echo $_SESSION["username"]; ?></span></i>
														<!--	<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>-->
                                                        </a>
              </span>
   	  	  	  </ul>
   	  	  </div>
   	  </div>
   </header>
            </div>
            <!-- Mobile Menu start -->

            <!-- Mobile Menu end -->
            <div class="breadcome-area" style="margin-top: 40px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
                            <div class="breadcome-list">
                                <div class="row">

                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12 text-right">
                                        <ul class="breadcome-menu">
                                            <li><div id="countdowntimer" style="display: block;"></div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        setInterval(function(){
timer();
        },1000);
        function timer()
    {
    
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
        if(xmlhttp.responseText=="00:00:01")
                    {
                        window.location="result.php";
                    }
                    document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;
    }
    };
    xmlhttp.open("GET","forajax/load_timer.php",true);
    xmlhttp.send(null);
    
     }
     </script>
