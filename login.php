<?php

require 'connect.php';  //connessione al DB

$nome = $_POST["nome"];           //lettura dati fal form
$cognome = $_POST["cognome"];           //lettura dati fal form
$password = $_POST["password"];

$sql="SELECT * FROM utenti WHERE nome='$nome' AND cognome='$cognome'";

$result=$conn->query($sql);

if($result->num_rows == 0){
    echo "utente non trovato <br>
    <a href='login.html'><button  >indietro</button></a>
    ";
}else{
    
    $sql="SELECT * FROM utenti WHERE password='$password'";
    $result=$conn->query($sql);

    if($result->num_rows == 0){
        echo "password errata <br>
        <a href='login.html'><button  >indietro</button></a>
        ";
    }else{
        echo"login effettuato con successo";
    }
}

?>