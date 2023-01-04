<?php
include "../../../connect/connect_db.php";  //เชื่อมต่อ database

$get_update_id=$_REQUEST['update_id'];
$get_type_name=$_REQUEST['ftype'];

try
{  
  $sql_update = "UPDATE product_type SET type_name='$get_type_name'
          WHERE type_id='$get_update_id' ";

  $stmt = $conn->prepare($sql_update);
  $stmt->execute();

  echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
  echo "<script>window.location.href='../../web_admin/select_admin.php?select=4';</script>";
} 
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
 
?>
