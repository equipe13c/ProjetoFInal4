<?php

function validaAutenticacao($link, $tipo){
    
    echo '<meta charset=UTF-8>';
session_start();


if(!isset($_SESSION['email']) or !isset($_SESSION['senha'])){
    session_destroy();
    
    echo '<script> 
        alert("Acesso negado!\n Você não efetuou login.")
    location.href="'.$link.'"
            </script>';
}else{
    
    if($tipo == '2'){ include_once '../conexao/conecta.inc';
                      include_once '../classes/Bcrypt.class.php';}
    if($tipo == '1'){ include_once '../conexao/conecta.inc'; 
                      include_once '../classes/Bcrypt.class.php'; }
    $email = $_SESSION['email'];
    $senha = $_SESSION['senha'];
    $query = "SELECT * FROM USUARIO WHERE EMAIL_USUARIO='$email'";
    $result = mysql_query($query);
    $totalUSUARIOs = mysql_num_rows($result);
    if($totalUSUARIOs !== 0){
        //testando senha
        $USUARIOs = mysql_fetch_assoc($result);
        $senhaBanco = $USUARIOs['SENHA_USUARIO'];
        $tipoBanco = $USUARIOs['TIPO_USUARIO']; 
        if (Bcrypt::check($senha, $senhaBanco)) {
            session_destroy();            
        echo '<script> 
        alert("Acesso negado!\n Senha não confere.")
        location.href="'.$link.'"
         </script>';            
        }
        
    }else{
            session_destroy();
           // echo $totalUSUARIOs;
           echo '<script> 
       alert("Acesso negado!\n Email não confere.")
    location.href="'.$link.'"
           </script>';
            
        }
}
if($tipoBanco == '2'){
if ($tipo !== $tipoBanco){
    echo '<script> 
       alert("Acesso negado!\n Você não tem permissão para acessar esta página!.")
    location.href="'.$link.'"
           </script>';
}
}
}
function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}
?>

