<?php

$valor1 = readline("Digite o primeiro valor: ");
$valor2 = readline("Digite o segundo valor: ");

$tipo_valor1 = gettype($valor1);
$tipo_valor2 = gettype($valor2);

if ($tipo_valor1 == $tipo_valor2) {
    echo "Variáveis de tipos iguais! Primeiro valor do tipo $tipo_valor1 e segundo valor do tipo $tipo_valor2\n";
} else {
    echo "ERRO! Variáveis de tipos diferentes. Primeiro valor do tipo $tipo_valor1 e segundo valor do tipo $tipo_valor2\n";
}
?>
