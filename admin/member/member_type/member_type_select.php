<?php include "../../../connect/connect_db.php"; ?> 

<html>
    <head>
    <link href= "../../../css/product&member/style_select.css" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>เเสดงประเภทสมาชิกทั้งหมด</title>
        <style>
          img
            {
                width: 90px;
                border-radius: 8px;
            }
        </style>
    </head>
    
    <body>
        <div>
            <center> 
            <tr>
                <td colspan="2"><h1>ประเภทสมาชิกทั้งหมด</h1></td>
            </tr>
            <table class="table">
                <tr>
                    <th><center>ID</center></th>
                    <th><center>Type</center></th>
                    <th><center>Update</center></th>
                </tr>
            
            <tbody>
                <?php
                try{
                    $sql_select= $conn->prepare("SELECT * FROM `member_type` ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC))
                    {
                        ?>
                        <tr>
                            <td><center><?php echo $row_select['type_id'];  ?></center></td>
                            <td><center><?php echo $row_select['type_name']; ?></center></td> 
                    
                            <td><center><a id="update" href="member_type_form_update.php?update_id=<?php echo $row_select['type_id'];  ?>"  
                            onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></center></td> 
 
                        </tr>
                        <?php 
                    }
                    }
                    catch(PDOException $e) 
                    {
                        echo "Error: " . $e->getMessage();
                    }
                    $conn = null;//เคลีย์ค่าในการดึงข้อมูล
                    ?>
                </tbody>
            </table>
            <tr>
                <td>
                <a href="member_type_form_insert.php" id ="green">เพิ่มประเภทสมาชิก</a>
                </td>
            </tr>
            </center>
        </div>
    </body>
</html>
