<div class="titulo">Operadores Relacionais</div>

<?php 

var_dump(1 == 1); //igual Resposta: true
echo '<br>';
var_dump(1 > 1); // maior Resposta: false
echo '<br>';
var_dump(1 >= 1); // maior ou igual  Resposta: true
echo '<br>';
var_dump(4 < 23); // menor Resposta: true
echo '<br>';
var_dump(1 <= 7); // menor ou igual Resposta: true
echo '<br>';
var_dump(1 != 1); // diferente Resposta: false
echo '<br>';
var_dump(1 <> 1);//diferente Resposta: false
echo '<br>';

var_dump(111 == '111');  //Resposta: true
echo '<br>';
var_dump(111 === '111'); //Resposta: false
var_dump(111 != '111');  //Resposta: false
echo '<br>';
var_dump(111 !== '111'); //Resposta: true
echo '<br>';

echo '<p>Relacionais no If/Else</p><hr>';

$idade = 25; //variavel
if ($idade < 18) { // se a idade for menor que 18 printa =
  echo "Menor de idade = $idade anos<br>";
} else if ($idade < 65){ // se a idade for menor que 65 printa =
 echo "Adulto  = $idade anos<br>";
} else {
  echo "Terceira idade!  = $idade anos";
}

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3); // 1 se o da esquerda for maior que o da direita
var_dump(50 <=> 50); // 0 se for iguais
var_dump(5 <=> 50); // -1 se o da direita for maior que o da esquerda

echo '<p>Valores pode ser V ou F</p><hr>';
var_dump(!!5); // verdadeiro ou falso
var_dump(!!0); // false
var_dump(!!""); //false
var_dump(!!" ");//true
?>



<style>

p {
  margin-bottom:-0px
}

hr {
  margin-top: 0px;
}
</style>