<?php

$azul = '<font face="verdana" size="3" color="blue">';
$__clodeFont = '</font>';

echo $azul;

// Executar a busca de posição em uma string
$frase = 'A repetição é a mãe da retenção.';
$busca = 'mãe';
// $frase = 'A repeticao e a mae da retencao.';
echo 'A Frase escolhida é: ' . $frase . '<br>';
$q = strpos($frase, $busca);
echo 'Executar a busca por STRPOS da palavra: ' . $busca . '<br>';
echo 'A posição da palavra mãe é: ' . $q . '<br>';
echo '<br>';
echo 'Retornando a frase anterior a busca: ' . $busca . ' <br>';
echo 'A frase anterior a busca é: ' . substr($frase, 0, $q);
echo '<br>';
echo '<br>';
echo 'Retornando a frase posterior a busca: ' . $busca . ' <br>';
echo 'A frase posterior a busca é: ' . substr($frase, $q + strlen($busca), strlen($frase));

echo $__clodeFont;
?>
