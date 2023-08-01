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
            <form action="limit.php" method="get">
                <h3>Limit</h3>
                <p>selezioneremo il imite di righe nella tabella che vorremmo vedere</p>
                <select name="limit" class="const">
                                    <option  value="1">1</option>
                                    <option  value="2">2</option>
                                    <option  value="3">3</option>
                                    <option  value="4">4</option>
                                    <option  value="5">5</option>
                                    <option  value="6">6</option>
                                    <option  value="7">7</option>
                                    <option  value="8">8</option>
                                    <option  value="9">9</option>
                                    <option  value="10">10</option>
                                    <option  value="11">11</option>
                                    <option  value="12">12</option>
                                    <option  value="13">13</option>
                                    <option  value="14">14</option>
                                    <option  value="15">15</option>
                                    <option  value="1">16</option>
                                    <option  value="17">17</option>
                                    <option  value="18">18</option>
                                    <option  value="19">19</option>
                                    <option  value="20">20</option>
                </select>
                <input type="submit" value="Vai a..">
            </form>
        </span>
        <span class="">
            <form action="order_by.php" method="post">
                <h3>oder by</h3>
                <p>Ordina per:</p>
                <select name="orderby" class="const">
                                    <option  value="id">ID</option>
                                    <option  value="nome">Nome</option>
                                    <option  value="cognome">Cognome</option>
                                    <option  value="email">E-mail</option>
                </select>
                <p>dal basso verso l'alto o dall'alto verso il basso</p>
                <select name="ascdesc" class="const">Ordina per:
                                    <option  value="ASC">ASC</option>
                                    <option  value="DESC">DESC</option>
                </select>
                <input type="submit" value="Vai a..">
            </form>
        </span>
    </div>


</body>

</html>