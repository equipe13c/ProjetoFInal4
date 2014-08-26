<!DOCTYPE html>
<html>
    <head>
        <title> Multiplayer </title>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <link rel="shortcut icon" href="imagens/icone001.png" >
        <script type="text/javascript" src="js/js/javascript.js"> </script>
        <script type="text/javascript" src="js/jquery.js"> </script>
        <script type="text/javascript" src="js/validacoes.js"> </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.parent').mouseover(function(){
                    $('.submenu').slideDown('fast');
                });
                $('.parent').mouseleave(function(){
                    $('.submenu').slideUp('fast');
                });
            });
        </script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/validate.js"></script>
    </head>
    <body>
        <container id="container">
            <section id="secao">
                <header id="cabecalho">
                    <div id="logo"> <a href="index.php"> <img src="imagens/logo001.png" alt="" id="img-logo"/> </a> 
                        <div id="redes-sociais"> 
                            <a href="#"> <img src="imagens/logo-facebook.png" class="redes-sociais"> </a>
                            <a href="#"> <img src="imagens/logo-twitter.png" class="redes-sociais"> </a>
                            <a href="#"> <img src="imagens/logo-youtube.png" class="redes-sociais"> </a>
                        </div>
                    </div> 
                    
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
                    <div id="cadastro">
                        <h1> Cadastro </h1><br/><br/>
                        <form action="inserirUser.php" id="cadastroForm" method="post" name="formCad"> 
                            <label class="vars"> Nome: </label><input type="text" class="txts" name="nome" onKeyPress="return letras();" placeholder="Nome de Acesso" required/> <br/>
                            <label class="vars">Email: </label><input type="email" class="txts" name="email" id="email" placeholder="Digite seu E-mail" required/> <br/>
                            <label class="vars">Confirmar Email: </label><input type="email" class="txts" id="confirmemail" name="confirmemail" placeholder="Digite seu E-mail" required/> <br/>
                            <label class="vars">Senha: </label><input type="password" class="txts" name="senha" placeholder="Senha" required/> <br/>
                            <label class="vars">Confirmar Senha: </label><input type="password" class="txts" name="confirmsenha" required placeholder="Confirmar Senha"/> <br/>
                            <label class="vars">Data Nasc. </label><input type="text" class="txts" name="data" onKeyPress="MascaraData(formCad.data);" maxlength="10" onBlur="validarData(formCad.data);"> <br/>
                            <div id="captcha2">
                                <script type="text/javascript">
                                atualizarCaptcha();
                                </script>
                            </div>
                            <a id="atualizarCaptcha"onclick="atualizarCaptcha();">Mudar Captcha</a>
                            <input type="text" id="captchaPalavra"class="txts"  name="palavra" maxlength="6" onKeyPress="return letrasNumeros();"> <br/>
                            <input type="submit" id="btnCad" class="btnCads" name="cadastrar" value="Cadastrar"/>
                            <input type="reset" class="btnCads" name="limpar" value="Limpar"/>
                        </form>                        
                    </div>
                </article>                
                <footer id="rodape">                    
                    <div class="links-rodape"> 
                            <h1> Multiplayer </h1>
                            <a href="quem_somos.php"> Quem Somos </a> <br/>
                            <a href="contato.php"> Contato </a> <br/>
                            <a href="escreva.php"> Escreva uma Matéria </a> <br/>
                            <a href="duvidas.php"> Dúvidas </a> <br/>  
                            <a href="#"> Parcerias </a> <br/>
                            <a href="#"> Mapa do Site </a> <br/>
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
