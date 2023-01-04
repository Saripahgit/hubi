<html>
    <head>
        <title>Add Gear</title>
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
    <div class="name_box"><h1>Add Gear</h1></div>

<div class="form_box">
    <form  action="../product/product_gear/product_gear_insert.php" method="post" enctype="multipart/form-data">
    
        <div class="form_name">
            <p id="name_sajo">Gear</p>
            <input id="form_text" type="text" name="fgear" placeholder="Gear Name.."></input>
        </div>
    
        <div class="submit">  
            <input id="submit" type="submit" value="Save">
        </div>           
    </form>
</div>
        
    </body>
</html>
