<?php

 $frase = ' Ciao mi chiamo Michele e vengo da Cremona';

 echo $frase . '<br>'; 

  echo strlen($frase) . '<br>'; 

 $parola = $_GET["changeParola"];


 $change = str_replace('Ciao', $parola, $frase);

 echo $change . '<br>';

 echo strlen($change)
 




  
    

?>
