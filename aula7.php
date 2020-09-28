
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 7</title>
</head>
<body>
    <?php

        if (isset($_POST['enviar'])):
            //echo $mensagem = addslashes($_POST['mensagem']).'<br />'; // captar dados com caracteres especiais
            //echo stripslashes($mensagem); // formatar os dados captados com caracteres especiais
            //var_dump (explode(',',$_POST['mensagem'])); //Quebrar frase única em array
            //echo implode(' ',array('Isso','é','um','array','sendo','implodido')); // Unir array em frase única
            //echo md5(isset($_POST['enviar'])); //Codificação de senhas
            //echo nl2br($_POST['mensagem']); //Quebra de linhas
            //echo number_format(15252.69, 2, ",", "."); //Função para formatação de números
            //echo trim("texto123$$$$$$$$$$$$$$$$$$$$$$$$$$", "$"); //serve para remover espaços e caracteres indesejados.
            //echo str_pad('Texto', 20, '$'); //completa espaços a direita/esquerda/ambos de uma string com um caracter
            //echo str_repeat('Texto',10); //repete um texto passado a quantidade de vezes desejada
            //echo str_replace('o', '0', 'Isso é um texto negro');//substitui um caracter não faz distinção entre maiúsculas e minúsculas a str_ireplace faz !
            //echo str_word_count("Isso é um texto simples");//conta o número de palavras de um texto.
            //echo strlen("pneumoultramicroscopicossilicovulcanoconiótico");//fala o tamanho dos caracteres de uma string, obs conta os espaços
            //echo strpos("Isso é um texto simples do texto hard", "texto");//Informa a posição que uma string é encontrada pela primeira vez, existem outras variações. a str_ipos não faz distinção entra maiúsculas e minúsculas.
            //echo substr("Isso é um texto simples texto", 11, 3); // serve para pegar uma quantidade de caractares a partir de uma dada posição do texto
            //echo strtolower("ESSE É UM TEXTO EM MAIÚSCULO"); // transforma o texto em minúsculo
            //echo strtoupper("esse é um texto em minúsculo"); // transforma o texto em maiúsculo

        endif;

    ?>
    <form action="" method="post">
        <p><textarea name="mensagem" id="" cols="30" rows="10"><?php echo $_POST['mensagem']; ?></textarea></p>
        <p><input type="submit" name="enviar"></p>
    </form>
</body>
</html>

