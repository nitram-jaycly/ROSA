<?php
    $servername = "localhost"; //41.160.234.181";
    $username = "";
    $password = "";

    $dbhandle = mysql_connect ( $servername, $username, $password );
	
	$selected = mysql_select_db("reachout_rosa2018", $dbhandle); 
	
	if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['area']) && isset($_POST['city']) && isset($_POST['province']))
	{
		$first = $_POST['name'];
		$last = $_POST['surname'];
		$phone = $_POST['telephone'];    
		$email = $_POST['email'];   
		$sex = $_POST['gender'];
		$residence = $_POST['area'];
		$city = $_POST['city'];
		$province = $_POST['province'];
	/*	$security = $_POST['password'];
		
		, title, zone, church, province, password
		, '$title', '$zone', '$church', '$province', '$security'
	*/	
		$Query = mysql_query( "SELECT * FROM data_capturing");

		mysql_query( "INSERT INTO data_capturing (name, surname, phone, email, gender, address, city, province) 
				VALUES('$first', '$last', '+$phone', '$email', '$sex', '$residence', '$city', '$province')"); 

	    header("location: data_captured.html");
	}
	 
	mysql_close();
	
?>