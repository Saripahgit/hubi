<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <?php 
    include "../../connect/connect_db.php";
    ?>
    <div><?php include 'menu_admin.php';?></div>
    <?php
    $update=$_REQUEST['update'];
    $update_id=$_REQUEST['update_id'];
    
    
    if($update == 1){
        include "../member/member/member_form_update.php";
    }
    else if($update == 2){
        include "../product/product/product_form_update.php";
    }
    else if($update == 3){
        include "../product/product_brand/product_brand_form_update.php";
    }
    else if($update == 4){
        include "../product/product_type/product_type_form_update.php";
    }else if($update == 5){
        include "../product/product_gear/product_gear_form_update.php";
    }else if($update == 6){
        include "../product/product/product_all.php";
    }

    
    ?>
</body>
</html>