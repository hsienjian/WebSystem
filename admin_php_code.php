<?php
     session_start();
     require_once ('includes/config.php');
        
        
	if (isset($_POST['add'])) {
            $file = $_FILES['img'];
            $fileName = $_FILES['img']['name'];
            $fileTmpName = $_FILES['img']['tmp_name'];
            $fileSize = $_FILES['img']['size'];
            $fileError = $_FILES['img']['error'];
            $fileType = $_FILES['img']['type'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            $Pid = $_POST['product_id'];
            $Pname = $_POST['product_name'];
            $Pprice = $_POST['product_price'];
            $PWeight = $_POST['product_weight'];
            $PMaterial= $_POST['product_material'];
            $status = $_POST['product_status'];
            
            if(in_array($fileActualExt,$allowed)){
                if($fileError === 0){
                    if($fileSize < 1000000){
                        $fileNewName = uniqid('',true).".".$fileActualExt;
                        $fileDestination = 'img/custom/'.$fileNewName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                       
                        $query = "INSERT INTO `customtee` (`ProductID`,`ProductName`,`Prod_Price`,`Prod_Weight`,`Prod_ Material`,`Prod_Img`,`All_Status`) VALUES ('$Pid','$Pname', '$Pprice','$PWeight','$PMaterial','$fileNewName','$status')"; 
                        $result = $conn->query($query);
                        if($result){
                            $_SESSION['message'] = "Successfully Added!!!!"; 
                            header('location: adminproduct.php');

                        }else{
                            echo "<script type='text/javascript'>alert('Please Check Your Query');</script>";
     
   
                        }

                    }else{
                        echo "<script type='text/javascript'>alert('Your file is too big!!!');</script>";
                    }
                }else{
                     echo "<script type='text/javascript'>alert('There was an error uploading your file!!!!');</script>";
                }
            }else{
                 echo "<script type='text/javascript'>alert('You cannot upload this type of file!!!!');</script>";
            }
        }
	if (isset($_POST['save'])) {
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            $Pid = $_POST['product_id'];
            $Pname = $_POST['product_name'];
            $Pprice = $_POST['product_price'];
            $PWeight = $_POST['product_weight'];
            $PMaterial= $_POST['product_material'];
            $status = $_POST['product_status'];
            
            if(in_array($fileActualExt,$allowed)){
                if($fileError === 0){
                    if($fileSize < 1000000){
                        $fileNewName = uniqid('',true).".".$fileActualExt;
                        $fileDestination = 'img/custom/'.$fileNewName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        
                        $query= "update `customtee` set `ProductName`='$Pname', `Prod_Price`='$Pprice', `Prod_Weight`='$PWeight', `Prod_ Material`='$PMaterial', `Prod_Img`='$fileNewName', `All_Status`='$status' WHERE ProductID=$Pid";
                        $result = $conn->query($query);
                        if($result){
                           
                            $query = "SELECT CT.ProductID,All_Status,PS.Prod_ID,Stock_Status FROM customtee CT, prod_stock PS WHERE CT.ProductID=$Pid";
                            $n= $conn->query($query);
                            while($row= $n->fetch_assoc()){
                                $ProdID = $row['ProductID'];
                                $All_Status = $row['All_Status'];
                                 $query= "update `prod_stock` set `Stock_Status`='$All_Status' WHERE Prod_ID=$ProdID";
                             $result1 = $conn->query($query);
                                 if($result1){
                                   $_SESSION['message'] = "Successfully Updated!!!!";
                                  header('location: adminproduct.php');
                            }else{
                                echo "<script type='text/javascript'>alert('Please Check Your Query');</script>";
                            
                            }
                            }
                            
                      
                          

                        }else{
                            echo "<script type='text/javascript'>alert('Please Check Your Query');</script>";
                              header('location: adminproduct.php');
   
                        }

                    }else{
                        echo "<script type='text/javascript'>alert('Your file is too big!!!');</script>";
                    }
                }else{
                     echo "<script type='text/javascript'>alert('There was an error uploading your file!!!!');</script>";
                }
            }else{
                 echo "<script type='text/javascript'>alert('You cannot upload this type of file!!!!');</script>";
            }
       
                 
         
            $conn->close(); 
        }
        


?>
