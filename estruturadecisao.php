<?php
$var1 = 5;
$var2 = '5';
/**/
//if e else (se e senão)
if($var1 == $var2){
    echo "$var1 é igual a $var2 \n\n";
}else{
    echo "$var1 NÃO é igual a $var2
    \n\n";
}
/**/
/**/
//Forma alternativa
if($var1 == $var2):
    echo "\n\nForma alternativa \n\n";
    echo "$var1 é igual a $var2 \n\n";
else:
    echo "$var1 NÃO é igual a $var2
    \n\n";
endif;
/**/

/**/
//operador ternário (atalho para o if)
echo "\n\nOperador ternário \n\n";
$comparacao = (($var1 === $var2)) ?
"Iguais e do mesmo tipo" : "Apenas
iguais";
echo $comparacao;

echo "\n\n";
/**/

/**/
//elseif
$idade = 18;

if($idade < 12){
    echo "Criança";
}else if ($idade >= 12 && $idade < 18){
    echo "Adolescente";
}else{
    echo "Adulto";
}
/**/

/**/
//swich
echo "\n\n";

$fruta = "Laranja";
switch($fruta){
    case 'Laranja' :
        echo "A fruta é Laranja";
        break;
    case 'Maça':
        echo "A fruta é Maça";
        break;
    case 'Limão':
        echo "A fruta é Limão";
        break;
    default:
        echo "A fruta é desconhecida";
        break;
}
/**/