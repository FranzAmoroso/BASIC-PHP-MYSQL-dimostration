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
            <form action="" method="get">
                <h3>PREPARATED</h3>
                <p>2 fasi di preparated</p>
                <li>preparare: lo statment mviene mandato al server che fa il controllo delle sintassi e ottimizzazione query per salvarla dopo</li>
                <li>execute:vengono mandati i valori, ripreso lo statment ed eseguito</li>
                <li>Vantaggi: per lo statment ripetute volte con valori differenti. E più veloce perchè è passato una volta sola, ottimo controllo sql injctioin percchè i valori sono inviati direttamente al db con un protocollo diverso e sicuro</li>
            </form>
        </span>
        <span class="">
            <form action="prepared.php" method="get">
                <label for="">NOME</label>
                <input type="text" name="nome" id="">
                <label for="">COGNOME</label>
                <input type="text" name="cognome" id="">
                <label for="E-mail">E-mail</label>
                <input type="text" name="email" id="">
            <input type="submit" value="Vai a..">
            </form>
        </span>
    </div>


</body>

</html>