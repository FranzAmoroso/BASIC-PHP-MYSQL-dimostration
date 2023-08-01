<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$DB = "db_esercitazione";


$connessione = new mysqli($host,$user,$password,$DB);
if($connessione === false){
    die("ERROR CONNECT");
}

$orderby = $_REQUEST['orderby'];
$ascdesc = $_REQUEST['ascdesc'];
$sqlOrderBy = "SELECT * FROM esercizio_table ORDER BY $orderby $ascdesc";
if($result = $connessione->query($sqlOrderBy)){
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
    echo '
    <tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['nome'].'</td>
    <td>'.$row['cognome'].'</td>
    <td>'.$row['email'].'</td>
    </tr>';
}
echo '</tbody></table>';

$connessione->close();
?>