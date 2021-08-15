<?php 

echo "================ Numeros ímpares: ================\n" . PHP_EOL;
for ($x = 0; $x <101; $x++){
    
    if($x%2 != 0) {
        echo "$x\n";
    }
}
echo "\n================ Numeros pares : ================\n" . PHP_EOL;
for ($x = 0; $x <101; $x++){
    
    if($x%2 == 0) {
        echo "$x \n";
    }
}