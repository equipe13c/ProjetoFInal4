<?php
session_start();

$email = isset($_POST['email'])?$_POST['email']:null;
$senha = isset($_POST['senha'])?$_POST['senha']:null;
//echo $email . '    ' . $senha;
include_once 'classes/Bcrypt.class.php';
include 'conexao/conecta.inc';
$query = "SELECT * FROM USUARIO WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$totalUSUARIO = mysql_num_rows($result);
if($totalUSUARIO === 0){
    echo 'Usuário não encontrado !';
}
else{
//Agora preciso Testar a senha do usuário
    $USUARIOS = mysql_fetch_array($result); 
    $codeUSUARIO = $USUARIOS['COD_USUARIO'];
    $senhaUSUARIO = $USUARIOS['SENHA_USUARIO'];
    $tipoUSUARIO = $USUARIOS['TIPO_USUARIO'];
    $nomeUSUARIO = $USUARIOS['NOME_USUARIO'];
    if($tipoUSUARIO == "4"){
               echo "Usuário Desativado <a href=javascript:history.go(-1);>Voltar</a>";
            }
    else{
    if (Bcrypt::check($senha, $senhaUSUARIO)) {
    echo "<script> alert('Senha Incorreta') </script>";
    }
    else{
        $_SESSION['code'] = $codeUSUARIO;
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nomeUSUARIO;
        $_SESSION['senha'] = $senha;
        $_SESSION['tipo'] = $tipoUSUARIO;
        $logado = true;
        function salvaLog($mensagem,$email) {
        $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
        $hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
        $dia = date('Y-m-d');
        $sql = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', 1,'".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql);
        }
        if($tipoUSUARIO === '2'){
            $mensagem = "Usuário ". $_SESSION['nome'] . $resultado;
            salvaLog($mensagem,$name,$senha,$data,$code,$motivo,$email);
            echo "Login Efetuado, Usuário Restrito Aguarde...";
            echo '<script>setTimeout("window.location='. "'" ."restrito/index.php'" . '", 2000);</script>';
            
    }
    else if($tipoUSUARIO === '1'){
            $mensagem = "Usuário " . $_SESSION['nome'] . $resultado;
            salvaLog($mensagem,$email);
            echo "Login Efetuado, ADM". $_SESSION['nome']." Aguarde...";
            echo '<script>setTimeout("window.location='. "'" ."admin/index.php'" . '", 2000);</script>';
    }
    else{
        echo 'Tipo de usuário inválido !';
    }
    }
    }
    
}

