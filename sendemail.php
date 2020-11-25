<?php
if(isset($_POST['email'])) {



    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "info@reachoutsouthafrica.co.za";

    $email_subject = $_POST['subject'];





    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    // validation expected data exists



    if(!isset($_POST['first_name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['telephone']) ||

        !isset($_POST['comments'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }



    $first_name = $_POST['first_name']; // required

    $email_from = $_POST['email']; // required

    $telephone = $_POST['telephone']; // not required

    $comments = $_POST['comments']; // required



    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {

    $error_message .= 'The First Name you entered does not appear to be valid.<br />';

  }

  if(strlen($comments) < 2) {

    $error_message .= 'The Comments you entered do not appear to be valid.<br />';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "Form details below.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Name: ".clean_string($first_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Phone Number: ".clean_string($telephone)."\n";

    $email_message .= "Subject: ".clean_string($email_subject)."\n\n\n";
    
    $email_message .= "Message \n".clean_string($comments)."\n";





// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | ROSA</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <header id="header">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <div class="stop-bars">
                <div class="container">
                    <div class="row" style="text-align: right;">
                        <div class="col-sm-6 col-xs-4">    
                            <div class="stop-numbers">
                                <a href="#"> </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-8">
                            <div class="stop-numbers"><a href="login.html">Login</a> &nbsp; &nbsp; <a href="register.html">Sign up</a></div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/rosa_logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About</a></li>
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ROSA Impact <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Previous Projects &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="under_privileged.html">Underprivileged</a></li>
                                        <li><a href="pregnancy_abuse.html">Pregnancy/Abuse</a></li>
                                        <li><a href="blind_society.html">Blind Society</a></li>
                                        <li><a href="education.html">Education</a></li>
                                        <li><a href="hospital.html">Hospital</a></li>
                                        <li><a href="environmental_care.html">Environmental Care</a></li>
                                    </ul>
                                </li>
                                <li><a href="testimonies.html">Testimonials</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ROSA Events <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="rosa_launch.html">ROSA Launch</a></li>
                                <li><a href="heritage_day-parade.html">Heritage Day Parade</a></li>
                                <li><a href="fun_walk.html">ROSA Fun Walk</a></li>
                                <li><a href="expeditions.html">ROSA Expeditions</a></li>
                                <li><a href="upcoming_events.html">Upcoming Events</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get Involved <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="prayer.html">Prayer Network</a></li>
                                <li><a href="rhapsody.html">Rhapsody Partnership</a></li>
                                <li><a href="project_sponsorship.html">Project Sponsorship</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Share <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="join_me_ecard.php">Join Me Card</a></li>
                                <li><a href="selfie.html">Selfie Moments</a></li>
                                <li><a href="expectations.html">Expectations</a></li>
                                <li><a href="testimony.html">Testimony</a></li>
                                <li><a href="rosa_faces.html">Faces of ROSA</a></li>
                                <li><a href="eye_witness.html">I-Witness</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <!--li><a href="projects.html">Projects</a></li-->
                                <li><a href="contuct.html">ROSA Secretariat</a></li>
                                <li><a href="contact-us.html">Rhapsody Outlets</a></li>
                            </ul>
                        </li>        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->
	
    <section id="contact-info" class="pricing-page">
        <div class="center">                
            <h2>How To Reach Us?</h2>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <!--iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="-->
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3583.230684149042!2d28.00278631502772!3d-26.09138738348817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957490e5d637b9%3A0x1e502aee225b895d!2s333+Pretoria+Ave%2C+Ferndale%2C+Randburg%2C+2194!5e0!3m2!1sen!2sza!4v1505387900408" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><!--/iframe-->
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>RANDBURG</h5>
                                    <p>333 Pretoria Avenue <br>
                                    Cnr. Harley & Bram Fischer <br>
									Johannesburg<br>
									Gauteng </p>                                
                                    <p>Tel: +27 11 781 8340-4 <br>
                                    Email Address:info@domain.com</p>
                                </address>
								<br>
                                <address>
                                    <h5>CAPE TOWN</h5>
                                    <p>35 Brickfield Road <br>
                                    Salt River</p>
                                    <p>Tel: +27 21 447 2004 <br>
                                    Email Address:info@domain.com</p>
                                </address>
								<br>
								<address>
                                    <h5>DURBAN</h5>
                                    <p>110 Williams Road <br>
									Umbilo<br>
									KwaZulu-Natal</p>
                                    <p>Tel: +27 31 3018851 / +27 61 960 1791<br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>SANDTON</h5>
                                    <p>9 Dartfield Road <br>
                                    Kramerville <br>
									Johannesburg<br> 
									Gauteng <br>
									</p>                                
                                    <p>Tel: +27 11 444 6407/9 <br>
                                    Email Address:info@domain.com</p>
                                </address>
								<br>
								<address>
                                    <h5>PRETORIA</h5>
                                    <p>67 Paul Kruger Street, <br>
                                    Between Proes & Struben Streets</p>
                                    <p>Tel: +27 81 498 3410<br>
                                    Email Address:info@domain.com</p>
                                </address>
								<br>
                                <address>
                                    <h5>POLOKWANE</h5>
                                    <p>88a Dahl Street <br>
									Polokwane<br>
                                    Limpopo </p>
                                    <p>Tel: +27 72 880 1332 / +27 71 656 6057 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
           <div class="center wow fadeInDown">
                <p class="lead">Thank you so much <?php echo $first_name ?> for contacting us, we appreciate your message!</p>
            </div>   
        </div><!--/.container-->
    </section><!--/#contact-page-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>ROR Broadcast</h3>
                        <ul>
                            <li><a href="http://www.rhapsodyofrealities.org/rorwebtv/?cat=2">Rhapsody Travels</a></li>
                            <li><a href="http://www.rhapsodyofrealities.org/rorwebtv/?cat=6">Rhapsody Dailies</a></li>
                            <li><a href="/index.php/en/home/2012-10-02-06-21-03/tv-schedule">TV Schedule</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Programs</h3>
                        <ul>
                            <li><a href="http://www.loveworld360.org/">LoveWorld 360</a></li>
                            <li><a href="http://www.kiddiesloveworld.org/">Kiddies LoveWorld</a></li>
                            <li><a href="http://www.teensloveworld.org/">Teens LoveWorld</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Ministry Sites</h3>
                        <ul>
                            <li><a href="http://www.enterthehealingschool.org/">Enter the Healing School</a></li>
                            <li><a href="http://www.christembassy.org/">Christ Embassy Online</a></li>
                            <li><a href="http://www.theinnercitymission.org/">Inner City Mission</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>TV STATIONS</h3>
                        <ul>
                            <li><a href="https://www.loveworldsat.org/watchlisten/live-tv/">LoveWorld Sat</a></li>
                            <li><a href="http://www.loveworldplus.tv/tv/live-tv/">LoveWorld Plus</a></li>
                            <li><a href="http://www.freeintertv.com/view/id-1338">LoveWorld USA</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
	
	<div class="top-bar">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
							<li><a href="#"><b>K</b></a></li>
						</ul>
				   </div>
                </div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="#" title="Rosa">Reach Out South Africa</a>. All Rights Reserved.
                </div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Gp
                -->
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php

}

?>