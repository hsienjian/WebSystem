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
        <style>
            input{
                display: block;
                margin: 10px 0px;
            }
            #successfully{
                width: 500px;
                height: 10px;
                padding: 10px;
                border: 1px solid blue;
                background-color: buttonface;
            }
            #error{
                width: 500px;
                height: 10px;
                padding: 10px;
                border: 1px solid red;
                background-color: #ffcccc;
            }
            
        </style>
    </head>
    <body>
        <h1>Upload Image</h1>
        <?php
        if(isset($_POST['fileToUpload'])){
            $maxImageSize = $_POST['MAX_FILE_SIZE'];
            $imageName = strtolower($_FILES['upload']['name']);
            $imageSize = $_FILES['upload']['size'];
            $errorMessage = array();
            if(pathinfo($imageName, PATHINFO_EXTENSION) != 'jpg' && pathinfo($imageName, PATHINFO_EXTENSION) != 'png' && pathinfo($imageName, PATHINFO_EXTENSION) != 'gif'){
                $errorMessage[] = 'You are only allow to upload the image';
            }
            
            if($imageSize > $maxImageSize){
                $errorMessage[] = "The maximum image size is onlu 30 KB";
            }
            
            if(count($errorMessage) == 0){
                $fileName = uniqid() . "." . pathinfo($imageName, PATHINFO_EXTENSION);
                if(move_uploaded_file($_FILES['upload']['tmp_name'],"uploads/{$fileName}")){
                    echo"<div id='successfully'>Image upload successfully. It is saved as [$fileName].</div>";
                }
                else{
                    echo "<div id='error'><ul>";
                    foreach ($errorMessage as $value) {
                        echo "<li>$value</li>";
                    }
                    echo "</ul></div>";
                }
            }
        }
        ?>
        <form action="Question5.php" method="post" enctype="multipart/form-data">
            <input type="file" name="upload"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
            <input type="submit" name="fileToUpload" value="Upload"/>
        </form>
        <p>[<a href="gallery.php">Image Gallery</a>]</p>
    </body>
</html>
