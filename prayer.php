<?php
    $servername = "localhost"; //41.160.234.181";
    $username = "reachout_new";
    $password = "randburg2";

    $dbhandle = mysql_connect ( $servername, $username, $password );
	
	$selected = mysql_select_db("reachout_rosa2018", $dbhandle); 
	
	if(isset($_POST['first_name']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['prayer_point']))
	{
		$first = $_POST['first_name'];
		$phone = $_POST['telephone'];     
		$email = $_POST['email'];
		$pray = $_POST['prayer_point'];
		
		$Query = mysql_query( "SELECT * FROM prayer");

		mysql_query( "INSERT INTO prayer (name, phone, email, prayer)
				VALUES('$first', '$phone', '$email', '$pray')");

	    header("location: index.html");
	}
	 
	mysql_close();
	
?>