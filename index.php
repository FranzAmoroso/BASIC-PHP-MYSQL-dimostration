<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Esercitazioni</title>
</head>

<body>
    <div class="Header">
        <p class="data"><?php require 'data.php' ?></p>
        <h1 class="HT">Esercitazioni PHP/MYSQL</h1>
    </div>
    <div class="cont">

        <span class="">
            <form action="connessione_al_db/index.php" method="">
                <h3>Connessione_DB</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="creare_un_DB/index.php" method="get">
                <h3>CREARE UN DATABASE</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="creare_Tabella/index.php" method="get">
                <h3>CREARE UNA TABELLA</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="inserire_dati_nella_tabella/index.php" method="get">
                <h3>INSERIRE DATI NELLA TABELLA</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="prepared_per_salvare_le_query/index.php" method="get">
                <h3>PREPARED E SALVARE LE QUERY</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="select/index.php" method="get">
                <h3>SELECT dei dati</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="limit_oder_by/index.php" method="get">
                <h3>LIMIT && ODER BY</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="update/index.php" method="get">
                <h3>MODIFICARE DATI CON UPDATE</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="delete/index.php" method="get">
                <h3>ELIMINARE DATI</h3>
                <input type="submit" value="Vai a..">
            </form>
        </span>
    </div>


</body>

</html>