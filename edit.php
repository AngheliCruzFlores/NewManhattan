<?php
include('controller.php');
$conn = connection();

$id = $_POST['id'];
$nombre = $_POST['name'];
$precio = $_POST['precio'];
$contenido = $_POST['contenido'];

$sql = "UPDATE food_table SET nombre='$nombre', precio='$precio', contenido= '$contenido' WHERE Id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: index.php");
}