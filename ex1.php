<?php 

/* 
    Escreva um programa que imprima números de 1 a 100. Mas, para múltiplos de 3 imprima
    “Fizz” em vez do número e para múltiplos de 5 imprima “Buzz”. Para números múltiplos
    de ambos (3 e 5), imprima “FizzBuzz”.
*/

for($i = 1; $i <= 100; ++$i) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        if ($i % 3 == 0)
            echo "Fizz";

        if ($i % 5 == 0)
            echo "Buzz";
    } else {
        echo $i;
    }

    echo PHP_EOL;
}

?>