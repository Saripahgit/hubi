<?php include "../connect/connect_db.php"; ?> 
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUBI</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
      }
      /*<!------------------------------------------------------------>*/

      .containers{
        background-color : white;
        height:320px;
        width:1200px;
        margin:50px 70px auto 70px;
      }
      .top{
        display: flex;
        flex-direction:row;
        align-items:center;
        height: 70px;
      }
      #nameproduct{
        margin-left:10px;
        font-weight:bolder;
        color:#DA7A1F;
      }
      #allproduct{
        width: 190px;
        height:40px;
        margin-left:865px;
        border:solid 2px #DA7A1F;
        font-weight:bolder;
        color:#DA7A1F;
        display:flex;
        align-items:center;
        justify-content:center;

      }
      #allproduct:hover{
        color:white;
        background-color:#DA7A1F;
      }

      .container-product{
        display:flex;
        flex-direction:row;
      }
      .product{
        width: 228px;
        height:220px;
        background-color:white;
        margin:10px 0px 10px 10px;
      }
      .product:hover{
        box-shadow:1px 1px 1px 2px rgb(196, 190, 190);
        transform:scale(1.03);
        transition:0.3s;
      }
      .img{
        height: 150px;
        display: flex;
        justify-content:center;
        align-items:flex-start;
      }
      #img-product{
        width: 228px;
        height :auto;
        max-height: 150px;
      }
      #brand-model{
        color:black;
        margin-left:8px;
      }
      #price{
        color: #DA7A1F;
        font-size:20px;
        margin-left:8px;
      }
      #oprice{
        color: #999;
        font-size:13px;
        text-decoration:line-through;
        margin-left:8px;
      }
      a{
        text-decoration:none;
      }
      /*<!------------------------------------------------------------>*/
      div h2{
        margin-top:40px;
        margin-left:90px;
        color:#424242;
      }
      .box-brand{
        width: 1200px; 
        height: 150px;
        background-color:white;
        display:flex;
        flex-direction:row;
        margin-top:10px;
        margin-left:70px;
      }
      .brand{
        width: 300px;
        height: 150px;
        display:flex;
        align-items: center;
        justify-content:center;
      }
      
      .brand:hover{
        box-shadow:1px 1px 1px 2px rgb(196, 190, 190);
      }
      #img-brand{
        width: 200px;
      }
      /*<!------------------------------------------------------------>*/
      .container-product2{
        width: 1230px;
        height:auto;
        margin-left:80px;
        display:grid;
        grid-template-columns:repeat(5,235px);
      }
      
    </style>
  </head>
  <body style="background-color: #eff0f5;"> 

    <div style="display: flex;flex-direction:row;">
      <img src="img/a1.jpg" style="height: 250px;width: 726px;">
      <div  style="display: flex;flex-direction:column;">
        <img src="img/a2.jpg" style="height: 125px;width: 250px;">
        <img src="img/a3.jpg" style="height: 125px;width: 250px;">
      </div>
      <img src="img/a4.jpg" style="height: 250px;width: 372px;">
    </div>

    <?php include "menu.php"; ?>

    <div>
      <img src="img/b1.jpg" style="width: 1348px;">
    </div>

    <div class="containers">
        
        <div class="top">
          <div><p id="nameproduct">NEW PRODUCT</p></div>
          <div><a href="new_product.php"><p id="allproduct">SHOP ALL PRODUCTS</p></a></div>
        </div>
        <hr>

        <div class="container-product">
    <?php
    try
    {   
      $sql_select= $conn->prepare("SELECT * FROM product LEFT JOIN product_brand 
      ON product.product_brand = product_brand.brand_id ORDER BY product_id  DESC LIMIT 5");
      $sql_select->execute();//สั่งให้ sql_select ทำงาน  
      while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
      { 
        ?>
        <div class="product">
          <a href = "product.php?id=<?php echo $row_select['product_id'];?>">
            <div>
              <div class="img"><img id ="img-product" src="../admin/product/product/product_img/<?php echo $row_select['product_img']; ?>"  alt="Card image"></div> 
              <h4 id="brand-model"><?php echo $row_select['brand_name']; ?>&nbsp;<?php echo $row_select['product_model']; ?></h4>
              <p id="price">฿<?php echo $row_select['product_price']; ?></p>
              <p id="oprice">฿<?php echo $row_select['product_oprice']; ?></p>
            </div>
          </a>
        </div>  
        <?php 
      }?>
        </div>
        
      </div>
      <?php  
    }
    catch(PDOException $e) 
    {
      echo "Error: " . $e->getMessage();
    }
    ?>
    <!--end new product -->
    <!------------------------------------------------------------>
    
    <div><h2>Brand</h2></div>
    <div class="box-brand">
      <?php
      try
      {   
        $sql_select= $conn->prepare("SELECT * FROM product_brand ");
        $sql_select->execute();
        while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
        { 
          ?>
          <a href="product_brand.php?id=<?php echo $row_select['brand_id'];?>">
            <div class="brand">
              <img id="img-brand" src="../admin/product/product_brand/loco_brand/<?php echo $row_select['brand_img'];?>">
            </div>
          </a>

          <?php 
        }?>
    </div>
          
        <?php  
      }
      catch(PDOException $e) 
      {
        echo "Error: " . $e->getMessage();
      }
      ?>
    </div>

    


    <div><h2>Product just for you</h2></div>
    <div class="container-product2">
      <?php
      try
      {   
        $sql_select= $conn->prepare("SELECT * FROM product 
        LEFT JOIN product_brand ON product.product_brand = product_brand.brand_id");
        $sql_select->execute();
        while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
        { 
          ?>
          <div class="product">
            <a href = "product.php?id=<?php echo $row_select['product_id'];?>">
              <div>
                <div class="img"><img id ="img-product" src="../admin/product/product/product_img/<?php echo $row_select['product_img']; ?>"  alt="Card image"> </div>
                <h4 id="brand-model" class=""style ="color:black;"><?php echo $row_select['brand_name']; ?>&nbsp;<?php echo $row_select['product_model']; ?></h4>
                <p id="price">฿<?php echo $row_select['product_price']; ?></p>
                <p id="oprice">฿<?php echo $row_select['product_oprice']; ?></p>
                <br>
              </div>
            </a>
          </div>
          <?php 
        }?>
    </div>
          
        <?php  
      }
      catch(PDOException $e) 
      {
        echo "Error: " . $e->getMessage();
      }
      ?>
    

   
                        
  </body>
</html>