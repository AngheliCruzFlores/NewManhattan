<?php
function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $bd = "restaurantsystem";
    $connect=mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $bd);
    return $connect;
}