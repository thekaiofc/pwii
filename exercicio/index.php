<?php

$vetor = Array();

   $vetor[0] = 1;
   $vetor[1] = 2;
   $vetor[2] = 3;
   $vetor[3] = 4;
   $vetor[4] = 5;
   $vetor[5] = 6;
   $vetor[6] = 7;
   $vetor[7] = 8;
   $vetor[8] = 9;
   $vetor[9] = 10;

   for($i=0;$i<count($vetor); $i++){
       if($i %2==0){
           echo "Este índice é par: " . $vetor[$i] . "<br/>";
       }
   }





?>