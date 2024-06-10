<?php 

    include('controller.php');
    $conn=connection();
    
    $id=$_GET['Id'];
    $sql="SELECT * FROM food_table WHERE Id='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar menú</title>
    </head>
    <body>
        <div class="food-form">
            <form action="edit.php" method="POST">
                <h1>Editar Menú</h1>
                <input type="hidden" name="id" value="<?=$row['Id']?>">
                <input type="text" name="name" value="<?=$row['Nombre']?>">
                <input type="number" name="precio" value="<?=$row['Precio']?>">
                <input type="text" name="contenido" value="<?=$row['Contenido']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>