<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>UEMJ Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:yellow">
        <div class="container" >
            
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 
                <a class="navbar-brand" href="index.php" style="color:black">
                <img src='images/uem.png' alt="Logo" style="height: 40px; width: 70px;margin-left: -82px;margin-top: -12px;margin-bottom:-28px ; margin-right:20px; "> 
                <b >Department of CSE , UEM JAIPUR</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:black">
                        <a style="color:black" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					<li style="color:black">
                        <a style="color:black" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>About</a>
                    </li>
					
					<li><a style="color:black" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
				
				
								
	<li class="dropdown">
        <a style="color:black" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li> 
	  
	
	  
	  
	 <li>
                        <a style="color:black" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
         <style>
        #myCarousel .carousel-inner .item {
            height: 85vh; /* Set the height of the carousel item to the viewport height */
        }

        #myCarousel .carousel-inner .item .fill {
            width: 100%;
            height: 60%;
            background-size: cover; /* Scale the background image to cover the entire container */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat;
            background-size: contain;
            /* Do not repeat the background image */
        }
    </style>

        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/feedback2.png');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/feedback1.png');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/feedback3.png');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a> 
    </header></b>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               	
			<div class="col-sm-13" style="margin-top:60px;margin-bottom:80px">
    <h2><b>About Online Student Feedback System :- </b></h2><br>
    <ul>
        <li>Student Feedback System for college students has been developed, aiming to rate and analyze the college faculty’s performance.</li>
        <li>The Online Feedback Management System is a vital tool for fostering a culture of continuous improvement within educational institutions.</li>
        <li>It provides actionable data for faculty members and administrators, ultimately contributing to an enhanced learning experience.</li><br>
        <li>The system aims to:</li>
        <ul>
            <li>Improve teaching quality</li>
            <li>Support informed decision-making</li>
            <li>Encourage continuous improvement</li>
            <li>Enhance communication within the educational community</li> <br>
        </ul>
        <li>By collecting and analyzing student feedback, the system facilitates a more personalized and effective learning environment.</li>
        <li>Faculty members can utilize the feedback to tailor their teaching methods and adapt to the evolving needs of their students.</li>
        <li>Administrators can identify and address systemic issues, ensuring a high standard of education across the institution.</li>
        <li>The user-friendly interface ensures ease of use for both students and faculty members in the feedback submission process.</li>
        <li>Regular feedback cycles foster a collaborative and constructive relationship between students and faculty, promoting a positive educational atmosphere.</li>
    </ul>
</div>

			
			
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:black"><b>Developed By -  &nbsp;&nbsp;&nbsp;{ Subham Gourisaria, Shipra Shriparn & Atia Zareen  }</a> </span></b>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
