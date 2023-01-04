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

      .fluid{
        background-color:#F9943B;
        position:sticky;
        top:0;
        display: flex;
        flex-direction:row;
        justify-content:center;
        align-items:center;
        height:60px;
        overflow: hidden;
        z-index: 1;
      }

      .fluid img[id=loco]{
        height:45px;
        margin-left:40px;
      }

      .type {
        margin-left:40px;
        height: 60px;
        width: 90px;
        display:flex;
        align-items:center;
        justify-content:center;
      }
      .type:hover .type-content {
        display: block;
        position:fixed;

      }
      .type:hover,.type-content,#y p:hover{
        background-color:#E48B3D;
        color:#eff0f5;
      }
      .type a{
        text-decoration:none;
      }
      .type p{
        color:black;
        font-size:20px;
      }
      .type-content {
        margin-top:50px;
        display: none;
        position: absolute;
        top:10px;
        background-color: #F9943B;
        z-index: 10;
      }
      .type-content p {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        font-size:15px;
      }
      

      input[type=text]{
        border-radius:5px;
        margin-left: 50px;
        height: 40px;
        width: 500px;
        border: none;
        padding-left:15px ;
        background-color:#eff0f5; 
        margin-bottom:50px;
      }
      button{
        
        background-color:black;
      }
      #search{
        width: 40px;
        margin-top:35px;
      }
  
      .fluid img[id=trolley]{
        height:45px;
        margin-left:50px;
      }
      /*<!------------------------------------------------------------>*/
      
    </style>
  </head>
  <body style="background-color: #eff0f5;"> 

    <div class="fluid">

      <div class="type">
        <a id="y" href="product_column.php?column=brand"><p>Brand</p></a>
        <div class="type-content">
          <?php
          try
          {   
            $sql_select= $conn->prepare("SELECT * FROM product_brand");
            $sql_select->execute();
            while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
              { 
                ?>
                <a id="y" href="product_brand.php?id=<?php echo $row_select['brand_id']; ?>">
                <p ><?php echo $row_select['brand_name']; ?></p></a>
                <?php 
              }?>
            <?php  
          }
          catch(PDOException $e) 
          {
            echo "Error: " . $e->getMessage();
          }
          ?>
        </div>
      </div>

      <div class="type">
        <a id="y" href="product_column.php?column=type"><p>Type</p></a>
        <div class="type-content">
          <?php
          try
          {   
            $sql_selectt= $conn->prepare("SELECT * FROM product_type");
            $sql_selectt->execute();
            while($row_selectt = $sql_selectt->fetch(PDO::FETCH_ASSOC))
              { 
                ?>
                <a id="y" href="product_type.php?id=<?php echo $row_selectt['type_id']; ?>">
                <p><?php echo $row_selectt['type_name']; ?></p></a>
                <?php 
              }?>
            <?php  
          }
          catch(PDOException $e) 
          {
            echo "Error: " . $e->getMessage();
          }
          ?>
        </div>
      </div>

      <a id="y" href="home.php"><img id="loco" src="img/loco.png"></a>

      <div class="type">
        <a id="y" href="product_column.php?column=gear"><p>Gear</p></a>
        <div class="type-content">
          <?php
          try
          {   
            $sql_selecttt= $conn->prepare("SELECT * FROM product_gear");
            $sql_selecttt->execute();
            while($row_selecttt = $sql_selecttt->fetch(PDO::FETCH_ASSOC))
              { 
                ?>
                <a id="y" href="product_gear.php?id=<?php echo $row_selecttt['gear_id']; ?>">
                <p><?php echo $row_selecttt['gear_name']; ?></p></a>
                <?php 
              }?>
            <?php  
          }
          catch(PDOException $e) 
          {
            echo "Error: " . $e->getMessage();
          }
          ?>
        </div>
      </div>

      <div class="type">
        <a id="y" href=""><p>Search</p></a>
      </div>

    </div>
                    
  </body>
</html>








    