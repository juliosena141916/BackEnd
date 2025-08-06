<?php
      echo"Olá!\n";
      $nome = "Júlio Sena\n";
      $idade = 19;
      $ano_atual = 2025;

      $data_nasc = $ano_atual - $idade;
      echo $nome, "você nasceu em:", $data_nasc;
?>

<?php
      $exerc2 = "Programação em php";
      echo "\nMinusculo:", $exerc2;
      $exerc2 = strtoupper($exerc2);
      echo "\nMaisculo:", $exerc2;
      $exerc2 = strtolower($exerc2);
      echo "\nMinusculo novamente:", $exerc2;
?>

<?php
      $exerc3 = "O PHP foi criado em mil novecentos noventa e cinco";
      echo "\nAntes do comando replace: \n", $exerc3;
      $exerc3 = str_replace(search: ['o', 'a', 'i'], replace: ['0', '4', '1'], subject: $exerc3);
      echo "\nDepois do comando replace: \n", $exerc3;
?>