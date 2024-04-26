<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Compendio de Datos de Dinosaurios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../styles/estilos.css" rel="stylesheet">
</head>
<body style="background-image: url('../images/dinosaurio2.png');background-size: cover ">
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <h1 style="font-family:Cambria;">Compendio de Datos de Dinosaurios</h1>
        </a>
    </div>
</nav>
<style>
    a
    {
        color: black;
        text-decoration: none;
        font-family: "Comic Sans MS";
    }
</style>


<?php echo ""?>

<?php
    include ("../metodos/conexion.php");
    $consulta = "SELECT * FROM `ficha_tecnica`";
    $resultado = mysqli_query($conexion, $consulta)or die("no se ha podido mostrar la consulta");
?>

<div class="container">
    <h1 style="background-color: white;border-radius: 5px; padding: 5px">REGISTROS</h1>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Clasificacion</th>
            <th scope="col">Longitud (Metros)</th>
            <th scope="col">Altura (Metros)</th>
            <th scope="col">Peso (Toneladas)</th>
            <th scope="col">Era</th>
            <th scope="col">Habilidades</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Eliminar</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //insertamos una estructura de tipo bucle par mostrar los registros
        while ($columna = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>".$columna['id']."</td>";
            echo "<td>".$columna['nombre']."</td>";
            echo "<td>".$columna['clasificacion']."</td>";
            echo "<td>".$columna['longitud']."</td>";
            echo "<td>".$columna['altura']."</td>";
            echo "<td>".$columna['peso']."</td>";
            echo "<td>".$columna['era']."</td>";
            echo "<td>".$columna['habilidades']."</td>";
            $id=$columna['id'];
            echo "<td><a href='modificar.php?id=$id'><button class='btn btn-info'>Actualizar</a></td>";
            echo "<td><a href='../metodos/eliminar.php?id=$id'><button class='btn btn-danger'>Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

<a href="../index.php">
    <button class="btn btn-danger" value="Regresar">Regresar</button>
</a>



<?php  include ("../Partes/footer.php")?>