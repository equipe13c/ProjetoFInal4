<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
              <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/validate.js"></script>
        
    </head>
    <body>
        <?php
        include '../includes/funcoesUteis.inc';
        include '../conexao/conecta.inc';
        validaAutenticacao('../index.php', '2'); 
        $busca = "SELECT * FROM USUARIO WHERE COD_USUARIO=" . $_SESSION['code'];
        $resultado = mysql_query($busca);
        $totalUsers = mysql_num_rows($resultado);
        $users = mysql_fetch_assoc($resultado);
        echo "
        <fieldset id=frmAlterarDados>
        <form action='alterarDados.php' method='post' id='frmAlterar'>
        <input type='hidden'  readonly='readonly' class='txtsAlterarDados' id='id' size='35'  name='cod_user' value='" . $users['COD_USUARIO'] . "'>
        Nome: <input type='text'  class='txtsAlterarDados' size='35' id='nome'  name='name' value='" . $users['NOME_USUARIO'] . "'><br/>
        Email: <input type='text'  class='txtsAlterarDados'  size='35' id='email' name='email' value='" . $users['EMAIL_USUARIO'] . "'><br/>
        Confirm. E-mail:<input type='text'  class='txtsAlterarDados' size='35' id='confirmemail' name='confirmemail' value='" . $users['EMAIL_USUARIO'] . "'><br/>
        Senha:<input type='password'  class='txtsAlterarDados' size='35' id='senha'  name='password'><br/>
        Confirm. Senha:<input type='password'  class='txtsAlterarDados' size='35' id='confirmsenha'  name='confirmsenha'><br/>    
        <input type='submit' id='buttonAlterar' value='Atualizar'>
        </form>
        </fieldset>";
        ?>        
    </body>
</html>


