    <?php 
	  if($_GET['but1']!="invio") //testualmente questo codice dice "se è stato cliccato il bottone but1 della pagina html..." inoltre da come potete vedere ovviamente i dati inviati dal bottone saranno elaborati in metodo get
	{?>
	<?php
	}
	  else // continuando il testo che ho inserito tra virgolette nel precedente commento "..altrimenti esegui..".  visto che abbiamo già inserito un valore nella pagina html precente la condizione è rispettata, quindi si passa al prossimo processo
	{
		if($_GET['num']%2==0) // dice "se il numero inviato dal bottone è uguale a 2...". qui comincia l'elaborazione del dato utilizzando un if e un else (se / altrimenti)
 			echo "hai inserito un numero pari"; // se il numero sarà pari stamperà a video il testo tra virgolette
		else // altrimenti..
			echo "hai inserito un numero dispari";} //in questo caso, se la condizione posta dall'IF precedente non sarà rispettata, stampera a video il testo tra virgolette
	?>
