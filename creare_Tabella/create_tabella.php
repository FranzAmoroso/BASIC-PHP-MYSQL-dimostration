<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "db_esercitazione";

$connessione = new mysqli($host,$user,$password,$database);
if($connessione == false){
    die("errore connessione ad MYSQL"." ".$connessione->connection_error);
}

$table_esercizio = "CREATE TABLE esercizio_table(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(50) NOT NULL, 
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(10) NOT NULL UNIQUE)";

if($connessione->query($table_esercizio) === TRUE){
    echo "la tabella è stata creata con successo";
}else{
    echo "la tabella non è stata creata"." ". $connessione->error;
}

$connessione->close();
?>