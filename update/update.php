<?php

class Host{
    private $hostname = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $DB = "db_esercitazione";

    public $connessione;

    public function __construct()
    {
        $this->connessione = new mysqli($this->hostname, $this->user, $this->password, $this->DB);
            if(mysqli_connect_error()){
                echo "ERRORE DI CONNESSIONE".mysqli_connect_error();
            }else{
                echo "Connessione ok";
            }       
        }/* fine construttore */


        public function dati(){
            $id = $this->connessione->real_escape_string($_REQUEST['id']);
            $nome = $this->connessione->real_escape_string($_REQUEST['nome']);
            $cognome = $this->connessione->real_escape_string($_REQUEST['cognome']);
            $email = $this->connessione->real_escape_string($_REQUEST['email']);
         
if((isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) && (isset($_REQUEST['cognome']) && !empty($_REQUEST['cognome'])) && (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) && (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) ){
        $query = 
        "UPDATE esercizio_table 
        SET nome='$nome',cognome='$cognome', email='$email'
        WHERE id='$id'";

        $sql = $this->connessione->query($query);

        if($sql){
            header('location:index.php?msg1=ok');
        }else{header('location:index.php?msg2=error');}
    }else{
        header('location:index.php?msg3=erroreCampoVuoto');
    }
        }
    }
    
  
    
?>