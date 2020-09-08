<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" class="h-100">
    <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Z</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">
     <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/cart.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/pop-up-login.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <style>
    .navbar-brand{
    margin-left: -10px
  }
  .navbar-custom { 
    background-color: #EBECF0; 
  } 
       
  .navbar-nav > li{
    margin-left:2px;
    margin-right:2px;
    font-size: 15px;
  }
    </style>
    
    
</head>
    <body>
      <?php
        include('includes/clientnav.php'); 
    ?>
        
     <table>
         
    <div class="container mb-4">
        <div class="placeorder" style="text-align:center;">
        <h1>Your Order Has Been Successful</h1>
        <h5>Use Order ID to track your status</h5>
        </div>
    <div class="row">
        <div class="col-8">
            <div class="table-responsive">
                <table class="table table-borderless table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Size</th>
                            
                            <th scope="col">QTY</th>
                            <th scope="col" >Method</th>
                            
                            
                            <th scope="col" >Total</th>
                            <th scope="col">Payment method</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                       <?php
                            $conn = new mysqli('localhost','root','','assignment');
                            $sql = "select * from placeorder";
                            $result = $conn ->query($sql);
                            while($row=$result->fetch_assoc()){
                            echo "<tr><td>{$row['orderID']}</td><td>{$row['name']}</td><td>{$row['size']}</td>
                            <td>{$row['qty']}</td><td>{$row['method']}</td>
                            <td>{$row['total']}</td><td>{$row['payment']}</td></tr>";
                            }

                            $conn->close();
                        ?>                            

            
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
                
            
        </table>

            <a href="mainpage.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back to home</a>










    </div>
  
        
        
    </body>
    
     
</html>
