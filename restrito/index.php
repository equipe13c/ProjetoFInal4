<!DOCTYPE html>
<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h3>Index Restrito</h3><br/>
        <section>
        <fieldset>
            <?php             
            include '../includes/funcoesUteis.inc';
                include '../conexao/conecta.inc';
             validaAutenticacao('../index.php', '2');     
             echo "Bem Vindo:". $_SESSION['nome'];
            ?> <br/>
            <div id="imagemUser">                
                <?php 
                $query = "SELECT * FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = ".$_SESSION['code'];
                $result = mysql_query($query);                
                $imagens = mysql_num_rows($result);
if($imagens === 0){
    $nome = "default.jpg";            
mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM, COD_IMAGEM_USUARIO)
VALUES('$nome'".$_SESSION['code'].")");
}
else{
//Agora preciso Testar a senha do usuário
    $imagens2 = mysql_fetch_array($result); 
    $urlImagem = $imagens2['URL_IMAGEM'];
                echo "<img src='../uploads/$urlImagem' id='imagem_usuario' alt='imagem'>";
}
                ?>
            </div> 
            <a href="alterarfoto.php">Alterar Foto</a><br/>
            <a href="perfil.php"> Alterar dados </a><br/>
            <a href='sair.php'> Logout </a>
            
        </fieldset>
        </section>
    </body>
</html>

