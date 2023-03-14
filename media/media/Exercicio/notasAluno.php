<?php

    $nota1 = $_POST['nNota1'];
    $nota2 = $_POST['nNota2'];
    $nota3 = $_POST['nNota3'];
    $nota4 = $_POST['nNota4'];
    $media = "";

    echo $media = ($nota1+$nota2+$nota3+$nota4)/4;
    

    if($media > 0 and $media<=6){
        $media = "<div style='color:red'>Reprovado</div>";
    }
    else if($media>6){
        $media = "<div style='color:blue'>Aprovado</div>";
    }

    echo "$media";

?>