<?php

    $nome = $_POST['Txnome'];
    $idade = $_POST['Nidade'];
    $peso = $_POST['Npeso'];

    echo "Seu nome é: " . $nome ."<br/>".  "Sua idade é: " . $idade ."<br/>". "Seu peso é: " . $peso . "<br/>";

    if($idade>0 && $idade>=18){
        echo "Você é maior de idade <br/>";
    }else if($idade>0 && $idade<18){
        echo "Você é menor de idade <br/>";
    }
    else{
        echo "idade inválida";
    }

    if($peso>=100){
    echo "<style> body {
        background-color:red;
    }</style>";
    echo "acima do peso, fazer regime";
    }


?>