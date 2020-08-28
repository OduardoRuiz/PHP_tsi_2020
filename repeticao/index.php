<?php

date_default_timezone_set('America/Sao_Paulo');
//exemplo for

echo "Exemplo for <br>";

for ($i = 0, $j = 4; $i < 5; $i++, $j--) {

    echo "<br>Linha: $i  $j<br>";
}


// exemplo while 
echo "<br>exemplo while<br>";


$i = 0;

while ($i < 5) {

    echo "<br>linha : $i <br>";


    $i++;
}

//exemplo do while
echo "<br>Exemplo doWhile<br>";

$i = 0;


do {

    echo "<br>linha : $i <br>";

    $i++;
} while ($i < 5);



$domingo   = 0;
$segunda   = 1;
$terca     = 2;
$quarta    = 3;
$quinta    = 4;
$sexta     = 5;
$sabado    = 6;


switch (date('w')) {
    case $domingo:
        echo 'domingo';
        break;

    case $segunda:
        'segunda';
        break;

    case $terca:
        'terca';
        break;
}


$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sabado';




$hoje = date('w');

echo "hoje é . $semana[$hoje]";
