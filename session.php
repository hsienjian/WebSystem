<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            $conn = mysqli_connect("localhost","root","");
            // Selecting Database
            $db=mysqli_select_db($conn,"assignment");
            session_start();// Starting Session
            // Storing Session
            $user_check=$_SESSION['login_user'];
            // SQL Query To Fetch Complete Information Of User
            $query = "SELECT * FROM userregister WHERE username='$username' AND password_1='$password_1'";
            $result = mysqli_query($conn,$query);
                
            $rows = mysqli_num_rows($result);
            if(!isset($login_session)){
            mysql_close($connection); // Closing Connection
            header('Location: mainpage.php'); // Redirecting To Home Page
            }
?>
    </body>
</html>
