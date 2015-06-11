<?php 

echo "Benvenuto ".$_POST['name']; echo" ".$_POST['lastname']; echo". <br>";

echo "Il tuo compleanno è il ".$_POST["birthday_day"]; echo" ". $_POST["birthday_month"]; echo". <br>";

$anno=$_POST["birthday_year"];
$eta= (date('Y') - $anno); 
echo" Hai ".$eta; echo" anni.";



//	function quanti_anni($g,$m,$a){
// 	$year_diff = '';
//  $time = mktime(0,0,0,(int)$m,(int)$g,$a);
//  if (FALSE === $time) return 'err';
//  $date = date('d-m-Y', $time);
//  list ($day,$month,$year) = explode("-",$date);
//  $year_diff = (date("Y") - $year);
//  $month_diff = (date("m") - $month);
//  $day_diff = (date("d") - $day);
//  if ($day_diff < 0 || $month_diff < 0) $year_diff--;
//  return $year_diff . ' anni';
//  }


//  gender

if(isset($_POST["gender"])){

echo" <br> il mio genere è ".$_POST["gender"];}
else echo" <br> <br> Selezionare un genere, prego.";



//array check box hobby
$hobby = isset($_POST['hobby']) ? $_POST['hobby'] : array();
if (!isset($_POST['hobby'])) echo '<br> <br> Errore! Devi selezionare almeno un HOBBY!';

elseif (count($hobby)>3) echo ' <br> <br> Errore! Non puoi selezionare più di due HOBBIES!';

if (isset($_POST['hobby']))
 {   echo '<br> <br>  I miei hobby sono: <ul>';
    foreach ($hobby as $interesse) {
        echo "<li>".$interesse.'</li>';
    }
    echo '</ul>';}




// accettazione policy


// checkbox non selezionato
if(!isset($_POST['iscrizione'])){ echo "<br><br>Compilare la checkbox di iscrizione ai corsi per proseguire con la registrazione.";}
else
{echo"<br> <br>Complimenti! Hai accettato di iscriverti ai nostri corsi";};


//con l'istruzione sotto torno al form, ma non puoi scrivere
//messaggi perchè header deve venire prima di ogni output html

// header("Location: form3.html"); questa istruzione  reindirizza ad altra pagina


//echo "<meta http-equiv='Refresh' content='3; URL='form3.php'>" ;}

//il valore 3 sono i secondi di attesa prima di essere reindirizzato
//questa soluzione è comoda soprattutto se form e fase script php sono
//nella stessa pagina


if(!isset($_POST['info'])) echo " <br> <br>Vuoi ricevere informazioni? Seleziona il campo apposito.";

if(isset($_POST['info']))
if($_POST["info"]== "si"){

echo "<br> <br> Complimenti! Hai accettato di ricevere ulteriori informazioni";}

elseif($_POST["info"]== "no")

echo "<br> <br> Ci Dispiace. Hai scelto di non ricevere ulteriori informazioni";





?>
