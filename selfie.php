<?php
  // Create database connection
  $db = mysqli_connect("localhost", "reachout_new", "randburg2", "reachout_rosa2018");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$photo = $_FILES['image']['name'];
  	// Get text
  	$name = mysqli_real_escape_string($db, $_POST['first_name']);

  	// image file directory
  	$target = "images/selfies/".basename($photo);

  	$sql = "INSERT INTO selfies (name, picture) VALUES ('$name', '$photo')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM selfies");
?>