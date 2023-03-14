<?php

    $nome = $_POST['txNome'];
    $idade = $_POST['txIdade'];
    $verificacao = "";

    if($idade<10){
        $verificacao = "Criança e menor de idade";
    }
    else if($idade>10 and $idade<18){
        $verificacao = "Menor de idade";
    }
    if($idade>17){
        $verificacao = "Maior de idade";
    }
 
    echo "Seu nome é: $nome <br>"; 
    echo "Você tem: $idade anos <br>";
    echo "Você é $verificacao";



?>