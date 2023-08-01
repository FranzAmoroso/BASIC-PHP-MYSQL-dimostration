<?php

$host = "127.0.0.1";
$password = "";
$user = "root";
$DB = "db_esercitazione";

$connessione = new mysqli($host,$user,$password,$DB);
if($connessione === false){
    die("ERROR: connect");
}

$select = $_REQUEST['limit'];
$sqlSelect = "SELECT * FROM esercizio_table LIMIT $select";
if($result = $connessione->query($sqlSelect)){
    if($result->num_rows > 0){
        echo '
        <table>
        <thead><tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>E-mail</th>
        </tr></thead>
        <tbody>';
    }
    while($row = $result->fetch_array()){
        echo'
        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['nome'].'</td>
        <td>'.$row['cognome'].'</td>
        <td>'.$row['email'].'</td>
        </tr>';
    }
    echo '</tbody></table>';
}


$connessione->close();

?>