<?php
include ("conexion.php");
$existe_registro = false;
if (!empty($_REQUEST["id"]))
{
    $id=$_REQUEST["id"];
    $existe_registro=true;
}

//establecer conexion para la modificacion de datos
if ($existe_registro) {

    $consulta_eliminar="DELETE FROM `ficha_tecnica` WHERE id='$id'";
    $resultado = mysqli_query($conexion, $consulta_eliminar) or die("no se ha podido realizar el registro");

    if($resultado)
    {
        include ("../paginas/eliminado.php");
    }
    else{
        echo "No se ha podido realizar la eliminacion!!";
    }
}
?>
