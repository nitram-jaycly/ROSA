<?php

    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysql_connect("localhost", "", "");
    
    // Selecting Database
    $db = mysql_select_db("reachout_rosa2018", $connection);
    
    // Starting Session
    session_start();
    
    // Storing Session
    $user_check=$_SESSION['login_user'];
    
    // SQL Query To Fetch Complete Information Of User
    $ses_sql=mysql_query("select email from registration where email='$user_check'", $connection);
    $row = mysql_fetch_assoc($ses_sql);
    $login_session =$row['email'];
    
    if(!isset($login_session))
    {
        mysql_close($connection); // Closing Connection
        header('Location: log.php'); // Redirecting To Home Page
    }

?>