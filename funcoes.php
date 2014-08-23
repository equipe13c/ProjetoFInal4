<?php

    function menu(){
        echo "<header id='cabecalho'>
                    <a href='index.php'> <div id='logo'> <img src='imagens/logo-03.png' alt='' id='img-logo'/> </div> </a>
                    <nav id='menu-superior'> 
                        <ul class='menu'>
                            <li><a href='index.php'> Home </a></li>
                            <li class='parent'><a href='colunas.php'> Colunas </a>
                                <ul class='submenu'>
                                    <li><a href='personagens.php'> Personagens </a></li>
                                    <li><a href='generos.php'> Gêneros </a></li>
                                    <li><a href='serie.php'> Séries </a></li>
                                </ul>
                            </li>
                            <li><a href='ps3.php'> PS3 </a></li>
                            <li><a href='ps4.php'> PS4 </a></li>
                            <li><a href='wii.php'> Wii</a></li>
                            <li><a href='wii_u.php'> Wii U </a></li>
                            <li><a href='xbox_360.php'> XBOX 360 </a></li>
                            <li><a href='xbox_one.php'> XBOX ONE </a></li>
                            <li><a href='pc.php'> PC </a></li>
                            <li><a href='login_user.php'> Login </a></li>
                        </ul>
                    </nav>
                    <div id='propaganda1'> Propaganda </div>
                </header>        
                <div id='busca'> 
                    <input type='text' placeholder='Buscar' id='busca-padrao'/> 
                    <div id='lupa'> <a href='busca.php'> <img src='imagens/lupa-logo.png' alt='' id='img-lupa'> </a> </div>
                </div>";
        
    }
















?>