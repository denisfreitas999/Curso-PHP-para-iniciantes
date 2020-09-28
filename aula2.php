<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 2</title>
</head>
<body>
    <?php

    /*
    TIPOS DE DADOS EM PHP

    INTEIROS: (int) - Qualquer número sem decimais positivo ou negativo
    PONTO FLUTUANTE: (float, double, real) - Número com decimais
    BOOLEANOS - Verdadeiro (true) e Falso (false)
    ARRAYS - Variáveis multidimensionais, vetores
    OBJETOS - Variáveis especiais do PHP que referenciam recursos externos
    NULO : (null) - variável sem nenhum valor, diferente de ""


    */

    $idade = 23;
    $idade2 = "23";
    $nome = "Denisson Freitas";
    $casado = "false";
    $cadastro = array('Cliente 1', 'Cliente 2', 'Cliente 3');
    $cadastro2[] = 'Cliente 4';
    $cadastro2[] = 'cliente 5';
    $cadastro3 = array('Cliente 1' => 'Ricardo', 'Cliente 2' => 'Zezinho');
    $cadastro4 = array(
        'Cliente 1' => array(
            'nome' => 'Ricardo',
            'idade' => 38,
        ),
        'Cliente 2' => array(
            'nome' => 'Jessica',
            'idade' => 24,
        ),

     );

     $numero = 50;
     
     function calc(){
         global $numero;
         echo $numero;
     }

    //para definir uma constate temos :  define('nomeDaConstante', valor);


     define('CONFIG', 1500);

    //echo CONFIG;

    
    //print($idade);   consome 1 recurso para printar
    //echo $nome;   Não consome recurso para printar (recomendado)
    //echo gettype($idade); gettype informa o tipo de variável
    //echo $idade + $idade2;
    //echo "Olá meu nome é $nome e eu tenho $idade anos."; QUANDO USADO ASPAS DUPLAS AS VARIÁVEIS SÃO RECONHECIDAS.
    //echo 'Olá meu nome é $nome e eu tenho $idade anos.'; QUANDO USADO ASPAS SIMPLES AS VARIÁVEIS NÃO SÃO RECONHECIDAS.
    //echo 'Olá meu nome é '.$nome.' e eu tenho '.$idade.' anos.'; Outro método.
    //echo "Olá meu nome é \"$nome\" e eu tenho $idade anos."; Para utilizar o caracter ASPAS deve-se colocar uma barra invertida antes

    //var_dump($cadastro); https://www.php.net/manual/pt_BR/function.var-dump
    //echo $cadastro[0]; 
    //echo $cadastro2[0];
    //var_dump($cadastro3);
    //echo $cadastro3['Cliente 2'];
    //var_dump($cadastro4);
    //echo $cadastro4['Cliente 2']['nome'];
    //calc();

    //var_dump(get_defined_vars());  todas as variáveis do PHP
    //var_dump(get_defined_constants()); 


    ?>   
</body>
</html>