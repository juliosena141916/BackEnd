<?php
// EXERCICIO 1
// $idade = (int) readline("Digite sua idade: ");

// if ($idade < 18) {
//     echo"Você é menor de idade.";
// } else {
//     echo"Você é maior de idade.";
// };

//EXERCICIO 2
// $nota = 8.5;
// if ($nota >= 9) {
//     echo "\nExcelente";
// } elseif ($nota >= 7) {
//     echo "\nBom";
// } else {
//     echo "\nReprovado";
// };

//EXERCICIO 3
$num = (int) readline("Digite um número: ");

switch ($num) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda";
        break;
    case 3:
        echo "Terça";
        break;
    case 4:
        echo "Quarta";
        break;
    case 5:
        echo "Quinta";
        break;
    case 6:
        echo "Sexta.";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Número fora do intervalo de 1 a 3.";
        break;
};










?>