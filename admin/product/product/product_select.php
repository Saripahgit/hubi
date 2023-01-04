
<html>
    <head>
        <title>All Brand</title>
        <style>
             *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: Arial, Helvetica, sans-serif;
            }
            .name_box{
                text-align:center;
                margin-top: 15px;
                color:#424242;
            }
            .box_show{
                width: 1200px;
                height: auto; 
                margin:5px 70px 50px 70px;
                background-color:white;
                padding: 15px;
                border-radius:3px;
            }
            .name_show{
                display:flex; 
                justify-content:center;
            }
            #name_show{
                width: 97.5px;
                height: 70px;
                display:flex;
                justify-content:center;
                align-items:center;
                font-weight:bolder;
            }
            .product_row{
                display:flex;
                flex-direction:column;
            }
            .product_show{
                display:flex;
                flex-direction:row;
                margin:10px 0 10px 0;
            }
            #product_1{
                width: 97.5px;
                height: 150px;
                display:flex;
                justify-content:center;
                align-items:center;
            }
            #img_2{
                width: 125px;
                height: 77px;
                margin: 3px;
                border-radius:5px;
            }
            #bottomm{
                background-color:#1e79d4;
                text-decoration:none;
                width: 50px;
                display:flex;
                justify-content:center;
                align-items:center;
                height: 35px;
                color:black;
                border-radius:3px;
                font-weight:bolder;
            }
            #bottomm:hover{
                background-color: #185a9c;
            }
            #bottom{
                background-color:#45a049;
                text-decoration:none;
                width: 80px;
                display:flex;
                justify-content:center;
                align-items:center;
                height: 35px;
                color:black;
                border-radius:3px;
            }
            #bottom:hover{
                background-color: #3d8b41;
            }
            
            .bottom{
                background-color:#e4460d;
                text-decoration:none;
                width: 80px;
                display:flex;
                justify-content:center;
                align-items:center;
                height: 35px;
                color:black;
                border-radius:3px;
            }
            .bottom:hover{
                background-color: #c44214;
            }
            
            /* #cancel{
            width: 10%;
            background-color: #d4a720;
            color: white;
            padding: 14px 20px;
            margin: 8px ;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            }
            #cancel:hover{
            background-color : #c59b1e;}
            #delete {
            width: 10%;
            background-color: #e4460d;
            color: white;
            padding: 14px 20px;
            margin: 8px ;
            border: none;
            cursor: pointer;
            border-radius: 3px;
            }
            #delete:hover{
            background-color : #c44214;
            }

            #all_left{
            width: 10%;
            background-color: #1e79d4;
            color: white;
            padding: 14px ;
            margin: 8px ;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 3px;
            }
            #all_left:hover{
            background-color: #185a9c;
            } */
        </style>
    </head>
    
    <body style="background-color: #eff0f5;">
        
        <div class="name_box"><h1>All Product</h1></div>

        <div class="box_show">
            <div class="name_show">
                <p id="name_show">ID</p>
                <p id="name_show">Brand</p>
                <p id="name_show">Moder</p>
                <p id="name_show">Type</p>
                <p id="name_show">Cylinder</p>
                <p id="name_show">Gear</p>
                <p id="name_show">OPrice</p>
                <p id="name_show">Price</p>
                <p id="name_show">Image</p>
                <p id="name_show">See More</p>
                <p id="name_show">Update</p>
                <p id="name_show">Delete</p>
            </div><hr>

            <div class="product_row">
                <?php
                try
                {
                    $sql_select= $conn->prepare("SELECT * FROM product 
                    LEFT JOIN product_brand ON product.product_brand = product_brand.brand_id
                    LEFT JOIN product_type ON product.product_type = product_type.type_id
                    LEFT JOIN product_gear ON product.product_gear = product_gear.gear_id");
                    $sql_select->execute();
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
                    {        
                        ?>
                        <div class="product_show">
                            <p id="product_1"><?php echo $row_select['product_id'];?></p>
                            <p id="product_1"><?php echo $row_select['brand_name'];?></p>
                            <p id="product_1"><?php echo $row_select['product_model'];?></p>
                            <p id="product_1"><?php echo $row_select['type_name'];?></p>
                            <p id="product_1"><?php echo $row_select['product_cylinder'];?></p>
                            <p id="product_1"><?php echo $row_select['gear_name'];?></p>
                            <p id="product_1"><?php echo $row_select['product_oprice'];?></p>
                            <p id="product_1"><?php echo $row_select['product_price'];?></p>
                            <?php
                                $nullfile = $row_select['product_img'];      
                                if($nullfile==null)
                                { 
                                    ?>
                                    <p id="product_1">-</p>
                                    <?php
                                }
                                else
                                {?>
                                    <div id="product_1"><img id="img_2" src="../product/product/product_img/<?php echo $nullfile;?>"></div>
                                    <?php 
                                } 
                                ?>
                                <p id="product_1"><a id="bottomm" href="update_admin.php?update=6&update_id=<?php echo $row_select['product_id']; ?>">...</a></p>

                                <div id="product_1"><a id="bottom" href="update_admin.php?update=2&update_id=<?php echo $row_select['product_id']; ?>">Update</a></div> 

                                <div id="product_1"><a class="bottom" href="../product/product/product_delete.php?delete_id=<?php echo $row_select['product_id']; ?>"
                                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">Delete</a></div></div><hr>

                        <?php 
                    }
                }
                catch(PDOException $e) 
                {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>
            </div>
        </div>
    </body>

        
</html>




                