<?php
include "../../../connect/connect_db.php";  //เชื่อมต่อ database

$get_update_id=$_REQUEST['update_id'];
$get_brand_name=$_REQUEST['fbrand'];

try
{  
  $sql_update = "UPDATE product_brand SET brand_name='$get_brand_name'
          WHERE brand_id='$get_update_id' ";

  $stmt = $conn->prepare($sql_update);
  $stmt->execute();

  echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
  echo "<script>window.location.href='../../web_admin/select_admin.php?select=3';</script>";
} 
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
 
?>
