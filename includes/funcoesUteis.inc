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
    if($tipo == '3'){ include_once '../conexao/conecta.inc';
                      include_once '../classes/Bcrypt.class.php';}
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
if($tipoBanco == '3'){
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
function VerificaSessao(){
            session_start();
            if($_SESSION == true){
    if($_SESSION['tipo'] == '1'){
        echo '      <nav id="menu-principal"> 
                        <ul class="home">
                            <li><a href="index.php"> PORRA </a></li>
                            <li><a href="colunas.php"> Colunas </a>
                                <ul class="submenu-home">
                                    <li><a href="personagens.php"> Personagens </a></li>
                                    <li><a href="generos.php"> Gêneros </a></li>
                                    <li><a href="series.php"> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href="ps3.php"> CARALHO </a>
                                <ul class="submenu-home"> 
                                    <li><a href="ps3.php"> PS3 </a></li>
                                    <li><a href="ps4.php"> PS4 </a></li>
                                </ul>
                            </li>
                            <li><a href="wii.php"> Nintendo </a>
                                <ul class="submenu-home"> 
                                    <li><a href="wii.php"> Nintendo Wii </a></li>
                                    <li><a href="wii_u.php"> Nintendo Wii U </a></li>
                                    <li><a href="3ds.php"> Nintendo 3DS </a></li>
                                </ul>
                            </li>
                            <li><a href="xbox_360.php"> XBOX </a>
                                <ul class="submenu-home"> 
                                    <li><a href="xbox_360.php"> XBOX 360 </a></li>
                                    <li><a href="xbox_one.php"> XBOX ONE </a></li>
                                </ul>
                            </li>
                            <li><a href="pc.php"> PC </a></li>
                            <li><a href="ps2"> Outras Plataformas </a>
                                <ul class="submenu-home"> 
                                    <li><a href="nintendinho.php"> Nintendinho </a></li>
                                    <li><a href="super_nintendo.php"> Super Nintendo </a></li>
                                    <li><a href="gameboy.php"> GameBoy </a></li>
                                    <li><a href="ps1.php"> Playstation 1 </a></li>
                                    <li><a href="ps2.php"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="login_user.php"> Login </a>
                                <ul class="submenu-home">
                                    <li><a href="login_user.php"> Login </a></li>
                                    <li><a href="login_user.php"> Cadastro </a>
                                </ul>    
                            </li>
                        </ul>
                    </nav>';
        
    }
    if($_SESSION['tipo'] == '2'){
        echo '      <nav id="menu-principal"> 
                        <ul class="home">
                            <li><a href="index.php"> USUARIO COMUM </a></li>
                            <li><a href="colunas.php"> Colunas </a>
                                <ul class="submenu-home">
                                    <li><a href="personagens.php"> Personagens </a></li>
                                    <li><a href="generos.php"> Gêneros </a></li>
                                    <li><a href="series.php"> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href="ps3.php"> Playstation </a>
                                <ul class="submenu-home"> 
                                    <li><a href="ps3.php"> PS3 </a></li>
                                    <li><a href="ps4.php"> PS4 </a></li>
                                </ul>
                            </li>
                            <li><a href="wii.php"> Nintendo </a>
                                <ul class="submenu-home"> 
                                    <li><a href="wii.php"> Nintendo Wii </a></li>
                                    <li><a href="wii_u.php"> Nintendo Wii U </a></li>
                                    <li><a href="3ds.php"> Nintendo 3DS </a></li>
                                </ul>
                            </li>
                            <li><a href="xbox_360.php"> XBOX </a>
                                <ul class="submenu-home"> 
                                    <li><a href="xbox_360.php"> XBOX 360 </a></li>
                                    <li><a href="xbox_one.php"> XBOX ONE </a></li>
                                </ul>
                            </li>
                            <li><a href="pc.php"> PC </a></li>
                            <li><a href="ps2"> Outras Plataformas </a>
                                <ul class="submenu-home"> 
                                    <li><a href="nintendinho.php"> Nintendinho </a></li>
                                    <li><a href="super_nintendo.php"> Super Nintendo </a></li>
                                    <li><a href="gameboy.php"> GameBoy </a></li>
                                    <li><a href="ps1.php"> Playstation 1 </a></li>
                                    <li><a href="ps2.php"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="login_user.php"> Login </a>
                                <ul class="submenu-home">
                                    <li><a href="login_user.php"> Login </a></li>
                                    <li><a href="login_user.php"> Cadastro </a>
                                </ul>    
                            </li>
                        </ul>
                    </nav>';
        
    }
    if($_SESSION['tipo'] == '3'){
        echo '      <nav id="menu-principal"> 
                        <ul class="home">
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="colunas.php"> Colunas </a>
                                <ul class="submenu-home">
                                    <li><a href="personagens.php"> Personagens </a></li>
                                    <li><a href="generos.php"> Gêneros </a></li>
                                    <li><a href="series.php"> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href="ps3.php"> Playstation </a>
                                <ul class="submenu-home"> 
                                    <li><a href="ps3.php"> PS3 </a></li>
                                    <li><a href="ps4.php"> PS4 </a></li>
                                </ul>
                            </li>
                            <li><a href="wii.php"> Nintendo </a>
                                <ul class="submenu-home"> 
                                    <li><a href="wii.php"> Nintendo Wii </a></li>
                                    <li><a href="wii_u.php"> Nintendo Wii U </a></li>
                                    <li><a href="3ds.php"> Nintendo 3DS </a></li>
                                </ul>
                            </li>
                            <li><a href="xbox_360.php"> XBOX </a>
                                <ul class="submenu-home"> 
                                    <li><a href="xbox_360.php"> XBOX 360 </a></li>
                                    <li><a href="xbox_one.php"> XBOX ONE </a></li>
                                </ul>
                            </li>
                            <li><a href="pc.php"> PC </a></li>
                            <li><a href="ps2"> Outras Plataformas </a>
                                <ul class="submenu-home"> 
                                    <li><a href="nintendinho.php"> Nintendinho </a></li>
                                    <li><a href="super_nintendo.php"> Super Nintendo </a></li>
                                    <li><a href="gameboy.php"> GameBoy </a></li>
                                    <li><a href="ps1.php"> Playstation 1 </a></li>
                                    <li><a href="ps2.php"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="login_user.php"> Login </a>
                                <ul class="submenu-home">
                                    <li><a href="login_user.php"> Login </a></li>
                                    <li><a href="login_user.php"> Cadastro </a>
                                </ul>    
                            </li>
                        </ul>
                    </nav>';
        
    }
    else{
        echo '      <nav id="menu-principal"> 
                        <ul class="home">
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="colunas.php"> Colunas </a>
                                <ul class="submenu-home">
                                    <li><a href="personagens.php"> Personagens </a></li>
                                    <li><a href="generos.php"> Gêneros </a></li>
                                    <li><a href="series.php"> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href="ps3.php"> Playstation </a>
                                <ul class="submenu-home"> 
                                    <li><a href="ps3.php"> PS3 </a></li>
                                    <li><a href="ps4.php"> PS4 </a></li>
                                </ul>
                            </li>
                            <li><a href="wii.php"> Nintendo </a>
                                <ul class="submenu-home"> 
                                    <li><a href="wii.php"> Nintendo Wii </a></li>
                                    <li><a href="wii_u.php"> Nintendo Wii U </a></li>
                                    <li><a href="3ds.php"> Nintendo 3DS </a></li>
                                </ul>
                            </li>
                            <li><a href="xbox_360.php"> XBOX </a>
                                <ul class="submenu-home"> 
                                    <li><a href="xbox_360.php"> XBOX 360 </a></li>
                                    <li><a href="xbox_one.php"> XBOX ONE </a></li>
                                </ul>
                            </li>
                            <li><a href="pc.php"> PC </a></li>
                            <li><a href="ps2"> Outras Plataformas </a>
                                <ul class="submenu-home"> 
                                    <li><a href="nintendinho.php"> Nintendinho </a></li>
                                    <li><a href="super_nintendo.php"> Super Nintendo </a></li>
                                    <li><a href="gameboy.php"> GameBoy </a></li>
                                    <li><a href="ps1.php"> Playstation 1 </a></li>
                                    <li><a href="ps2.php"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="login_user.php"> Login </a>
                                <ul class="submenu-home">
                                    <li><a href="login_user.php"> Login </a></li>
                                    <li><a href="login_user.php"> Cadastro </a>
                                </ul>    
                            </li>
                        </ul>
                    </nav>';
        
    }
            }
            else{
                        echo '      <nav id="menu-principal"> 
                        <ul class="home">
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="colunas.php"> Colunas </a>
                                <ul class="submenu-home">
                                    <li><a href="personagens.php"> Personagens </a></li>
                                    <li><a href="generos.php"> Gêneros </a></li>
                                    <li><a href="series.php"> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href="ps3.php"> Playstation </a>
                                <ul class="submenu-home"> 
                                    <li><a href="ps3.php"> PS3 </a></li>
                                    <li><a href="ps4.php"> PS4 </a></li>
                                </ul>
                            </li>
                            <li><a href="wii.php"> Nintendo </a>
                                <ul class="submenu-home"> 
                                    <li><a href="wii.php"> Nintendo Wii </a></li>
                                    <li><a href="wii_u.php"> Nintendo Wii U </a></li>
                                    <li><a href="3ds.php"> Nintendo 3DS </a></li>
                                </ul>
                            </li>
                            <li><a href="xbox_360.php"> XBOX </a>
                                <ul class="submenu-home"> 
                                    <li><a href="xbox_360.php"> XBOX 360 </a></li>
                                    <li><a href="xbox_one.php"> XBOX ONE </a></li>
                                </ul>
                            </li>
                            <li><a href="pc.php"> PC </a></li>
                            <li><a href="ps2"> Outras Plataformas </a>
                                <ul class="submenu-home"> 
                                    <li><a href="nintendinho.php"> Nintendinho </a></li>
                                    <li><a href="super_nintendo.php"> Super Nintendo </a></li>
                                    <li><a href="gameboy.php"> GameBoy </a></li>
                                    <li><a href="ps1.php"> Playstation 1 </a></li>
                                    <li><a href="ps2.php"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="login_user.php"> Login </a>
                                <ul class="submenu-home">
                                    <li><a href="login_user.php"> Login </a></li>
                                    <li><a href="login_user.php"> Cadastro </a>
                                </ul>    
                            </li>
                        </ul>
                    </nav>';
            }
}
?>

