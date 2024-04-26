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
    form{
        <!--border: solid 0 green;-->
    }
    .caja_formulario
    {
        background-image: url('../images/dinosaurio.jpg');
        border-radius: 20px;
        background-size: cover;
        display: flex;
        height: 800px;
        width: 1200px;
        margin-bottom: 200px;
        border: solid 5px white;
    }
    .entradas
    {
        display: block;
        justify-content: center;
        align-content: center;
    }
    label
    {
        background-color: antiquewhite;
        font-family: "Comic Sans MS";
        border-radius: 10px;
        padding: 10px;
        margin: 5px;
        width: 20%;
    }
    .opciones
    {
        background-color: steelblue;
        border-radius: 20px;
        padding: 5px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;

    }
    .check-box
    {
        font-family: "Comic Sans MS";
        border-radius: 10px;
        padding: 10px;
        margin: 5px;
        width: 70%;
    }
    .opcion
    {
        background-color: wheat;
        border-radius: 10px;
        width: 200px;
        margin: 5px;

    }
    .botones
    {
        padding: 10px;
        display: flex;
        justify-content: space-around;
    }
</style>
<a href="../index.php" style="display: block;width: 100%">
    <button class="btn btn-danger" value="Regresar">Regresar</button>
</a>

<div style="display: flex;flex-wrap: wrap;width: 100%;height: 100%;padding: 2%;justify-content: center;">
    <div class="caja_formulario">
        <form action="../metodos/agregar_dinosaurios.php" method="REQUEST" style="width: 100%;height: 80%">
            <div class="titulo" style="display: flex;justify-content: center;align-content: center;width: 100%;height: 10%;margin-top: 10px">
                <h1 style="background-color: aliceblue;border-radius: 10px;font-family: 'Comic Sans MS' ;">REGISTRO FORMULARIO</h1>
            </div>
            <div class="entradas">
                <div class="entrada">
                    <label for="nombre">Nombre</label>
                    <input name="nombre" type="text">
                </div>
                <div class="entrada">
                    <label for="clasificacion">Clasificacion</label>
                    <select name="clasificacion">
                        <option value="Carnívoro" selected>Carnívoro</option>
                        <option value="Herbívoro">Herbívoro</option>
                        <option value="Omnívoro">Omnívoro</option>
                        <option value="Piscívoro">Piscívoro</option>
                        <option value="Frugívoro">Frugívoro</option>
                        <option value="Insectívoro">Insectívoro</option>
                    </select>

                </div>
                <div class="entrada">
                    <label for="longitud">Longitud</label>
                    <input name="longitud" type="number" placeholder="0">
                </div>
                <div class="entrada">
                    <label for="altura">Altura</label>
                    <input name="altura" type="number">
                </div>
                <div class="entrada">
                    <label for="peso">Peso</label>
                    <input name="peso" type="text">
                </div>
                <div class="entrada">
                    <label for="era">Era</label>
                    <select name="era">
                        <option value="Triásico" selected>Triásico</option>
                        <option value="Jurásico">Jurásico</option>
                        <option value="Cretácico">Cretácico</option>
                    </select>
                </div>
                <div class="entrada">
                    <label for="habilidades">Habilidades</label>>

                    <div class="opciones">
                        <div class="opcion">
                            <label for="velocidad" class="check-box">Velocidad</label>
                            <input type="checkbox" name="velocidad">
                        </div>

                        <div class="opcion">
                            <label for="agilidad" class="check-box">Agilidad</label>
                            <input type="checkbox" name="agilidad">
                        </div>

                        <div class="opcion">
                            <label for="caza" class="check-box">Caza</label>
                            <input type="checkbox" name="caza">
                        </div>

                        <div class="opcion">
                            <label for="depredador" class="check-box">Depredador</label>
                            <input type="checkbox" name="depredador">
                        </div>

                        <div class="opcion">
                            <label for="alcanzar_alturas" class="check-box">Alcanzar Alturas</label>
                            <input type="checkbox" name="alcanzar_alturas">
                        </div>

                        <div class="opcion">
                            <label for="volador" class="check-box">Volador</label>
                            <input type="checkbox" name="volador">
                        </div>

                    </div>

                </div>
                <div class="botones">
                    <input class="btn btn-success" type="submit" value="Registrar">
                    <input class="btn btn-primary" type="reset" value="Borrar Todo">
                </div>
        </form>

    </div>
</div>



<?php include ("../Partes/footer.php")?>