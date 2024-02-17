<?php
$coon=new PDO("mysql:host=localhost;dbname=coffee","root","");
if(isset($_POST['sub'])){
$name=$_POST['name'];
$type=$_POST['type'];
$price=$_POST['price'];
$image=$_FILES['iamge'];
$image_path=$_FILES['iamge']['tmp_name'];
$image_name=$_FILES['iamge']['name'];
$image_up ="photo/".$image_name;
$insert="insert into coffee (name,type,price,iamge) values ('$name','$type','$price','$image_up')";
$coon->query($insert);
if(move_uploaded_file($image_path , "photo/".$image_name)){
  echo "<script>alert ('photo saved seccessfly') </script>";
}
else{
  echo "<script>alert ('filed') </script>";
}
header("location:add.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add coffee</title>
</head>
<body>
<header class="header">
      <div>    
                <a class="link" href="#add">ADD COFFee</a>
      </div>
      </header>
      <div class="main">
      <form clas="form" method="post" enctype="multipart/form-data">
      <input id="file" type="text" name="name" placeholder="enter the name of coffee" class="box"><br>
        <input type="text" name="type" placeholder="enter the type  of coffee" class="box"><br>
        <input id="text" type="text" name="price" placeholder="enter the price of coffee" class="box"><br>
        <input id="x" type="file" name="iamge" placeholder="enter the coffee imag"  ><br> 
        <input type="submit" name="sub" value="add "class="btn"><br>
        <a href="view.php" class="a">all the coffee </a>
</div>
</body>
<style>
body{
    background: url(3.jpg);
}
a{
    text-decoration: none;
    color: #333;
}
.header{
    margin: 40px auto;
    box-shadow: 1PX 1PX 10PX silver;
    padding: 10px 20px;
    font-size: 30px;
    font-style: italic;
    border-radius: 70px;
    width: fit-content;
}
.link{
    color:white;
}
.link:hover{
    border: none;
    color:#b65218;
    cursor: pointer;
}
.main{
    width: 300px;
    height: 380px;
    border-radius: 50px;
    backdrop-filter: blur(55px);
    box-shadow: 1PX 1PX 10PX silver;
    margin: 40px auto;
    margin-top: 70px
}
.box{
   width: 50x;
    height: 30px; 
    margin-top: 10px;
    margin-bottom: 20px;
    border-radius: 70px;
    margin-left: 30px;
    border : 1px solid ;
    color:#333;
    font-size: 20px;
}
.btn{
    width: 90px;
    height: 50px;
    border : 1px solid ;
    border-radius: 15px;
    background-color:#b65218;
    color: white;
    margin-bottom: 20px;
    margin-top: 20px;
    margin-left: 110px;
}
.btn:hover{
    cursor: pointer;
    background-color: white;
    color:black;
; 
}
#x{
    margin-left: 120px;
    font-size: 20px;
    color: #333;
    margin-top: 20px;
    margin-left: 90px;
}
#x:hover{
    color:#b65218;
    cursor: pointer;
}
.a{
    margin-left: 140px;
    color: white;
    margin-left: 100px;
    font-size: 20px;
    font-style: italic;
}
.a:hover{
color:#b65218;
; 
}
</style>
</html>