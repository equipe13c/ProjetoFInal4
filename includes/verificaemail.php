<?php
//Consulta SQL
include_once '../conexao/conecta.inc';

$query = "SELECT EMAIL_USUARIO FROM USUARIO WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
//Matriz pra armazenar todos os emails cadastrados
$emailCadastrados = array();
while($USUARIOs = mysql_fetch_assoc($result)){
    $emailCadastrados[]=$USUARIOs['EMAIL_USUARIO'];
}

   
//Com a função in_array(valor_a_ser_pesquisado,matriz), é possível estabelecer uma pesquisa em uma matriz qualquer
//A função recebe 2 parâmetros: o critério de pesquisa (valor a ser pesquisado) e a matriz

if(in_array($email, $emailCadastrados))
                {
    echo 'false';
                }else{
                    echo 'true';
                }
                exit();