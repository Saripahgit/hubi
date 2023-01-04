<?php
include "../../../connect/connect_db.php"; 

$get_brand_name=$_REQUEST['fbrand'];
 
try
{
  $sql_insert = "insert into product_brand (brand_id,brand_name) 
  values ('','$get_brand_name')";
 
  $conn->exec($sql_insert);
  echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
  echo "<script>window.location.href='../../web_admin/select_admin.php?select=3';</script>";
 
} 
catch(PDOException $e) 
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
 
?>
