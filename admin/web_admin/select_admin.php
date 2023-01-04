<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>select</title>
</head>
<body>
    <?php 
    include "../../connect/connect_db.php";
    ?>
    <div><?php include 'menu_admin.php';?></div>
    <?php
    $select=$_REQUEST['select'];
    
    if($select==1){
        include "../member/member/member_select.php";
    }
    else if($select == 2){
        include "../product/product/product_select.php";
    }
    else if($select == 3){
        include "../product/product_brand/product_brand_select.php";
    }
    else if($select == 4){
        include "../product/product_type/product_type_select.php";
    }else if($select == 5){
        include "../product/product_gear/product_gear_select.php";
    }

    
    ?>
</body>
</html>