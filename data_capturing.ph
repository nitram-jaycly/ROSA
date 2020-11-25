<?php
    $servername = "localhost"; //41.160.234.181";
    $username = "reachout_new";
    $password = "randburg2";

    $dbhandle = mysql_connect ( $servername, $username, $password );
	
	$selected = mysql_select_db("reachout_rosa2018", $dbhandle); 
	
	if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['telephone']) && isset($_POST['email'])) // && isset($_POST['title']) && isset($_POST['zone']) && isset($_POST['church']) && isset($_POST['province']) && isset($_POST['password']))
	{
		$first = $_POST['name'];
		$last = $_POST['surname'];
		$phone = $_POST['telephone'];    
		$email = $_POST['email'];   
	/*	$title = $_POST['title'];
		$zone = $_POST['zone'];
		$church = $_POST['church'];
		$province = $_POST['province'];
		$security = $_POST['password']; 
		
		, title, zone, church, province, password)
		, '$title', '$zone', '$church', '$province', '$security'
	*/	
		$Query = mysql_query( "SELECT * FROM data_capturing");

		mysql_query( "INSERT INTO data_capturing (name, surname, phone, email) 
				VALUES('$first', '$last', '$phone', '$email')"); 

	    header("location: index.html");
	}
	 
	mysql_close();
	
?>