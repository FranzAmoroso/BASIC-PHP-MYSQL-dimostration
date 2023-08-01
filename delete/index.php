<?php 
require "delete.php";
$DeleteDat = new Host();
if(isset($_REQUEST['invia'])){
$DeleteDat->deletedati($_REQUEST);
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
<p class="data"><?php require '../data.php' ?></p><h1 class="HT">Esercitazioni PHP/MYSQL</h1>
</div>
<div class="cont">   
        <span class="">
            <form action="" method="get">
                <h3>Delete Dei Dati</h3>
                <label for="id">ID</label>
                <input type="number" name="id" id="">
                <?php
                if(isset($_REQUEST['msg3'])){
                    echo "Compila il campo";
                }
                ?>
                <button type="submit" name="invia">Delete</button>
            </form>
    </div>
    <?php
echo $DeleteDat->table();
    ?>
</body>
</html>