<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>insert</title>
</head>
<body>
    <?php 
    include "../../connect/connect_db.php";
    ?>  
    <div><?php include 'menu_admin.php';?></div>
    <?php
    $insert=$_REQUEST['insert'];
    if($insert==1){
        include "../member/member/member_form_insert.php";
    }
    else if($insert == 2){
        include "../product/product/product_form_insert.php";
    }
    else if($insert == 3){
        include "../product/product_brand/product_brand_form_insert.php";
    }
    else if($insert == 4){
        include "../product/product_type/product_type_form_insert.php";
    }else if($insert == 5){
        include "../product/product_gear/product_gear_form_insert.php";
    }

    
    ?>
</body>
</html>