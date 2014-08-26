<!DOCTYPE html>
<html>
    <head>
        <title> Multiplayer </title>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <link rel="shortcut icon" href="imagens/icone001.png" >
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
                            <li><a href="ps2.php"> Outras Plataformas </a>
                                <ul class="submenu-home"> 
                                    <li><a href="nintendinho.php"> Nintendinho </a></li>
                                    <li><a href="super_nintendo.php"> Super Nintendo </a></li>
                                    <li><a href="game_boy.php"> GameBoy </a></li>
                                    <li><a href="ps1.php"> Playstation 1 </a></li>
                                    <li><a href="ps2.php"> Playstation 2 </a></li>
                                </ul>
                            </li>
                            <li><a href="login_cadastro.php"> Login </a>
                                <ul class="submenu-home">
                                    <li><a href="login_cadastro.php"> Login </a></li>
                                    <li><a href="login_cadastro.php"> Cadastro </a>
                                </ul>    
                            </li>
                        </ul>
                    </nav>
                    <div id="propaganda1">
                        <iframe src="http://www.brasilgameshow.com.br/publico/contador-horizontal.php" style="width: 544px; height: 100px; display: block; margin: 0 auto; border: none; overflow: hidden;"></iframe>
                    </div>
                </header>        
                <div id="busca"> 
                    <input type="text" placeholder="Buscar" id="caixa-busca" /> 
                    <a href="busca.php"> <img src="imagens/lupa.jpg" alt="" id="lupa"> </a>
                </div>                
                <article id="conteudo">
                    <div id="materias2">
                        <h1> Novo FIFA 15 deixa de fora times brasileiros  </h1><br/><br/>
                        <a href="imagens/materia_fifa_15_times_brasileiros_1.jpg" alt=""><img src="imagens/materia_fifa_15_times_brasileiros_1.jpg"></a><br/><br/><br/>
                        <p> Nas últimas semanas um dos principais assuntos sobre os games foi o fato de que o futuro FIFA 15 não terá os times do futebol brasileiro. </p>
                        <p> O jogo não contara com os times de campeonatos brasileiros, pois para ter os times e estádios nacionais os representantes da EA (Eletronic Arts) teriam de realizar vários acordos com os clubes nacionais, acordos que não deram certo pela falta de centralização na representação de times, já que os representantes deveriam fechar acordos time por time, que ao contrario dos clubes espanhóis, que criaram uma “liga” para representar os clubes e facilitar estes acordos a LFP (Liga de Fútbal Professional). </p><br/><br/><br/>
                        <a href="imagens/materia_fifa_15_times_brasileiros_2.jpg" alt=""><img src="imagens/materia_fifa_15_times_brasileiros_2.jpg" alt=""></a><br/><br/><br/>
                        <p> FIFA 15 chega as lojas de 15 de setembro para os consoles: Xbox One, Xbox 360, PlayStation 4, PlayStation 3, PS Vita, 3DS, PC e por incrível que pareça, o Wii também. Já o Wii U não entrou nessa lista.  </p><br/><br/><br/><br/><br/><br/>
                    </div>                    
                    <div id="coluna-lateral">
                    <div class="top"> 
                        <h1> Top Notícias </h1>
                        <a href="noticia1.php" > Hyrule Warriors </a><br/> 
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
                <div id="colunista"> 
                    <div id="img-colunista"> <a href="imagens/colunista001.jpg" alt="" ><img src="imagens/colunista001.jpg"> </a> </div>
                    <div id="criador-materia"> 
                        <p> Estudante do 3º ano do ensio médio. </p>  
                        <p> Como não sei mais o que escrever, deixo para vocês pensarem. </p> 
                    </div>
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
