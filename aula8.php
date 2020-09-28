<?php

$chaves = array('nome', 'endereço', 'telefone');
$valores = array('Ricardo', 'Rua tal', '000'); 
$nomes = array(0 => 'Ricardo', 1 => 'Pedro', 2 => 'João', 3 => 'José', 4 => 'Garibalde');   
$cadastro = array_combine($chaves, $valores);
$numeros = array(15, '30', 10, 20);
$acentos = array('á', 'é', 'í', 'ó', 'ú');
$vogais = array('a', 'e', 'i', 'o', 'u');
//var_dump(array_combine($chaves, $valores));  // atribui valores de um array a outro array
//var_dump(array_count_values($nomes)); //informa a quantidade de vezes que um valor ocorre dentro de um array
//var_dump(array_key_exists('nome', $cadastro));//verifica se um índice existe dentro de um array
//var_dump(array_merge($chaves, $valores)); // combina arrays 
//var_dump(array_rand($nomes)); // pega um item aleatório de um array
//var_dump(array_search('Ricardo', $nomes)); //pesquisa um item dentro de um array e retorna no índice do array
//var_dump(array_sum($numeros)); // função para somar todos os valores de um array, ela ignora valores não numéricos.
//var_dump(array_unique($nomes)); // remove elementos repetidos dentro de um array
//var_dump(array_keys($cadastro)); // informa todas as chaves de um array
//var_dump(array_values($cadastro)); // informa os valores de um array
//asort($nomes); //coloca em ordem alfabética os elementos de um array
//var_dump ($nomes);
//var_dump(sizeof($nomes)); // informa a quantidade de elementos de um array
//extract($cadastro); // transforma cada índice de um array uma variável, retornando como valor o elemento correspondente.
//echo $endereço;
//var_dump(in_array('Ricardo', $nomes)); //pesquisa um item dentro de um array e retorna booleano
//var_dump(array_replace($acentos, $vogais));
//echo reset($nomes).'<br />';  reseta o array
//echo next($nomes).'<br />';   avança uma posição no array
//echo next($nomes).'<br />';
//echo reset($nomes).'<br />';
///echo next($nomes).'<br />';
//echo current($nomes).'<br />'; informa qual o elemento do array
//echo prev($nomes).'<br />'; retorna uma posição no array
//echo key($nomes); informa qual o índice da posição atual do cursor
//echo end($nomes); irforma à última posição do array



?>