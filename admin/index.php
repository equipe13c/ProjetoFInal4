<!DOCTYPE html>
<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <h3>Index ADM</h3><br/>
                <fieldset id='backPerfil'>
            <?php             
             include '../includes/funcoesUteis.inc';
             include '../conexao/conecta.inc';
             validaAutenticacao('../index.php', '1');
             echo "Bem Vindo: <b>" . $_SESSION['nome']."</b>";
             ?>

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
    $imagens2 = mysql_fetch_array($result); 
    $urlImagem = $imagens2['URL_IMAGEM'];
                echo "<img src='../uploads/$urlImagem' id='imagem_usuario' alt='imagem'>";
}
                ?>
            </div> 
<a target='tela' href='perfil.php'> Alterar Dados </a><br/>
<a target='tela' href='listarUsuarios.php'> Listar Dados </a><br/>
<a target='tela' href='novoUsuario.php'> Novo Usuário </a><br/>
<a href='sair.php'> Logout </a>
</fieldset>


            <fieldset id="backIframe">
                <iframe id="tela" name="tela"></iframe>
            </fieldset>
    </body>
</html>

