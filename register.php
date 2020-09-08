<?php

include ('includes/header1.php');
//include('includes/clientnav.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>register</title>
        
        <style>
        * {
            margin:0px;
            padding:0px;
        }
        
        body{
            font-size: 120%;
            background:#F8F8FF;
            
        }
        
        .header{
            width:30%;
            margin:50px auto 0px;
            color: white;
            background: #5F9EA0;
            text-align: center;
            border: 1px solid #B0C4DE;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding:20px;
        }
            .register{
            width:30%;
            margin: 0px auto;
            padding:30px;
            border: 1px solid #B0C4DE;
            
            border-radius: 0px 0px 10px 10px;
            }
            
            img.logo{
                padding-left: 40px;
            }
            
            .input-group{
                margin: 10px 0px 10px 0px;
            }
        
            .input-group label{
                display: block;
                text-align: left;
                margin:3px;
                
            }
            
            .input-group input{
                height:50px;
                width:93%;
                padding: 5px 10px;
                font-size:16px;
                border-radius: 5px;
                border:1px solid gray;
                
            }
            
            .btn{
                padding: 10px;
                font-size: 15px;
                color:white;
                background: #5F9EA0;
                border:none;
                border-radius: 5px;
                
               
            }
    </style>
        
    </head>
    
    
    
    <body>
         <?php
        include('includes/clientnav.php'); 
    ?>
        
        <?php
         $conn = new mysqli("localhost","root","","assignment");
                
        

        if(isset($_POST['submit'])){
            $username = ($_POST['username']);
            $email =($_POST['email']);
            $gender = ($_POST['gender']);
            $password_1 = ($_POST['password_1']);
            
            $sql= "insert into userregister values('{}','{$username}','{$email}','{$gender}','{$password_1}')";
            $result = $conn->query($sql);
            
            if($result){
                $msg = "$username Successful register";
            }else{
                echo $conn->error;
            }
            
        }
        ?>
        
        <div class="header">
            <h2>Register</h2>
            
        </div>
        
        <form method="post"  class="register" >
            
                <div class="imgcontainer">
                      
                    <img src="img/myprinting.png" alt="myprinting" class="logo" "width=400px" height=110px">
                </div>
  
            <div class="input-group">
                <label>Username</label>
                <input type="text" placeholder="User Name" name="username" required>
            </div>
            
            <div class="input-group">
                <label>Email</label>
                <input type="text" placeholder="Email" name="email" required>
            </div>
            
            <div class="input">
                <label>Gender </label>
                <input type="text"  name="gender" placeholder="Male | Female" required="">
                
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password_1" required>
            </div>
            
            
            
            <div class="input-group">
                <button type="submit" name="submit" value="register" class="btn">Register</button>
                
            </div>
            
            <p>
                <span class="register">Already a member?<a href="#"  onclick="show5()" >Sign In</a> 
            </p>
        </form>
        
        <script src="js/displayForm.js"></script>
    </body>
    
<?php
    include('includes/footer.php');
?>

</html>

