<?php

#while - repete enquanto uma condicionao for válida

echo "while: ";
$i = 0;
while ($i < 10) {
    echo $i; /* na primeira rodada i vale zero*/
    $i++; /* agora ele pega o resoltado de i e soma mais 1, vai ficar nesse ciclo de somar enquanto i for menor que 10, no caso vai imprimir i de 0 a 9 */
}

#do... while

echo '<br>do...while: ';

$i = 0;
do{
    echo $i;
    $i++;
} while($i <10);

#for
echo '<br>for: ';
    for($i =0; $i <10; $i++){
        echo$i;
    }

    #foreach
    echo '<br>foreach: ';
    $i = [0,1,2,3,4,5,6,7,8,9];
    foreach ($i as $j){
        echo $j;
    }