<?php
include "conexao/conecta.inc";
include_once 'classes/Bcrypt.class.php';
session_start();
echo "<meta charset=UTF-8>";
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirmsenha = $_POST['confirmsenha'];
$email = $_POST['email'];
$confirmemail = $_POST['confirmemail'];
$data = $_POST['data'];
$tipo = 2;
        function salvaLog($mensagem,$codUsuario,$email) {
        $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
        $hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
        $dia = date('Y-m-d');
        $sql = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', 10,'$email',$codUsuario)";
        mysql_query($sql);
        }
if ($_POST["palavra"] == $_SESSION["palavra"]){
if(!($senha !== $confirmsenha)&& !($email !== $confirmemail))
{
    $senha = Bcrypt::hash($senha);
    $query = "INSERT INTO USUARIO (NOME_USUARIO, SENHA_USUARIO, EMAIL_USUARIO, DATA_NASCIMENTO, TIPO_USUARIO)
        VALUES('$nome', '$senha', '$email', '$data', $tipo)";
if($email === ""){
    echo "Desculpe, Campo de E-mail nao Definidos";
}
else{
  if(mysql_query($query)){
    echo "Obrigado Por Se Cadastrar";
$codigo = mysql_query("SELECT COD_USUARIO FROM USUARIO WHERE EMAIL_USUARIO = '$email'");   
$resultCode = mysql_num_rows($codigo);
$codigos = mysql_fetch_array($codigo); 
$codUsuario = $codigos['COD_USUARIO'];
$mensagem = "Usuário $nome Cadastrado";
salvaLog($mensagem,$codUsuario,$email);
if($resultCode === 0){
}
else{
$codigos = mysql_fetch_array($codigo); 
$codUsuario = $codigos['COD_USUARIO'];     

$nome = "default.jpg";            
mysql_query("INSERT INTO IMAGEM_USUARIO(URL_IMAGEM, COD_IMAGEM_USUARIO)
VALUES('$nome',$codUsuario)");

}


}
else{
echo "Não Foi Possível Realizar o Cadastro";
}  
}
}
}
else{
  echo "Não Foi Possível Realizar o Cadastro";
  echo "<br/> Captcha Incorreto.<br/>";
  echo "<a href='javascript:history.go(-1)'>Voltar</a>";
}
?>  

