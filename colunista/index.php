<!DOCTYPE html>
<html>
    <head>
        <title> Multiplayer </title>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript" src="js/jquery.js"> </script> 
        <script type="text/javascript" src="js/javascript.js"> </script> 
        <script type="text/javascript" src="js/slide.js"> </script>
        <script type="text/javascript" src="js/jquery.min.js"> </script>
    </head>
    <body>
        
      
      
        <container id="container">
            <section id="secao">
                <header id="cabecalho">
                    <a href="index.php"> <div id="logo"> <img src="../imagens/logo001.png" alt="" id="img-logo"/> </div> </a>
                    <nav id="menu-principal"> 
                        <ul class="home">
                            <li><a href="index.php"> Home </a></li>
                            <li><a href="colunas.php"> Colunas </a>
                                <ul class="submenu-home">
                                    <li><a href="#"> Personagens </a></li>
                                    <li><a href="#"> Gêneros </a></li>
                                    <li><a href="#"> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Playstation </a>
                                <ul class="submenu-home"> 
                                    <li><a href="ps3.php"> PS3 </a></li>
                                    <li><a href="ps4.php"> PS4 </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Nintendo </a>
                                <ul class="submenu-home"> 
                                    <li><a href="wii.php"> Nintendo Wii </a></li>
                                    <li><a href="wii_u.php"> Nintendo Wii U </a></li>
                                    <li><a href="#.php"> Nintendo 3DS </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> XBOX </a>
                                <ul class="submenu-home"> 
                                    <li><a href="xbox_360.php"> XBOX 360 </a></li>
                                    <li><a href="xbox_one.php"> XBOX ONE </a></li>
                                </ul>
                            </li>
                            <li><a href="pc.php"> PC </a></li>
                            <li><a href="#"> Outras Plataformas </a>
                                <ul class="submenu-home"> 
                                    <li><a href="#"> Nintendinho </a></li>
                                    <li><a href="#"> Super Nintendo </a></li>
                                    <li><a href="#"> GameBoy </a></li>
                                    <li><a href="#"> Playstation 1 </a></li>
                                    <li><a href="#"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="#"> Login </a>
                                <ul class="submenu-home">
                                    <li><a href="login_cadastro.php"> Login </a></li>
                                    <li><a href="login_cadastro.php"> Cadastro </a>
                                </ul>    
                            </li>
                        </ul>
                    </nav>
                    <div id="propaganda1"><a href="#"><img src="imagens/propaganda.jpg" alt="" id="img-propaganda1" > </a></div>
                </header>        
              
               
                <article id="conteudo">    
                <div id="materias">
                         <div class="materias"> 
                             <?php             
            include '../includes/funcoesUteis.inc';
                include '../conexao/conecta.inc';
             validaAutenticacao('../index.php', '3');
             echo "<br/><a href='perfil.php'> Alterar dados </a><br/>";
             echo "<br/><a href='novaMateria.php'> Nova Matéria </a><br/>";
             echo "<a href='listaMateria.php'> Listar matérias </a><br/>"; 
             echo "<a href='sair.php'> Logout </a>";  
                         
            ?>
                           
                        </div> 
                                  
                </div>
                <div id="coluna-lateral">
                    <br/>
                   
                </div>
                </article>                
                <footer id="rodape"> 
                    <div id="informacao">
                        <a href="quem_somos.php"> <div id="quem-somos"> Quem somos </div> </a>
                        <a href="contato.php"> <div id="contato"> Contato </div> </a>
                        <a href="escreva.php"> <div id="escreva"> Escreva uma Matéria </div> </a>
                        <a href="duvidas.php"> <div id="duvidas"> Dúvidas </div> </a>
                    </div>
                    <div id="outros-links">
                        <div id="colunas-rodape"> 
                            Colunas <br/>
                            <a href="colunas.php"> Coluna 1 </a> <br/>
                            <a href="colunas.php"> Coluna 2 </a> <br/>
                            <a href="colunas.php"> Coluna 3 </a> <br/>
                            <a href="colunas.php"> Coluna 4 </a> <br/>                            
                        </div>
                        <div id="plataformas"> 
                            Plataformas <br/>
                            <a href="ps3.php"> PS3 </a> <br/>
                            <a href="pc.php"> PC </a> <br/>
                            <a href="wii.php"> Wii </a> <br/>
                            <a href="xbox_360.php"> Xbox 360 </a> <br/>                            
                        </div>
                        <div id="series"> 
                            Séries <br/>
                            <a href="#"> Série 1 </a> <br/>
                            <a href="#"> Série 2 </a> <br/>
                            <a href="#"> Série 3 </a> <br/>
                            <a href="#"> Série 4 </a> <br/>
                        </div>
                        <div id="generos"> 
                            Gêneros <br/>
                            <a href="#"> Gênero 1 </a> <br/>
                            <a href="#"> Gênero 2 </a> <br/>
                            <a href="#"> Gênero 3 </a> <br/>
                            <a href="#"> Gênero 4 </a> <br/>
                        </div>
                    </div>
                    <div id="forum"> 
                        Conheça nosso Fórum <br/>
                        <a href="forum.php"> Pergunta 1 </a> <br/>
                        <a href="forum.php"> Pergunta 2 </a> <br/>
                        <a href="forum.php"> Pergunta 3 </a> <br/>
                        <a href="forum.php"> Pergunta 4 </a> <br/>                        
                    </div>
                </footer>
                </section>
        </container>
    </body>
</html>

