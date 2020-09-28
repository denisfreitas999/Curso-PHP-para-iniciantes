<?php

    //=========funções para trabalhar com data e hora==========

    //echo time(); função no formato times temp em tempo real
    //echo strtotime('2019-09-22 16:03:00'); função no formato times temp de uma data e horário em específico
    //var_dump(checkdate(9,22,2020)); informa se a data existiu
    //echo date('d/m/Y H:i:s', time()); informa o dia e a hora em tempo real com a formatação desejada
    //date_default_timezone_set('America/Sao_Paulo');
    //echo date('d/m/Y H:i:s', time());
    //echo date_default_timezone_get();


    //=========funções para trabalhar com arquivos==============
    //var_dump(file_exists('funcoes.php')); //informa se um arquivo existe dentro do diretório
    //echo __FILE__; informa o diretório do arquivo aberto
    //echo basename(__FILE__); informa o nome do arquivo aberto
    //echo dirname(__FILE__); informa o diretório da pasta aonde está contido o arquivo

    //var_dump(file('arquivo.txt')); Armazena cada linha de um arquivo a um espaço de um array.
    //echo file_get_contents('arquivo.txt'); Retorna uma string com todo texto.
    //echo nl2br(file_get_contents('arquivo.txt')); quebra de linhas através da função nl2br
    //echo file_put_contents('arquivo.txt', 'Linha 04'); // apaga o conteúdo do arquivo e adiciona informações a ele
    //echo file_put_contents('arquivo.txt', "\r\n".'Linha 05', FILE_APPEND); //Adiciona informações ao arquivo sem apagar o seu conteúdo. "\r\n" código de quebra de linhas.

    //==== fopen ==== Função parar criar e abrir arquivos

    //$arquivo = fopen('arquivo2.txt', 'a');
    //fwrite($arquivo, 'Linha gravada via PHP.'."\r\n");
    //fclose($arquivo);

    var_dump($_COOKIE);
    setcookie('ricardo', 'Isso foi gravado para consultas futuras', time() + (2 * 3600));
    echo $_COOKIE['ricardo'];

?>