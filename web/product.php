<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
          background:white;
          height:400px;
          width: 1200px;
          margin:50px 70px 0 70px;
          display: flex;
          flex-direction:row;
        }
        .container2{
          background:white;
          height:auto;
          width: 1200px;
          margin:10px 70px 0 70px;
          padding:15px;
            
        }
        .container3{
          width: 1230px;
          height:auto;
          margin-left:80px;
          margin-bottom:40px;
          display:grid;
          grid-template-columns:repeat(5,235px);
        }

       /* <!------------------------------------------------------------> */
      .box_img{
        width: 600px;
        background-color: white;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
      }
      .slideshow-container {
        position: relative;
        height:240px;
      }
      .mySlides{
        display: none;
        text-align:center;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      #img{
        vertical-align: middle;
        width: 450px;
        max-height:250px;
        height :auto;
        border-radius:3px;
      }
      .prev, .next {
        cursor: pointer;
        position: absolute;
        width: auto;
        color: #999;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      .prev {
        left: 190px;
      }
      .next {
        right: 800px;
      }
      .prev:hover, .next:hover {
        color: #545454;
      }
      #dot{
         height: 35px;
         width: 60px;
         margin: 0 8px;
         border-radius:3px;
      }
      .dot {
        cursor: pointer;
        height: 35px;
        width: 60px;
        display: inline-block;
        border-radius:3px;
      }
      .active, .dot:hover {
        opacity: 0.5;
      }
      @keyframes fade {
        from {opacity: .4} 
        to {opacity: 1}
      }

      @media only screen and (max-width: 300px) {
        .prev, .next,.text {font-size: 11px}
      }



      .name{
        width: 550px;
        padding:45px 0 45px 40px;
      }
      #name_product{
        margin-bottom:20px;
      }
      .pprice_product{
        margin-bottom:10px;
        margin: 20px 0 0 0;
        height: 250px;
      }
      #pprice{
        font-size: 45px;
        color:#DA7A1F;
      }
      #ooprice{
        font-size: 20px;
        text-decoration:line-through;
        color:#999;
        margin-left:3px;
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
      }

      .container2-data{
        display:grid;
        grid-template-columns:repeat(2,585px);
      }
      .data{
        margin:30px 20px auto 10px;
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
        transform:scale(1.03);
        transition:0.3s;
        box-shadow:1px 1px 1px 2px rgb(196, 190, 190);
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

    </style>
</head>
<body style="background-color: #eff0f5;">

    <?php 
    include "menu.php";
    include "../connect/connect_db.php";
    $id=$_REQUEST['id'];
    
    try
    {
        $sql_select= $conn->prepare("SELECT * FROM product 
        LEFT JOIN product_brand ON product.product_brand = product_brand.brand_id 
        LEFT JOIN product_type ON product.product_type = product_type.type_id 
        LEFT JOIN product_gear ON product.product_gear = product_gear.gear_id 
        where product_id=$id;");//การเขียนคำสั่ง SQL
        $sql_select->execute();//สั่งให้ sql_select ทำงาน
        $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);      
    }
    catch(PDOException $e) 
    {
        echo "Error: " . $e->getMessage();
    } 
    ?>





    <div class="container">
      
      <div class="box_img">
        <div class="slideshow-container">
          <div class="mySlides"><img id="img" src="../admin/product/product/product_img/<?php echo $row_select['product_img']; ?>"></div>
          <div class="mySlides"><img id="img" src="../admin/product/product/product_img/<?php echo $row_select['product_img1']; ?>"></div>
          <div class="mySlides"><img id="img" src="../admin/product/product/product_img/<?php echo $row_select['product_img2']; ?>"></div>
          <div class="mySlides"><img id="img" src="../admin/product/product/product_img/<?php echo $row_select['product_img3']; ?>"></div>
        </div>

        <div style="display:flex;justify-content:center;align-items:center;margin-top:25px;background-color:#eff0f5;border-radius:3px;height: 60px;width: 400px; ">
          <div id="dot"><span onclick="currentSlide(1)"><img class="dot" src="../admin/product/product/product_img/<?php echo $row_select['product_img']; ?>"></span> </div>
          <div id="dot"><span onclick="currentSlide(2)"><img class="dot" src="../admin/product/product/product_img/<?php echo $row_select['product_img1']; ?>"></span> </div>
          <div id="dot"><span onclick="currentSlide(3)"><img class="dot" src="../admin/product/product/product_img/<?php echo $row_select['product_img2']; ?>"></span> </div>
          <div id="dot"><span onclick="currentSlide(4)"><img class="dot" src="../admin/product/product/product_img/<?php echo $row_select['product_img3']; ?>"></span> </div>
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
      </div>









        
        <div class="name">
            <h1 id="name_product"><?php echo $row_select['brand_name']; ?>&nbsp;<?php echo $row_select['product_model']; ?></h1><hr>
            <div class="pprice_product">
                <p id="pprice">฿<?php echo $row_select['product_price']; ?></p>
                <p id="ooprice">฿<?php echo $row_select['product_oprice']; ?></p>
                <div class="box_quantity">
                  <p id="quantity">Quantity</p>
                  <div class="quantity_bl">
                    <p id="bl">-</p>
                    <p id="bk">1</p>
                    <p id="bl">+</p>
                </div>
                </div>

                <div style="text-align:center;margin-top:15px;">
                  <button id="yellow"><h3 style="color:white;">Buy Now</h3></button>
                </div>
                <div style="text-align:center;margin-top:15px;">
                  <button id="orange"><h3 style="color:white;">Add To Cart</h3></button>
                </div>
            </div>

        </div>
        
    </div>

    <div class="container2">
        <div><h2 id="all">Information about all products</h2></div>

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



    <div><h2 id="you">You may like this</h2></div>
    <div class="container3">
      <?php
      try
      {   
        $sql_selectt= $conn->prepare("SELECT * FROM product 
        LEFT JOIN product_brand ON product.product_brand = product_brand.brand_id");
        $sql_selectt->execute();
        while($row_selectt = $sql_selectt->fetch(PDO::FETCH_ASSOC))
        { 
          ?>
          <div class="product">
            <a href = "product.php?id=<?php echo $row_selectt['product_id']; ?>">
              <div>
                <div class="img"><img id ="img-product" src="../admin/product/product/product_img/<?php echo $row_selectt['product_img']; ?>"  alt="Card image"> </div>
                <h4 id="brand-model" class=""style ="color:black;"><?php echo $row_selectt['brand_name']; ?>&nbsp;<?php echo $row_selectt['product_model']; ?></h4>
                <p id="price">฿<?php echo $row_selectt['product_price']; ?></p>
                <p id="oprice">฿<?php echo $row_selectt['product_oprice']; ?></p>
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

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

    
</body>
</html>