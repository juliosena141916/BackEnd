<?php
    $nota1 = (float) readline("Digite a nota 1:");
    $nota2 = (float) readline("Digite a nota 2:");
    $media = ($nota1 + $nota2) / 2;
    $frequencia = (float) readline("Digite a frequência (em %):");
    $nome = "Enzo Enrico";

    if (($media >= 7 and $frequencia >= 75) or $nome == "Enzo Enrico") {
        echo "Aprovado com média: $media e frequência: $frequencia%";
    } else {
        echo "Reprovado com média: ", $media, " e frequência: ", $frequencia, "%";
    }   
?>