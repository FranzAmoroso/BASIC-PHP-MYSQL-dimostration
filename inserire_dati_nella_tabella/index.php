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
            <form action="inserire_dati.php" method="get">
                <h3>INSERIRE DATI IN UNA TABELLA</h3>
                <label for="nom">Nome</label>
                <input type="text" name="name" id="" placeholder="Inserisci nome">
               <?php /* if(isset($_GET["name"]) && $_GET['name'] != ''){
                   echo header('Location:index.php?error=I%20campi%20non%20sono%20stati%20compilati.').;
                }else{
                     ;
                }  */?>
                <label for="cogno">cognome</label>
                <input type="text" name="surname" placeholder="inserisci cognome">
                <?php /*   */?>
                <label for="E-mail">E-mail</label>
                <input type="email" name="E-mail" id="" placeholder="inserisci E-mail">
                <?php /* if(isset($_GET["E-mail"]) && $_GET["E-mail"] != ''){
                    echo "E-mail Inserita";
                }else{
                    ;
                }  */?>
                <input type="submit" value="Vai a..">
            </form>
        </span>
    </div>


</body>

</html>

    



    


