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


<?php
$existe_registro=false;
include ("conexion.php");
if(!empty($_REQUEST["nombre"])
 && !empty($_REQUEST["clasificacion"])
 && !empty($_REQUEST["longitud"])
 && !empty($_REQUEST["altura"])
 && !empty($_REQUEST["peso"])
    && !empty($_REQUEST["era"]) &&
    (!empty($_REQUEST["velocidad"]) ||
        !empty($_REQUEST["agilidad"]) ||
        !empty($_REQUEST["caza"]) ||
        !empty($_REQUEST["depredador"]) ||
        !empty($_REQUEST["alcanzar_alturas"])
        || !empty($_REQUEST["volador"])
    )
)
{
    $existe_registro=true;

    //asignar variables
    $nombre=$_REQUEST["nombre"];
    $clasificacion=$_REQUEST["clasificacion"];
    $longitud=$_REQUEST["longitud"];
    $altura=$_REQUEST["altura"];
    $peso=$_REQUEST["peso"];
    $era=$_REQUEST["era"];
    $habilidades="";
    if(!empty($_REQUEST["velocidad"]))
    {
        $habilidades=$habilidades."Velocidad, ";
    }
    if(!empty($_REQUEST["agilidad"]))
    {
        $habilidades=$habilidades."Agilidad, ";
    }
    if(!empty($_REQUEST["caza"]))
    {
        $habilidades=$habilidades."Caza, ";
    }
    if(!empty($_REQUEST["depredador"]))
    {
        $habilidades=$habilidades."Depredador, ";
    }
    if(!empty($_REQUEST["alcanzar_alturas"]))
    {
        $habilidades=$habilidades."Alcanzar alturas, ";
    }
    if(!empty($_REQUEST["volador"]))
    {
        $habilidades=$habilidades."Volador, ";
    }
    $habilidades=substr($habilidades,0,-2);
}



if($existe_registro)
{
    //creamos la consulta agregar
    $consulta_agregar="INSERT INTO `ficha_tecnica`(`nombre`, `clasificacion`, `longitud`, `altura`, `peso`, `era`, `habilidades`)
    VALUES ('$nombre','$clasificacion','$longitud','$altura','$peso','$era','$habilidades')";

    $resultado=mysqli_query($conexion,$consulta_agregar);
    if($resultado)
    {
        echo "<div class='alert alert-success' role='alert'>
        Se ha agregado exitosamente!!
    </div>";
    }
    else{
        echo "<div class='alert alert-danger' role='alert'>  Ha habido un error a la hora de actualizar los datos, intente de nuevo
</div>";
    }

}
else{
    echo "<div class='alert alert-danger' role='alert'>  Al menos Un campo esta vacio!!!
</div>";
}
?>
<a href="../paginas/agregar.php">
    <button class="btn btn-danger" value="Regresar">Regresar</button>
</a>
<a href="../paginas/mostrar.php">
    <button class="btn btn-success mx-4" value="Regresar">VerDatos</button>
</a>




<?php include ("../Partes/footer.php")?>