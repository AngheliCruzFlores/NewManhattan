<?php
include("controller.php");
$conn = connection();

$id = $_POST['id'];
$nombre = $_POST['name'];
$precio = $_POST['precio'];
$contenido = $_POST['contenido'];

$sql = "INSERT INTO food_table (Id,Nombre,Precio,Contenido) VALUES('$id','$nombre','$precio','$contenido')";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");}