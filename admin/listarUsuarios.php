<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <?php include "../conexao/conecta.inc";
include '../includes/funcoesUteis.inc';
validaAutenticacao('../index.php', '1'); ?>
        <fieldset id="frmlistarUser">
            <form action="listar.php" method="get">
                <h4>Selecione o Tipo de Usuário:</h4>
                <select name="tipoUser">
                    <option selected value="1">ADM</option>
                    <option value="2">RES</option>
                    <option value="3">COL</option>
                </select><br/>
                <input type="submit" value="Listar">
            </form>
            <form action="listarDesativados.php" method="get">
                <select name="tipoUser">
                    <option selected value="4">Desativados</option>
                    <option value="deletados">Deletados</option>
                </select><br/>
                <input type="submit" value="Listar">
            </form>
        </fieldset>
    </body>
</html>

