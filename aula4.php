<?php

    /*if primeira forma

    if (condition) {
        # code...
    } elseif (condition2) {
        # code...
    } else{

    }
    */

    /*if segunda forma

    if (condition):
        comandos
    elseif (condition2):
        comandos
    else:
        comandos
    endif;
    */

    
    $valor = 5;

    if ($valor == 10):
        //echo "O valor é igual a 10.";
    elseif ($valor > 10):
        //echo "O valor é maior que 10.";
    else:
        //echo "O valor é menor que 10.";
    endif;
    
    
    //while = enquanto

    
    $contador = 1;

    while ($contador < 11):
        //echo $contador."  ";
        $contador++;
    endwhile;
    

    
    $contador = 11;
    do {
        //echo $contador."  ";
        $contador++;
    } while ($contador < 10);
    

    for ($num=1; $num <= 10 ; $num++) { 
        //echo $num." ";
    }

    for ($num=1; $num <= 10 ; $num++):
        if ($num == 2) continue;
        echo $num."<br />";
        if ($num == 5): break;
        endif;
    endfor;

    for ($i=1; $i < 100; $i+=2) { 

        echo $i."<br/ >";
 
    }

    //foreach = para cada item de um array, faça determinada ação.
    $nome = array("Nome 1" => "Ricardo","Nome 2" => "João","Nome 3" => "Pedro");
    foreach ($nome as $chave => $valor):
        //echo $chave." = ".$valor."<br />";
    endforeach;

    //switch = alterne
    $valor = 11;
    switch ($valor) {
        case 10:
            //echo "Valor igual a 10 ";
            break;
        case 15:
            //echo "Valor igual a 15 ";
            break;
        default:
            //echo "Valor não especificado";
            break;
    
    }
    
?>