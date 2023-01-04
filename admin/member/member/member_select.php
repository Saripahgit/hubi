<html>
    <head>
        <title>All Member Information</title>
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
                width: 146.25px;
                height: 30px;
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
                width: 146.25px;
                height: 90px;
                display:flex;
                justify-content:center;
                align-items:center;
            }
            #img_2{
                width: 90%;
                height: 90%;
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
        
        <div class="name_box"><h1>All Member Information</h1></div>

        <div class="box_show">
            <div class="name_show">
                <p id="name_show">ID</p>
                <p id="name_show">Name</p>
                <p id="name_show">Type</p>
                <p id="name_show">Gender</p>
                <p id="name_show">Address</p>
                <p id="name_show">Image</p>
                <p id="name_show">Update</p>
                <p id="name_show">Delete</p>
            </div><hr>

            <div class="product_row">
                <?php
                try
                {
                    $sql_select= $conn->prepare("SELECT * FROM member 
                    LEFT JOIN member_type ON member.member_type = member_type.type_id");
                    $sql_select->execute();
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
                    {        
                        ?>
                        <div class="product_show">
                            <p id="product_1"><?php echo $row_select['member_id'];?></p>
                            <p id="product_1"><?php echo $row_select['member_name'];?></p>
                            <p id="product_1"><?php echo $row_select['type_name'];?></p>
                            <p id="product_1"><?php echo $row_select['member_gender'];?></p>
                            <p id="product_1"><?php echo $row_select['member_address'];?></p>
                            <?php
                                $nullfile = $row_select['member_img'];      
                                if($nullfile==null)
                                { 
                                    ?>
                                    <p id="product_1">-</p>
                                    <?php
                                }
                                else
                                {?>
                                    <div id="product_1"><img id="img_2" src="../member/member/member_img/<?php echo $nullfile;?>"></div>
                                    <?php 
                                } 
                                ?>
                                <div id="product_1"><a id="bottom" href="update_admin.php?update=1&update_id=<?php echo $row_select['member_id']; ?>">Update</a></div> 

                                <div id="product_1"><a class="bottom" href="../member/member/member_delete.php?delete_id=<?php echo $row_select['member_id']; ?>"
                                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">Delete</a></div>
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
    </body>






    <script>
        function checkall()
        {
           var formele =document.forms[0].length;
           for(i=0;i<formele-1;i++)
           {
                document.forms[0].elements[i].checked=true;
           }
       
        }
        function uncheckall()
        {
           var formele =document.forms[0].length;
           for(i=0;i<formele-1;i++)
           {
                document.forms[0].elements[i].checked=false;
           }
       
        }
    </script>

        
</html>




                