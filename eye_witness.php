<?php
  // Create database connection
  $db = mysqli_connect("localhost", "reachout_new", "randburg2", "reachout_rosa2018");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) 
  {
  	$first = mysqli_real_escape_string($db, $_POST['first_name']);   
	$phone = mysqli_real_escape_string($db, $_POST['telephone']);     
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$testimony = mysqli_real_escape_string($db, $_POST['testimony']);
  	$photo = $_FILES['image']['name'];
  	$clip = $_FILES['video']['name'];

  	// image file directory
  	$target = "images/i_witness/pictures/".basename($photo);
  	$targets = "images/i_witness/videos/".basename($clip);

  	$sql = "INSERT INTO i_witness (name, phone, email, testimony, picture, video) VALUES ('$first', '$phone', '$email', '$testimony', '$photo', '$clip')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  	
  	if (move_uploaded_file($_FILES['video']['tmp_name'], $targets)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM i_witness");
?>