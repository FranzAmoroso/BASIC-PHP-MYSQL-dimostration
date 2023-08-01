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
            <form action="Connessione_DB.php" method="get">
                <h3>Connesione al database</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="" method="post">
                <h3>check_connessione</h3>
                <p>questi sono i tre metodi per connettere un database:<br>
                    Procedurale<br>
                    $connessione = mysqli_connect('127.0.0.1',"root",'',"provaconnessione");<br>
                    OOP ad Ogetti<br>
                    $connessione = new mysqli("127.0.0.1","root","","provaconnessione"); */<br>
                    PDO<br>
                    $connessione = new PDO("mysql:host=localhost;dbname=provaconnessione","root","");</p>
            </form>
        </span>
        <span class="">
            <form action="" method="post">
                <h3>chiusura connesione</h3>
                <p>$connessione->close()</p>
            </form>
        </span>
    </div>


</body>

</html>