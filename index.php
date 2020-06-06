<?php

require_once "funcoes.php";
require_once "autoload.php";

use \App\Dvd;
use \App\Leite;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etapa 2</title>
</head>

<body>

    <h2>Cadastrar Produtos</h2><br>

    <p>

        <a href="cadastrarLeite.php">Cadastrar Leite</a>

    </p>

    <p>

        <a href="cadastrarDVD.php">Cadastrar Leite</a>

    </p>


    


    

    <h3>LEITE</h3>

    <form action="index.php" method="POST">


        <label for="marca">Marca: </label>
        <input type="text" name="marca" id="marca" value="<?= $produto->marca ?? '' ?>"><br><br>

        <label for="volume">Volume: </label>
        <input type="text" name="volume" id="volume" value="<?= $produto->volume ?? '' ?>"><br><br>

        <label for="dataDeValidade">Data de Validade: </label>
        <input type="date" name="dataDeValidade" id="dataDeValidade" value="<?= $produto->dataDeValidade ?? '' ?>"><br><br>

        <h3>DVD</h3>
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo" id="titulo" value="<?= $produto->titulo ?? '' ?>"><br><br>

        <label for="ano">Ano: </label>
        <input type="text" name="ano" id="ano" value="<?= $produto->ano ?? '' ?>"><br><br>

        <input type="submit" name="enviado" value="Cadastrar">


    </form>



</body>

</html>