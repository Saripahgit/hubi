<?php
include "../../../connect/connect_db.php"; 

$get_type_name=$_REQUEST['ftype'];
 
try
{
  $sql_insert = "insert into product_type (type_id,type_name) 
  values ('','$get_type_name')";
 
  $conn->exec($sql_insert);
  echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
  echo "<script>window.location.href='../../web_admin/select_admin.php?select=4';</script>";
 
} 
catch(PDOException $e) 
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
 
?>
