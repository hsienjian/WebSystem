<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Z</title>
    </head>
    <body>
        <?php
        $error=''; 
        if(isset($_POST['submit'])){
            if(empty($_POST['uname'])|| empty($_POST['psw'])){
                $error = "Username or Password is Invalid";
            }
            else
            {
                $user=$_POST['uname'];
                $pass=$_POST['psw'];
                $conn = mysqli_connect("localhost","root","");
                $db=mysqli_select_db($conn,"assignment");
                $query = "SELECT * FROM clientlogin WHERE user='$user' AND pass='$pass'";
                $result = mysqli_query($conn,$query);
                
                $rows = mysqli_num_rows($result);
                if($rows){
                    header("Location: dashboard.php"); 
                }
                else
                {
                    $error = "Username or Password is Invalid";
                }
                mysqli_close($conn);
            }
            
        }
        
        ?>
    </body>
</html>
