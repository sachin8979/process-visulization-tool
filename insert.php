<?php
    if(isset($_POST["submit"])){
            include "config.php";
        $pdname = $_POST["pdname"];
        $pdprice = $_POST["pdprice"];
        $pdimage = $_FILES["pdimage"];
        $image_loc = $_FILES["pdimage"]["tmp_name"];
        $image_name = $_FILES["pdimage"]["name"];
        $img_des = "Uploadimage/".$image_name;
        move_uploaded_file( $image_loc, "Uploadimage/".$image_name);
        $page = $_POST["page"];


        // insert product
        mysqli_query($config,"INSERT INTO `tblproduct`( `pname`, `pprice`, `image`, `pcategory`) VALUES ('$pdname','$pdprice','$img_des','$page')");
        header("location:index.php");
        
        
    }
?>

                       
