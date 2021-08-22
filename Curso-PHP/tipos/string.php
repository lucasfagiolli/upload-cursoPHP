<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também"); //informações sobre a variavel
echo '<br>';

// concatenação 
echo "Nós também" . ' somos', '<br>'; // ponto é o que faz a concatenação
echo ("Nós também" . ' somos'); // da pra  usar () tambem no echo
echo '<br>', "Também aceito", " virgulas";

echo '<br>';
echo "'Teste'" . ' "Teste"' . '  \'Teste\'' . "  \"Teste\"" . "\\";

print("<br>Também existe a função print");
print "<br>Também existe a função print";

//algumas funções 
echo '<br>' . strtoupper('maximizado'); // colocar a letra maiúscula
echo '<br>' . strtolower('MINIMIZADO'); // colocar a letra minuscula
echo '<br>' . ucfirst ('só a primeira letra'); // só a primeira letra maiúscula 
echo '<br>' . ucwords ('todas as palavras'); // as primeiras letras maiúsculas
echo '<br>' . strlen('Quantas letras?'); // calcula o tamanho da string
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // seleciona parte
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); 