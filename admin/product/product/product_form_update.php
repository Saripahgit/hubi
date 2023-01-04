<?php 
$get_update_id=$_REQUEST['update_id'];
 
try
{
    $sql_select= $conn->prepare("SELECT * FROM product where product_id='$get_update_id'");//การเขียนคำสั่ง SQL
    $sql_select->execute();//สั่งให้ sql_select ทำงาน
    $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);
    $img = $row_select['product_img'];    
    $img1 = $row_select['product_img1'];
    $img2 = $row_select['product_img2'];
    $img3 = $row_select['product_img3'];
}
catch(PDOException $e) 
{
    echo "Error: " . $e->getMessage();
}
?>

<html>
    <head>
        <title>Update product</title>
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
            .form_box{
                background-color:white;
                display:flex; 
                justify-content:center; 
                height: auto ;
                width: 1200px; 
                padding: 30px;
                margin:5px 70px 70px 70px;
                border-radius: 5px;
            }
            .form_name{
               display:flex;
               height: 60px;
               align-items:center;
               font-size:20px;
               margin-left:100px;
            }
            #name_sajo{
                width:200px;
            }
            #form_text,select {
                width:200px;
                height: 30px;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding-left:12px;
                background-color: #eff0f5;
            }
            #form_textaa{
                width:200px;
                height: 80px;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding-left:12px;
                background-color: #eff0f5;
            }
            #form_text:hover,select:hover, #form_textaa:hover{
                background-color: #D0D1D6;
                cursor:pointer;
            }
            #form_name{
                margin-left:0;
            }
            .submit{
                display:flex;
                height: 60px;
                align-items:center;
                justify-content:center;  
            }
            #submit{
                width: 200px;
                height: 50px;
                background-color: #ffb916;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                color:black;
                font-size:20px;
            }
            #submit:hover{
                background-color: #e9aa17;
                color:white;
            }
        </style>
    </head>
    <body style="background-color: #eff0f5;">
        <div>

            <div class="name_box"><h1>Update product</h1></div>

            <div class="form_box">
                <form  action="../product/product/product_update.php?update_id=<?php echo $get_update_id; ?>&img=<?php echo $img;?>&img1=<?php echo $img1;?>&img2=<?php echo $img2;?>&img3=<?php echo $img3;?>" method="post" enctype="multipart/form-data">
                
                    
                    <div class="form_name">
                        <p id="name_sajo">Brand</p>
                        <select name="fbrand">  
                            <?php
                            try{
                                $sql_selects= $conn->prepare("SELECT * FROM product_brand"); 
                                $sql_selects->execute();//สั่งให้ sql_select ทำงาน
                                while($row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC))
                                {      
                                    ?>
                                    <option id="form_text" value="<?php echo $row_selects['brand_id']; ?>"><?php echo $row_selects['brand_name'];?></option> 
                                    <?php 
                                }
                            }
                            catch(PDOException $e){
                                echo "Error: " . $e->getMessage();
                            }
                            ?>
                        </select>
                    </div>  

                    <div class="form_name">
                        <p id="name_sajo">Model</p>
                        <input id="form_text" type="text" name="fmodel" placeholder="Model Name.." value="<?php echo $row_select['product_model'];?>"></input>
                    </div>

                    <div class="form_name">
                        <p id="name_sajo">Type</p>
                        <select name="ftype">  
                            <?php
                            try{
                                $sql_selects= $conn->prepare("SELECT * FROM product_type"); 
                                $sql_selects->execute();//สั่งให้ sql_select ทำงาน
                                while($row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC))
                                {      
                                    ?>
                                    <option id="form_text" value="<?php echo $row_selects['type_id']; ?>"><?php echo $row_selects['type_name'];?></option> 
                                    <?php 
                                }
                            }
                            catch(PDOException $e){
                                echo "Error: " . $e->getMessage();
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form_name">
                        <p id="name_sajo">Cylinder</p>
                        <input id="form_text" type="text" name="fcylinder" placeholder="cylinder..(cc.)" value="<?php echo $row_select['product_cylinder'];?>"></input>
                    </div>

                    <div class="form_name">
                        <p id="name_sajo">Gear</p>
                        <select name="fgear">  
                            <?php
                            try{
                                $sql_selects= $conn->prepare("SELECT * FROM product_gear"); 
                                $sql_selects->execute();//สั่งให้ sql_select ทำงาน
                                while($row_selects = $sql_selects->fetch(PDO::FETCH_ASSOC))
                                {      
                                    ?>
                                    <option id="form_text" value="<?php echo $row_selects['gear_id']; ?>"><?php echo $row_selects['gear_name'];?></option> 
                                    <?php 
                                }
                            }
                            catch(PDOException $e){
                                echo "Error: " . $e->getMessage();
                            }
                            ?>
                        </select>
                    </div>


                    <div class="form_name">
                        <p id="name_sajo">Original Price</p>
                        <input id="form_text" type="text" name="foprice" placeholder="Original Price.." value="<?php echo $row_select['product_oprice'];?>"></input>
                    </div>

                    <div class="form_name">
                        <p id="name_sajo">Price</p>
                        <input id="form_text" type="text" name="fprice" placeholder="Price.." value="<?php echo $row_select['product_price'];?>"></input>
                    </div>

                    <div class="form_name">
                        <p id="name_sajo">Details</p>
                        <textarea id="form_textaa" type="textarea" name="fdetails" placeholder="Details.." value="<?php echo $row_select['product_details'];?>"></textarea>
                    </div>
                    
                    <div class="form_name">
                        <p id="name_sajo">Image</p>
                        <input id="fimg" type="file" name="fimg">
                    </div>
                    
                    <div class="form_name">
                        <p id="name_sajo">Image</p>
                        <input id="fimg" type="file" name="fimg1">
                    </div>

                    <div class="form_name">
                        <p id="name_sajo">Image</p>
                        <input id="fimg" type="file" name="fimg2">
                    </div>

                    <div class="form_name">
                        <p id="name_sajo">Image</p>
                        <input id="fimg" type="file" name="fimg3">
                    </div>
                        
                    <div class="submit">  
                        <input id="submit" type="submit" value="Save">
                    </div>           
            </form>
        </div>

    </body> 
</html>
