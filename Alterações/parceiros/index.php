<?php
//PARCEIROS
$titulo = 'Parceiros - Programa Futuro Cientista®';
$descricao = 'Saiba quem nos ajuda a fazer acontecer!';
$img = 'facebook/parceiros';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>


<div id="menu1">
    <div class="parceiros_menu1 container"><span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro" class="fa fa-institution fa-1x"></i> Parceiros</span></div>
</div>

    <style>
        a {
            color: #ff6600;
        }
    </style>

<div id="corpo" style="width: 100%; overflow: hidden;overflow-y: visible;    ">
    <h2 style="/*position: relative; left: 25%;*/ text-align: center; color: #ff7600;  font-size: 30pt;">Prefeituras</h2>
    <li style="height: 1px; width: 100%; background-color: #000; margin-top: -20px;"></li>

    <div style="width: 100%;">
    </div><br>

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.anhembi.sp.gov.br/") class="trs"><img class="sombra pref_anhembi" src="<?php echo $root_html ?>img/parceiros/prefanhembi.png" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 45%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de Anhembi</h2>

            <p style="position: relative; text-align: left;">
                O Munic&#237;pio de Anhembi foi fundado pelos Bandeirantes, &#224; margem esquerda do Rio Tiet&#234;. A hist&#243;ria da cidade come&#231;ou com a cria&#231;&#227;o da capela de Nossa Senhora dos Rem&#233;dios da Ponte do Tiet&#234;, em 2 de fevereiro de 1862, uma refer&#234;ncia &#224; exist&#234;ncia de uma ponte, que ruiu h&#225; mais de 80 anos, que se localizava sobre o rio Tiet&#234; utilizada por tropeiros, vindos do estado de Minas Gerais em dire&#231;&#227;o ao Paran&#225;, para o transporte de produtos. O munic&#237;pio de Anhembi pertence &#224; regi&#227;o administrativa de Sorocaba, a Comarca de Conchas/SP e &#224; regi&#227;o de governo de Botucatu. Possui uma &#225;rea de 736,557 km&#178;, com densidade demogr&#225;fica de 7,67 (hab/Km&#178;)  . Conta com uma popula&#231;&#227;o de 6.215 habitantes. Limita-se com os Munic&#237;pios de Piracicaba, Botucatu, Conchas, Bofete e Santa Maria da Serra.<br><br>
                <strong>Secret&#225;ria da Educa&#231;&#227;o:</strong> Sra. Vera Marta Pinezi<br>
                <strong>Site da Prefeitura Municipal de Anhembi:</strong> <a class="pref_anhembi" href="http://www.anhembi.sp.gov.br/">http://www.anhembi.sp.gov.br/</a>

            </p>
        </div>
    </div> <!-- Prefeitura de Anhembi -->

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.cesariolange.sp.gov.br/") class="trs"><img class="sombra pref_cesario_lange" src="<?php echo $root_html ?>img/parceiros/prefcesario.png" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de Ces&aacute;rio Lange</h2>

            <p style="position: relative; text-align: left;">
                Fundado em 12 de dezembro de 1878 por Jo&#227;o Mendes de Almeida, como uma vila de Tatu&#237;, o munic&#237;pio de Ces&#225;rio Lange conseguiu sua emancipa&#231;&#227;o em 1960. Seu primeiro nome foi &#8220;Passa Tr&#234;s&#8221;, isso porque na &#233;poca os tropeiros que se dirigiam &#224; vila atravessavam tr&#234;s c&#243;rregos do mun&#237;cipio. Localiza-se h&#225; 143 Km da capital do estado de S&#227;o Paulo. Possui uma &#225;rea de 190,392 km2, com densidade demogr&#225;fica de 81,46 (hab/Km2). Estima-se que o munic&#237;pio conta com 16.943 habitantes . Foi elevado a categoria de munic&#237;pio pela Lei n&#186; 5.285 de 18 de fevereiro de 1959, implanta&#231;&#227;o 1 de janeiro de 1960. Teve sua emancipa&#231;&#227;o pol&#237;tica no dia 19 de Agosto de 1966. Atualmente pertence a regi&#227;o metropolitana de Sorocaba.<br><br>
                <strong>Secret&#225;ria da Educa&#231;&#227;o:</strong> Sra. Eliana Coelho Teodoro<br>
                <strong>Site da Prefeitura Municipal de Ces&#225;rio Lange:</strong> <a class="pref_cesario_lange" href="http://www.cesariolange.sp.gov.br/">http://www.cesariolange.sp.gov.br/</a>

            </p>
        </div>
    </div> <!-- Prefeitura de Cesario Lange -->

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.ipero.sp.gov.br/") class="trs"><img class="sombra pref_ipero" src="<?php echo $root_html ?>img/parceiros/prefipero.png" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de Iper&oacute;</h2>

            <p style="position: relative; text-align: left;">
                Iper&#243; &#233; um munic&#237;pio brasileiro situado na Regi&#227;o Metropolitana de Sorocaba. S&#227;o Paulo. A 25 Km de Sorocaba e 116 Km da capital de S&#227;o Paulo, com 48 anos de emancipa&#231;&#227;o, sua economia &#233; baseada na ind&#250;stria, com&#233;rcio e agricultura. A cidade apresenta Distribu&#237;da pelos munic&#237;pios de Iper&#243;, Sorocaba, Ara&#231;oiaba da Serra, Capela do Alto e Tatu&#237;, a Floresta Nacional de Ipanema (Flona) criada em 1992 &#233; um marco da hist&#243;ria da cidade. Possui uma &#225;rea de 170,289 km&#178;, com densidade demogr&#225;fica de 166,20 (hab/Km&#178;). Estima-se que o munic&#237;pio conta com uma popula&#231;&#227;o de 32.568 habitantes.<br><br>
                <strong>Secret&#225;ria da Educa&#231;&#227;o:</strong> Sra. Mariza Moraga<br>
                <strong>Site da Prefeitura Municipal de Iper&#243;:</strong> <a class="pref_ipero" href="http://www.ipero.sp.gov.br/">http://www.ipero.sp.gov.br/</a>

            </p>
        </div>
    </div> <!-- Prefeitura de Ipero -->

    <div style="display: none; overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.pilardosul.sp.gov.br/") class="trs"><img class="sombra pref_pilar_do_sul" src="<?php echo $root_html ?>img/parceiros/prefpilardosul.png" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de Pilar do Sul</h2>

            <p style="position: relative; text-align: left;">
                Munic&#237;pio brasileiro do estado de S&#227;o Paulo situado na Regi&#227;o Metropolitana de Sorocaba. A hist&#243;ria de Pilar do Sul come&#231;ou em 1850, quando tropeiros, ca&#231;adores e mineradores passavam pela cidade &#224; procura de metais preciosos. Em 1877, Jo&#227;o Batista Ribeiro, com autoriza&#231;&#227;o do Bispo da &#233;poca, fundou a Vila de Pilar elevando-a a categoria de Par&#243;quia, por lei Providencial. Em 12 de maio de 1891, por meio de um decreto, a vila tornou-se munic&#237;pio. No dia 20 do mesmo m&#234;s instalaram uma intend&#234;ncia nomeando Euz&#233;bio de Moraes Cunha como primeiro prefeito de Pilar. Possui uma &#225;rea de 681,123 km², com densidade demogr&#225;fica de 38,77 hab/Km2. Estima-se que o munic&#237;pio conta com uma popula&#231;&#227;o de 28.097 habitantes .<br>
                <strong>Secret&#225;ria da Educa&#231;&#227;o:</strong> Sra. Helo&#237;sa<br>
                <strong>Site da Prefeitura Municipal de Pilar do Sul:</strong> <a href="http://www.pilardosul.sp.gov.br/">http://www.pilardosul.sp.gov.br/</a>

            </p>
        </div>
    </div> <!-- Prefeitura de Pilar do Sul DISPLAY NONE-->

    <div style="display: none;overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://capaobonito.sp.gov.br/") class="trs"><img class="sombra pref_capao_bonito" src="<?php echo $root_html ?>img/parceiros/prefcapaobonito.jpg" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de Cap&atilde;o Bonito</h2>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Prefeitura de Capão Bonito -->

    <div style="display: none; overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.saltodepirapora.sp.gov.br/") class="trs"><img class="sombra pref_salto_de_pirapora" src="<?php echo $root_html ?>img/parceiros/prefsaltopirapora.jpg" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de Salto de Pirapora</h2><br>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Prefeitura de Salto de Pirapora DISPLAY NONE -->

    <div style="display: none;overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.saomiguelarcanjo.sp.gov.br/") class="trs"><img class="sombra pref_sao_miguel" src="<?php echo $root_html ?>img/parceiros/prefsaomiguel.png" alt="" width="100%"  /></a><p style="margin-top: 10px">
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de S&atilde;o Miguel Arcanjo</h2><br>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Prefeitura de São Miguel Arcanjo DISPLAY NONE -->

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.saoroque.sp.gov.br/") class="trs"><img class="sombra pref_sao_roque" src="<?php echo $root_html ?>img/parceiros/prefsaoroque.jpg" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de S&atilde;o Roque</h2><br>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Prefeitura de São Roque -->

    <div style="display:none; overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.sorocaba.sp.gov.br/") class="trs"><img class="sombra pref_sorocaba" src="<?php echo $root_html ?>img/parceiros/prefsorocaba.png" alt="" width="100%"  /></a>                                                                                                                                                                                                   <!-- LEGENDA -->
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de Sorocaba</h2><br>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Prefeitura de Sorocaba DISPLAY NONE-->

    <h2 style="/*position: relative; left: 25%;*/ text-align: center; color: #ff7600; font-size: 30pt;">Empresas</h2>
    <li style="height: 1px; width: 100%; background-color: #000;"></li>

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.gerdau.com.br/") class="trs"><img class="sombra parc_gerdau" src="<?php echo $root_html ?>img/parceiros/gerdau.png" alt="" width="100%" /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Gerdau</h2><br>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Gerdau -->

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.uniso.br/") class="trs"><img class="sombra parc_uniso" src="<?php echo $root_html ?>img/parceiros/uniso.png" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">UNISO - Universidade de Sorocaba</h2><br>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- UNISO - Universidade de Sorocaba -->

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.objetivosorocaba.com.br/") class="trs"><img class="sombra parc_objetivo_sorocaba" src="<?php echo $root_html ?>img/parceiros/objetivo.png" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Col&eacute;gio Objetivo Sorocaba</h2><br>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Colégio Objetivo Sorocaba -->

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("https://www.fbb.org.br/") class="trs"><img class="sombra tecsocial" src="<?php echo $root_html ?>img/parceiros/tecsocial.png" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 20%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Fundação Banco do Brasil</h2><br>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Fundação Banco do Brasil -->




    <!--
    <div id="sub_destaques">
        <div class="h-1-4" id="noticias" onclick="$('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-suitcase fa-2x"></i><br> Empresas </span>
            </div>
        </div>
        <div class="h-1-4" id="eventos_destaques" onclick="$('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-building fa-2x"></i><br> Prefeituras </span>
            </div>
        </div>
        <div class="h-1-4" id="publicacoes" onclick="$('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-globe fa-2x"></i><br> Outras institui&ccedil;&otilde;es </span>
            </div>
        </div>
        <div class="h-1-4" id="guia_vest" onclick="$('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-hand-o-right fa-2x"></i><br> Indique um parceiro </span>
            </div>
        </div>
    </div>
    <div id="principal_destaques">
        <div class="slider">
                    <div> <a onclick=window.open("http://www.gerdau.com.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/gerdau.png" alt="" width="20%" /></a><br><br>Gerdau</div>
                   <div> <a onclick=window.open("http://www.anhembi.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefanhembi.png" alt="" width="20%" /></a><br><br>Prefeitura de Anhembi</div>
                   <div> <a onclick=window.open("http://www.cesariolange.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefcesario.png" alt="" width="20%"  /></a><br><br>Prefeitura de Ces&aacute;rio Lange</div>
                   <div> <a onclick=window.open("http://www.ipero.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefipero.png" alt="" width="20%"  /></a><br><br>Prefeitura de Iper&oacute;</div>
                  <div>  <a onclick=window.open("http://www.pilardosul.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefpilardosul.png" alt="" width="20%"  /></a><br><br>Prefeitura de Pilar do Sul</div>
                   <div> <a onclick=window.open("http://capaobonito.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefcapaobonito.jpg" alt="" width="20%"  /></a><br><br>Prefeitura de Cap&atilde;o Bonito</div>
                   <div> <a onclick=window.open("http://www.saltodepirapora.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefsaltopirapora.jpg" alt="" width="20%"  /></a><br><br>Prefeitura de Salto de Pirapora</div>
                   <div>  <a onclick=window.open("http://www.saomiguelarcanjo.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefsaomiguel.png" alt="" width="20%"  /></a><p style="margin-top: 10px">Prefeitura de S&atilde;o Miguel Arcanjo</div>
                   <div>  <a onclick=window.open("http://www.saoroque.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefsaoroque.jpg" alt="" width="20%"  /></a><br><br>Prefeitura de S&atilde;o Roque</div>
                   <div> <a onclick=window.open("http://www.sorocaba.sp.gov.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/prefsorocaba.png" alt="" width="20%"  /></a><br><br>Prefeitura de Sorocaba</div>
                <div> <a onclick=window.open("http://www.uniso.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/uniso.png" alt="" width="20%"  /></a><br><br>UNISO - Universidade de Sorocaba</div>
                <div> <a onclick=window.open("http://www.objetivosorocaba.com.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/objetivo.png" alt="" width="20%"  /></a><br><br>Col&eacute;gio Objetivo Sorocaba</div>
                <div> <a onclick=window.open("https://www.fbb.org.br/") class="trs"><img class="sombra" src="<?php echo $root_html ?>img/parceiros/tecsocial.png" alt="" width="20%"  /></a><p style="margin-top: 10px">Fundação Banco do Brasil</div>

                   
        </div>

    </div>
    <div id="noticias_principal">
        <br><br><i class="fa fa-suitcase fa-2x"></i><br> Empresas<br><br><p style="color: black">
        Ao se tornar nossa parceira, sua empresa estar&aacute; colaborando com um programa social e educacional sem fins lucrativos.<br>
        Sua marca ser&aacute; exposta em nossos brindes, eventos e publica&ccedil;&otilde;es. Entre em contato e saiba mais! </p><br><br>
        <form class="formulario"  action="mail.php" method="post">
            <input type="hidden" value="CONTATO PARCEIROS - EMPRESA" name="tipo">
            <input required="required" type="text" name="nome_contato" placeholder="Seu nome"><br><br>
            <input  required="required" type="text" name="email" placeholder="Seu e-mail"><br><br>
            <input  required="required" type="text" name="nome_empresa" placeholder="Nome da empresa"><br><br>
            <input required="required" type="text" name="cargo" placeholder="Seu cargo na empresa"><br><br>
            <textarea>Mensagem (opcional)</textarea> <br><br>
            <button type="submit" class=""><i class="fa fa-send fa-1x"></i> Enviar</button>
        </form><br><br>


    </div>
    <div id="eventos_destaques_principal">
        <br><br>
        <i class="fa fa-building fa-2x"></i><br> Prefeituras
        <br><br><p style="color: black">
        Ao aderir o programa e se tornar nossa parceira, a prefeitura da sua cidade permite que as ecolas p&uacute;blicas e particulares<br> participem dos nossos eventos e tenham acesso a um sistema inovador de ensino de ci&ecirc;ncias!<br>
        Entre em contato e saiba mais!</p> <br><br>
        <form class="formulario"  action="mail.php" method="post">
            <input type="hidden" value="CONTATO PARCEIROS - PREFEITURA" name="tipo">
            <input required="required" type="text" name="nome_contato" placeholder="Seu nome"><br><br>
            <input  required="required" type="text" name="email" placeholder="Seu e-mail"><br><br>
            <input  required="required" type="text" name="nome_empresa" placeholder="Nome da cidade"><br><br>
            <input required="required" type="text" name="cargo" placeholder="Seu cargo na prefeitura"><br><br>
            <textarea>Mensagem (opcional)</textarea> <br><br>
            <button type="submit" class=""><i class="fa fa-send fa-1x"></i> Enviar</button>
        </form><br><br>



    </div>
    <div id="publicacoes_principal">
        <br><br>
        <i class="fa fa-globe fa-2x"></i><br> Outras institui&ccedil;&otilde;es
        <br><br><p style="color: black">
        Ao se tornar nossa parceira, sua institui&ccedil;&atilde;o estar&aacute; colaborando com um programa social e educacional sem fins lucrativos.<br>
        Sua marca ser&aacute; exposta em nossos brindes, eventos e publica&ccedil;&otilde;es. Entre em contato e saiba mais!</p> <br><br>
        <form class="formulario"  action="mail.php" method="post">
            <input type="hidden" value="CONTATO PARCEIROS - INSTITUICAO" name="tipo">
            <input required="required" type="text" name="nome_contato" placeholder="Seu nome"><br><br>
            <input  required="required" type="text" name="email" placeholder="Seu e-mail"><br><br>
            <input  required="required" type="text" name="nome_empresa" placeholder="Nome da institui&ccedil;&atilde;o"><br><br>
            <input required="required" type="text" name="cargo" placeholder="Seu cargo na institui&ccedil;&atilde;o"><br><br>
            <textarea>Mensagem (opcional)</textarea> <br><br>
            <button type="submit" class=""><i class="fa fa-send fa-1x"></i> Enviar</button>
        </form><br><br>



    </div>
    <div id="guia_vest_principal">
        <br><br>
        <i class="fa fa-hand-o-right fa-2x"></i><br> Indique um parceiro
        <br><br><p style="color: black">
        Caso voc&ecirc; conhe&ccedil;a algu&eacute;m que poderia se interessar pelo programa e se tornar nosso parceiro indique o contato abaixo!<br>
        Entre em contato e saiba mais!</p> <br><br>
        <form class="formulario"  action="mail.php" method="post">
            <input type="hidden" value="CONTATO PARCEIROS - INDICACAO" name="tipo">
            <input required="required" type="text" name="nome_contato" placeholder="Nome do contato"><br><br>
            <input  required="required" type="text" name="email" placeholder="E-mail do contato"><br><br>
            <input  required="required" type="text" name="nome_empresa" placeholder="Nome da institui&ccedil;&atilde;o"><br><br>
            <input required="required" type="text" name="cargo" placeholder="Cargo do contato na institui&ccedil;&atilde;o"><br><br>
            <textarea>Mensagem (opcional)</textarea> <br><br>
            <button type="submit" class=""><i class="fa fa-send fa-1x"></i> Enviar</button>
        </form><br><br>



    </div>
    -->

</div>
<?php
include '../web/footer.php';
?>