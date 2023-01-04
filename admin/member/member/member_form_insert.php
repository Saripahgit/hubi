<html>
    <head>
        <title>Add Member</title>
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
            #form_text:hover,select:hover{
                background-color: #D0D1D6;
            }
           
            #radio{
                width: 80px;
                padding-left:10px;
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
        
        <div class="name_box"><h1>Add Member</h1></div>

        <div class="form_box">
            <form action="../member/member/member_insert.php" method="post" enctype="multipart/form-data">
               
                <div class="form_name">
                    <p id="name_sajo">Name - Last Name</p>
                    <input id="form_text" type="text" name="fname" placeholder="Name..Last Name..">
                </div>
                
                <div class="form_name">
                    <p id="name_sajo">Type</p>
                    <select name="ftype">  
                        <?php
                        try{
                            $sql_select= $conn->prepare("SELECT * FROM member_type"); 
                            $sql_select->execute();//สั่งให้ sql_select ทำงาน
                            while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
                            {      
                                ?>
                                <option id="form_text" value="<?php echo $row_select['type_id']; ?>"><?php echo $row_select['type_name'];?></option> 
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
                    <p id="name_sajo">Genger</p>
                    <input type="radio" name="fgender" value="ชาย"><p id="radio">man</p>
                    <input type="radio" name="fgender" value="หญิง"><p id="radio">female</p>
                </div>


                <div class="form_name">
                    <p id="name_sajo">Address</p>
                    <input id="form_text" type="text" name="faddress" placeholder="Address.."></input>
                </div>
                
                <div class="form_name">
                    <p id="name_sajo">Image</p>
                    <input type="file" name="fimg">
                </div>  
                    
                <div class="submit">  
                    <input id="submit" type="submit" value="save">
                </div>           
            </form>
        </div>

    </body> 
</html>
