<?php
$host = "127.0.0.1";
$user = "root";
$password = "";

$connessione = new mysqli($host,$user,$password);

if($connessione === false){
    die("Errore di connessione"." ".$connessione->connect_error);
};

$sql = "CREATE DATABASE IF NOT EXISTS db_esercitazione";
if($connessione->query($sql) === TRUE){
    echo "il database è stato creato con successo";
}else {
    echo "errore della creazione del database"." ". $connessione->connect_error;
}

$connessione->close();
?>