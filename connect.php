<?php

$dbhost = "localhost";
$dbname = "utenti";
$dbuser = "samuele";
$dbpass = "";
$dbport = 3306;

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);
if ($conn->connect_error) {
    echo "errore connessione"."<br/>";
}else{
    //echo "connesso con successo"."<br/>";
}

