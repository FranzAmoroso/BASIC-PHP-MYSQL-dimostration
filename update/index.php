<?php

require 'update.php';

$nuovoUpdate = new Host();
if(isset($_REQUEST['invia'])){
$nuovoUpdate->dati($_REQUEST['nome']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Esercitazioni</title>
</head>

<body>
    <div class="Header">
        <p class="data"><?php require '../data.php' ?></p>
        <h1 class="HT">Esercitazioni PHP/MYSQL</h1>
    </div>
    <div class="cont">
        <span>
            <form action="" method="get">
                <h3>Modificare i dati con update</h3>
                <label for="id">ID</label>
                <input type="number" name="id" id="">
                <?php if(isset($_REQUEST['msg3'])){
                    echo 'Compilare il Campo';
                }
                ?>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="">
                <?php if(isset($_REQUEST['msg3'])){
                    echo 'Compilare il Campo';
                }
                ?>
                <label for="cognome">cognome</label>
                <input type="text" name="cognome" id="">
                <?php if(isset($_REQUEST['msg3'])){
                    echo 'Compilare il Campo';
                }
                ?>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="">
                <?php if(isset($_REQUEST['msg3'])){
                    echo 'Compilare il Campo';
                }
                ?>
            <button type="submit" name="invia">INVIA</button>
            </form>
        </span>
    </div>
    <?php 
if(isset($_GET['msg1']) && !empty($_GET['msg1'])){
    echo '<p>dati inseriti con successo</p>';
}
?>


</body>

</html>