<?php
$coon=mysqli_connect("localhost","root","","coffee");
$id= $_GET['id'];
mysqli_query($coon, "delete from coffee where id=$id");
header("location:view.php");
?>