<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="view1.css">
    <title>view</title>
   
</head>
<body>
<center>
    <h3>All the Coffee </h3>
</center>


<?php
$coon=mysqli_connect("localhost","root","","coffee");
$result=mysqli_query($coon,"select * from coffee");
while($row=mysqli_fetch_array($result)){
  echo "
  <center>
  <main>
  <div class='card' style='width: 15rem;'>
    <img src='$row[iamge]' 'class='card-img-top' >
    <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
    <h5 class='card-title'>$row[type]</h5>
    <p class='card-text'>$row[price]</p>
      <a href='#' class='btn btn-danger'>buy</a>
      
    </div>
  </main>
  </center>
  ";
}

?>
</body>
<style>
  body{
    background-image: url(bg4.jpg);
 } 
 h3{
  color:white;
 }
 h3:hover{
  color:#b65218;
    cursor: pointer;
 }
 .card{
    float:left;
    margin-left: 30px;
    margin-right: 20px;
    border-radius: 60px;
    margin-bottom: 30px;
}

.card img{
    width: 100%;
    height: 220px;
    border-radius: 60px;

}
 </style>
</html>