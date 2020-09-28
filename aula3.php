<?php

/*
Operador é um transformador, ou seja, você fornece um ou mais valores e ele o transforma em outro valor. 
*/


$valor = 10; // operador(=) indica atribuição
$valor += 5; // operador(+=) atribui a soma
            // operador(-=) atribui a subtração
            // operador(*=) atribui a multiplicação
            // operador(/=) atribui a divisão           
//echo $valor;

// operador de concatenação (.=)
//$nome = "Denisson";
//$nome .= " Freitas";

//echo $nome;

// operadores matemáticos ( + , - , * , /)

// https://www.php.net/manual/en/language.operators.php  operadores !!!!!!!

$valor1 = 10;
$valor2 = '10';

//OPERADORES COMPARATIVOS
//var_dump ($valor1 == $valor2); //boleano
//var_dump ($valor1 === $valor2); //idênticos e boleano
//var_dump ($valor1 != $valor2); //boleao
//var_dump ($valor1 !== $valor2); //idênticos e boleano
//var_dump ($valor1 >= $valor2);
//var_dump ($valor1 <= $valor2);

//operador ternário :  (expressao) ? (valor verdadeiro) : (valor falso);

//($valor1 == $valor2) ? ($resultado = true) : ($resultado = false);

//var_dump($resultado);

//OPERADORES DE INCREMENTO E DECREMENTO

$v1 = 10;
$v2 = ++$v1; 
//$v1++; incrementa uma unidade
//$v1--; decrementa uma unidade

//echo $v1."-".$v2;


$v1 = true;
$v2 = false;
var_dump( $v1 && $v2); 
var_dump( $v1 || $v2);
var_dump( !$v1 );

//OPERADOR DE CONCATENAÇÃO

$nome = "Denisson";
$sobrenome = " Freitas";

echo $nome.$sobrenome;



?>