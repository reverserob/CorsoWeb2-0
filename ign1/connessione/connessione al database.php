<?php
$a=mysql_connect("localhost","root","password"); //Vengono assegnati alla variabile $a i dati per la connessione al database: mysql_connect (comando per connessione), localhost (indirizzo server), root (nome utente), password (password) 
mysql_select_db("database",$a);// serve per selezionare il database che vogliamo utilizzare: database (nome database), $a (dati di accesso inseriti precedentemente)
$b=mysql_query("select cognome,nome,eta from database;");// serve per assegnare una query ad una variabile che eventualmente potremmo successivamente stampare a video 
?>

// mysql_connect e mysql_select_db spno FONDAMENTALI!!! per l'accesso al server e quindi al database