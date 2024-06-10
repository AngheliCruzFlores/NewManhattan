<?php
include("controller.php");
$conn = connection();
$id=$_GET["Id"];
$sql="DELETE FROM food_table WHERE Id='$id'";
$query = mysqli_query($conn, $sql);
if($query){
    Header("Location: index.php");
}