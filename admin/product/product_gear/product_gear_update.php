<?php
include "../../../connect/connect_db.php";  //เชื่อมต่อ database

$get_update_id=$_REQUEST['update_id'];
$get_gear_name=$_REQUEST['fgear'];

try
{  
  $sql_update = "UPDATE product_gear SET gear_name='$get_gear_name'
          WHERE gear_id='$get_update_id' ";

  $stmt = $conn->prepare($sql_update);
  $stmt->execute();

  echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
  echo "<script>window.location.href='../../web_admin/select_admin.php?select=5';</script>";
} 
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
 
?>
