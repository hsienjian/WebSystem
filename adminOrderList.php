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
        <div class="container mb-2">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Total Order Price (RM)</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Payment ID</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            include('includes/config.php'); 
                            $sql = "select distinct O.Order_ID,P.Payment_ID FROM order O, payment P WHERE P.Payment_ID = O.payment_ID";
                            $result = $conn ->query($sql);
                            
                            if(isset($_GET['view'])){
                                $id = $_GET['view'];
                                
                                $result = $conn ->query($sql);
                            }
                            $i=0;
                            while($row=$result->fetch_assoc()):
                            $i++;
                        ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?= $row['Prod_ID']?></td>
                            <td><img style="width: 70px;height: 70px;" src="img/custom/<?= $row['Color_Img']?>" /></td>
                            <td><?= $row['Stock']?></td>
                            <td><?= $row['Color_Name']?></td>
                            <td><?= $row['Size_Name']?></td>
                             <?php   
                                    $btnColor="";
                                   if($row['Stock_Status']==='Active' ){
                                       $btnColor = "btn-primary";
                                   }else if($row['Stock_Status']=='Inactive'){
                                        $btnColor = "btn-danger";
                                   }
                            ?>
                            <td><input type="button" class="btn btn-sm btn-primary <?php echo $btnColor;?>" value="<?= $row['Stock_Status']?>" disabled></td>
                            <td class="text-left">
                            <a href="adminEditProductVariations.php?edit=<?=$row['Stock_ID']?>" type="button" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a> 
                            <a href="admin_php_code.php?del=<?=$row['Stock_ID']?>" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> 
                        
                            </td>
                        </tr>
                    <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
       
        </div>
    </div>
    </body>
</html>
