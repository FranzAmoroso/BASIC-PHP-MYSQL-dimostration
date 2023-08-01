<?php
//questi sono i tre metodi per connettere un database:

//Procedurale
/* $connesione = mysqli_connect('127.0.0.1',"root",'',"ProvaConnesione"); */

//OOP ad Ogetti
/* $connessione = new mysqli("127.0.0.1","root","","ProvaConnesione"); */

//PDO
/* $connesio = new PDO("mysql:host=localhost;dbname=ProvaConnessione","root",""); */

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "provaconnesione";

$connessione = new mysqli($host,$user,$password,$database);
if($connessione === false ) {
    die("errore di connesione"." ". $connessione->connect_error);
}
echo "connesione avvenuta con successo"." ".$connessione->host_info;
$connessione->close();
?>