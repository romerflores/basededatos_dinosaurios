<?php require ("Partes/cabeza_y_nav.php")?>

<style>
    .container
    {
        display: flex;
        flex-wrap: wrap;
        margin-top: 10%;
        padding: 50px;
        justify-content: space-around;
    }
    .caja
    {
        background: cadetblue;
        border-radius: 20px ;
        height: 250px;
        width: 200px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 10px;
    }
    img
    {
        width: 100%;
        height: 80%;
        padding: 10px;
    }
    .caja:hover
    {
        background: brown;
        color:aliceblue;
    }
    p
    {
        font-family: "Comic Sans MS";
    }
    a
    {
        color: black;
        text-decoration: none;
        font-family: "Comic Sans MS";
    }
</style>
<div class="container">
    <a href="paginas/agregar.php">
        <div class="caja">
            <img src="images/registrar.png" alt="imagen registrar">
            <p>REGISTRAR DATOS</p>
        </div>
    </a>
    <a href="paginas/mostrar.php">
        <div class="caja">
            <img src="images/mostrar.webp" alt="imagen ojo">
            <p>MOSTRAR DATOS</p>
        </div>
    </a>
</div>


<?php include ("Partes/footer.php")?>