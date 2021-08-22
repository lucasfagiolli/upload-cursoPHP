<div class="titulo"> Valor vs Referência</div>

<?php 

$variavel = 'valor inicial';
echo $variavel;

// Atribuiçao por valor
$variavelValor = $variavel;
echo "<br>$variavelValor";

$variavelValor = ' novo valor';
echo "<br>$variavel";
echo "<br>$variavelValor";

// Atribuiçao por Referência
$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br>$variavel $variavelReferencia";
