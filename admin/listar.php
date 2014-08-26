<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" lang="pt-br">
        <title>Listagem de Usuário</title>
    </head>
    <body>
<?php
session_start();
include '../conexao/conecta.inc';
include '../includes/funcoesUteis.inc';
    $tipoUser = $_GET['tipoUser'];
if($tipoUser == "1"){
$query = "SELECT * FROM USUARIO WHERE TIPO_USUARIO = '$tipoUser' ORDER BY COD_USUARIO ASC";
}
else if($tipoUser == "2"){
$query = "SELECT * FROM USUARIO WHERE TIPO_USUARIO = '$tipoUser' ORDER BY COD_USUARIO ASC";    
}
else if($tipoUser == "3"){
$query = "SELECT * FROM USUARIO WHERE TIPO_USUARIO = '$tipoUser' ORDER BY COD_USUARIO ASC"; 
}
else if($tipoUser == "4"){
$query = "SELECT * FROM DESATIVADOS ORDER BY COD_DESATIVADO ASC"; 
}
else if($tipoUser == "deletados"){
$query = "";  
}
function verificarBotaoUser($tipoUser){
    if($tipoUser == '1'){
        echo "<td><input type='submit' class=botoes name='desativar' value='Desativar'></td>";
    }
    else if($tipoUser == "2"){
        echo "<td><input type='submit' class=botoes name='desativar' value='Desativar'></td>";
}
    else if($tipoUser == "3"){
        echo "<td><input type='submit' class=botoes name='alterarTipo' value='Alterar Tipo'></td>";
}
    else if($tipoUser == '4'){
        echo "<td><input type='submit' class=botoes name='reativar' value='Reativar'></td>";
    }
}
$total_reg = "10";
$pc= isset($_GET['pagina'])? $_GET['pagina'] : "1";
$inicio = $pc - 1; 
$inicio = $inicio * $total_reg;
$limite = mysql_query("$query LIMIT $inicio,$total_reg"); 
$result = mysql_query($query);
$tr = mysql_num_rows($result);

$tp = $tr / $total_reg;

echo "<div class='tables'>";
    echo "<table class='tabelas' id='tabelausuario'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Nome</th>";
    echo "<th>E-mail</th>";
    echo "<th>Tipo</th>";
    echo "<th>Data Nasc.</th>";
    echo "<th>Imagem</th>";
    echo "<th colspan='3'>Ação</th>";
    echo "</tr>";
while($usuarios = mysql_fetch_array($limite))
{         
    $sql = "SELECT URL_IMAGEM FROM IMAGEM_USUARIO WHERE COD_IMAGEM_USUARIO = ".$usuarios['COD_USUARIO'];
                $result2 = mysql_query($sql);   
                $imagens = mysql_fetch_array($result2); 
                $urlImagem = $imagens['URL_IMAGEM'];
                
    echo "<form id='usuariosA' action='form.php' method='post'>";
        echo "<tr>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='5'  id='usuarioTable' name='cod_user' value='" . $usuarios['COD_USUARIO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='25'  id='usuarioTable' name='name' value='" . $usuarios['NOME_USUARIO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='35'  id='usuarioTable' name='email' value='" . utf8_encode($usuarios['EMAIL_USUARIO']) . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='3'  id='usuarioTable' name='tipo' value='" . $usuarios['TIPO_USUARIO'] . "'></td>";
        echo "<td><input type='text' readonly='readonly' class='edituser' size='7'  id='usuarioTable' name='dataNasc' value='" . $usuarios['DATA_NASCIMENTO'] . "'></td>";
        echo "<td><a href=../uploads/$urlImagem><img src='../uploads/$urlImagem' id='imagem_usuario_listagem' alt='imagem'></a></td>";
        echo "<td><input type='submit' class=botoes name='alterar' value='Alterar Dados'></td>";
        verificarBotaoUser($tipoUser);
        echo "<td><input type='submit' class=botoes name='deletar' value='Excluir'></td>";
        echo "</tr>"; 
        echo "</form>";
}
echo "</table>";
$anterior = $pc -1; 
   $proximo = $pc +1; 
   if ($pc>1) 
       { echo " <a href='?pagina=$anterior&tipoUser=$tipoUser'><- Anterior</a> "; 
       
       } 
       if($pc ==1){echo '<-Anterior';} // Mostrando desabilitado 06/11/13 Rogério
       //echo "|"; 
       // Inicio lógica rogerio
       for($i=1;$i<=$tp;$i++)
       {
           echo "<a href=?pagina=$i&tipoUser=$tipoUser>".$i . "</a>" . "    ";
       }
       // Fim lógia rogério
       if ($pc<$tp) 
           { echo " <a href='?pagina=$proximo&tipoUser=$tipoUser'>Próxima -></a>"; 
           
           }
      if($pc == $tp){echo 'Próxima ->';} // Mostrando desabilitado 06/11/13 Rogério

?>
    </body>
</html>
