<html>  
    <head>  
        <title>ROSA Join Me Card</title>  
		
		<script src="upload/jquery.min.js"></script>  
		<script src="upload/bootstrap.min.js"></script>
		<script src="upload/croppie.js"></script>
		<link rel="stylesheet" href="upload/bootstrap.min.css" />
		<link rel="stylesheet" href="upload/croppie.css" />
		
		<!-- core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    </head>  
    <body>  
        <header id="header">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <!--div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">    
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                       </div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="top-number"><p><i class="fa fa-phone-square"></i>  +27 11 781 8340-4</p></div>
                    </div>
                </div>
            </div--><!--/.container-->
        <!--/div--><!--/.top-bar-->
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
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Share <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="join_me_card.html">Join Me Card</a></li>
                                <li><a href="selfie.html">Selfie Moments</a></li>
                                <li><a href="expectations.html">Expectations</a></li>
                                <li><a href="testimony.html">Testimony</a></li>
                                <li><a href="rosa_faces.html">Faces of ROSA</a></li>
                                <li><a href="eye_witness.html">I-Witness</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
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
        <div class="container">
          <br />
      <h3 align="center">ROSA Join Me Card</h3>
      <br />
      <br />
			<div class="panel panel-default">
  				<div class="panel-heading">Select Profile Image</div>
  				<div class="panel-body" align="center">
  					<input type="file" name="upload_image" id="upload_image" />
  					<br />
  					<div id="uploaded_image"></div>
  				</div>
  			</div>
  		</div>
    </body>  
</html>

<div id="uploadimageModal" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title">Upload & Crop Image</h4>
      		</div>
      		<div class="modal-body">
        		<div class="row">
  					<div class="col-md-8 text-center">
						  <div id="image_demo" style="width:350px; margin-top:30px"></div>
  					</div>
  					<div class="col-md-4" style="padding-top:30px;">
  						<br />
  						<br />
  						<br/>
						  <button class="btn btn-success crop_image">Crop & Upload Image</button>
					</div>
				</div>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    	</div>
    </div>
</div>

<script>  
$(document).ready(function(){

	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"upload.php",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
        }
      });
    })
  });

});  
</script>