<div class="titulo">If Else</div>


<?php 

if(true) {
  echo  "Serei impresso?<br>";
}

//verdadeiro ou falso jeito 1
if(false) {
   echo "Verdadeiro - Parte  A<br>";
   echo "Verdadeiro - Parte  B<br>";
} else { 
   echo "Falso - Parte A<br>";
   echo "Falso - Parte B<br>";
}

//verdadeiro ou falso jeito 2
if (false) {
  echo "Passo A<br>";
}  else if(true) {
 echo "Passo B <br>";
} else {
  echo "Ultimo Passo <br>";
}

//verdadeiro ou falso jeito 3
if (false) {
  echo "Passo A<br>";
}  else if(false) {
 echo "Passo B <br>";
} else if(true) {
  echo "Passo C <br>";
 } else {
  echo "Ultimo Passo <br>";
}


//verdadeiro ou falso jeito 4
if (false) {
  echo "Passo A<br>";
}  else if(false) {
 echo "Passo B <br>";
} else if(false) {
  echo "Passo C <br>";
 } else if(false) {
  echo "Passo D <br>";
 }else if(false) {
  echo "Passo E <br>";
 }else {
  echo "Ultimo Passo <br>";
}


echo "Fim<br>";
