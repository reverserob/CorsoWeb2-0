<?php



$connessione = new PDO("mysql:host=localhost;dbname=Registrazione", 'root', '');




$sql= $connessione->exec("INSERT INTO `User`( `Username`, `Password`,`Email`)

                        VALUES ('Bill','gates','bill@gates.com') ");

                        

echo"Dato Inserito";
?>