
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
                margin:5px 70px auto 70px;
                background-color:white;
                padding: 15px;
                border-radius:3px;
            }
            .name_show{
                display:flex; 
                justify-content:center;
            }
            #name_show{
                width: 390px;
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
                width: 390px;
                height: 60px;
                display:flex;
                justify-content:center;
                align-items:center;
            }
            #img_2{
                width: 125px;
                height: 85px;
                margin: 3px;
                border-radius:5px;
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
            
            
           
        </style>
    </head>
    
    <body style="background-color: #eff0f5;">
        
        <div class="name_box"><h1>All Brand</h1></div>

        <div class="box_show">
            <div class="name_show">
                <p id="name_show">ID</p>
                <p id="name_show">Brand</p>
                <p id="name_show">Delete</p>
            </div><hr>

            <div class="product_row">
                <?php
                try
                {
                    $sql_select= $conn->prepare("SELECT * FROM product_brand");
                    $sql_select->execute();
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
                    {        
                        ?>
                        <div class="product_show">
                            <p id="product_1"><?php echo $row_select['brand_id'];?></p>
                            <p id="product_1"><?php echo $row_select['brand_name'];?></p>

                            <div id="product_1"><a id="bottom" href="update_admin.php?update=3&update_id=<?php echo $row_select['brand_id']; ?>">Update </a></div> 
                        </div><hr>

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




                