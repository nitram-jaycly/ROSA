<?Php

    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    
    if (isset($_POST['submit'])) 
    {
        if (empty($_POST['email']) || empty($_POST['password'])) 
        {
            echo "Username or Password is invalid";
        }  else {
                    // Define $username and $password
                    $username=$_POST['email'];
                    $password=$_POST['password'];
                    
                    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
                    $connection = mysql_connect("localhost", "", "");
                    
                    // To protect MySQL injection for Security purpose
                    $username = stripslashes($username);
                    $password = stripslashes($password);
                    $username = mysql_real_escape_string($username);
                    $password = mysql_real_escape_string($password);
                    
                    // Selecting Database
                    $db = mysql_select_db("reachout_rosa2018", $connection);
                    
                    // SQL query to fetch information of registerd users and finds user match.
                    $query = mysql_query("select * from registration where password='$password' AND email='$username'", $connection);
                    $rows = mysql_num_rows($query);
                    
                    if ($rows == 1) 
                    {
                        $_SESSION['login_user']=$username; // Initializing Session
                        header("location: data_capture.php"); // Redirecting To Other Page
                    } else  {
                                echo "Username or Password is invalid";
                            }
                            
                    mysql_close($connection); // Closing Connection
                }
    }
?>