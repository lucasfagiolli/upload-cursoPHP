<div class="titulo">Desafio PI</div>

<?php 
echo pi();
$pi = 3.14;

if ($pi == pi()) {
  echo "<br>Iguais!";
} else {
  echo "<br>Diferentes!";
}

$piErrado = 2.8;

//Operador relacional = fazer o valores ser iguais

//Minha resposta!
if ($pi <=> pi()) {
  echo "<br>Iguais!";
} else {
  echo "<br>Direntes!";
}

// Resposta do Professor
echo '<br>' . ($pi - pi()); // 0.01
echo '<br>' . ($pi - $piErrado); // 0.34

if ($pi - pi() <= 0.01) {
  echo '<br>Praticamente Iguais';
}

if ($pi - $piErrado <= 0.01) {
  echo '<br>Praticamente iguais!';
} else {
  echo '<br>Valor Errado!!';
}
