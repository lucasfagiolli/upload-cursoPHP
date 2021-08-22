<div class="titulo">Atribuições</div>

<?php 
$title = 'Atribuições';

$numero = 10;
echo '<br>' . $numero; 

$numero = $numero - 3;
echo '<br>' . $numero;

$numero = $numero + 1.5;
echo '<br>' . $numero;

$numero--; // $numero = $numero - 1;
--$numero; // $numero = $numero - 1;
echo '<br>' . $numero;

$numero++; // $numero = $numero + 1;
++$numero; // $numero = $numero + 1;
echo '<br>' . $numero;

$numero = 20;
echo '<br>' . $numero;

$numero -= 5; // menos 5
echo '<br>' . $numero;
$numero+= 5; // somando mais 5
echo '<br>' . $numero;

$numero *= 10; // vezes 5
echo '<br>' . $numero;
$numero /= 2; // dividindo por 5
echo '<br>' . $numero;

$numero %= 6; // potencia
echo '<br>' . $numero;

$numero **= 4; // elevado a 4
echo '<br>' . $numero;

$numero .= 4; // Apenas concatenação!
echo '<br>' . $numero;

// Atribuições em texto 

$texto = 'Esse é um texto';
echo '<br>' . $texto;

$texto = $texto . ' qualquer';
echo '<br>' . $texto;

$texto .= ' de verdade!';
echo '<br>' . $texto;


$variavelInexistente = 'valor existente';
echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor default'; // atribuir um valor se der errado outro
echo '<br>' . $valor;



