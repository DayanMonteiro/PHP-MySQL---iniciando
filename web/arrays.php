<?php
/*exemplo 01 
$variavel = array (1,2,3,4,5); /* com o prin_r forço ele a escrever todas a variaveis dentro do array
print_r($variavel);*/

/*exemplo 02
$variavel = array (1,2,3,4,5);
foreach($variavel as $v){
    echo $v;/* essa é maneira mais simples de imprimir o valor dos arrays 
}*/

/* exemplo 03 */

$variavel = array("A"=>"ABACAXI", "B"=>"BOLA", "C"=>"CACHORRO");
/*print_r($variavel);*/
echo $variavel["B"];
