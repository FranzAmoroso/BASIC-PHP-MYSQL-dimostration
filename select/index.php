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
            <form action="select.php" method="get">
                <h3>Select(mostra) dati del data base</h3>
                <input type="submit" value="Vai a..">
            </form>

        </span>
        <span class="">
        <form action="select+insert.php" method="get">
                <h3>INSERT + SELECT DEI DATI</h3>
                <label for="">NOME</label>
                <input type="text" name="nome" id="">
                <?php if(isset($_REQUEST['nome']) && $_REQUEST['nome'] == ''){
                    echo "Inserire nome*";
                   /*  $error = "I campi non sono stati compilati"; */
                    /* echo header('Location:index.php?error='.$error); */
                   /*  $connessione === false;  */
                }  ?>
                <label for="">COGNOME</label>
                <input type="text" name="cognome" id="">
                <?php   
                if(isset($_REQUEST['cognome']) && $_REQUEST['cognome'] == ''){
                        echo 'inserire cognome*';
                       /*  $error= 'I campi non sono stati compilati'; */
                        /* echo header('Location:index.php?error'.$error); */
                       /*  $connessione === false */;
                    }
                        ?>
                <label for="E-mail">E-mail</label>
                <input type="text" name="email" id="">
                <?php if(isset($_REQUEST['email']) && $_REQUEST['email'] == ''){
                    echo "inserire email*";
                    /* $error = "I campi non sono stati compilati"; */
                    /* echo header("Location:index.php?error=".$error); */
                    /* $connessione === false; */                
                    } ?>
            <input type="submit" value="Vai a..">
            </form>
        </span>
    </div>


</body>

</html>