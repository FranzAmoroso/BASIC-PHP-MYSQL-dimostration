<?php
$sqlIns = "INSERT INTO esercizio_table (nome,cognome,email) 
VALUES(?,?,?)";

$host = "127.0.0.1";
$user = "root";
$password = "";
$DB = "db_esercitazione";

$connessione = new mysqli($host,$user,$password,$DB);
if($connessione === false){
    die("Errore di connessione");
}

if($statment = $connessione->prepare($sqlIns)){
    $statment->bind_param("sss",$nome,$cognome,$email);
    $nome = $_REQUEST['nome'];
    $cognome = $_REQUEST['cognome'];
    $email = $_REQUEST['email'];
    $statment->execute();


    echo "Persona inserita con successo il suo id è". $connessione->insert_id;

}else{
    echo "Errore inserimento dati";
}

$sqlSelect = "SELECT * FROM esercizio_table";
if($result = $connessione->query($sqlSelect)){
    if($result->num_rows > 0){
        echo '<table>
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Email</th>
        </tr>';
        while($row = $result->fetch_array()){
            echo '
            <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['nome'].'</td>
            <td>'.$row['cognome'].'</td>
            <td>'.$row['email'].'</td>
            </tr>
            ';
        }
        echo '</table>';
        
    }else{
        echo "non ci sono righe per questa query";
    }
}else{
    echo ("ERRORE: impossibile eseguire la query" . $sql. $connessione->error);
}
$statment->close();
$connessione->close();
?>