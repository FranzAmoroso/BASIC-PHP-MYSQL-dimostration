<?php

$host = "127.0.0.7";
$user = "root";
$password = "";
$database = "db_esercitazione";
$tablename = "esercizio_table";

$connessione = new mysqli($host, $user,$password,$database);
if($connessione === false){
    die("ERRORE NELLA CONNESSIONE DEL DATABASE"." ". $connessione->connect_error);
}
$nome = $connessione->real_escape_string($_REQUEST["name"]);
$cognome = $connessione->real_escape_string($_REQUEST["surname"]);
$Email = $connessione->real_escape_string($_REQUEST["E-mail"]);
    
    $insert = "INSERT INTO esercizio_table (nome,cognome,email) 
               VALUES 
               ('$nome','$cognome','$Email')";
               if((isset($_GET["name"]) && $_GET["name"] != '') && (isset($_GET["surname"]) && $_GET["surname"] != '') && (isset($_GET["E-mail"]) && $_GET["E-mail"] != '')){
                if($connessione->query($insert) === true){
                    $ultimo_id = $connessione->insert_id;
                    echo "Persona inserita con successo nella tabella. Il suo id è:".' '.$ultimo_id;
                }else{
                    echo "ERRORE:i dati non sono stati inseriti";
                }
                }else{
                    $error = "I campi non sono stati compilati"."<br>";
                    header('Location:index.php?error='.$error) ;
                    echo  "<br>"."Inserire nome*"."<br>"."Inserisci cognome*"."<br>"."inserire un E-mail*"."<br>";
                }
$select = 'SELECT * FROM esercizio_table';
if($result = $connessione->query($select)){
    if($result->num_rows > 0){
       
       echo "<div class='table1'>
       <table>
        <tr>
        <th>ID</th>
        <th>nome</th>
        <th>cognome</th>
        <th>E-mail</th>
        </tr>";
        while($row = $result->fetch_array()){
            echo 
            "<tr>
            <td>".$row['id']. "</td>
            <td>" .$row['nome']."</td>
            <td>".$row['cognome']. "</td>
            <td>".$row['email']. "</td>
            </tr>";
        }echo '</table>'.'</div>';
    }
}else{
    echo "Errore impossibile eseguire $select". $connesione->error;
}
$connessione->close();
?>