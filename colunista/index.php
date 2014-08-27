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
        <section id="container">
            <section id="secao">
                <header id="cabecalho">
                    <a href="index.php"> <div id="logo"> <img src="../imagens/logo001.png" alt="" id="img-logo"/> </div> </a>
                    <nav id="menu-principal"> 
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
                    </nav>
                    <div id="propaganda1">
                        <h1> Propaganda 1 </h1>
                    </div>
                </header>               
                <article id="conteudo">    
                <div id="secao2">
                         
                             <?php             
            include '../includes/funcoesUteis.inc';
                include '../conexao/conecta.inc';
             validaAutenticacao('../index.php', '3');
             echo "<br/><a href='perfil.php'> Alterar dados </a><br/>";
             echo "<br/><a href='novaMateria.php'> Nova Matéria </a><br/>";
             echo "<a href='listaMateria.php'> Listar matérias </a><br/>"; 
             echo "<a href='sair.php'> Logout </a>";  
                         
            ?>
                    <br/><br/><br/><br/><br/> 
                   </div>        
                        
                                  
                
                    
                </article>                
                <footer id="rodape">                    
                    <div class="links-rodape"> 
                            <h1> Multiplayer </h1>
                            <a href="index.php"> Home </a> <br/>
                            <a href="quem_somos.php"> Quem Somos </a> <br/>
                            <a href="contato.php"> Contato </a> <br/>
                            <a href="escreva.php"> Escreva uma Matéria </a> <br/>
                            <a href="termos_uso.php"> Termos de Uso </a> <br/>
                            <a href="mapa_site.php"> Mapa do Site </a> <br/>
                        </div>
                        <div class="links-rodape">
                            <h1> Plataformas </h1>
                            <a href="ps3.php"> PS3 </a> <br/>
                            <a href="pc.php"> PC </a> <br/>
                            <a href="wii.php"> Wii </a> <br/>
                            <a href="xbox_360.php"> Xbox 360 </a> <br/>  
                            <a href="ps4.php"> PS4 </a> <br/>
                            <a href="3ds.php"> 3DS </a> <br/>
                            <a href="xbox_one.php.php"> Xbox One </a> <br/>
                            <a href="ps4.php"> PS4 </a> <br/>
                        </div>
                        <div class="links-rodape">
                            <h1> Séries </h1>
                            <a href="serie_mario.php"> Mario </a> <br/>
                            <a href="serie_batman.php"> Batman </a> <br/>
                            <a href="serie_mortal_kombat.php"> Mortal Kombat </a> <br/>
                            <a href="serie_god_of_war.php"> God of War </a> <br/>
                            <a href="serie_bioshock.php"> Bioshock </a> <br/>
                            <a href="serie_the_sims.php"> The Sims </a> <br/>
                            <a href="serie_legend_of_zelda.php"> Legend of Zelda </a> <br/>
                            <a href="serie_pokemon.php"> Pokémon </a> <br/>
                        </div>
                        <div class="links-rodape">
                            <h1> Gêneros </h1>
                            <a href="genero1.php"> Ação </a> <br/>
                            <a href="genero2.php"> FPS </a> <br/>
                            <a href="genero3.php"> Corrida </a> <br/>
                            <a href="genero4.php"> Terror </a> <br/>
                            <a href="genero4.php"> Plataforma </a> <br/>
                            <a href="genero4.php"> RPG </a> <br/>
                            <a href="genero4.php"> Aventura </a> <br/>
                            <a href="genero4.php"> Casual </a> <br/>
                        </div>
                        <div id="propaganda3">
                            <iframe src="http://www.brasilgameshow.com.br/publico/contador.php" style="width: 224px; height: 210px; display: block; margin: 0 auto; border: none; overflow: hidden;">
                                
                            </iframe>

                        </div>
                    <div id="logo-empresa">
                        <img src="imagens/logoempresa.png" alt="" id="img-logo-empresa">
                    </div>
                </footer>
                </section>
        </container>
    </body>
</html>
