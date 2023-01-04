<?php 
$get_update_id=$_REQUEST['update_id'];
 
try
{
    $sql_select= $conn->prepare("SELECT * FROM member where member_id='$get_update_id' ");//การเขียนคำสั่ง SQL
    $sql_select->execute();//สั่งให้ sql_select ทำงาน
    $row_select = $sql_select->fetch(PDO::FETCH_ASSOC);        
}
catch(PDOException $e) 
{
    echo "Error: " . $e->getMessage();
}
?>




<html>
    <head>
        <title>Update Member</title>
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
    <body>

        <div class="name_box"><h1>Update Member</h1></div>

        <div class="form_box">
            <form action="../member/member/member_update.php?update_id=<?php echo $get_update_id; ?>" method="post" enctype="multipart/form-data">
            
                <div class="form_name">
                    <p id="name_sajo">Name-Last Name</p>
                    <input id="form_text" type="text" name="fname" placeholder="Name..Last Name.." value="<?php echo $row_select['member_name']; ?>">
                </div>
                
                <div class="form_name">
                    <p id="name_sajo">Type</p>
                    <select name="ftype">  
                        <?php
                        try{
                            $sql_selects= $conn->prepare("SELECT * FROM member_type"); 
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
                    <p id="name_sajo">Genger</p>
                    <?php 
                    if($row_select['member_gender']=="ชาย")
                    {
                        $male="checked";
                        $female="";
                    }
                    else
                    {
                        $male="checked";
                        $female="";
                    }
                    ?>
                    <input type="radio" name="fgender" value="man" <?php echo $male ;?>><p id="radio">man</p>
                    <input type="radio" name="fgender" value="female" <?php echo $female ;?>><p id="radio">female</p>
                </div>


                <div class="form_name">
                    <p id="name_sajo">Address</p>
                    <input id="form_text" type="text" name="faddress" placeholder="Address.." value="<?php echo $row_select['member_address']; ?>"></input>
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
