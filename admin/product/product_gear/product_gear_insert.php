<?php
include "../../../connect/connect_db.php"; 

$get_gear_name=$_REQUEST['fgear'];
 
try
{
  $sql_insert = "insert into product_gear (gear_id,gear_name) 
  values ('','$get_gear_name')";
 
  $conn->exec($sql_insert);
  echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
  echo "<script>window.location.href='../../web_admin/select_admin.php?select=5';</script>";
 
} 
catch(PDOException $e) 
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
 
?>
