<?php
$coon=new PDO("mysql:host=localhost;dbname=coffee","root","");
if(isset($_POST['sub'])){
$id=$_POST['id'];
$name=$_POST['name'];
$type=$_POST['type'];
$price=$_POST['price'];
$iamge=$_FILES['iamge'];
$image_path=$_FILES['iamge']['tmp_name'];
$image_name=$_FILES['iamge']['name'];
$image_up ="photo/".$image_name;
$update="update coffee set name ='$name' ,type ='$type' ,price='$price',iamge ='$image_up' where id=$id";
$coon->query($update);
if(move_uploaded_file($image_path , "photo/".$image_name)){
  echo "<script>alert ('photo update seccessfly') </script>";
}
else{
  echo "<script>alert ('filed') </script>";
}
header("location:view.php");
}
?>