<?php
    $usuario="root";
    $password="";
    $servidor="localhost";
    $nombreBD="bd_dinosaurio";

    $conexion=mysqli_connect($servidor,$usuario,$password) or die("no se ha podido conectar al servidor");

    $db= mysqli_select_db($conexion,$nombreBD) or die("no se ha podido conectar al servidor");






