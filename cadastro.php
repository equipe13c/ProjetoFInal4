<!DOCTYPE html>
<html>
    <head>
        <title> Multiplayer </title>
        <meta http-equiv="Content-Type" charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <script type="text/javascript" src="js/js/javascript.js"> </script>
        <script type="text/javascript" src="js/jquery.js"> </script>
        <script type="text/javascript" src="js/validacoes.js"> </script>
        <script type="text/javascript" src="js/validate.js"> </script>
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
        <script type="text/javascript">
            $(document).ready(function(){						 
			    $('#cadastroForm').validate({			   
					rules:{ 
						email:{ 
                                                    required: true,
                                                    remote: 'includes/verificaemail.php'
                                                    },//,
					},
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
                    <a href="index.php"> <div id="logo"> <img src="imagens/logo001.png" alt="" id="img-logo"/> </div> </a>
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
                            <li><a href="login_user.php"> Login </a>
                            </li>
                        </ul>
                    </nav>
                    <div id="propaganda1"><a href="#"><img src="imagens/propaganda.jpg" alt="" id="img-propaganda1" > </a></div>
                </header>        
                <div id="busca"> 
                    <input type="text" placeholder="Buscar" id="caixa-busca" /> 
                    <a href="busca.php"> <img src="imagens/lupa.jpg" alt="" id="lupa"> </a>
                </div>
                <article id="conteudo">
                    <div id="cadastro">
                        Cadastro <br/><br/>
                        <form action="inserirUser.php" id="cadastroForm" method="post" name="formCad"> 
                            <label class="vars"> Nome: </label>
                            <div class="validacoes" id="msName"></div>
                            <input type="text" class="txts" name="nome" onKeyPress="return letras();" placeholder="Nome de Acesso" required/> <br/>
                            <label class="vars">Email: </label>
                            <div class="validacoes" id="msgemail"></div>
                            <input  type="text" name="email" onblur="validacaoEmail(formCad.email,'msgemail');" class="txts"  id="email" placeholder="Digite seu E-mail" required/>
                            <br/>
                            <label class="vars">Confirmar Email: </label>
                            <div class="validacoes" id="msgConfirmemail"></div>
                            <input  type="text" name="confirmemail" onblur="validacaoEmail(formCad.confirmemail,'msgConfirmemail');" class="txts" id="confirmemail"  placeholder="Digite seu E-mail" required/> <br/>
                            <label class="vars">Senha: </label>
                            <div class="validacoes" id="msgSenha"></div>
                            <input type="password" class="txts" name="senha" id="senha"  onblur="validaSenha();" placeholder="Senha" required/> <br/>
                            <label class="vars">Confirmar Senha: </label>
                            <div class="validacoes" id="msgConfirmsenha"></div>
                            <input type="password" class="txts" name="confirmsenha" id="confirmsenha" onblur="validaSenha();" required placeholder="Confirmar Senha"/> <br/>
                            <label class="vars">Data Nasc. </label>
                            <div class="validacoes" id="msgData"></div>
                            <input type="text" class="txts" name="data" onKeyPress="MascaraData(formCad.data);" maxlength="10" onBlur="validarData(formCad.data);"> <br/>
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
