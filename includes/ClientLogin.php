

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>valid</title>
    </head>
    <body>
        <?php
        
        $error=''; 
        
        if(isset($_POST['submit'])){
            if(empty($_POST['username'])|| empty($_POST['password_1'])){
                $error = "Username or Password is Invalid";
            }
            else
            {
                $username=$_POST['username'];
                $password_1=$_POST['password_1'];
                $conn = mysqli_connect("localhost","root","");
                $db=mysqli_select_db($conn,"assignment");
                $query = "SELECT * FROM userregister WHERE username='$username' AND password_1='$password_1'";
                $result = mysqli_query($conn,$query);
                
                $rows = mysqli_num_rows($result);
                if($rows){
                    $_SESSION['user']=$rows['username']; 
                    if (isset($_SESSION["username"])){
                        header("Location: ContactUs.php");
                    }
                     
                     
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
