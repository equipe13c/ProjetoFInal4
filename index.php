<!DOCTYPE html>
<html>
    <head>
        <title> Multiplayer </title>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <script type="text/javascript" src="js/jquery.js"> </script> 
        <script type="text/javascript" src="js/javascript.js"> </script> 
        <script type="text/javascript" src="js/slide.js"> </script>
        <script type="text/javascript" src="js/jquery.min.js"> </script>
    </head>
    <body>
        <?php
        session_start();
        ?>
        <container id="container">
            <section id="secao">
                <header id="cabecalho">
                    <a href="index.php"> <div id="logo"> <img src="imagens/logo001.png" alt="" id="img-logo"/> </div> </a>
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
                <div id="busca"> 
                    <input type="text" placeholder="Buscar" id="caixa-busca" /> 
                    <a href="busca.php"> <img src="imagens/lupa.jpg" alt="" id="lupa"> </a>
                </div>
                <div id="slideshow">
                <div id="galeria">
                    <div id="buttons">
                        <a href="#" class="prev"> &laquo; </a>
                        <a href="#" class="next"> &raquo; </a>
                    </div>
                    <ul> 
                        <li><span> 
                            Nintendo
                            </span>
                            <img src="imagens/1.jpeg" id="img1">
                        </li>
                        <li><span> 
                            Super Nintendo
                            </span>
                            <img src="imagens/2.jpeg" id="img2">
                        </li>
                        <li><span> 
                            Nintendo 64
                            </span>
                            <img src="imagens/3.jpeg" id="img3">
                        </li>
                        <li><span> 
                            Game Cube 
                            </span>
                            <img src="imagens/4.jpeg" id="img4">
                        </li>
                        <li><span> 
                            Wii
                            </span>
                            <img src="imagens/5.jpeg" id="img5">
                        </li>
                    </ul>
                </div>
                    <div id="imagens-galeria1">
                        <a href="#img1">
                            <img src="imagens/1.jpeg" class="imagens-galeria1">
                        </a>
                        <a href="#img2">
                            <img src="imagens/2.jpeg" class="imagens-galeria1">
                        </a>
                    </div>
                    <div id="imagens-galeria2">
                        <a href="#img3">
                            <img src="imagens/3.jpeg" class="imagens-galeria2">
                        </a>
                        <a href="#img4">
                            <img src="imagens/4.jpeg" class="imagens-galeria2">
                        </a>
                        <a href="#img5">
                            <img src="imagens/5.jpeg" class="imagens-galeria2">
                        </a>
                    </div>
                </div>
                <article id="conteudo">    
                <div id="materias">
                    <a href="materia_gta_v.php"> 
                        <div class="materias"> 
                            <span class="informacao-materia"> Conheça GTA V </span> 
                            <img src="imagens/jogo-01.jpg" class="img-materia">
                        </div> 
                    </a>
                    <a href="materia_mario_kart_8.php"> 
                        <div class="materias"> 
                            <span class="informacao-materia"> Novo Mario Kart 8 </span>
                            <img src="imagens/jogo-02.jpg" class="img-materia">
                        </div> 
                    </a>
                    <a href="materia_last_of_us_remastered.php"> 
                        <div class="materias">
                            <span class="informacao-materia"> Last of Us - Remastered </span>
                            <img src="imagens/jogo-03.jpg" class="img-materia">
                        </div> 
                    </a>
                    <a href="materia_assassins_creed.php"> 
                        <div class="materias"> 
                            <span class="informacao-materia"> Saga Assassin's Creed </span>
                            <img src="imagens/jogo-04.png" class="img-materia">
                        </div> 
                    </a>
                    <a href="materia_battlefield.php"> 
                        <div class="materias"> 
                            <span class="informacao-materia"> Battlefield </span>
                            <img src="imagens/jogo-05.jpg" class="img-materia">
                        </div> 
                    </a>                   
                </div>
                <div id="coluna-lateral">
                    <div class="top"> 
                        <h1> Top Notícias </h1>
                        <a href="noticia1.php" > Hhyrule Warriors </a><br/> 
                        <a href="noticia2.php" > Halo </a><br/>
                        <a href="noticia3.php" > Call of Duty </a><br/>
                        <a href="noticia4.php" > Skyrim </a><br/>
                        <a href="noticia5.php" > Batman - Arkham Knight </a><br/>
                        <a href="noticia6.php" > InFamous </a><br/>
                        <a href="noticia7.php" > Tomb Raider </a><br/>
                        <a href="noticia8.php" > Super Smash Bros </a><br/>
                        <a href="noticia9.php" > Alien Isolation </a><br/>
                        <a href="noticia10.php" > Far Cry 4 </a><br/>
                    </div><br/>
                    <div class="top"> 
                        <h1> Top Jogos </h1>
                        <a href="jogo1.php" > Assassin's Creed Unity </a><br/> 
                        <a href="jogo2.php" > FIFA 15 </a><br/>
                        <a href="jogo3.php" > Infamous: First Light </a><br/>
                        <a href="jogo4.php" > Rainbow Six Siege </a><br/>
                        <a href="jogo5.php" > Metal Gear Solid V </a><br/>
                        <a href="jogo6.php" > Silent Hill </a><br/>
                        <a href="jogo7.php" > Byonetta 2 </a><br/>
                        <a href="jogo8.php" > Sonic Boom </a><br/>
                        <a href="jogo9.php" > Halo </a><br/>
                        <a href="jogo10.php" > Watch Dogs </a><br/>                    
                    </div><br/>
                    <div class="top">
                        <h1> Propaganda 2 </h1>                    
                    </div>
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
                            <h1> Colunas </h1>
                            <a href="colunas.php"> Coluna 1 </a> <br/>
                            <a href="colunas.php"> Coluna 2 </a> <br/>
                            <a href="colunas.php"> Coluna 3 </a> <br/>
                            <a href="colunas.php"> Coluna 4 </a> <br/>  
                            <a href="colunas.php"> Coluna 5 </a> <br/>
                            <a href="colunas.php"> Coluna 6 </a> <br/>
                            <a href="colunas.php"> Coluna 7 </a> <br/>
                            <a href="colunas.php"> Coluna 8 </a> 
                        </div>
                        <div id="plataformas"> 
                            <h1> Plataformas </h1>
                            <a href="ps3.php"> PS3 </a> <br/>
                            <a href="pc.php"> PC </a> <br/>
                            <a href="wii.php"> Wii </a> <br/>
                            <a href="xbox_360.php"> Xbox 360 </a> <br/>  
                            <a href="ps4.php"> PS4 </a> <br/>
                            <a href="3ds.php"> 3DS </a> <br/>
                            <a href="xbox_one.php.php"> Xbox One </a> <br/>
                            <a href="ps4.php"> PS4 </a> 
                        </div>
                        <div id="series"> 
                            <h1> Séries </h1>
                            <a href="serie_mario.php"> Mario </a> <br/>
                            <a href="serie_batman.php"> Batman </a> <br/>
                            <a href="serie_mortal_kombat.php"> Mortal Kombat </a> <br/>
                            <a href="serie_god_of_war.php"> God of War </a> <br/>
                            <a href="serie_bioshock.php"> Bioshock </a> <br/>
                            <a href="serie_the_sims.php"> The Sims </a> <br/>
                            <a href="serie_legend_of_zelda.php"> Legend of Zelda </a> <br/>
                            <a href="serie_god_of_war.php"> Pokémon </a> 
                        </div>
                        <div id="generos"> 
                            <h1> Gêneros </h1>
                            <a href="genero1.php"> Ação </a> <br/>
                            <a href="genero2.php"> FPS </a> <br/>
                            <a href="genero3.php"> Corrida </a> <br/>
                            <a href="genero4.php"> Terror </a> <br/>
                            <a href="genero4.php"> Plataforma </a> <br/>
                            <a href="genero4.php"> RPG </a> <br/>
                            <a href="genero4.php"> Aventura </a> <br/>
                            <a href="genero4.php"> Casual </a> 
                        </div>
                        <div id="propaganda3"> 
                            <h1> Propaganda 3 </h1>
                        </div>
                    </div>                    
                </footer>
                </section>
        </container>
    </body>
</html>
