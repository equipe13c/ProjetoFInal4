<?php
include '../includes/funcoesUteis.inc';
include '../conexao/conecta.inc';
session_start();
function salvaLog($mensagem) {
        $ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
        $hora = date('Y-m-d H:i:s'); // Salva a hora atual (formato MySQL)
        $acao = 11;
        $dia = date('Y-m-d');
        $sql = "INSERT INTO LOG(IP_LOG, DATA_LOG, HORA_LOG, MENSAGEM_LOG, ACAO_LOG,AUTOR_LOG,COD_AUTOR_LOG)
        VALUES('$ip','$dia', '$hora', '$mensagem', '$acao','".$_SESSION['email']."',".$_SESSION['code'].")";
        mysql_query($sql);
        }
        $busca2 = "SELECT * FROM LOG WHERE AUTOR_LOG='".$_SESSION['email']."'";
        $resultado2 = mysql_query($busca2);
        $totalUsers2 = mysql_num_rows($resultado2);
        $users2 = mysql_fetch_assoc($resultado2);
        $sql2 = "SELECT NOME_ACAO FROM ACOES_LOG WHERE COD_ACOES_LOG=".$users2['ACAO_LOG'];   
        $resultado3 = mysql_query($sql2);
        $mensagem = "Usuário ".$_SESSION['nome']." $resultado3"; 
        salvaLog($mensagem);
session_destroy();
echo '<script>
    location.href="../index.php"
</script>';
            
 
