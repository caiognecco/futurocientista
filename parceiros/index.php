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
                <strong>Site da Prefeitura Municipal de Ces&#225;rio Lange:</strong> <a class="pref_cesario_lange" target="_blank" href="http://www.cesariolange.sp.gov.br/">http://www.cesariolange.sp.gov.br/</a>

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
                <strong>Secret&#225;ria da Educa&#231;&#227;o:</strong> Adr&eacute;ia Aparecida Arato Rocha Camargo<br>
                <strong>Site da Prefeitura Municipal de Iper&#243;:</strong> <a class="pref_ipero" target="_blank" href="http://www.ipero.sp.gov.br/">http://www.ipero.sp.gov.br/</a>

            </p>
        </div>
    </div> <!-- Prefeitura de Ipero -->

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

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
                <strong>Secret&#225;ria da Educa&#231;&#227;o:</strong> Sra. Elo&#237;sa Renata<br>
                <strong>Site da Prefeitura Municipal de Pilar do Sul:</strong> <a class="pref_pilar_do_sul" target="_blank" href="http://www.pilardosul.sp.gov.br/">http://www.pilardosul.sp.gov.br/</a>

            </p>
        </div>
    </div> <!-- Prefeitura de Pilar do Sul -->

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
    </div> <!-- Prefeitura de Capão Bonito DISPLAY NONE -->

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

    <div style="overflow: hidden; padding-bottom: 5%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.saoroque.sp.gov.br/") class="trs"><img class="sombra pref_sao_roque" src="<?php echo $root_html ?>img/parceiros/prefsaoroque.jpg" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de S&atilde;o Roque</h2>

            <p style="position: relative; text-align: left;">
                A cidade foi fundada em 16 de Agosto de 1657 pelo bandeirante Pedro Vaz de Barros, conhecido tamb&#233;m como Vaz Gua&#231;u, O Grande. No in&#237;cio, havia sua fazenda e uma capela em devo&#231;&#227;o a S&#227;o Roque, onde hoje &#233; a Pra&#231;a da Matriz.
                <br>
                Mais tarde, imigrantes italianos e portugueses cobriram as encostas dos morros com vinhedos, instalaram suas adegas e transformaram S&#227;o Roque na famosa "Terra do Vinho". E 1990, devido ao seu grande potencial no cen&#225;rio hist&#243;rico, art&#237;stico, ecol&#243;gico e cultural, a cidade foi transformada em Est&#226;ncia Tur&#237;stica. Possui 306,9 km&#178; de territ&#243;rio, com cerca e 86 mil habitantes, e fica a 60 km de S&#227;o Paulo, servida pelas rodovias Raposo Tavares e Castelo Branco.
                <br><br>
                <strong>Secret&aacute;rio da Educação:</strong> Wilson Moraes Rosa Filho <br>
                <strong>Site da Prefeitura de S&#227;o Roque:</strong> <a target="_blank" class="pref_sao_roque" href="http://www.saoroque.sp.gov.br/">http://www.saoroque.sp.gov.br/</a>
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
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Prefeitura de Sorocaba</h2>

            <p style="position: relative; text-align: left;">
                No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
            </p>
        </div>
    </div> <!-- Prefeitura de Sorocaba DISPLAY NONE-->

    <h2 style="text-align: center; color: #ff7600; font-size: 30pt; position: relative; top: 0.6em;">Empresas</h2>
    <li style="height: 1px; width: 100%; background-color: #000;"></li>

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br><br>
            <a onclick=window.open("http://www.gerdau.com.br/") class="trs"><img class="sombra parc_gerdau" src="<?php echo $root_html ?>img/parceiros/gerdau.png" alt="" width="100%" /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Gerdau</h2>

            <p style="position: relative; text-align: left;">
                Empresa brasileira fabricante de produtos em a&#231;o para a constru&#231;&#227;o civil, ind&#250;stria, agropecu&#225;ria e setor automotivo. &#201; l&#237;der no segmento de a&#231;os longos especiais e a maior fornecedora para a ind&#250;stria automobil&#237;stica no mundo. Sua trajet&#243;ria come&#231;ou em 1901 com uma f&#225;brica de pregos em Porto Alegre, Brasil.
                Atualmente &#233; uma empresa global com centenas de opera&#231;&#245;es em 14 pa&#237;ses &#8211; nas Am&#233;ricas, Europa e &#193;sia. Sua internacionaliza&#231;&#227;o come&#231;ou em 1980, com produ&#231;&#227;o local no Uruguai. Em 1989 ingressaram na Am&#233;rica do Norte, com a aquisi&#231;&#227;o de uma usina em Ont&#225;rio, no Canad&#225;. Em 2014 a empresa fundiu suas opera&#231;&#245;es na Rep&#250;blica Dominicana com a Metaldom, formando a Gerdau Metaldom, para atender a Am&#233;rica Central e o Caribe.
                <br><br>
                <strong>Para mais informa&#231;&#245;es:</strong> <a class="parc_gerdau" target="_blank" href="http://www.gerdau.com.br/">http://www.gerdau.com.br/</a>
            </p>
        </div>
    </div> <!-- Gerdau -->

    <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

        <!-- LOGO -->
        <div style="width: 14%; float:left; padding-right: 5%;">
            <br><br><br>
            <a onclick=window.open("http://www.uniso.br/") class="trs"><img class="sombra parc_uniso" src="<?php echo $root_html ?>img/parceiros/uniso.png" alt="" width="100%"  /></a>
        </div>

        <!-- LEGENDA -->
        <div style="height: 30%; width: 40%; float: left; position:relative;">
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">UNISO - Universidade de Sorocaba</h2>

            <p style="position: relative; text-align: left;">
                A Universidade de Sorocaba (Uniso) &#233; uma Institui&#231;&#227;o de Ensino Superior comunit&#225;ria regional, com mais de 60 cursos de gradua&#231;&#227;o, cursos de extens&#227;o, 31 cursos lato sensu (MBA e Especializa&#231;&#227;o); Mestrado em Comunica&#231;&#227;o e Cultura, Mestrado e Doutorado em Ci&#234;ncias Farmac&#234;uticas, Mestrado e Doutorado em Educa&#231;&#227;o e Mestrado em Processos Tecnol&#243;gicos Ambientais.
                &#201; mantida pela Funda&#231;&#227;o Dom Aguirre, e sua origem &#233; a Faculdade de Filosofia, Ci&#234;ncias e Letras de Sorocaba, criada em 1951, com in&#237;cio das atividades em 1954. Em 1992 teve in&#237;cio as Faculdades Integradas Dom Aguirre (Fida), e em 1994 a Uniso foi oficializada como universidade.
                <br><br>
                <strong>Para mais informa&#231;&#245;es:</strong> <a class="parc_uniso" target="_blank" href="http://www.uniso.br/">http://www.uniso.br/</a>
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
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Col&eacute;gio Objetivo Sorocaba</h2>

            <p style="position: relative; text-align: left;">
                Com tr&#234;s unidades, localizadas nas principais regi&#245;es de Sorocaba, o Col&#233;gio Objetivo atende cerca de 3.000 alunos, do Ber&#231;&#225;rio ao Pr&#233;-vestibular. Refer&#234;ncia em educa&#231;&#227;o, a escola proporciona aos estudantes um profundo contato com a cultura, o esporte e as v&#225;rias formas de linguagem, sempre estimulando o protagonismo de crian&#231;as e adolescentes.br
                <br>
                Sua hist&#243;ria come&#231;ou efetivamente em 1974, quando os amigos Luiz Castanho, Oscar Vieira e Samuel Tabacow compraram o ent&#227;o Instituto de Educa&#231;&#227;o, Ci&#234;ncias e Letras, que foi rebatizado como Col&#233;gio Pr&#233;-Universit&#225;rio. Em 1977 eles trouxeram a bandeira do programa Objetivo. Em 1990 foi inaugurada sua segunda unidade e, em 2012, a terceira escola, na zona norte da cidade.
                <br><br>
                <strong>Para mais informa&#231;&#245;es:</strong> <a class="parc_objetivo_sorocaba" target="_blank" href="http://www.objetivosorocaba.com.br/">http://www.objetivosorocaba.com.br/</a>
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
            <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Fundação Banco do Brasil</h2>

            <p style="position: relative; text-align: left;">
                Criada em 1985, com in&#237;cio das atividades em 1988, a Funda&#231;&#227;o nasceu dentro do Banco do Brasil para financiar projetos que buscassem solu&#231;&#245;es para problemas sociais e para o desenvolvimento sustent&#225;vel das comunidades brasileiras. Nos &#250;ltimos dez anos, 2004 a 2015, mais de tr&#234;s milh&#245;es de pessoas tiveram suas vidas transformadas pelos quase seis mil projetos apoiados e investimentos sociais que totalizam 2,3 bilh&#245;es de reais.
                <br>
                As a&#231;&#245;es s&#227;o concentradas em cinco vetores de atua&#231;&#227;o: &#225;gua, agroecologia, agroind&#250;stria, res&#237;duos s&#243;lidos e educa&#231;&#227;o. O p&#250;blico-alvo s&#227;o os menos favorecidos, e a partir de agora com foco em jovens e mulheres, por serem segmentos populacionais mais sens&#237;veis &#224;s desigualdades sociais e mais expostos &#224; viol&#234;ncia.br
                <br><br>
                <strong>Para mais informa&#231;&#245;es:</strong> <a class="tecsocial" target="_blank" href="https://www.fbb.org.br/">https://www.fbb.org.br/</a>

            </p>
        </div>
    </div> <!-- Fundação Banco do Brasil -->

    <div style="width: 100%; height: 10%; float: left;"></div>

    <div style="width: 100%; overflow: hidden; background-color: #000; color: #ffffff;">
        <h2 style="text-align: center; color: #ff7600; font-size: 30pt;">Realizaç&#227;o e Selos</h2>
        <li style="height: 1px; width: 100%; background-color: #ffffff;"></li>


        <div style="overflow: hidden; padding-top: 3%; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

            <!-- LOGO -->
            <div style="width: 14%; float:left; padding-right: 5%;">
                <br><br><br><br><br>
                <a onclick=window.open("http://www.ufscar.br/") class="trs">
                    <img  src="<?php echo $root_html ?>img/parceiros/ufscar.png" alt="" width="100%" class="ufscar" />
                </a>
            </div>

            <!-- LEGENDA -->
            <div style="height: 30%; width: 40%; float: left; position:relative;">
                <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Universidade Federal de São Carlos - Campus Sorocaba</h2>

                <p style="position: relative; text-align: left;">
                    A Ufscar Sorocaba teve suas atividades iniciadas em 2006, com quatro cursos de gradua&#231;&#227;o. Em 2008 foi inaugurado o campus pr&#243;prio, localizado no km 100 da rodovia Jo&#227;o Leme dos Santos (SP-264), com cerca de 700 mil m&#178;. Atualmente a Ufscar oferece em Sorocaba 14 cursos de Gradua&#231;&#227;o e quatro de P&#243;s-Gradua&#231;&#227;o strictu sensu.
                    <br>
                    O espa&#231;o &#233; composto por edif&#237;cios de atendimento &#224; gest&#227;o Acad&#234;mica e gest&#227;o administrativa da institui&#231;&#227;o. S&#227;o 14 salas de aula e 10 laborat&#243;rios, entre did&#225;ticos e de inform&#225;tica. O campus &#233; dotado tamb&#233;m de Restaurante Universit&#225;rio e Biblioteca. A qualidade do corpo docente que comp&#245;e cada um dos cursos da universidade pode ser observada na taxa de professores com mestrado e doutorado: 100%.
                    <br><br>
                    <strong>Para mais informa&#231;&#245;es:</strong> <a target="_blank" class="ufscar" href="http://www.sorocaba.ufscar.br/">http://www.sorocaba.ufscar.br/</a>
                </p>
            </div>
        </div> <!-- UFSCar -->

        <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

            <!-- LOGO -->
            <div style="width: 14%; float:left; padding-right: 5%;">
                <br><br><br><br><br>
                <a onclick=window.open("http://www.proex.ufscar.br/") class="trs">
                    <img src="<?php echo $root_html ?>img/parceiros/proex.png" alt="" width="100%"  class="proex_ufscar"/>
                </a>
            </div>

            <!-- LEGENDA -->
            <div style="height: 30%; width: 40%; float: left; position:relative;">
                <h2 style="/*position: relative; left: 25%;*/ text-align: center;">PROEX</h2>

                <p style="position: relative; text-align: left;">
                    A Pr&#243;-Reitoria de Extens&#227;o (ProEx) da Universidade Federal de S&#227;o Carlos (Ufscar) foi criada em 1988 e &#233; o setor respons&#225;vel pela gest&#227;o das atividades de extens&#227;o realizadas nos campi de S&#227;o Carlos e Sorocaba. A ProEx atualmente conta com cinco coordenadorias de &#225;rea: Coordenadoria de Atividades de Extens&#227;o, de Cursos de Extens&#227;o, de Cultura, de Projetos Especiais e Coordenadoria de Apoio a Eventos, al&#233;m de sete N&#250;cleos de Extens&#227;o.
                    <br>
                    A pol&#237;tica de extens&#227;o adotada nos &#250;ltimos anos na UFSCar est&#225; comprometida com o fortalecimento da fun&#231;&#227;o da Universidade, isto &#233;, produzir, sistematizar e difundir conhecimento, desenvolvendo suas atividades de pesquisa e ensino interligadas com as demandas dos v&#225;rios segmentos da popula&#231;&#227;o por meio de a&#231;&#245;es de extens&#227;o.
                    <br><br>
                    <strong>Para mais informa&#231;&#245;es:</strong> <a class="proex_ufscar" target="_blank" href="http://www.proex.ufscar.br">http://www.proex.ufscar.br</a>

                </p>
            </div>
        </div> <!-- PROEX -->

        <div style="display: none; overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

            <!-- LOGO -->
            <div style="width: 14%; float:left; padding-right: 5%;">
                <br><br><br><br>
                <a onclick=window.open("http://www.proex.ufscar.br/") class="trs">
                    <img  src="<?php echo $root_html ?>img/parceiros/proext.png" alt="" width="100%"<?php echo $root_html ?> class="proex_ufscar"/>
                </a>
            </div>

            <!-- LEGENDA -->
            <div style="height: 30%; width: 40%; float: left; position:relative;">
                <h2 style="/*position: relative; left: 25%;*/ text-align: center;">PROEXT</h2><br>

                <p style="position: relative; text-align: left;">
                    No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.
                </p>
            </div>
        </div> <!-- PROEXT -->

        <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

            <!-- LOGO -->
            <div style="width: 14%; float:left; padding-right: 5%;">
                <br><br><br><br><br>
                <a onclick=window.open("http://www.brasil.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/brasil.png" alt="" width="100%" class="governo_federal" />
                </a>
            </div>

            <!-- LEGENDA -->
            <div style="height: 30%; width: 40%; float: left; position:relative;">
                <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Governo Federal do Brasil</h2>

                <p style="position: relative; text-align: left;">
                    O Brasil &#233; uma rep&#250;blica federativa constitucional presidencialista, de forma adotada em 1889. O Governo Federal &#233; o representante do Poder Executivo a n&#237;vel nacional, chefiado pelo Presidente da Rep&#250;blica, que acumula as fun&#231;&#245;es de chefe de Estado e chefe de Governo. &#201; tamb&#233;m representado pelos ministros e secret&#225;rios. Atualmente na administra&#231;&#227;o direta s&#227;o 24 Minist&#233;rios, quatro secretarias, o Banco Central, a Advocacia-Geral da Uni&#227;o e a Controladoria-Geral da Uni&#227;o. H&#225; tamb&#233;m a administra&#231;&#227;o federal indireta, exercida por autarquias, funda&#231;&#245;es p&#250;blicas, empresas p&#250;blicas ou sociedades de economia mista. O pa&#237;s possui mais de 205 milh&#245;es de habitantes, distribu&#237;dos em 26 estados e o Distrito Federal, com total de 8,5 milh&#245;es de km&#178;.
                    <br><br>
                    <strong>Para mais informa&#231;&#245;es:</strong> <a target="_blank" class="gover_federal" href="http://www.brasil.gov.br/">http://www.brasil.gov.br/</a>
                </p>
            </div>
        </div> <!-- GOVERNO FEDERAL -->

        <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

            <!-- LOGO -->
            <div style="width: 14%; float:left; padding-right: 5%;">
                <br><br><br><br><br>
                <a onclick=window.open("http://www.mec.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/mec.png" alt="" width="100%" class="mec"/>
                </a>
            </div>

            <!-- LEGENDA -->
            <div style="height: 30%; width: 40%; float: left; position:relative;">
                <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Minist&eacute;rio da Educa&ccedil;&atilde;o</h2>

                <p style="position: relative; text-align: left;">
                    &#201; o &#243;rg&#227;o do Governo Federal que trata da pol&#237;tica nacional de educa&#231;&#227;o em geral, compreendendo: ensino fundamental, m&#233;dio e superior; educa&#231;&#227;o de jovens e adultos, seja profissional, especial ou &#224; dist&#226;ncia; informa&#231;&#227;o e pesquisa educacional; pesquisa e extens&#227;o universit&#225;ria; e magist&#233;rio. Prov&#234; assist&#234;ncia financeira a fam&#237;lias carentes para a escolariza&#231;&#227;o de
                    seus filhos ou dependentes e n&#227;o abrange o ensino militar.
                    <br>
                    Dentre os servi&#231;os ofertados ao p&#250;blico est&#227;o os de inscri&#231;&#227;o no Sistema de Sele&#231;&#227;o Unificada (SISU); no Sistema de Sele&#231;&#227;o Unificada da Educa&#231;&#227;o Profissional e Tecnol&#243;gica (Sisutec); no Programa Nacional de Acesso ao Ensino Profissional e Emprego (Pronatec) e no Programa de Financiamento Estudantil (Fies).
                    <br><br>
                    <strong>Para mais informa&#231;&#245;es:</strong> <a target="_blank" class="mec" href="http://www.mec.gov.br/">http://www.mec.gov.br/</a>

                </p>
            </div>
        </div> <!-- MINISTERIO DA EDUCAÇÃO -->

        <div style="overflow: hidden; padding-bottom: 3%; width: 100%; padding-right: 20%; padding-left: 20%; float: left;">

            <!-- LOGO -->
            <div style="width: 14%; float:left; padding-right: 5%;">
                <br><br><br><br><br>
                <a onclick="window.open('http://fbb.org.br/tecnologiasocial/banco-de-tecnologias-sociais/pesquisar-tecnologias/detalhar-tecnologia-379.htm')"><img id="logo" src="<?php echo $root_html ?>img/tecsocial.png" width="100%" class="image tecsocial"><p style="margin-top: 45px;">
                </a>
            </div>

            <!-- LEGENDA -->
            <div style="height: 30%; width: 40%; float: left; position:relative;">
                <h2 style="/*position: relative; left: 25%;*/ text-align: center;">Selo de Tecnologia Social</h2>

                <p style="position: relative; text-align: left;">
                    Concedido pela Funda&#231;&#227;o Banco do Brasil, o selo de Tecnologia Social foi criado em 2001 para identificar e certificar as tecnologias sociais que comp&#245;em o Banco de Tecnologias Sociais (BTS). Realizado a cada dois anos, o Pr&#234;mio busca tamb&#233;m difundir as iniciativas implementadas em &#226;mbito local, regional ou nacional, que sejam efetivas na solu&#231;&#227;o de quest&#245;es relativas &#224; alimenta&#231;&#227;o, educa&#231;&#227;o, energia, habita&#231;&#227;o, meio ambiente, recursos h&#237;dricos, renda e sa&#250;de.
                    <br>
                    As tecnologias sociais s&#227;o produtos, t&#233;cnicas ou metodologias reaplic&#225;veis, desenvolvidas na intera&#231;&#227;o com a comunidade. &#201; um conceito que remete para uma proposta inovadora de desenvolvimento, considerando a participa&#231;&#227;o coletiva no processo de organiza&#231;&#227;o, desenvolvimento e implementa&#231;&#227;o.
                    <br><br>
                    <strong>Para mais informa&#231;&#245;es:</strong> <a target="_blank" class="tecsocial" href="http://fbb.org.br/tecnologiasocial/banco-de-tecnologias-sociais/pesquisar-tecnologias/detalhar-tecnologia-379.htm">Selo de Tecnologia Social PFC</a>

                </p>
            </div>
        </div> <!-- SELO DE TECNOLOGIA SOCIAL -->


    </div> <!-- REALIZAÇAO E SELOS -->


</div>

<div id="footer_inicio" style="width: 100%; float: left; height: 9%; background: white; color: #ff6600; font-size: 1.3em" class="container">
            <span style="vertical-align: middle;">
             <i class="fa fa-copyright fa-1x"></i> Programa Futuro Cientista - Aprendizado pela Descoberta  (<?php echo date("Y") ?> ) | Todos os direitos reservados
             | <i class="fa fa-phone fa-1x"></i> (15)3229-8840 | <i class="fa fa-envelope fa-1x"></i> contato@futucientista.net
           </span>
</div>
<div id="footer_inicio2" style="width: 100%; float: left; height: 10%; background: lightgray; color: #ff6600; font-size: 1.1em; padding-top: .4%;">
        <span>
            <i class="fa fa-code fa-1x"></i> Site e Sistema desenvolvidos por:
            <a target="_blank" href="https://br.linkedin.com/in/caio-perroni-gnecco-5908a260">Caio Perroni Gnecco</a> | <a href="mailto:bernardopcamargo@gmail.com">Bernardo Pinheiro Camargo</a>
        </span>
</div>
<div style="height: 6%; width: 100%;"></div>
<div id="menu2">
    <div id="menu2_titulo" class="container">
        <span style="display:inline-block; vertical-align:middle">  <i class="fa fa-arrow-circle-down fa-1x "></i> Role para baixo para ver mais conteúdo! </span>
    </div>
</div>
</div>

<div style="height: 6%"></div>