<?php
class Host{
private $hostname = "127.0.0.1";
private $username = "root";
private $password = "";
private $DB_name = "db_esercitazione";

public $connessione;

public function __construct()
{
    $this->connessione = new mysqli($this->hostname, $this->username, $this->password, $this->DB_name);
    if(mysqli_connect_error()){
        echo "ERRORE DI CONNESSIONE HOST";
    }else{
        echo "connessione OK!";
    }
}
public function table(){
    $Select = "SELECT * FROM esercizio_table";
    $querySelect = $this->connessione->query($Select);
     if($querySelect->num_rows > 0){
        
            echo '
            <table><thead>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>E-mail</th>
            </tr></thead><tbody>';
            while($row = $querySelect->fetch_array()){
                echo'
                <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['nome'].'</td>
                <td>'.$row['cognome'].'</td>
                <td>'.$row['email'].'</td>
                </tr>
                ';
            }
            echo '</tbody></table>';
        }
        /* header('location:index.php?msg4=Tabella'); */
}
public function deletedati(){
    $id = $this->connessione->real_escape_string($_REQUEST['id']);
    $nome = $this->connessione->real_escape_string($_REQUEST['nome']);
    $cognome = $this->connessione->real_escape_string($_REQUEST['cognome']);
    $email = $this->connessione->real_escape_string($_REQUEST['email']);

    


if(isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
    $query = "DELETE FROM esercizio_table WHERE id='$id'";

    $sql = $this->connessione->query($query);

    if($sql){
        header('location:index.php?msg1=OK!');
    }else{
        header('location:index.php?msg2=ERRORE');
    }
}else{
    header('location:index.php?msg3=CampiNonCompilati');
}
}

}










?>