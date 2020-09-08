<?php
 include('admin_php_code.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
      <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <style>
        .msg {
            margin: 30px auto; 
            padding: 10px; 
            border-radius: 5px; 
            color: #3c763d; 
            background: #dff0d8; 
            border: 1px solid #3c763d;
            width: 50%;
            text-align: center;
        }   
    </style>
</head>

<body>

<div class="wrapper">
<?php

include('includes/sidebar.php'); 
include('includes/adminnav.php'); 
?>

    <div class="container ">
     <h4 class="h4">Product</h4>
    <div class="row">
       <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Product</li>
                </ol>
            </nav>
        </div>
        
    </div>
    </div>
      <?php if (isset($_SESSION['message'])) {?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
                ?>
	</div>
      <?php };?>
    <div class="container mb-2">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Material</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('includes/config.php'); 
                            $sql = "select * from customtee";
                            $result = $conn ->query($sql);
                            while($row=$result->fetch_assoc()):
                        ?>
                        <tr>
                            <td><?= $row['ProductID']?></td>
                            <td><img style="width: 70px;height: 70px;" src="img/custom/<?= $row['Prod_Img']?>" /></td>
                            <td><?= $row['ProductName']?></td>
                            <td><?= $row['Prod_Weight']?></td>
                            <td><?= $row['Prod_ Material']?></td>
                            <td>RM<?= $row['Prod_Price']?></td>
                            <?php   
                                    $btnColor="";
                                   if($row['All_Status']==='Active'){
                                       $btnColor = "btn-primary";
                                   }else if($row['All_Status']=='Inactive'){
                                        $btnColor = "btn-danger";
                                   }
                            ?>
                            <td><input type="button"  class="btn btn-sm <?php echo $btnColor;?>"value="<?= $row['All_Status']?>" disabled></td>
                            <td class="text-right">
                                <a href="adminEditProduct.php?edit=<?php echo$row['ProductID'];?>" type="button" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a> 
                                <a href="adminProductVariations.php?view=<?php echo$row['ProductID'];?>" type="button" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> </a> 
                            </td>
                        </tr>
                    <?php  endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
       
        </div>
    </div>
 </div>

    
    
    
 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
        