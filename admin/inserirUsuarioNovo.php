<?php
include "../conexao/conecta.inc";
include '../includes/funcoesUteis.inc';
validaAutenticacao('../index.php', '1');
echo "<meta charset=UTF-8>";
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirmsenha = $_POST['confirmsenha'];
$email = $_POST['email'];
$confirmemail = $_POST['confirmemail'];
$data = $_POST['dataNasc'];
$tipo = $_POST['tipoUser'];

if(!($senha !== $confirmsenha)&& !($email !== $confirmemail))
{
    if($tipo == "1"){
    $query = "INSERT INTO USUARIO (NOME_USUARIO, SENHA_USUARIO, EMAIL_USUARIO, DATA_NASCIMENTO, TIPO_USUARIO)
        VALUES('$nome', '$confirmsenha', '$email', '$data', $tipo)";
    }
    else if($tipo == "2"){
    $query = "INSERT INTO USUARIO (NOME_USUARIO, SENHA_USUARIO, EMAIL_USUARIO, DATA_NASCIMENTO, TIPO_USUARIO)
        VALUES('$nome', '$confirmsenha', '$email', '$data', $tipo)";
    }
    else if($tipo == "3"){
        $query = "INSERT INTO COLUNISTA (NOME_USUARIO, SENHA_USUARIO, EMAIL_USUARIO, DATA_NASCIMENTO, TIPO_USUARIO)
        VALUES('$nome', '$confirmsenha', '$email', '$data', $tipo)";    
    }
if($email === ""){
    echo "Desculpe, Campo de E-mail nao Definidos";
}
else{
  if(mysql_query($query)){
    echo "Obrigado Por Se Cadastrar";
}
else{
    echo "Não Foi Possível Realizar o Cadastro<br/>";
    echo $tipo."<br/";
    echo $data_formatada."<br/";
    
}  
}
}
?>  

