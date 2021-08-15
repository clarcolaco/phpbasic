<?php

$altura = 150;
$peso = 50;

 $imc = $peso/($altura *$altura);


if ($imc < 18.5){
   
    echo "Seu imc é $imc, você esta abaixo do peso";
}


elseif($imc > 18.5 && $imc < 24.9) {
    echo "Seu imc é $imc, você esta com imc normal \n";
}
else  {
    echo "Seu imc é $imc, você esta acima do peso \n";
}