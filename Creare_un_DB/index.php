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

        <span class="">
            <form action="create_database.php" method="get">
                <h3>CREARE UN DATABASE</h3>
                <p>$connessione->query("CREATE DATABASE db_prova");</p>
                <p>oppure</p>
                <p>$sql = CREATE DATABASE db_prova;<br>
                    $connessione->query($sql)</p>
                <input type="submit" value="Vai a..">
            </form>
        </span>
    </div>


</body>

</html>