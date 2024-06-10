<?php
include("controller.php");
$conn = connection();

$sql = "SELECT * FROM food_table";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>NewManhattan</title>
</head>
<body>
    <h1>Bienvenido a NewManhattan</h1>
    <section class="registro" id="registro">
    <div class="food-form">
        <h2>Agregue un nuevo plato</h2>
        <form action="insert.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="number" name="precio" placeholder="Precio">
            <input type="text" name="contenido" placeholder="Contenido">
            <input type="submit" value="Agregar">
        </form>
    </div>
    </section>
        <div class="food-table">
            <h2> Nuestro Menú </h2>
                <table border=0.5px>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Contenido</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row=mysqli_fetch_array($query)): ?>
                        <tr>
                            <th> <?= $row['Id'] ?></th>
                            <th> <?= $row['Nombre'] ?> </th>
                            <th> <?= $row['Precio'] ?> </th>
                            <th> <?= $row['Contenido'] ?> </th>
                            <th><a href="update.php?Id=<?= $row['Id'] ?>" class="food-table--edit" >Editar</a></th>
                            <th><a href="delete.php?Id=<?= $row['Id'] ?>" class="food-table--delete"> Eliminar</a></th>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
        </div>

    <section class="contacto" id="contacto">
        <div class="contenedor-contacto">
            <h2>Contacto</h2>
            <div class="fila">
                <div class="col">
                    <div class="info">
                        <h3>Email:</h3>
                        <p>newManhattan@gmail</p>
                    </div>
                    <div class="info">
                        <h3>Teléfono:</h3>
                        <p>965435675</p>
                    </div>
                    <div class="info">
                        <h3>Ciudad:</h3>
                        <p>Manhattan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>