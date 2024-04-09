<?php
echo ("<h2>Ola</h2>");

echo("<h1>Ola</h1>");
print("Ola<br>");

//este é um comentário simples
#este também é um comentário simples
/*
multi comentários
*/

$nome = "Enrico";
$sobrenome = "Hidalgo";
$idade = 15;
$numero = 2024;
$dia = 26;
$valordia = 70.40;
$salario;
$salario = $dia * $valordia;

echo ("$nome".("<br>"));
echo ('$nome'.("<br>"));

echo ("Nome: " . $nome . "<br>");
echo ("Sobrenome: " . $sobrenome . "<br>");
echo ("Nome completo: " . $nome . " " . $sobrenome . "<br>");
echo ("Idade: " . $idade . "<br>");
print("Número: " . $numero . "<br>");
print("Dia: " . $dia . "<br>");
print("Valor dia: " . $valordia . "<br>");
print("Salário: R$ " . ($dia * $valordia) . "<br>");
print("#############################" . "<br>");
$a = 10;
$b = 20;
$soma;
$subtracao;
$multiplicacao;
$divisao;

$soma = $a + $b;
$subtracao = $a = $b;
$multiplicacao = $a * $b;
$divisao = $a / $b;

echo ("Soma:" . $soma . "<br>");
echo ("Subtração:" . $subtracao . "<br>");
echo ("Multiplicação:" . $multiplicacao . "<br>");
echo ("Divisão:" . $divisao . "<br>");
print("##################" . "<br>");



?>

