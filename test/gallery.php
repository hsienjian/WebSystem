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
            div{
                width: 30%;
                display: block;
                float: left;
                margin-right: 50px;
            }
        </style>
    </head>
    <body>
        <h1>Image Gallery</h1>
        <?php
            if(isset($_POST['submit'])){
                $fileDeleted = $_POST['fileDeleted'];
                unlink($fileDeleted);
            }
            
            $allImage = glob("uploads/*.*");
            echo "<div><ul>";
            foreach ($allImage as $image) {
                echo "<li><a href='gallery.php?image=$image'>$image</a></li>"; 
            }
            echo "</div></ul>";
            
            if(isset($_GET['image'])){
                $picture = $_GET['image'];
                echo "<div><img src='$picture' alt=' ' style='height: 200px;'>";
                echo "<form = 'gallery.php' method='post'>";
                echo "<input type='hidden' name='fileDeleted' value='$picture'>";
                echo "<input type='submit' name='submit' value='Delete'/>";
                echo "</form>";
                echo "</div>";
            }
        ?>
    </body>
</html>
