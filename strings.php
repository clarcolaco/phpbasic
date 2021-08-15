<?php

$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

if ($idade < 18){
echo "Você só pode entrar, se tiver mais de 18 anos\n";}

elseif ($idade >= 18){echo "Você tem $idade anos. Pode entrar";}
