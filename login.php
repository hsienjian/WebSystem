
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>

          
    </head>
<?php
$host="localhost";
$user="root";
$password="";
$db="assignment";

$conn = new mysqli($host,$user,$password,$db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $mysqli="select * from login where user='".$uname."'AND Pass='".$password."' limit1";
    
    $result= mysqli_query($mysqli);
    
    if(($result)==1){
        echo "You have successfully loggedin";
        exit();
    }
    else{
        echo "UserID or Password incorrect";
        exit();
    }
    
    
}

?>

<body>
    <div class=""container">
        <img src="img/myprinting.png"/>
        <form method="POST" action="#">
            <div class="form_input">
                <input type="text" name="username" placeholder="Enter Your User Id"/>
            </div>
            <div class="form_input">
                <input type="password" name="password" placeholder="Enter Your Password"/>
            </div>
            <input type="submit" name="submit" value="Login" class="btn-login"/>
        </form>
        
    </div>


</body>
</html>
        
</html>


