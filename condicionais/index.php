<?php

ini_set('display_errors', 1);
ini_set('display_startuo_errors', 1);
error_reporting(E_ALL);

// condicional if
$clima = 'gelado';

if ($clima == 'gelado') {

    echo "<br><br>meu pé congela<br><br>";
}
$bool = '1';


// condicional operador ternario 

$var = $bool === true ? '$bool é igual a true' : 'bool é diferente de true';



echo $var . '<br><br>';


$frase = 'meu pai tinnha um cachorro amarelo e rosa';


// if com comparador de valor e tipo de variavel 

if (strpos($frase, 'meu')  !== false) {

    echo "Encontrei o cachorro";
} else {
    echo "Não a nenhum cachorro";
};

echo '<br><br>';

//switch

switch ($clima) {

    case 'quente':
    case 'tropical':
        echo 'odeio clima quente!';

        if (true) {
            echo '<br>  -- if dentro do switch';


            if (true) {
                echo '<br> --- if aninhado dentro de um switch';
            }
        }


        break;

    case 'morno':
        echo 'morno até que é ok!';

        break;

    case 'Frio':
        echo 'Frio é top !';

        break;

    case 'gelado':
        echo 'É melhor!';

        break;

    default;
        echo 'clima desconhecido';

        break;
}

// condicional nova no php
$isso = 'vei';

$isso = $isso ?? "coisa";

echo "<br><br>olha só $isso";
