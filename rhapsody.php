<?php
    $servername = "localhost"; //41.160.234.181";
    $username = "reachout_new";
    $password = "randburg2";

    $dbhandle = mysql_connect ( $servername, $username, $password );
	
	$selected = mysql_select_db("reachout_rosa2018", $dbhandle); 
	
	if(isset($_POST['first_name']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['amount']))
	{
		$first = $_POST['first_name'];
		$phone = $_POST['telephone'];     
		$email = $_POST['email'];
		$money = $_POST['amount'];
		
		$Query = mysql_query( "SELECT * FROM rhapsody");

		mysql_query( "INSERT INTO rhapsody (name, phone, email, amount)
				VALUES('$first', '$phone', '$email', '$money')");

	    header("location: payment.html");
	}
	 
	mysql_close();
	
?>