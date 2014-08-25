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
        session_start();        
        include '../includes/funcoesUteis.inc';
        include '../conexao/conecta.inc';    
        validaAutenticacao('../index.php', '2'); 
        
$name = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['password'];
$code = $_POST['cod_user'];
        function salvaLog($mensagem,$name,$code,$motivo,$email) {
        $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
        $hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
        $dia = date('Y-m-d');
        $sql = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', 6,'".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql);
        $sql2 = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', 7,'".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql2);
        $sql3 = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', 7,'".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql3);
        echo $mensagem;
        }
$sql = "UPDATE USUARIO SET NOME_USUARIO = '$name', EMAIL_USUARIO = '$email', SENHA_USUARIO = '$senha' WHERE COD_USUARIO = $code";
  if(mysql_query($sql)){
    echo "Dados Atualizados";
        $busca = "SELECT * FROM LOG WHERE AUTOR_LOG='$email'";
        $resultado = mysql_query($busca);
        $totalUsers = mysql_num_rows($resultado);
        $users = mysql_fetch_assoc($resultado);
        $sql = "SELECT NOME_ACAO FROM ACOES_LOG WHERE COD_ACOES_LOG=".$users['ACAO_LOG'];   
        $resultado = mysql_query($sql);
    $mensagem = "Usuário $name $resultado";
    salvaLog($mensagem,$name,$code,$motivo,$email);
}
else{
    echo "Erro Ao Atualizar Dados";
}
   
        ?>        
    </body>
</html>


