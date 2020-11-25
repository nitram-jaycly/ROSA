<?php
    include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Data Capturing | ROSA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <center><h1>ROSA Data Capturing<!--small></small--></h1></center>
</div>

<br><br>
<!-- Credit Card Payment Form - START -->

<div class="container">
            <center>        
                <h2>Registration</h2><br/>
            </center> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form name="Submit form" class="pure-form" Action="data_capturing.php" Method="POST">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group wow fadeInDown">
                            <strong>Name *</strong>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group wow fadeInDown">
                            <strong>Email *</strong>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group wow fadeInDown">
                            <strong>Gender *</strong>
                            <select class="form-control" name="gender" REQUIRED>
					            <option selected hidden value="">Select Gender</option>
					            <option value="Male">Male</option>
                		        <option value="Female">Female</option>
            	           	</select>
                        </div>
                        <div class="form-group wow fadeInDown">
                            <strong>City *</strong>
                            <input type="text" name="city" placeholder="CE Randburg" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group wow fadeInDown">
                            <strong>Surname *</strong>
                            <input type="text" name="surname" class="form-control" required>
                        </div>  
                        <div class="form-group wow fadeInDown">
                            <strong>Phone *</strong>
                            <input type="number" name="telephone" placeholder="+27000000000" class="form-control">
                        </div>  
                        <div class="form-group wow fadeInDown">
                            <strong>Residential Area / Suburb *</strong>
                            <input type="text" name="area" class="form-control" required>
                        </div>   
                        <div class="form-group wow fadeInDown">
                            <strong>Province *</strong>
                            <select class="form-control" name="province" REQUIRED>
					            <option selected hidden value="">Select Province</option>
					            <option value="Eastern Cape">Eastern Cape</option>
                		        <option value="Free State">Free State</option>
				                <option value="Gauteng">Gauteng</option>
					            <option value="KwaZulu-Natal">KwaZulu-Natal</option>
        			            <option value="Limpopo">Limpopo</option>
        			            <option value="Mpumalanga">Mpumalanga</option>
					            <option value="North West">North West</option>
        			            <option value="Northern Cape">Northern Cape</option>
        			            <option value="Western Cape">Western Cape</option>
            	           	</select>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn pure-button pure-button-primary btn-primary btn-lg" required="required">Submit</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

<div class="container">

<div class="page-header">
    <br/><br/>
    <center><h1></h1></center>
</div>

<div class="">
    <center><h4><a href="logout.php">Log Out</a></h4></center>
</div>

</body>
</html>