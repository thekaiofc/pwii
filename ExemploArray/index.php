<?php

//declaração de vetor
$vetor = Array ();

//atribuição de valor ao vetor
$vetor [0] = 20;
$vetor [1] = 50;
$vetor [2] = 5;
$vetor [3] = 92;
$vetor [4] = 42;
$vetor [5] = 52;
$vetor [6] = 12;

echo "O tamanho do vetor é: " .count($vetor). "<br/>";

//exibição do vetor
for($i=0;$i<count($vetor);$i++){
    echo $vetor[$i] . "<br/>";
}

?>