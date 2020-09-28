<?php
    
   //echo "Este é o arquivo de funções";

   function nome_funcao () {
    echo "Esse texto foi printado pela função </br >" ;
   }

   function dobro (){
    return "Esse texto foi retornado pela função </br >";
   }

   function dobroDoNum ($num){
    return ($num * 2);
   }

   function media ($nota1 = 0, $nota2 = 0){
       if (!is_numeric($nota1) || !is_numeric($nota2)): return "Digite valores numéricos !"; endif;
       return (($nota1 +$nota2)/2);
   }
?>