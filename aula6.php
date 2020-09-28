<?php
//var_dump($_POST);
if (isset($_POST['campo1'])) $campo1 = $_POST['campo1'];
//echo $campo1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 6</title>
</head>
<body>
    <form action="" method="post">
        <p><input type="text" name="campo1"></p>
        <p><input type="submit" name="enviar"></p>
    </form>
</body>
</html>


<?php
    //var_dump($_GET);

    //http://localhost/phpiniciantes/aula6.php?nome_do_campo=valor_do_campo
    //http://localhost/phpiniciantes/aula6.php?nome_do_campo=valor_do_campo&campo2=valor2
    //http://localhost/phpiniciantes/aula6.php?acao=excluir&id=5

    //if (isset($_GET['acao'])) $acao = $_GET['acao'];

    (isset($_GET['acao'])) ? $acao = $_GET['acao'] : $acao = null;
    if (isset($_GET['id'])) $acao = $_GET['id'];

    switch ($acao) {
        case 'excluir':
            echo "Excluir isso do banco de dados".$id;
            break;
        
        default:
            //echo "Nenhuma ação foi tomada";
            break;
    }

?>