<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
<?php
include '../includes/funcoesUteis.inc';
include '../conexao/conecta.inc';

switch (get_post_action('alterar', 'desativar','reativar', 'deletar')) {
    case 'alterar':
        //Inicio
        $code = $_POST['cod_user'];
        validaAutenticacao('../index.php', '1'); 
        $busca = "SELECT * FROM USUARIO WHERE COD_USUARIO=" . $code;
        $resultado = mysql_query($busca);
        $totalUsers = mysql_num_rows($resultado);
        $users = mysql_fetch_assoc($resultado);
        echo "
        <fieldset id=frmAlterarDados>
        <h4>Bem Vindo ". $users['NOME_USUARIO'] . "</h4>
        <form action='alterarDados.php' method='post' id='frmAlterar' enctype='multipart/form-data'>
        <input type='hidden'  readonly='readonly' class='txtsAlterarDados' id='id' size='35'  name='cod_user' value='" . $users['COD_USUARIO'] . "'>
        <input type='hidden'  readonly='readonly' class='txtsAlterarDados' id='id' size='35'  name='tipo' value='" . $users['TIPO_USUARIO'] . "'>
        <label class='stringAlterarDados'> Nome: </label><input type='text'  class='txtsAlterarDados' size='35' id='nome'  name='name' value='" . $users['NOME_USUARIO'] . "'><br/>
        <label class='stringAlterarDados'>Email: </label><input type='text'  class='txtsAlterarDados'  size='35' id='email' name='email' value='" . $users['EMAIL_USUARIO'] . "'><br/>
        <label class='stringAlterarDados'>Confirm. E-mail:</label><input type='text'  class='txtsAlterarDados' size='35' id='confirmemail' name='confirmemail' value='" . $users['EMAIL_USUARIO'] . "'><br/>
        <label class='stringAlterarDados'>Senha:</label><input type='password'  class='txtsAlterarDados' size='35' id='senha'  name='password'><br/>
        <label class='stringAlterarDados'>Confirm. Senha:</label><input type='password'  class='txtsAlterarDados' size='35' id='confirmsenha'  name='confirmsenha'><br/>    
        <label class='stringAlterarDados'>Alterar Foto:</label><input type='file' name='arquivo'><br/>
        <br/>
        <input type='submit' id='buttonAlterar' value='Atualizar'>
        </form>
        </fieldset>";
        //Fim
        break;

        case 'desativar':
        //Inicio
        $code = $_POST['cod_user'];
        validaAutenticacao('../index.php', '1'); 
        $busca = "SELECT * FROM USUARIO WHERE COD_USUARIO=" . $code;
        $resultado = mysql_query($busca);
        $totalUsers = mysql_num_rows($resultado);
        $users = mysql_fetch_assoc($resultado);
        echo "
        <fieldset id=frmAlterarDados>
        <h4>Por que Desativar ". $users['NOME_USUARIO'] . " ?</h4>
        <form action='desativarUsuario.php' method='post' id='frmAlterar' enctype='multipart/form-data'>
        <input type='hidden'  readonly='readonly' class='txtsAlterarDados' id='id' size='35'  name='cod_user' value='" . $users['COD_USUARIO'] . "'>
        <input type='hidden'  readonly='readonly' class='txtsAlterarDados' id='id' size='35'  name='tipo' value='" . $users['TIPO_USUARIO'] . "'>
        <input type='hidden'  class='txtsAlterarDados' size='35' id='nome'  name='name' value='" . $users['NOME_USUARIO'] . "'>
        <input type='hidden'  class='txtsAlterarDados'  size='35' id='data' name='data' value='" . $users['DATA_NASCIMENTO'] . "'>    
        <input type='hidden'  class='txtsAlterarDados'  size='35' id='email' name='email' value='" . $users['EMAIL_USUARIO'] . "'>
        <input type='hidden'  class='txtsAlterarDados' size='35' id='confirmemail' name='confirmemail' value='" . $users['EMAIL_USUARIO'] . "'>
        <input type='hidden'  class='txtsAlterarDados' size='35' id='senha'  name='password' value='" . $users['SENHA_USUARIO'] . "'>
        <label class='stringAlterarDados'>Motivo:</label><input type='text' name='motivo' maxlenght=40 size=40 required><br/>
        <br/>
        <input type='submit' id='desativarUsuario' value='Desativar'>
        </form>
        </fieldset>";        
        //Fim
        break;
        case 'reativar';
        //Inicio
        validaAutenticacao('../index.php', '1');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $data = $_POST['dataNasc'];
        $code = $_POST['cod_user'];
        $motivo = $_POST['motivo'];
        function salvaLog($mensagem,$name,$data,$code,$motivo,$email) {
        $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
        $hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
        $acao = "reativarUsuario";
        $dia = date('Y-m-d');
        $sql = "INSERT INTO LOG(COD_LOG, IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG)
            VALUES(".$_SESSION['code'].",'$ip','$dia', '$hora', '$mensagem', '$acao','$email')";
        mysql_query($sql);
        $sql2 = "UPDATE USUARIO SET TIPO_USUARIO = 2, USUARIO_DESATIVADO = null WHERE COD_USUARIO = $code";
        mysql_query($sql2);
        $query = "DELETE FROM DESATIVADOS WHERE COD_DESATIVADO = $code";
        mysql_query($query);

        echo "$mensagem às <b>$hora</b> do dia <b>$dia</b>";
        }
        echo "<meta charset=utf-8>";
        $mensagem = "Usuário $name Reativado";
        salvaLog($mensagem,$name,$data,$code,$motivo,$email);
        //Fim
        break;
        case 'deletar':
        //Inicio
        $code = $_POST['cod_user'];
        validaAutenticacao('../index.php', '1');    
        $busca = "SELECT * FROM USUARIO WHERE COD_USUARIO=" . $code;
        $resultado = mysql_query($busca);
        $totalUsers = mysql_num_rows($resultado);
        $users = mysql_fetch_assoc($resultado);
        $sql = "DELETE FROM USUARIO WHERE COD_USUARIO = $code";
        if(mysql_query($sql)){
        echo "Nome: " . $users['NOME_USUARIO'] . "<br/>";
        echo "E-mail: " . $users['EMAIL_USUARIO'] . "<br/>";
        echo "Código: " . $users['COD_USUARIO'] . "<br/>";
        echo "Foi Deletado Pelo ADM: <b>".$_SESSION['nome']."</b> às <b>00:00:00</b> Horas Dia <b>00/00/00<b/>";
        }
        else{
        echo "ERRO AO DELETAR USUÁRIO"; 
        }
        //Fim
        break;

    default:
       echo "Nenhuma Função Definida";
}
?>
    </body>
</html>