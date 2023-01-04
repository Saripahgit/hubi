<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Product</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            background:white;
            height:auto;
            width: 1200px;
            margin:50px 70px 30px 70px;
        }
        
       /* <!------------------------------------------------------------> */
      .box_img{
        width: 1200px;
        height:220px;
        display:grid;
        grid-template-columns:repeat(4,300px);
      }
      .img{
        display: flex;
        align-items:center;
        justify-content:center;
      }
      #img{
        width: 250px;
        height :145px;
      }

      .name{
        width: 550px;
        padding:45px 40px 45px 40px;
      }
      #name_product{
        margin-bottom:20px;
      }
      .pprice_product{
        margin-bottom:10px;
        margin: 20px 40px 0 0;
        height: 250px;
      }
      #pprice{
        font-size: 45px;
        color:#DA7A1F;
      }
      #ooprice{
        font-size: 20px;
        text-decoration:line-through;
        color:#999
      }
      .box_quantity{
        display:flex;
        justify-content:center;
      }
      #quantity{
        font-size: 20px;
        margin-top:30px;
        text-align:center;
      }
      .quantity_bl{
        display:flex;
        align-items:flex-end;
        margin-left:15px;
      }
      #bl{
        background-color:#eff0f5;
        width: 30px;height:30px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:25px;
        cursor:pointer;
      }
      #bl:hover{
        background-color:#d9d3d3;
        color:white;
      }
      #bk{
        background-color:#f9f9f9;
        width: 30px;height:30px;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:25px;
      }
      #yellow{
        border-radius:5px;
        width: 200px;
        height: 40px;
        background-color: #ffb916;
        border:none;
        
      }
      #yellow:hover{
        background-color: #e9aa17;
      }
      #orange{
        border-radius:5px;
        width: 200px;
        height: 40px;
        background-color: #F9943B;
        border:none;
      }
      #orange:hover{
        background-color: #E48B3D;
      }
      /* <!------------------------------------------------------------> */

      #all{
        display:flex;
        justify-content:center;
        padding-top:10px;
      }

      .container2-data{
        display:grid;
        grid-template-columns:repeat(2,585px);
      }
      .data{
        margin:30px 20px auto 10px;
        padding-bottom: 20px;
      }
      .data-product{
        display:flex;
        flex-direction:row;
        margin:15px 0 15px 0;
      }
      #data_product{
        font-weight:bolder;
        margin-left:10px
      }

      /* <!------------------------------------------------------------> */
        #you{
        margin-top:40px;
        margin-left:90px;
        color:#424242;
      }
       /* <!------------------------------------------------------------> */
      .product{
        width: 228px;
        height:220px;
        background-color:white;
        margin:10px 0px 10px 10px;
      }
      .product:hover{
        box-shadow:1px 1px 1px 2px rgb(196, 190, 190);
      }
      #img-product{
        width: 228px;
        height :142px;
      }
      #brand-model{
        color:black;
      }
      #price{
        color: #DA7A1F;
        font-size:20px;
      }
      #oprice{
        color: #999;
        font-size:13px;
        text-decoration:line-through;
      }
      a{
        text-decoration:none;
      }

    </style>
</head>
<body style="background-color: #eff0f5;">

    <?php
    try
    {
        $sql_select= $conn->prepare("SELECT * FROM product 
        LEFT JOIN product_brand ON product.product_brand = product_brand.brand_id 
        LEFT JOIN product_type ON product.product_type = product_type.type_id 
        LEFT JOIN product_gear ON product.product_gear = product_gear.gear_id 
        where product_id=$update_id ;");//การเขียนคำสั่ง SQL
        $sql_select->execute();//สั่งให้ sql_select ทำงาน
        $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);      
    }
    catch(PDOException $e) 
    {
        echo "Error: " . $e->getMessage();
    } 
    ?>
    <div class="container">
        <div><h2 id="all">Product</h2></div>
        <div class="data-product" style="margin-left:10px;"><p id="data-product">Image :</div>
        <div class="box_img">
            <div class="img"><img id="img" src="../product/product/product_img/<?php echo $row_select['product_img']; ?>"></div>
            <div class="img"><img id="img" src="../product/product/product_img/<?php echo $row_select['product_img1']; ?>"></div>
            <div class="img"><img id="img" src="../product/product/product_img/<?php echo $row_select['product_img2']; ?>"></div>
            <div class="img"><img id="img" src="../product/product/product_img/<?php echo $row_select['product_img3']; ?>"></div>
        </div>
        <div class="container2-data">
            <div class="data">
              <div class="data-product"><p id="data-product">Brand :</p>&nbsp;<p><?php echo $row_select['brand_name']; ?></p></div><hr>
              <div class="data-product"><p id="data-product">Model :</p>&nbsp;<p><?php echo $row_select['product_model']; ?></p></div><hr>
              <div class="data-product"><p id="data-product">Type :</p>&nbsp;<p><?php echo $row_select['type_name']; ?></p></div><hr>
              <div class="data-product"><p id="data-product">Cylinder :</p>&nbsp;<p><?php echo $row_select['product_cylinder']; ?>cc.</p></div><hr>
            </div>

            <div class="data">
              <div class="data-product"><p id="data-product">Gear :</p>&nbsp;<p><?php echo $row_select['gear_name']; ?></p></div><hr>
              <div class="data-product"><p id="data-product">Details:</p>&nbsp;<p><?php echo $row_select['product_details']; ?></p></div><hr>
            </div>
        </div>
        
    </div>

   
    
</body>
</html>