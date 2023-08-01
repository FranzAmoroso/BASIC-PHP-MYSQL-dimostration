<?php

$sql = "INSERT INTO esercizio_table(nome,cognome,email)
        VALUES (?,?,?)";

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "db_esercitazione";
$connessione = new mysqli($host,$user,$password,$db);
if($connessione === false){
    die("ERRORE di connesione". $connessione->connect_error);
}


if($statment = $connessione->prepare($sql)){
    $statment->bind_param("sss",$nome,$cognome,$email);
    $nome = $connessione->real_escape_string($_REQUEST['nome']);
    $cognome = $connessione->real_escape_string($_REQUEST['cognome']);
    $email = $connessione->real_escape_string($_REQUEST['email']);
    $statment->execute();
    echo "record inseriti con successo";
}else{ 
    echo "Errore non è possibile eseguire la query: $sql. ". $connessione_error;
}
$statment->close();
$connessione->close();



?>