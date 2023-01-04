<?php include "../connect/connect_db.php"; 
$id=$_REQUEST['id'];

 
try
{
    $sql_selects= $conn->prepare("SELECT * FROM product_type where type_id='$id'");//การเขียนคำสั่ง SQL
    $sql_selects->execute();//สั่งให้ sql_select ทำงาน
    $row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC);      
}
catch(PDOException $e) 
{
    echo "Error: " . $e->getMessage();
}
?> 


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
        margin-left:85px;
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

    <?php include "menu.php"; ?>

    <div>
      <img src="img/b1.jpg" style="width: 1348px;">
    </div>

    <div><h2><?php echo $row_selects['type_name']; ?></h2></div>
    <div class="container-product2">
      <?php
      try
      {   
        $sql_select= $conn->prepare("SELECT * FROM product 
        LEFT JOIN product_brand ON product.product_brand = product_brand.brand_id where product.product_type = $id ");
        $sql_select->execute();
        while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
        { 
          ?>
          <div class="product">
            <a href = "product.php?id=<?php echo $row_select['product_id'];?>">
              <div>
                <div class="img"><img id ="img-product" src="../admin/product/product/product_img/<?php echo $row_select['product_img']; ?>"  alt="Card image"></div> 
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




