<!DOCTYPE html>
<html>
    <head>
        <title>Página Inicial</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
            <?php             
             include '../includes/funcoesUteis.inc';
             include '../conexao/conecta.inc';
             validaAutenticacao('../index.php', '1');
             ?>
        <nav id="menu">              
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
                echo "<h1 id='nome_adm'>" . $_SESSION['nome']."</h1>";
}
                ?>
        </nav>
        
        <nav id="menuOpcoes">
            <ul class="home">
                 <li><a target='tela' href='perfil.php'> Alterar Dados </a></li>
                 <li><a target='tela' href='listar.php?tipoUser=1'> Administradores </a></li>
                 <li><a target='tela' href='listar.php?tipoUser=2'> Restritos </a></li>
                 <li><a target='tela' href='listar.php?tipoUser=3'> Colunistas </a></li>
                 <li><a target='tela' href='listarDesativados.php?tipoUser=4'> Desativados </a></li>
                 <li><a target='tela' href='novoUsuario.php'> Novo Usuário </a></li>
                 <li><a href='sair.php'> Logout</li>
            </ul>
        </nav>
            <fieldset id="backIframe">
                <iframe id="tela" name="tela"></iframe>
            </fieldset>
    </body>
</html>

