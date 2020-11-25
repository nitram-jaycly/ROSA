<?php

$to = "info@reachoutsouthafrica.co.za";
$subject = $_POST['subject'];

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['message'];

$hearders .= "Content-type: text/html;\r\n";
$hearders .= "From: $email";

mail($to, $subject, $comment, $hearders);

echo "Thank you, email has been received $name";

?>