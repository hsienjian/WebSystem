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
        
        $username = "";
        $email = "";
        $errors = array();
        
        $conn = mysqli_connect("localhost","root","","assignment");
        $db=mysqli_select_db($conn,"assignment");
                
        //$db = mysqli_connect('localhost','root','','userregister');
        //if the register button clicked 
        if(isset($_POST['userregister'])){
            $username = ($_POST['username']);
            $email =($_POST['email']);
            $password_1 = ($_POST['password_1']);
            $password_2 = ($_POST['password_2']);
            
            if(empty($username)){
                array_push($errors,"Username is required"); //this is to make sure user fill in 
                
            }
            
            if(empty($email)){
                array_push($errors,"Email is required"); //this is to make sure user fill in 
                
            }
            
             if(empty($password_1)){
                array_push($errors,"Password is required"); 
                
            }
            
             if($password_1 != $password_2){
                array_push($errors,"Two passwords does not match");
                
            }
            
            if(count($errors) ==0 ){
                $password = md5($password_1); // encrypt password before storing in database 
                $sqli = "INSERT INTO users (username, email, password)
                            VALUES ('$username','$email','$password')";
               
            }
            
        }
        ?>
    </body>
</html>
