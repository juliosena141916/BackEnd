<?php
    $nota1 = 0;
    $nota2 = 1;
    $media = ($nota1 + $nota2) / 2;
    $totaldeaulas = 20;
    $aulasfaltas = 19;
    $frequencia = ($totaldeaulas - $aulasfaltas) / $totaldeaulas * 100;
    $nome = "Enzo Enrico";

    if (($media >= 7 and $frequencia >= 75) or $nome == "Enzo Enrico") {
        echo "Aprovado com média: $media e frequência: $frequencia%";
    } else {
        echo "Reprovado com média: ", $media, " e frequência: ", $frequencia, "%";
    }   
?>