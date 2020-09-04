<?php

function operacao(float $num1, float $num2, string $operacao): float
{
    switch ($operacao) {

        case '+':

            return $num1 + $num2;

        case '-':
            return $num1 - $num2;


        case '/':

            return $num1 / $num2;

        case '*':

            return $num1 * $num2;

        default:

            return null;
    }
}
echo "<br><br> O Resultado é : " . operacao(2.5, 2.5, '-') . "<br><br>";




$dia = 2; // variavel fora da funcao


function dias_da_semana(int $dia): string

{
    $semana =  ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado'];
    return $semana[$dia] ?? 'Use de 0 a 6';
}

echo "O dia é : " . dias_da_semana(0) . "<br><br>";


$nome = 'Bono';

function muda_nome(string $var): string
{
    $var = 'Outro nome';
    return $var;
}

echo " A função Retornará : " . muda_nome($nome) . "<br><br>";

echo " A variavel \$nome Ainda vale : $nome <br><br>";
