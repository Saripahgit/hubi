<?php
include "../../../connect/connect_db.php";  //เชื่อมต่อ database
$get_brand=$_REQUEST['fbrand'];
$get_model=$_REQUEST['fmodel'];
$get_type=$_REQUEST['ftype'];
$get_cylinder=$_REQUEST['fcylinder'];
$get_gear=$_REQUEST['fgear'];
$get_oprice=$_REQUEST['foprice'];
$get_price=$_REQUEST['fprice'];
$get_details=$_REQUEST['fdetails'];
$filename = $_FILES["fimg"]["name"];
$filename1 = $_FILES["fimg1"]["name"];
$filename2 = $_FILES["fimg2"]["name"];
$filename3 = $_FILES["fimg3"]["name"];

 
$target_dir = "product_img/";
$target_file = $target_dir . basename($_FILES["fimg"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if( isset($_POST["submit"]) ) 
{
  $check = getimagesize($_FILES["fimg"]["tmp_name"]);
  if($check !== false) 
  {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } 
  else 
  {
    echo "File is not an image.";
    $uploadOk1 = 0;
  }
}

if(file_exists($target_file1)) 
{
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

if($_FILES["fimg"]["size"] > 500000) 
{
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

if($uploadOk == 0) 
{
  echo "Sorry, your file was not uploaded.";
} 
else 
{
  if (move_uploaded_file($_FILES["fimg"]["tmp_name"], $target_file)) 
  {
  } 
  else 
  {
      echo "Sorry, there was an error uploading your file.";
  }
}

$target_dir1 = "product_img/";
$target_file1 = $target_dir1 . basename($_FILES["fimg1"]["name"]);
$uploadOk1 = 1;
$imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);

if( isset($_POST["submit"]) ) 
{
  $check1 = getimagesize($_FILES["fimg1"]["tmp_name"]);
  if($check1 !== false) 
  {
    echo "File is an image - " . $check1["mime"] . ".";
    $uploadOk1 = 1;
  } 
  else 
  {
    echo "File is not an image.";
    $uploadOk1 = 0;
  }
}

if(file_exists($target_file1)) 
{
  echo "Sorry, file already exists.";
  $uploadOk1 = 0;
}

if($_FILES["fimg1"]["size"] > 500000) 
{
  echo "Sorry, your file is too large.";
  $uploadOk1 = 0;
}

if($uploadOk1 == 0) 
{
  echo "Sorry, your file was not uploaded.";
} 
else 
{
  if (move_uploaded_file($_FILES["fimg1"]["tmp_name"], $target_file1)) 
  {
  } 
  else 
  {
      echo "Sorry, there was an error uploading your file.";
  }
}


$target_dir2 = "product_img/";
$target_file2 = $target_dir2 . basename($_FILES["fimg2"]["name"]);
$uploadOk2 = 1;
$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);

if( isset($_POST["submit"]) ) 
{
  $check2 = getimagesize($_FILES["fimg2"]["tmp_name"]);
  if($check2 !== false) 
  {
    echo "File is an image - " . $check1["mime"] . ".";
    $uploadOk2 = 1;
  } 
  else 
  {
    echo "File is not an image.";
    $uploadOk2 = 0;
  }
}

if(file_exists($target_file2)) 
{
  echo "Sorry, file already exists.";
  $uploadOk2 = 0;
}

if($_FILES["fimg2"]["size"] > 500000) 
{
  echo "Sorry, your file is too large.";
  $uploadOk2 = 0;
}

if($uploadOk2 == 0) 
{
  echo "Sorry, your file was not uploaded.";
} 
else 
{
  if (move_uploaded_file($_FILES["fimg2"]["tmp_name"], $target_file2)) 
  {
  } 
  else 
  {
      echo "Sorry, there was an error uploading your file.";
  }
}


$target_dir3 = "product_img/";
$target_file3 = $target_dir3 . basename($_FILES["fimg3"]["name"]);
$uploadOk3 = 1;
$imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);

if( isset($_POST["submit"]) ) 
{
  $check3 = getimagesize($_FILES["fimg3"]["tmp_name"]);
  if($check3 !== false) 
  {
    echo "File is an image - " . $check1["mime"] . ".";
    $uploadOk3 = 1;
  } 
  else 
  {
    echo "File is not an image.";
    $uploadOk3 = 0;
  }
}

if(file_exists($target_file3)) 
{
  echo "Sorry, file already exists.";
  $uploadOk3 = 0;
}

if($_FILES["fimg"]["size"] > 500000) 
{
  echo "Sorry, your file is too large.";
  $uploadOk3 = 0;
}

if($uploadOk3 == 0) 
{
  echo "Sorry, your file was not uploaded.";
} 
else 
{
  if (move_uploaded_file($_FILES["fimg3"]["tmp_name"], $target_file3)) 
  {
  } 
  else 
  {
      echo "Sorry, there was an error uploading your file.";
  }
}








try
{
  $sql_insert = "insert into product (`product_id`, `product_brand`, `product_model`, `product_type`, `product_cylinder`, `product_gear`, `product_oprice`, `product_price`, `product_details`, `product_img`, `product_img1`, `product_img2`, `product_img3`) 
  values ('','$get_brand','$get_model','$get_type','$get_cylinder','$get_gear','$get_oprice','$get_price','$get_details','$filename','$filename1','$filename2','$filename3')";
  $conn->exec($sql_insert);
  
  echo "บันทึกข้อมูลเรียบร้อยเเล้ว";
  echo "<script>window.location.href='../../web_admin/select_admin.php?select=2';</script>";
} 
catch(PDOException $e) 
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>
