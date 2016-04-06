<?php
//EQUIPE
$titulo = 'Equipe - Programa Futuro Cientista®';
$descricao = 'Conhe&ccedil;a nosso time de cientistas!';
$img = 'facebook/equipe';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>

<div id="menu1">
    <div class="container " >
        <span style="display:inline-block; vertical-align:middle"><i class="fa fa-group fa-1x"></i> Equipe </span>
    </div>
</div>


<div id="corpo" style="width: 100%; height: 50%;">
    
    <div id="menuEquipe">
        <div class="h-1-7 ativo" onclick="show1();  $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-sitemap fa-1x"></i> Organograma</span>
            </div>
        </div>
        <div class="h-1-7" onclick="show2(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container" >
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-legal fa-1x"></i> Superintendentes</span>
            </div>
        </div>
        <div class="h-1-7" onclick="show3(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-graduation-cap fa-1x"></i> Membros Honor&aacute;rios<br><small> (Comit&ecirc; Cient&iacute;fico)</small></span>
            </div>
        </div>
        <div class="h-1-7" onclick="show4(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
<div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-user-plus fa-1x"></i> Coordenadores</span>
            </div>
        </div>
        <div class="h-1-7" onclick="show5(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-street-view fa-1x"></i> Supervisores Educacionais e<br>Coordenadores Locais<br></span>
            </div>
            
        </div>
        <div class="h-1-7" onclick="show6(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-users fa-1x"></i> Nucleadores e <br> Equipe T&eacute;cnica</span>
            </div>
            
        </div>
        <div class="h-1-7" onclick="show7(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-child fa-1x"></i> Embaixadores<br><small>(Alunos)</small></span>
            </div>
            
        </div>
    </div>
    <div id="corpoEquipe">
        <div id="subEquipe1" class="subEquipe" ><br>
            
            <i class="fa fa-sitemap fa-2x"></i> <br>Organograma<br>
            <small> <iframe src="frame.html" style="width: 100%; height: 100%"></iframe><br></small>
       
       
        </div>
        <div id="subEquipe2" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-legal fa-2x"></i><br> Superintendentes<br><br>
            Diretoria:
             <table class="tabela">
            <tbody>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/fabio_leite.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/5490031389817518" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Prof. Dr. F&aacute;bio de Lima Leite</strong></span><strong><br>Diretor Presidente<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Possui gradua&ccedil;&atilde;o em F&iacute;sica (Bacharelado e Licenciatura) pela Universidade Estadual Paulista J&uacute;lio de Mesquita Filho (2000) e Mestrado (2002) e Doutorado (2006) em Ci&ecirc;ncia e Engenharia de Materiais pela Universidade de S&atilde;o Paulo (2006). No per&iacute;odo de 2006 à 2008, realizou um P&oacute;s-Doutorado no Instituto de F&iacute;sica de S&atilde;o Carlos (IFSC-USP), em colabora&ccedil;&atilde;o com a Embrapa Instrumenta&ccedil;&atilde;o Agropecu&aacute;ria. Trabalhou em parceria com o Prof. Dr. Alan Graham MacDiarmid, laureado com o Pr&ecirc;mio Nobel de Qu&iacute;mica de 2000, com o qual publicou 1 artigo no Journal of Nanoscience and Nanotechnology, em 2009. Foi Bolsista de P&oacute;s-Doutorado no Institudo de F&iacute;sica de S&atilde;o Carlos (USP) (2006-2008) e Jovem Pesquisador da FAPESP (2009-2012) Atualmente &eacute; Bolsista de Produtividade em Pesquisa, Nìvel 2, do CNPq, Professor Adjunto III na Universidade Federal de S&atilde;o Carlos (UFSCar) - Campus Sorocaba, Coordenador do Grupo de Pesquisa em Nanoneurobiof&iacute;sica (GNN) (www.nanoneurobiophysics.net). Atua tamb&eacute;m como Diretor Presidente do Programa Futuro Cientista® (PFC), desenvolvido junto às escolas p&uacute;blicas com o apoio do setor p&uacute;blico e privado. Tem experi&ecirc;ncia nas &aacute;reas de nanoci&ecirc;ncia e nanotecnologia, com &ecirc;nfase em nanoscopia, nanomedicina e nanoneurobiof&iacute;sica. &eacute; Coordenador do Programa de P&oacute;s-Gradua&ccedil;&atilde;o em Biotecnologia e Monitoramento Ambiental (PPGBMA) e credenciado junto ao Programa de P&oacute;s-Gradua&ccedil;&atilde;o em Medicina Tropical da Universidade de S&atilde;o Paulo (USP). O autor possui mais de 40 artigos publicados em peri&oacute;dicos nacionais e internacionais, 1 livro, 2 marcas registradas no Instituto Nacional de Propriedade Industrial (INPI) e 10 publica&ccedil;&otilde;es em livros. &eacute; membro do corpo editorial da revista Chemical Sensors (Simplex Academic Publishers) e revisor de cerca de 10 peri&oacute;dicos cient&iacute;ficos. Atualmente &eacute; membro colaborador do Instituto Nacional de Ci&ecirc;ncia e Tecnologia de Sistemas Micro e Nanoeletr&ocirc;nicos e membro efetivo da Rede BioNet (CAPES), Rede Agronano (Embrapa) e da American Nano Society.</span><strong><br>
                            </strong></div></td>
                </tr>
               

                <tr>
                    <td width="18%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/carol.jpg" width="105" height="125"><br>
                            <br><span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/0697827281457534" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                           </div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Caroline Pavan Brandini<br>Vice Diretora Presidenta</strong></span><strong></strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Graduanda no Curso de Licenciatura Plena em Ci&ecirc;ncias Biol&oacute;gicas na Universidade Federal de S&atilde;o Carlos (UFSCar), Campus Sorocaba (2012). Atua como Vice  Diretora Presidenta no Programa Futuro Cientista® (PFC), e participa como Organizadora do Encontro Regional de Futuros Cientistas (ERFC) e da Escola Preparat&oacute;ria para Futuros Cientistas (EPFC), m&oacute;dulos Ensino Fundamental II, M&eacute;dio e Superior, ambos do PFC. </p></td>
                </tr>
                <!--<tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/tiago.jpg" width="113"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/0860332394591067" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span></div>
                    </td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Tiago de Oliveira Reis<br>Diretor Administrativo</strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em F&iacute;sica - Licenciatura Plena - pela Universidade Federal de S&atilde;o Carlos (UFSCar) -  Campus Sorocaba. Entre 2010 e 2014 participou como Supervisor Executivo no Programa Futuro Cientista® (PFC) (www.futurocientista.net) e atualmente &eacute; Diretor Administrativo no PFC. Participa como organizador do Encontro Regional de Futuros Cientistas (ERFC) e da Escola Preparat&oacute;ria para Futuros Cientistas (EPFC), ambos do PFC. Atua tamb&eacute;m como professor de f&iacute;sica no Col&eacute;gio Objetivo Sorocaba. </p></td>
                    </td>
                </tr>-->
            </tbody>
        </table><br>
            <br><br><br>Administrativos:
             <table class="tabela">
                 <tbody>
                                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/caio.jpg" width="105" height="125"><br>
                            <br><span class="TextoBase"><a class="br" href="https://br.linkedin.com/pub/caio-perroni-gnecco/60/8a2/590" target="_blank">LinkedIn
                                </a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Caio Perroni Gnecco</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Superintendente de T.I.</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduando no curso de Bacharelado em Ci&ecirc;ncia da Computa&ccedil;&atilde;o pela Universidade Federal de S&atilde;o Carlos (UFSCAR) - Campus Sorocaba. Atua como Superintendente de T.I. do Programa Futuro Cientista® (PFC) e tamb&eacute;m como Consultor aut&ocirc;nomo na &aacute;rea de Tecnologia da Informa&ccedil;&atilde;o.</p></td>
                </tr>
                <!--<tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/camila.jpg" width="105" height="125"><br>
                            <br></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Camila de Oliveira Silva</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Supervisora de Imprensa</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduanda no curso de Publicidade e propaganda na Unip - Campus Sorocaba, Atua no Programa Futuro Cientista® (PFC) como Supervisora de Imprensa, desde 2015.</p></td>
                </tr>-->
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/fran.jpg" width="105" height="125"><br>
                            <br> <span class="TextoBase"><a class="br" href="http://kawek.net/franmoraes">Portif&oacute;lio</a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Francine de Moraes da Cunha</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Superintentende de Marketing</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduanda em Comunica&ccedil;&atilde;o Social ­ Publicidade e Propaganda, produz jobs voltados para &aacute;rea

de cria&ccedil;&atilde;o, produ&ccedil;&atilde;o gr&aacute;fica, reda&ccedil;&atilde;o, produ&ccedil;&atilde;o e edi&ccedil;&atilde;o de &aacute;udio e v&iacute;deo, fotografia,

planejamento de campanha, estrat&eacute;gias de marketing, entre outros. Amante de Sociologia,

musicista e engajada em projetos sociais h&aacute; alguns anos, agora integra a equipe do Futuro

Cientista.
</p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/miriam.jpg" width="105" height="125"><br>
                            <br> <span class="TextoBase"><a class="br" href=""></a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Míriam Bonora dos Santos</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Superintendente de Comunica&ccedil;&atilde;o</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduada em Comunica&#231;&#227;o Social - habilita&#231;&#227;o em Jornalismo pela Universidade de Sorocaba (2011), com p&#243;s-gradua&#231;&#227;o lato sensu em Gest&#227;o da Comunica&#231;&#227;o Integrada pelo Senac Sorocaba (2014). Atuou como rep&#243;rter e assessora de comunica&#231;&#227;o em Sorocaba e regi&#227;o. Atualmente &#233; Superintendente de Comunica&#231;&#227;o do Programa Futuro Cientista e tamb&#233;m desenvolve um portal regional independente sobre sustentabilidade.
</p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/neto.jpg" width="105" height="125"><br>
                            <br> <span class="TextoBase"><a class="br" href=""></a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Jos&eacute; Carlos Tallarico Neto</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Superintendente de Prospecão e Neg&oacute;cios (Setor P&uacute;blico)</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduando o &#250;ltimo ano de Rela&#231;&#245;es P&#250;blicas na Universidade de Sorocaba (UNISO). Superintendente de Prospec&#231;&#227;o e Neg&#243;cios, &#233; o respons&#225;vel pela aquisi&#231;&#227;o de fundos via setor p&#250;blico.
</p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/veronica.jpg" width="105" height="125"><br>
                            <br> <span class="TextoBase"><a class="br" href=""></a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Ver&ocirc;nica Leal</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Superintendente de Prospecão e Neg&oacute;cios (Setor Privado)</strong></span></p>
                        <p align="justify" class="TextoBase2">Cursando 4&#186; ano de Comunica&ccedil;&atilde;o Social - Marketing na UNIP. Participa do PFC como Superintendente de Prospec&#231;&#227;o e Neg&#243;cios para aquisi&#231;&#227;o de fundos via setor privado.
</p></td>
                </tr>
                
                
    
                 </tbody>
             </table><br>
             <br><br>Executivos:
             <table class="tabela">
                 <tbody>
                                    <!-- <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/debora.jpg" width="105" height="125"><br>
                            <br><span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/1963675790894275" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>D&eacute;bora Bergamini</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Supervisora Educacional</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduada em Hist&oacute;ria pela Universidade de Sorocaba e P&oacute;s-Graduada em Gest&atilde;o Cultural pelo SENAC-Rio. Trabalhou como Coordenadora de Patrim&ocirc;nio para a Prefeitura de Votorantim, onde realizou o 1º Semin&aacute;rio Regional de Patrim&ocirc;nio Imaterial. Foi Diretora de Cultura na cidade de Ara&ccedil;oiaba da Serra , onde implantou a Escola Livre de Arte e Cultura e os projetos Festival de Ver&atilde;o e de Festival de Inverno, eventos art&iacute;sticos/culturais com foco na produ&ccedil;&atilde;o independente nacional e regional. Realizou a produ&ccedil;&atilde;o executiva do Carnaval de Rua de Ara&ccedil;oiaba da Serra, evento que resgatou o festejo tradicional e colocou a cidade em local de destaque no roteiro de carnavais de rua do interior de S&atilde;o Paulo. Trabalhou para a C&acirc;mara Federal, dando assessoria em elabora&ccedil;&atilde;o de pol&iacute;ticas p&uacute;blicas de cultura na regi&atilde;o de Sorocaba, com foco na implanta&ccedil;&atilde;o dos Sistemas Municipais de Cultura. Foi uma das articuladoras do F&oacute;rum Regional de Cultura e delegada eleita na 3ª Confer&ecirc;ncia Nacional de Cultura, no ano de 2013.  Assinou a produ&ccedil;&atilde;o executiva da Conven&ccedil;&atilde;o Brasileira de Circo - Edi&ccedil;&atilde;o 2014, evento que re&uacute;ne por 7 dias mais de 500 artistas de circo de diversos pa&iacute;ses . Hoje atua como supervisora pedag&oacute;gica no projeto de Extens&atilde;o da UFSCar/Sorocaba - Programa Futuro Cientista,  e como empres&aacute;ria no ramo de assessoria cultural, com foco em assessoria pedag&oacute;gica para projetos de forma&ccedil;&atilde;o cultural. É tamb&eacute;m aluna especial do Programa de Mestrado em Educa&ccedil;&atilde;o na Universidade Federal de S&atilde;o Carlos.</p></td>
                </tr>-->
                      <tr>
                    
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cesar.jpg" width="113"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/2363842303055819" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span></div>
                    </td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">C&eacute;sar Lopes de Oliveira Greg&oacute;rio<br>Superintendente de Atividades e Eventos</strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Graduando em Ci&ecirc;ncias Biol&oacute;gicas pela Universidade Federal de S&atilde;o Carlos. Certificado pelo Curso Academic da Harvard University para lecionar a l&iacute;ngua Inglesa.. Trabalhou como Coordenador Pedag&oacute;gico em escola de idiomas, desenvolveu em 2015 como Coordenador o Cursinho Talentos do Futuro (Parceria entre PFC e Objetivo Sorocaba), atualmente atua como Superintendente de Atividades e Eventos do PFC, al&eacute;m de dar aulas de Ingl&ecirc;s. </p></td>
                    </td>
                </tr>
                 <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mari.jpg" width="113"><br>
                            <br>
                            <!--<span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/0860332394591067" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>--></div>
                    </td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Lucimari Cristini de Oliveira Gimenez<br>Superintendente Educacional e Social</strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Formada no curso de Licenciatura Plena em Pedagogia na Escola Superior de Administra&ccedil;&atilde;o, Propaganda e Comunica&ccedil;&atilde;o (ESAMC) . Graduanda no Curso de Licenciatura Plena em Ci&ecirc;ncias Biol&oacute;gicas na Universidade Federal de S&atilde;o Carlos (UFSCar), Campus Sorocaba (2013). Atua como Superintendente Educacional e Social no Programa Futuro Cientista (PFC).</p></td>
                    </td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/moema.jpg" width="105" height="125"><br>
                            <br> <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/4062568797583413">Curr&iacute;culo<br>
                                    Lattes</a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Moema A. Hausen</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Superintendente Cient&iacute;fica</strong></span></p>
                        <p align="justify" class="TextoBase2">Gradua&#231;&#227;o: Ci&#234;ncias Biol&#243;gicas, UERJ. Doutorado: Morfologia, UERJ. 1o P&#243;s-doutorado.: F&#237;sica Aplicada, CBPF. 2o P&#243;s-Doutorado: Biotecnologia, UFSCAR. Experi&#234;ncia docente: Biologia Celular e Molecular, Histologia e Embriologia. Experi&#234;ncia cient&#237;fica: Biologia Celular e Molecular, Tecido &#243;sseo, Protozoologia, Biomateriais para implantes, Dispositivos nanoestruturados para aplica&#231;&#245;es biom&#233;dicas e ambientais. S&#243;lida experi&#234;ncia nas seguintes t&#233;cnicas de microscopia: 1) de Luz convencional e por t&#233;cnicas de contraste; 2) Eletr&#244;nicas de Transmiss&#227;o e Varredura; 3) For&#231;a At&#244;mica e; 4) Confocal &#224; laser. Atua também como Superintendente Cient&iacute;fica no PFC.
</p></td>
                </tr>
                
                 
                 </tbody>
             </table><br>
            
        </div>
        <div id="subEquipe3" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-graduation-cap fa-2x"></i><br> Membros Honor&aacute;rios<br>
             <br><br>
             <table class="tabela">
                 <tbody>
                     <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/adilson.png" width="105" height="125"><br>
                            <br>
                             <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/4640148190073166" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Adilson Jesus Aparecido de Oliveira<br>Vice Reitor da UFSCar</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Adilson Jesus Aparecido de Oliveira &eacute;&eacute; Doutor em Ci&ecirc;ncias pela UFSCar (1996) e atualmente &eacute; Professor Titular do Departamento de F&iacute;sica e vice-reitor da Universidade Federal de S&atilde;o Carlos. Membro do Grupo de Supercondutividade e Magnetismo (GSM) e do N&uacute;cleo de Excel&ecirc;ncia em Materiais Nanoestruturados Fabricados Eletroquimicamente (NANOFAEL) e Pesquisador Principal do CEPID FAPESP -Centro de Desenvolvimento de Materiais Multifuncionais (CDMF). Coordenador do Laborat&oacute;rio Aberto de Interatividade (LAbI) da UFSCar. Atua na &aacute;rea de F&iacute;sica, com &ecirc;nfase em Materiais Magn&eacute;ticos e Propriedades Magn&eacute;ticas, e em Divulga&ccedil;&atilde;o Cient&iacute;fica. &Eacute; respons&aacute;vel pelo blog de divulga&ccedil;&atilde;o cient&iacute;fica www.pordentrodaciencia.blogspot.com, editor e criador da revista eletr&ocirc;nica de divulga&ccedil;&atilde;o cient&iacute;fica Click Ci&ecirc;ncia (www.clickciencia.ufscar.br) e colunista do Ci&ecirc;ncia-Hoje On-line desde 2006.
</p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/andre.png" width="105" height="125"><br>
                            <br>
                             <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/2131880667704281" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Andr&eacute; Cordeiro Alves dos Santos<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Possui gradua&#231;&#227;o em Ci&#234;ncias Biol&#243;gicas pela Universidade de Santo Amaro (1990), mestrado e doutorado em Ci&#234;ncias da Engenharia Ambiental pela Universidade de S&#227;o Paulo (1996 e 2003). Foi diretor presidente da Funda&#231;&#227;o Ag&#234;ncia da Bacia do Rio Sorocaba e M&#233;dio Tiet&#234;. Atualmente &#233; professor associado da Universidade Federal de S&#227;o Carlos - Campus Sorocaba. Tem experi&#234;ncia na &#225;rea de Ecologia Aqu&#225;tica e Gest&#227;o Ambiental, com &#234;nfase em Limnologia, atuando principalmente nos seguintes temas: comunidade fitoplanct&#244;nica, ecossistemas aqu&#225;ticos, limnologia, microbiologia aplica a engenharia ambiental e recursos h&#237;dricos..
</p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/debora.png" width="105" height="125"><br>
                            <br>
                             <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/1311151012002541" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra. D&eacute;bora Cristina Morato Pinto<br>Pr&oacute; Reitora de P&oacute;s Gradua&ccedil;&atilde;o</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Possui gradua&ccedil;&atilde;o em Filosofia pela Universidade de S&atilde;o Paulo (1989), institui&ccedil;&atilde;o em que defendeu mestrado em Filosofia (1994) e doutorado em Filosofia (2000), orientada pelo Professor Franklin Leopoldo e Silva. Realizou est&aacute;gio sandu&iacute;che em Paris como bolsista PDSE CAPES 1997-1998.Atualmente &eacute; professor adjunto da Universidade Federal de S&atilde;o Carlos, Departamento de Filosofia, com atua&ccedil;&atilde;o, desde 2002, no Programa de P&oacute;s-Gradua&ccedil;&atilde;o em Filosofia. Tem experi&ecirc;ncia na &aacute;rea de Filosofia, com especializa&ccedil;&atilde;o em Hist&oacute;ria da Filosofia Contempor&acirc;nea. Desenvolve trabalho tamb&eacute;m como pesquisadora na &aacute;rea de Epistemologia da Psicologia. Realizou sua pesquisa no Mestrado e no Doutorado sobre Henri Bergson, especialmente sobre os temas da percep&ccedil;&atilde;o, mem&oacute;ria e intelig&ecirc;ncia na filosofia da dura&ccedil;&atilde;o. Atualmente est&aacute; vinculada a grupos de pesquisa relacionados à Filosofia Francesa Contempor&acirc;nea e aos estudos em torno da no&ccedil;&atilde;o de Subjetividade, tanto no Diret&oacute;rio de Grupos de Pesquisa CNPQ quanto em Projeto Tem&aacute;tico FAPESP. Desenvolve pesquisa sobre a rela&ccedil;&atilde;o entre o pensamento de Bergson e outros autores afins, como Merleau-Ponty e Deleuze. Leciona disciplinas e orienta trabalhos de inicia&ccedil;&atilde;o cient&iacute;fica nos Cursos de Filosofia e de Psicologia da UFSCAR.
 </p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/fabricio.png" width="105" height="125"><br>
                            <br>
                             <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/3496410597486943" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Fabr&iacute;cio do Nascimento<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Doutor em Educa&#231;&#227;o pela Universidade Federal de S&#227;o Carlos, com Grado de Salamanca em Did&#225;tica das Ci&#234;ncias no &#226;mbito do "Programa de Doctorado en Pol&#237;ticas de Formaci&#243;n de Profesores y Profesionales de la Educaci&#243;n de Adultos", oferecido pela Universidade de Salamanca (Espanha). Atualmente &#233; Professor Adjunto na Universidade Federal de S&#227;o Carlos - Campus Sorocaba, atuando em atividades de pesquisa, ensino e extens&#227;o universit&#225;ria nas &#225;reas de Ensino das Ci&#234;ncias, Forma&#231;&#227;o e Atua&#231;&#227;o de Professores e Forma&#231;&#227;o de Gestores Educacionais. Foi professor e pesquisador na Universidade do Grande ABC (2001 a 2006) e professor visitante na Universidade de Magalh&#227;es (Chile) em 2002 e 2003, sendo respons&#225;vel pela idealiza&#231;&#227;o e pelo desenvolvimento de atividades de forma&#231;&#227;o geral e continuada de professores no &#226;mbito do "Programa de Fortalecimiento de L&#237;deres Pedag&#243;gicos para la Implementaci&#243;n de las Bases Curriculares de la Educaci&#243;n B&#225;sica e Infantil", atrav&#233;s do Minist&#233;rio de Educa&#231;&#227;o do Chile. Foi professor colaborador e pesquisador no Centro Interdisciplinar de Ci&#234;ncias da Universidade de S&#227;o Paulo (1992 a 1998), sendo co-respons&#225;vel pela coordena&#231;&#227;o do Projeto Educa&#231;&#227;o Cient&#237;fica para Docentes e pelo desenvolvimento de cursos de forma&#231;&#227;o continuada em perspectiva interdisciplinar a professores de Educa&#231;&#227;o B&#225;sica. Tem experi&#234;ncia nacional e internacional na &#225;rea de Educa&#231;&#227;o, com &#234;nfase na elabora&#231;&#227;o de propostas formativas e desenvolvimento de atividades de forma&#231;&#227;o inicial e continuada de profissionais da educa&#231;&#227;o
 </p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/fernando.png" width="105" height="125"><br>
                            <br>
                             <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/2864595160355410" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Fernando Del Fiol<br>Reitor da Uniso</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Fernando de S&aacute; Del Fiol &eacute; o Reitor da Universidade de Sorocaba. Eleito em 2009 tem mandato at&eacute; o ano de 2014. Foi Pr&oacute;-Reitor de Extens&atilde;o e Assuntos Comunit&aacute;rios da Universidade de Sorocaba (2006-2009) e Coordenador do Curso de Farm&aacute;cia (2002-2006) &Eacute; atualmente professor do Programa de Mestrado em Ci&ecirc;ncias Farmac&ecirc;uticas. &Eacute; farmac&ecirc;utico, com gradua&ccedil;&atilde;o em 1990. Fez mestrado, doutorado e p&oacute;s-doutorado em Farmacologia na Universidade Estadual de Campinas (Unicamp). Em 2009 e 2011 fez aperfei&ccedil;oamento em Doen&ccedil;as Infecciosas na Universidade de Harvard (EUA). Foi, de 2006 a 2012, membro da CTAA (Comiss&atilde;o T&eacute;cnica de Acompanhamento da Avalia&ccedil;&atilde;o) do Minist&eacute;rio da Educa&ccedil;&atilde;o, inst&acirc;ncia de acompanhando da avalia&ccedil;&atilde;o de Cursos de gradua&ccedil;&atilde;o e de Institui&ccedil;&otilde;es de Ensino Superior. &Eacute; consultor (avaliador) do Conselho Estadual de Educa&ccedil;&atilde;o (SP) e do Minist&eacute;rio da Educa&ccedil;&atilde;o (Avaliador Institucional e Avaliador de Cursos de Farm&aacute;cia). Em sua carreira acad&ecirc;mica, publicou 39 artigos em peri&oacute;dicos especializados e 55 trabalhos em anais de eventos. Apresentou trabalhos em sete congressos no exterior e 60 no Brasil. Publicou 39 cap&iacute;tulos de livros. Orientou 14 disserta&ccedil;&otilde;es de mestrado. Atua na &aacute;rea de Farmacologia, com &ecirc;nfase em Uso Racional de Antimicrobianos e Resist&ecirc;ncia Bacteriana.
 </p></td>
                </tr>
                 <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/2945447364979913" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra. Franciane Andrade de P&aacute;dua<br>Professora da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                           <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Possu&iacute; gradua&ccedil;&atilde;o em Engenharia Florestal pela Universidade Federal de Lavras (2001), mestrado em Engenharia Florestal pela Universidade Federal de Lavras (2004) e doutorado em Ci&ecirc;ncia e Tecnologia da Madeira pela Universidade Federal de Lavras (2009). Atualmente &eacute; professora do quadro permanente do curso de Engenharia Florestal da Universidade Federal de S&etilde;o Carlos- campus Sorocaba. Tem experi&ecirc;ncia na &aacute;rea de Recursos Florestais e Engenharia Florestal, com &ecirc;nfase em Energia de Biomassa Florestal e Qualidade da Madeira, atuando principalmente nos seguintes temas: carv&atilde;o vegetal, tens&otilde;es de crescimento, avalia&ccedil;&atilde;o e amostragem destutiva e n&atilde;o destrutiva da madeira. </p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/isaias.png" width="105" height="125"><br>
                            <br>
                             <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/9268170751052087" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td  valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Isaias Torres<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Possui gradua&ccedil;&atilde;o em Engenharia de Produ&ccedil;&atilde;o Materiais pela Universidade Federal de S&atilde;o Carlos - UFSCar (1998), mestrado (2001) e doutorado (2007) em Engenharia de Produ&ccedil;&atilde;o pela USFCar. Atualmente &eacute; professor adjunto da UFSCar em Sorocaba/SP. Tem experi&ecirc;ncia na &aacute;rea de Engenharia de Produ&ccedil;&atilde;o, com &ecirc;nfase em Simula&ccedil;&atilde;o e Arranjo F&iacute;sico (Layout), atuando principalmente nos seguintes temas: simula&ccedil;&atilde;o, an&aacute;lise de fluxos, ergonomia, layout e planejamento da produ&ccedil;&atilde;o.
 </p></td>
                </tr>
                 <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/ismail.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/3576937472687059" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span></div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Ismail Barra Nova de Melo<br>Vice-Diretor Presidente Honorário</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em Licenciatura Plena Em  Geografia pela Faculdade de Educa&ccedil;&atilde;o S&atilde;o Lu&iacute;s (1991), mestrado em Geografia  pela Universidade Estadual Paulista J&uacute;lio de Mesquita Filho (2003) e doutorado  em Geografia pela Universidade Estadual Paulista J&uacute;lio de Mesquita Filho  (2007). Atualmente &eacute; professor Adjunto da Universidade Federal de S&atilde;o Carlos -  UFScar e vice Coordenador do Curso de Geografia - Campus Sorocaba-SP. Tem  experi&ecirc;ncia no ensino de Geografia na Educa&ccedil;&atilde;o B&aacute;sica e no ensino Superior. &eacute; Vice-Diretor Presidente do Programa Futuro Cientista® (PFC). Participa de tr&ecirc;s grupos de  pesquisas com enfoques geogr&aacute;ficos, multidisciplinar e forma&ccedil;&atilde;o de futuros  cientistas. </p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/izidio.jpg" width="105" height="125"><br>
                            <br>
                             <span class="TextoBase"><a class="br" href="http://www.izidio.com.br/" target="_blank">Site<br>
                                    Oficial</a></span>
                            </div></td>

                    <td  valign="top" class="Chamada1"><p><strong class="Titulo3">Sr. Iz&iacute;dio de Brito Correia<br>Vereador de Sorocaba</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Nasceu em um s&#237;tio no Distrito Coronel Goulart, na cidade &#193;lvares Machado (SP), em 25 de fevereiro de 1961. Filho de Idalina de Brito Correia e Ars&#234;nio Jos&#233; Correia, Iz&#237;dio &#233; o mais velho e tem tr&#234;s irm&#227;os. &#201; casado com K&#225;tia e pai de Tiago, Maria Rosa e Ot&#225;vio. Por ser filho de meeiros, desde cedo, Iz&#237;dio ajudou os pais na lavoura, mas nunca deixou de estudar. Em 1978, fez um curso de torneiro mec&#226;nico no Senai, em Presidente Prudente. No ano seguinte, mudou-se para S&#227;o Paulo, onde trabalhou de ajudante de manuten&#231;&#227;o e de ferramenteiro. Em 1982, foi chamado para trabalhar como operador de m&#225;quina na empresa Metalac e mudou-se para Sorocaba. Logo, foi promovido para preparador de m&#225;quina. Em 1984, participou de sua primeira greve e, em 1988 participou de uma elei&#231;&#227;o de Cipa, quando foi eleito como o mais votado e, em seguida, passou a fazer parte da comiss&#227;o de f&#225;brica. No ano de 1992, Iz&#237;dio passou a fazer parte da diretoria do Sindicato dos Metal&#250;rgicos de Sorocaba e regi&#227;o e, em 1995, foi liberado da f&#225;brica. No ano de 1998 foi eleito presidente do Sindicato, que representa 36 mil trabalhadores somente em Sorocaba, por quatro vezes consecutivas. Ele abriu m&#227;o da presid&#234;ncia da entidade para dedicar-se ao mandato de vereador. Ele continua, por&#233;m, na dire&#231;&#227;o executiva do Sindicato. A voca&#231;&#227;o de Iz&#237;dio para quest&#245;es sociais o fez desenvolver um trabalho exemplar como presidente do Banco de Alimentos de Sorocaba, que arrecada e distribui mais de 30 toneladas mensais de alimentos para fam&#237;lias carentes. Nos &#250;ltimos anos, Iz&#237;dio foi tamb&#233;m coordenador regional da CUT e diretor da ONG Ceadec, que organiza cooperativas para coleta de materiais recicl&#225;veis. Foi eleito no dia 5 de outubro de 2008, na primeira vez em que se candidatou, com 3.348 votos dos sorocabanos, e reeleito em 7 de outubro de 2012 com 4.670 votos.
 </p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/luizfaria.jpg" width="105" height="105"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/2656343277991754" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td  valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Luiz Carlos de Faria<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Graduado em Engenharia Florestal pela Universidade Federal de Vi&ccedil;osa, realizou Mestrado e Doutorado na Escola Superior de Agricultura Luiz de Queiroz, Universidade de S&atilde;o Paulo. Atua na &aacute;rea de Gest&atilde;o Ambiental e de Recursos Florestais, com &ecirc;nfase em economia, pol&iacute;tica e legisla&ccedil;&atilde;o ambiental e florestal, sendo coordenador de diversos projetos e atividades sobre esses temas. Participa em representa&ccedil;&otilde;es institucionais, como no Conselho Municipal de Desenvolvimento do Meio Ambiente do Munic&iacute;pio de Sorocaba. Atualmente &eacute; Professor Adjunto na UFSCar campus Sorocaba, onde ocupa o cargo de Vice Chefe do Departamento de Ci&ecirc;ncias Ambientais. </p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/murillo.png" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/4099700446922080" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Murillo Rodrigo Petrucelli Homem<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Docente e pesquisador na Universidade Federal de S&atilde;o Carlos - UFSCar, possu&iacute; Bacharelado em Matem&aacute;tica e Mestrado em Ci&ecirc;ncia da Computa&ccedil;&atilde;o, assim como P&oacute;s-Doutoramento por esta institui&ccedil;&atilde;o de ensino superior. Doutor em Ci&ecirc;ncias (F&iacute;sica Aplicada Computacional) pelo Instituto de F&iacute;sica de S&atilde;o Carlos da Universidade de S&atilde;o Paulo - USP, Bacharel em Ci&ecirc;ncias Jur&iacute;dicas pela Faculdade de Direito de S&atilde;o Carlos e pesquisador visitante no "Electronic Systems and Signals Research Laboratory", da "Washington University in St. Louis", USA, possu&iacute; como principais linhas de interesse temas nas &aacute;reas de Processamento de Imagens e Sinais Digitais, Reconhecimento de Padr&otilde;es, &Eacute;tica e Computa&ccedil;&atilde;o Forense.
 </p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Sra. Ofir Paschoalick Castilho de Madureira<br>Chefe do Departamento de Ensino de Gradua&ccedil;&atilde;o - UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Sr. Roberval de Oliveira<br>Gerdau</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                 </tbody>
             </table><br>
             <br><br>Comit&ecirc; Cient&iacute;fico:
             <table class="tabela">
                 <tbody>
                      <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/adriana.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href=" http://lattes.cnpq.br/2707979913713089" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra. Adriana de Oliveira Delgado Silva<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Possui gradua&ccedil;&atilde;o em F&iacute;sica Bacharelado (2005), mestrado (2007) e doutorado (2012) pelo Instituto de F&iacute;sica da Universidade de S&atilde;o Paulo. Desenvolveu um ano de atividades experimentais (2009-2010) no GSI Helmholtzzentrum für Schwerionenforschung GmbH, em Darmstadt, Alemanha, com bolsa de doutorado sandu&iacute;che do conv&ecirc;nio CNPq / DAAD. Desenvolveu um projeto de p&oacute;s-doutorado no ano de 2012, no Laborat&oacute;rio de Plasmas Tecnol&oacute;gicos da Unesp - campus Sorocaba, parcialmente financiado pela Funda&ccedil;&atilde;o de Amparo à Pesquisa do Estado de S&atilde;o Paulo. Foi contratada em janeiro/2013 para o cargo de Professor Adjunto do Departamento de F&iacute;sica, Qu&iacute;mica e Matem&aacute;tica da Universidade Federal de S&atilde;o Carlos, campus Sorocaba. Atualmente &eacute; vice coordenadora do Programa de P&oacute;s-Gradua&ccedil;&atilde;o em Ci&ecirc;ncia do Materiais PPGCM da UFSCar-Sorocaba. Atua principalmente nos seguintes temas: modifica&ccedil;&atilde;o e caracteriza&ccedil;&atilde;o de pol&iacute;meros, tratamento à plasma de superf&iacute;cies, implanta&ccedil;&atilde;o i&ocirc;nica e paleometria.</p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/anacristina.jpg" width="105" height="125"><br>
                            <br>
                             <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/4361743248742740" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra. Ana Cristina de Oliveira Mereu<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> Possui gradua&ccedil;&atilde;o em Bacharelado Matem&aacute;tica pela Universidade Federal de Vi&ccedil;osa (2004), gradua&ccedil;&atilde;o em Licenciatura matem&aacute;tica pela Universidade Federal de Vi&ccedil;osa (2004) e doutorado em Matem&aacute;tica pela Universidade Estadual de Campinas (2009). Em 2009 realizou est&aacute;gio de P&oacute;s-Doutoramento no Imecc-Unicamp. Realizou est&aacute;gios acad&ecirc;micos no Departament de Matemàtiques da Universitat Autònoma de Barcelona, Espanha durante o doutoramento, no p&oacute;s-doutoramento e em 2013. Tem experi&ecirc;ncia na &aacute;rea de Matem&aacute;tica, com &ecirc;nfase em Sistemas Din&acirc;micos, atuando principalmente com os seguintes temas: conjuntos invariantes em sistemas cont&iacute;nuos e descont&iacute;nuos, &oacute;rbitas peri&oacute;dicas, &oacute;rbitas homocl&iacute;nicas e ensino de matem&aacute;tica. Atualmente &eacute; professor adjunto III da Universidade Federal de S&atilde;o Carlos, Campus de Sorocaba e est&aacute; credenciada no Programa de P&oacute;s-Gradua&ccedil;&atilde;o em Matem&aacute;tica da UFSCar-S&atilde;o Carlos. Ministra disciplinas nas licenciaturas dos cursos de F&iacute;sica, Qu&iacute;mica, Matem&aacute;tica e Biologia, car&aacute;ter interdisciplinar dos cursos, da UFSCar - Sorocaba atuando na forma&ccedil;&atilde;o de professores, bem como disciplinas matem&aacute;ticas presentes em outros cursos oferecidos na UFSCar-Sorocaba. Coordena projetos de extens&atilde;o aprovados pela PROEX que promovem a forma&ccedil;&atilde;o de professores de Matem&aacute;tica. Membro do Projeto aprovado CAPES - Programa das Licenciaturas Internacionais (PLI - 2013) em parceria com a Universidade de Coimbra (PLI - Coimbra - UFSCar - Sorocaba).</p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/antonio.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/8093480629202515" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Ant&ocirc;nio Augusto Soares<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Bacharel em F&iacute;sica pela Universidade Estadual Paulista - Unesp (1999) e Mestre em F&iacute;sica pelo Instituto de F&iacute;sica Gleb Wataghin - Unicamp (2002). Possui doutorado pelo mesmo instituto, na &aacute;rea de f&iacute;sica at&ocirc;mica (teoria). Tem experi&ecirc;ncia na &aacute;rea de F&iacute;sica At&ocirc;mica (teoria), atuando principalmente nos seguintes temas: intera&ccedil;&atilde;o radia&ccedil;&atilde;o com a mat&eacute;ria, transpar&ecirc;ncia eletromagneticamente induzida (EIT), aprisionamento coerente de popula&ccedil;&atilde;o (CPT), propaga&ccedil;&atilde;o de pulsos ultracurtos (pulsos de femtosegundos) e efeitos de ac&uacute;mulo de excita&ccedil;&atilde;o em sistemas at&ocirc;micos. </p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/aparecido.png" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/0484426340349483" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Aparecido J&uacute;nior de Menezes<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Graduou-se em Qu&iacute;mica pela Universidade Estadual de Maring&aacute; entre 1996-1999, onde fez parte do Programa Especial de Treinamento (PET) e atrav&eacute;s deste estagiou em laborat&oacute;rios de qu&iacute;mica org&acirc;nica (Produtos Naturais) e no laborat&oacute;rio de qu&iacute;mica de alimentos. Obteve o t&iacute;tulo de mestre em Qu&iacute;mica, com &ecirc;nfase em F&iacute;sico-Qu&iacute;mica, pela Universidade Federal de S&atilde;o Carlos em 2002, atuando na &aacute;rea de F&iacute;sico-Qu&iacute;mica de Pol&iacute;meros. Concluiu doutorado em Ci&ecirc;ncias, &aacute;rea de concentra&ccedil;&atilde;o F&iacute;sico-Qu&iacute;mica, no Instituto de Qu&iacute;mica de S&atilde;o Carlos - IQSC/USP, no desenvolvimento de novos materiais macromoleculares provenientes de fontes renov&aacute;veis. Entre 2007-2008 realizou est&aacute;gio de p&oacute;s-doutoramento no grupo de pesquisa "Transformation-Biomat&eacute;riaux-Emballage" EFPG-INPG/Grenoble-Fran&ccedil;a, no processo de extra&ccedil;&atilde;o e modifica&ccedil;&atilde;o qu&iacute;mica de nanocristais de polissascar&iacute;deos. No segundo semestre de 2008 est&aacute;giou em n&iacute;vel de p&oacute;s doutoramento no grupo de Óptica do Instituto de F&iacute;sica de S&atilde;o Carlos/USP, investigando a influ&ecirc;ncia da &aacute;gua confinada no fen&ocirc;meno de ades&atilde;o entre fibras de celulose. Atualmente &eacute; professor Adjunto da Universidade Federal de S&atilde;o Carlos - UFSCar, campus Sorocaba. </p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/fernanda.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/6390725197649567" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra. Fernanda Keila Marinho da Silva<br>Professora da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em Ci&ecirc;ncias Biol&oacute;gicas Licenciatura pela Universidade Estadual de Campinas (1998), mestrado em Geoci&ecirc;ncias pela Universidade Estadual de Campinas (2002) e doutorado em Ensino e Hist&oacute;ria de Ci&ecirc;ncias da Terra pela Universidade Estadual de Campinas (2009). Tem experi&ecirc;ncia na &aacute;rea de Educa&ccedil;&atilde;o, com &ecirc;nfase na Forma&ccedil;&atilde;o Inicial e Continuada de Professores, atuando principalmente nos seguintes temas: ensino de ci&ecirc;ncias, ensino de biologia, ensino de f&iacute;sica, educa&ccedil;&atilde;o ambiental, imagem e educa&ccedil;&atilde;o, investiga&ccedil;&atilde;o em sala de aula, propostas interdisciplinares e forma&ccedil;&atilde;o de professores. Comp&otilde;e a equipe do Projeto de Pesquisa Anhumas na Escola, apoiado pela FAPESP e Petrobr&aacute;s Ambiental e atua como professora do Programa de P&oacute;s Gradua&ccedil;&atilde;o Multiunidades em Ensino de Ci&ecirc;ncias e Matem&aacute;tica. É professora do Departamento de F&iacute;sica, Qu&iacute;mica e Matem&aacute;tica da UFSCar - Sorocaba. Coordenou projeto de pesquisa apoiado pela FAPESP (2012/06170-2) intitulado: " Pesquisa do professor e pesquisa colaborativa na forma&ccedil;&atilde;o continuada com temas geocient&iacute;ficos" (2012-2014). Atualmente, coordena projeto de pesquisa que investiga o desenvolvimento profissional docente de futuros professores de F&iacute;sica (2014-atual) e coordena tamb&eacute;m, junto a outros pesquisadores, sub projeto interdisciplinar do PIBID (2014-atual).  </p></td>
                </tr>
                 
                 
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/hylio.png" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/1315602045624096" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Hylio Lagan&aacute; Fernandes<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Prof. Dr. Hylio Lagan&aacute; Fernandes &eacute; licenciado em Ciencias Biol&oacute;gicas pela USP S&atilde;o Paulo (1989), mestre em Psicologia (Psicologia Experimental) pela USP S&atilde;o Paulo (1997) e doutor em Educa&ccedil;&atilde;o pela Universidade Estadual de Campinas (2005). Atualmente &eacute; professor adjunto IV do departamento de Ciencias Humanas e Educa&ccedil;&atilde;o (DCHE) da Universidade Federal de S&atilde;o Carlos; docente do Programa de p&oacute;s-gradua&ccedil;&atilde;o de Mestrado em Educa&ccedil;&atilde;o (PPGEd - UFSCar-Sorocaba), l&iacute;der do grupo de pesquisa Imagens em A&ccedil;&atilde;o e coordenador do programa de extens&atilde;o Forma&ccedil;&atilde;o e aperfei&ccedil;oamento de Educadores . Tem experi&ecirc;ncia na &aacute;rea de Educa&ccedil;&atilde;o, com &ecirc;nfase em Forma&ccedil;&atilde;o de Professores, atuando principalmente em forma&ccedil;&atilde;o docente e recursos did&aacute;ticos. Al&eacute;m do ensino formal, dedica-se a atividades de extens&atilde;o e divulga&ccedil;&atilde;o cient&iacute;fica. </p></td>
                </tr>
                 
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/kelly.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/3844965971290638" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra. Kelly Cristina Tonello<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em Engenharia Florestal pela Universidade Federal de Vi&ccedil;osa (2003) e mestrado em Ci&ecirc;ncia Florestal pela Universidade Federal de Vi&ccedil;osa (2005) e doutorado na Universidade Estadual de Campinas (UNICAMP). É docente da Universidade Federal de S&atilde;o Carlos/ Campus Sorocaba-SP e Pesquisadora Colaboradora da Faculdade de Engenharia Agr&iacute;cola (FEAGRI) da UNICAMP. Atua nas linhas de hidrologia em ecossistemas florestais, conserva&ccedil;&atilde;o de nascentes, manejo de bacias hidrogr&aacute;ficas, recupera&ccedil;&atilde;o de &aacute;reas degradadas, ecofisiologia florestal e pagamentos por servi&ccedil;os ambientais. </p></td>
                </tr>
               
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/marystela.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/4714185516263478" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra. Marystela Ferreira<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em Bacharelado em Qu&iacute;mica pela Universidade de S&atilde;o Paulo (1993) , gradua&ccedil;&atilde;o em Licenciatura em Qu&iacute;mica pela Universidade de S&atilde;o Paulo (1995) , mestrado em Qu&iacute;mica (F&iacute;sico-Qu&iacute;mica) pela Universidade de S&atilde;o Paulo (1996) , doutorado em Qu&iacute;mica (F&iacute;sico-Qu&iacute;mica) pela Universidade de S&atilde;o Paulo (2000) . Possui tr&ecirc;s anos de p&oacute;s-doutorado pela Universidade de S&atilde;o Paulo (2003) , financiado pela Fapesp, quatro meses de p&oacute;s-doutorado pelo Centro Nacional de Pesquisa e Desenvolvimento e Instrumenta&ccedil;&atilde;o Agropecu&aacute;ria CNPDIA-EMBRAPA(2004) tamb&eacute;m financiado pela Fapesp e p&oacute;s-doutorado de quatro meses pelo Institut Charles Sadron (2005), financiado pelo CNRS-Fran&ccedil;a. Foi bolsista Jovem Pesquisador da Fapesp na Universidade Estadual Paulista J&uacute;lio de Mesquita Filho (UNESP/PP). Atualmente &eacute; docente da Universidade Federal de S&atilde;o Carlos (UFSCar), campus Sorocaba. Credenciada junto ao programa de p&oacute;s gradua&ccedil;&atilde;o institucional da Unesp em Ci&ecirc;ncia e Tecnologia de Materiais (POSMAT) e no programa de Ci&ecirc;ncia dos Materiais (PPGCM) da UFSCar/campus Sorocaba. Tem experi&ecirc;ncia na &aacute;rea de Qu&iacute;mica , com &ecirc;nfase em F&iacute;sico-Qu&iacute;mica. Atuando principalmente nos seguintes temas: filmes finos, sensores e biosenssores, compostos fen&oacute;licos, e detec&ccedil;&atilde;o por m&eacute;todos eletroqu&iacute;cos. A autora possui cerca de 60 artigos em per&iacute;odicos nacionais e internacionais. </p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/sergio.png" width="105" height="125"><br>
                            <br>
                           <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/5443100596356812" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. S&eacute;rgio Dias Campos<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Possui gradua&#231;&#227;o em Licenciatura em Matem&#225;tica pela Universidade Estadual de Campinas(2000), mestrado em F&#237;sica pela Universidade Estadual de Campinas(2003), doutorado em F&#237;sica pela Universidade Estadual de Campinas(2007) e p&#243;s-doutorado pelo Funda&#231;&#227;o Instituto de F&#237;sica Te&#243;rica(2008). Atualmente &#233; Professor Adjunto 4 da Universidade Federal de S&#227;o Carlos, Revisor de peri&#243;dico da Revista Brasileira de Assuntos Pedag&#243;gicos, Revisor de projeto de fomento do Funda&#231;&#227;o de Amparo a Pesquisa do Estado do Amazonas, Revisor de peri&#243;dico da American Journal of Astronomy and Astrophysics e Revisor de peri&#243;dico da International Journal of High Energy Physics. Tem experi&#234;ncia na &#225;rea de F&#237;sica, com &#234;nfase em Fenomenologia de Part&#237;culas Elementares. Atuando principalmente nos seguintes temas:F&#237;sica de Altas Energias, Se&#231;&#227;o de Choque Diferencial, Rela&#231;&#245;es de Dispers&#227;o. </p></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/tersio.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href=" http://lattes.cnpq.br/0705292304279277" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>

                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. T&eacute;rsio Guilherme de Souza Cruz<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em F&iacute;sica pela Universidade Estadual de Londrina (1995), mestrado em F&iacute;sica pela Universidade Estadual de Campinas (1998) e doutorado em F&iacute;sica pela Universidade Estadual de Campinas (2002). Foi professor do CESET ( hoje Faculdade de Tecnologia da Unicamp) da Unicamp de 2002 a 2009. Atualmente &eacute; professor adjunto da Universidade Federal de S&atilde;o Carlos/campus Sorocaba/Departamento de F&iacute;sica Qu&iacute;mica e Matem&aacute;tica. Tem experi&ecirc;ncia na &aacute;rea de F&iacute;sica, com &ecirc;nfase em Mat&eacute;ria Condensada, atuando principalmente nos seguintes temas: filmes finos, eletroqu&iacute;mica, c&eacute;lulas solares. Na &aacute;rea de ensino e forma&ccedil;&atilde;o de professores, ministra disciplinas para os cursos de licenciatura em F&iacute;sica, Qu&iacute;mica e Matem&aacute;tica da Ufscar e orienta no programa PIBID.  </p></td>
                </tr>
                 </tbody>
             </table><br>
        </div>
        <div id="subEquipe4" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-user-plus fa-2x"></i> <br>Coordenadores<br><br>
            Em breve uma nova equipe de Coordenadores dos Eventos e Atividades!<br><br>
           <!-- <br><br><br>Administrativos:
             <table class="tabela">
                 <tbody>

                 </tbody>
             </table> -->
                           <!--         <br><br>Executivos
             <table class="tabela">
                 <tbody>
                     
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/paula.jpg" width="113"><br>
                            <br>
                            </div>
                    </td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Paula Soares da Costa<br>Coordenadora do Concurso de Contos</strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em Letras Portugu&ecirc;s e Ingl&ecirc;s Respectivas Literaturas pela Universidade de Sorocaba (2012), graduanda em Pedagogia pela Universidade Federal de S&atilde;o Carlos (UFSCar), Campus Sorocaba (2015). Foi bolsista PIBID no per&iacute;odo de 2009 à 2012. J&aacute; trabalhou como mediadora cultura no SESC - Sorocaba (2013), professora na rede estadual Ensino fundamental e M&eacute;dio em Sorocaba (2014), atualmente atua como professora do ensino fundamental na rede municipal no município de Iper&oacute; (2015) e Coordenadora do Concurso de Contos do Programa Futuro Cientista (PFC).</p></td>
                    </td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/nathalia.jpg" width="105" height="125"><br>
                            <br></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Nath&aacute;lia Gabriela Sousa</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Coordenadora da Maratona do Conhecimento</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduanda do curso de Licenciatura Plena em F&iacute;sica na UFSCar Sorocaba. Atua como Coordenadora da Maratona do Conhecimento do Programa Futuro Cientista® (PFC), Vice Presidente da Atl&eacute;tica DFQM (Departamento de F&iacute;sica, Qu&iacute;mica e Matem&aacute;tica), Vice Diretora de Esportes na Atl&eacute;tica Geral da UFSCar Sorocaba, Diretora de Esportes e Eventos no CA Max Planck.</p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/iasmin.jpg" width="105" height="125"><br>
                           <br><span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/5401314540692565" target="_blank">Curr&iacute;culo<br>
                                Lattes</a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Iasmin Oliveira Gomes</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Coordenadora de A&ccedil;&otilde;es Sociais</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduanda em Ciências Biológicas pela Universidade Federal de São Carlos - campus Sorocaba. Atua como Coordenadora de A&ccedil;&otilde;es Sociais do Programa Futuro Cientista (PFC)</p></td>
                </tr>
                 </tbody>
             </table>-->
                                   <br>
        </div>
        <div id="subEquipe5" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-street-view fa-2x"></i><br> Supervisores Educacionais e Coordenadores Locais<br>
                        <br><br>Supervisores Educacionais:
                        <table class="tabela">
                            <tbody>
                                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/rafael.jpg" width="105" height="125"><br>
                            <br><span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/0191932527256862" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Prof. Dr. Rafael Henrique Longaresi</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Supervisor Educacional</strong></span></p>
                        <p align="justify" class="TextoBase2">Possui gradua&#231;&#227;o em Fisica Bacharelado pela Universidade Federal de S&#227;o Carlos (2006), mestrado em Ci&#234;ncia e Engenharia de Materiais pelo Instituto de F&#237;sica de S&#227;o Carlos (2008) e doutorado em Ciencias e Engenharia de Materiais pelo Instituto de F&#237;sica de S&#227;o Carlos (2012). Atualmente &#233; pesquisador do Instituto de F&#237;sica e Qu&#237;mica de S&#227;o Carlos e professor na Universidade Federal de S&#227;o Carlos campus Lagoa do Sino. Possui experi&#234;ncia na &#225;rea de F&#237;sica, com &#234;nfase em F&#237;sica da Mat&#233;ria Condensada, atuando principalmente nos seguintes temas: soft lithography, copolimeros em bloco, nanoestruturas ordenadas, fotofisica de polimeros conjugados e eletronica organica. Atua como Supervisor Educacional do Programa Futuro Cientista, respons&#225;vel pela Escola Municipal Oscar Kurtz Camargo na cidade de Cap&#227;o Bonito.</p></td>
                </tr>
                            </tbody>
                        </table><br><br> Coordenadores Locais:<br><br> Em breve uma nova equipe de Coordenadores Locais!<br><br>
            <!-- <table class="tabela">
                 <tbody>
                     
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cls/alyson.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Alyson Bruno Pinheiro</strong></span><strong><br>Cap&atilde;o Bonito/SP<br>E.M Oscar Kurtz Camargo<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Graduado em Administra&ccedil;&atilde;o (Bacharelado) pela Universidade de Santo Amaro (UNISA), Graduado em Silvicultura (Tecn&oacute;logo) pela Faculdade de Tecnologia do Estado de S&atilde;o Paulo (FATEC) e Graduado em Biologia (Licenciatura Plena) pela Faculdade Paulista S&atilde;o Jos&eacute;. Atualmente &eacute; Professor de Educa&ccedil;&atilde;o B&aacute;sica II nas escolas municipais Oscar Kurtz Camargo e Profa Maria da Concei&ccedil;&atilde;o Lucas Mieldazis pertencentes ao munic&iacute;pio de Cap&atilde;o Bonito/SP, atuando na &aacute;rea/disciplina de Ci&ecirc;ncias. Coordenador Local do Projeto Futuro Cientista em Parceria com a Universidade Federal de S&atilde;o Carlos (UFSCar), na escola conveniada com o projeto (E. M. Oscar Kurtz Camargo), para o m&oacute;dulo Ensino Fundamental II, sendo respons&aacute;vel por arregimentar colaboradores e formar uma equipe de trabalho para dividir tarefas na escola, divulgar o evento na escola dentre os participantes do PFC, realizar a coordena&ccedil;&atilde;o das inscri&ccedil;&otilde;es e o envio dos trabalhos dos estudantes e dar assist&ecirc;ncia did&aacute;tica aos mesmos.</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cls/gislaine.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Gislaine da Silma Meira</strong></span><strong><br>Iper&oacute;/SP<br>E.M Roque Ayres de Oliveira<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Formada em Magist&eacute;rio ( 1992 ) pela  EM. GET&uacute;LIO VARGAS, Pedagogia ( 2002 ) pela UNISO – Sorocaba, Psicopedagogia ( 2005 )  pela FACINTER – Votorantim e Educa&ccedil;&atilde;o especial ( 2009 ) APAE - Sorocaba. J&aacute; trabalhou como Professora de Educa&ccedil;&atilde;o Infantil - 1988 à 2007 - Sorocaba; Professora de Ensino Fundamental l - 2005 à 2007 - Sorocaba e Votorantim; Professora de Educa&ccedil;&atilde;o Especial em Educa&ccedil;&atilde;o Infantil - estimula&ccedil;&atilde;o - 2008 à 2009 - Iper&oacute;; Professora de Educa&ccedil;&atilde;o Especial em Ensino Fundamental - alfabetiza&ccedil;&atilde;o - 2008 à 2009 – Iper&oacute;. Atualmente &eacute; Coordenadora Pedag&oacute;gica da Educa&ccedil;&atilde;o Infantil ao Ensino Fundamental ll – Iper&oacute; e Coordenadora Local do Programa Futuro Cientista na Escola Municipal Roque Ayres de Oliveira na cidade de Iper&oacute;.</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cls/gustavo.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Gustavo Luiz Rossetto Pescatori</strong></span><strong><br>Anhembi/SP<br>E.M Govermnador M&aacute;rio Covas e E.M Profª Olinda de F&aacute;tima Cassimiro Soares<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Possui forma&ccedil;&atilde;o em T&eacute;cnico em Agropecu&aacute;ria pela ETEC Dona Sebastiana de Barros, S&atilde;o Manuel-SP (1997), gradua&ccedil;&atilde;o em Ci&ecirc;ncias Biol&oacute;gicas (Licenciatura e Bacharelado) pela Universidade Santa Cec&iacute;lia (UNISANTA), Santos-SP (2005) e Mestrado em Zoologia pela Universidade Estadual Paulista (UNESP), Botucatu-SP (2008). Atua desde 2010 como professor efetivo de Ci&ecirc;ncias do 6º ao 9º do Ensino Fundamental no munic&iacute;pio de Anhembi, SP e tamb&eacute;m como coordenador local do Programa Futuro Cientista desde 2014.</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cls/lucilene.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Lucilene Neres dos Santos</strong></span><strong><br>Iper&oacute;/SP<br>E.M Dona Elisa Moreira dos Santos<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Graduada em Ci&ecirc;ncias F&iacute;sicas e Biol&oacute;gicas - Licenciatura Plena, pela Universidade Metodista de Piracicaba - UNIMEP ( 2002 à 2005). Cursando  gradua&ccedil;&atilde;o em Pedagogia Plena pela Universidade de Nova Igua&ccedil;u - (semi-presencial);  P&oacute;s gradua&ccedil;&atilde;o (lato sensu) em Bioecologia da Conserva&ccedil;&atilde;o pela Unimep - Incompleto; Curso de Extens&atilde;o em Matem&aacute;tica para Ensino de Educa&ccedil;&atilde;o Infantil na UNICAMP; P&oacute;s Gradua&ccedil;&atilde;o (lato sensu) em Direito Educacional pela Nobre Educacional; Cursando Tecnologia da Aprendizagem p&oacute;s gradua&ccedil;&atilde;o pelo SENAC - EAD on-line. Atua como Professora de Ensino Fundamental na rede municipal de Educa&ccedil;&atilde;o em  Iper&oacute;, como professora titular de ensino de Ci&ecirc;ncias (Fundamental II - 6 ao 9 ano) e Coordenadora Local do Programa Futuro Cientista na Escola Municipal Dona Elisa Moreira dos Santos em Iper&oacute;.</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cls/mauricio.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Maur&iacute;cio Ap. de Oliveira</strong></span><strong><br>S&atilde;o Roque/SP<br>E.M Maria Aparecida de Oliveira Ribeiro<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Possui gradua&ccedil;&atilde;o em licenciatura plena em Biologia (Ci&ecirc;ncias biol&oacute;gicas) pelo Centro Universit&aacute;rio Nossa Senhora do Patroc&iacute;nio (CEUNSP), Campus Itu (2007). Atuou como Coach no projeto Garotos Organizados em Trabalho Ambiental (GOTA) pela Prefeitura da Est&acirc;ncia tur&iacute;stica de S&atilde;o Roque — 2009; Atua como professor de ci&ecirc;ncias na escola EMEIF Professor Joaquim da Silveira Santos, desde o 6°, 7°, 8° e 9° anos; e tamb&eacute;m na escola EMEF Professora Maria Aparecida de Oliveira Ribeiro. Atua como Coordenador Local do PFC na escola EMEIF Professora Maria Aparecida Oliveira Ribeiro na cidade de S&atilde;o Roque.</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cls/valdete.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Valdete Cordeiro Ramos</strong></span><strong><br>Ces&aacute;rio Lange/SP<br>E.M Governador Andr&eacute; Franco Montoro<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Possui gradua&ccedil;&atilde;o em geografia (Licenciatura) pela Faculdade de Ci&ecirc;ncias e Letras Teresa Martin (1986), cursou Pedagogia na Faculdade de Filosofia, Ci&ecirc;ncias e Letras de Botucatu (1993) e especializa&ccedil;&atilde;o em Pr&aacute;ticas de Ensino de Geografia pela Universidade de S&atilde;o Paulo ( 1996 ).  No per&iacute;odo de 21.08 a 04/12/04 cursou  Metodologias de Ensino de Disciplinas na &aacute;rea de Ci&ecirc;ncias Humanas e suas Tecnologias do Ensino M&eacute;dio: Geografia e Hist&oacute;ria pela Universidade de S&atilde;o Paulo. Participou do 12º Semin&aacute;rio Internacional de Educa&ccedil;&atilde;o em 2010 – Educa&ccedil;&atilde;o e Disciplina em Sorocaba (2010). Possui curso de extens&atilde;o em Espanhol para professores pela Universidade de Bras&iacute;lia (2013). P&oacute;s – graduada em Gest&atilde;o do Trabalho Pedag&oacute;gico – Orienta&ccedil;&atilde;o Educacional pelo Centro Universit&aacute;rio Internacional Uninter (2013) e atualmente est&aacute; cursando  pela UFScar – Universidade de S&atilde;o Carlos p&oacute;s-gradua&ccedil;&atilde;o em coordena&ccedil;&atilde;o pedag&oacute;gica. Professora aposentada pela Secretaria da Educa&ccedil;&atilde;o de S&atilde;o Paulo e atualmente exerce a fun&ccedil;&atilde;o de coordenadora pedag&oacute;gica na Secretaria da Educa&ccedil;&atilde;o do municipio de Ces&aacute;rio Lange – SP e Coordenadora Local do Programa Futuro Cientista na Escola Municipal Governador Andr&eacute; Franco Montoro na cidade de Ces&aacute;rio Lange.</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cls/miguel.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                        <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Miguel Medeiros</strong></span><strong><br>Pilar do Sul/SP<br>E.E Maria Aparecida Rechinelli Modanezzi <br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Possui Mestrado Profissionalizante pela Universidade Federal de S&atilde;o Carlos - UFSCar (2013). Gradua&ccedil;&atilde;o em Matem&aacute;tica pela Universidade Estadual Paulista J&uacute;lio de Mesquita Filho - UNESP (2002). Licenciatura em Pedagogia pela Universidade Nove de Julho (2009) e P&oacute;s Gradua&ccedil;&atilde;o em Gest&atilde;o Escolar pela UNIARARAS (2007). &Eacute; Professor Titular de Cargo de Matem&aacute;tica na Rede Estadual de Ensino de S&atilde;o Paulo, ministrando aulas para o Ensino Fundamental e M&eacute;dio. Atua como professor de &Aacute;lgebra e Geometria na Escola Anglo Pilar do Sul.</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cls/denise.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                        <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Denise Depaule Fonseca Molitor</strong></span><strong><br>S&atilde;o Miguel Arcanjo/SP<br>E.M Joaquim Nunes de Oliveira <br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">Graduada no curso de Matem&aacute;tica e Ci&ecirc;ncias F&iacute;sicas e Biol&oacute;gicas na Faculdade de Filosofia, Ci&ecirc;ncias e  Letras de Itapetininga – SP , P&oacute;s-Gradua&ccedil;&atilde;o em Gest&atilde;o Escolar pela Faculdade Bandeirantes (FABAN), sou professora do Ensino Fundamental II e M&eacute;dio desde 1996.</span><strong><br>
                            </strong></div></td>
                </tr>
                 </tbody>
             </table><br>-->
        </div>
        <div id="subEquipe6"  class="subEquipe" style="display: none;"><br>
            <i class="fa fa-users fa-2x"></i> <br>Nucleadores e <br> Equipe T&eacute;cnica<br>
            <br><br><br>Nucleadores e Auxiliares:
             <table class="tabela">
                 <tbody>
                      <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/Andrielli.jpg" width="113"><br>
                        <br>
                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Andrielli Janu&aacute;rio <br> Nucleadora</strong><br>
                    <p align="justify" class="TextoBase2">Participante do Programa Futuro Cientista® (PFC) em 2012 como aluna da escola estadual Jardim Daniel David Haddad.<br>
                        Graduanda no curso de Bacharelado em Medicina Veterin&aacute;ria na Universidade de Sorocaba (UNISO) Cidade Universit&aacute;ria. 
                        Em 2014 atuou como Nucleadora em tr&ecirc;s escolas estaduais de Salto de Pirapora, hoje atua como Nucleadora. </p></td>

                </td>
            </tr>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/Eliezer.jpg" width="113"><br>
                        <br>
                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Eliezer Jesus de Lorena Paes Leite<br>Nucleador</strong><br>
                    <p align="justify" class="TextoBase2">Graduando no Curso de Ci&ecirc;ncia da Computa&ccedil;&atilde;o pela Universidade de Sorocaba(UNISO). Atua como Nucleador do Programa Futuro Cientista® (PFC).</p></td>
                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/Yoshimitsu.jpg" width="113"><br> 
                        <br><span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/5851639236956099" target="_blank">Curr&iacute;culo<br>
                                Lattes</a></span>
                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Yoshimitsu Watari<br>Auxiliar Administrativo</strong><br>
                    <p align="justify" class="TextoBase2">Graduando no curso de Engenharia Civil pela Universidade de Sorocaba (UNISO) Cidade Universit&aacute;ria.
                        Participou do Programa Futuro Cientista® (PFC) em 2010, como Inicia&ccedil;&atilde;o Cient&iacute;fica J&uacute;nior bolsista do CNPq na &aacute;rea da Matem&aacute;tica.
                        Em 2014 atuou como Nucleador do PFC em uma escola de Sorocaba. Hoje atua como Auxiliar Administrativo do PFC.</p></td>

                </td>
            </tr>
            
                 </tbody>
             </table><br><!--
                         <br><br>Comiss&atilde;o Julgadora do Concurso de Contos:<br>
    <table class="tabela">
        <tbody>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/marilia.jpg" width="113"><br>
                        <br>
                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Mar&iacute;lia Birochi Sarago&ccedil;a</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda no curso de Licenciatura Plena de Pedagogia da Universidade Federal de S&atilde;o Carlos – Campus Sorocaba. Atua como estagi&aacute;ria no Col&eacute;gio Uirapuru, professora de dan&ccedil;a na Escola Educativa de Dan&ccedil;a Isadora Duncan. </p></td>

                </td>
            </tr>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/camila.jpg" width="113"><br>
                        <br>
                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Camila Seixas</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda do curso de Turismo na UFSCar, Sorocaba. Atualmente faz inicia&ccedil;&atilde;o cient&iacute;fica pelo PIBIC na &aacute;rea de metodologia cient&iacute;fica no Turismo. Tamb&eacute;m atua como diretora acad&ecirc;mica no centro acad&ecirc;mico de Turismo e como presidente do Diret&oacute;rio Acad&ecirc;mico da UFSCar (representa&ccedil;&atilde;o dos estudantes da UFSCar em Sorocaba), &eacute; representante discente do CoACE (Conselho de Assuntos Comunit&aacute;rios e Estudantis) e do CoG (Conselho de Gradua&ccedil;&atilde;o). Em 2014 foi Rondonista no Piaui, como um projeto de extens&atilde;o do Minist&eacute;rio da Defesa, governo federal. Em 2013 foi banca do concurso de reda&ccedil;&atilde;o parceria caixa econ&ocirc;mica federal e UFSCar.</p></td>
                </td>
            </tr>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/carlos.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Carlos Vinicius Antunes Rufini</strong><br>
                    <p align="justify" class="TextoBase2">Formado em Jornalismo pela Universidade de Sorocaba e atualmente est&aacute; no 2º ano de Licenciatura em Geografia pela UFSCar – Campus Sorocaba. &eacute; membro do Centro Acad&ecirc;mico de Geografia e do F&oacute;rum Popular do Plano Diretor de Sorocaba. Tem interesse nas &aacute;reas de Geografia Urbana e no Direito à Cidade.</p></td>

                </td>
            </tr>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/caliope.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Caique Corcovia</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda de Pedagogia na UFSCar (campus Sorocaba), onde se engaja nas atividades do Coletivo Mandala. Participou da a&ccedil;&atilde;o solid&aacute;ria de doa&ccedil;&atilde;o de cabelos no seu ingresso à Universidade, doando todo seu cabelo (2014). &eacute; ativista das causas LGBT e transfeministas; e tamb&eacute;m uma das pessoas idealizadoras e organizadoras da Semana Trans - Formando Vis&otilde;es (visite a p&aacute;gina no Facebook e canal no YouTube).</p></td>

                </td>
            </tr>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/luiz.jpg" width="113"><br> 

                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Luiz Renato Ferreira Gon&ccedil;alvez</strong><br>
                    <p align="justify" class="TextoBase2">Graduando do quinto semestre do curso Bacharelado em Turismo, DGTH - Departamento de Geografia, Turismo e Humanidades, UFSCar - campus Sorocaba. Estudante nos grupos de pesquisa do CNPq (R)exist&ecirc;ncias e metaquest&otilde;es dos marcadores de diferen&ccedil;a da Universidade Estadual de Londrina e N&uacute;cleo de Estudos G&ecirc;nero e Diversidade Sexual da Universidade Federal de S&atilde;o Carlos. Realiza pesquisas relacionadas às quest&otilde;es de g&ecirc;nero e diversidade sexual no turismo. Possui qualifica&ccedil;&atilde;o internacional em Turismo e Hospitalidade</p></td>

                </td>
            </tr>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/ellen.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">&Eacute;llen Cristina Santos da Silveira</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda do &uacute;ltimo ano no curso de Licenciatura Plena em Ci&ecirc;ncias Biol&oacute;gicas pela Universidade Federal de S&atilde;o Carlos (UFSCar). Professora de Ci&ecirc;ncias e de Projeto de Apoio à Aprendizagem em escola estadual em Sorocaba. Formada como T&eacute;cnica em Seguran&ccedil;a do Trabalho, pela ETEC Fernando Prestes, Gestora Ambiental Industrial, pela Universidade de Sorocaba (UNISO).</p></td>

                </td>
            </tr>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/carolina.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Carolina Jacobini de Lima</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda do curso de Licenciatura em Ci&ecirc;ncias Biol&oacute;gicas Noturno da UFSCar Sorocaba. Estagiou nos setores de Educa&ccedil;&atilde;o Ambiental do Zool&oacute;gico Municipal "Quinzinho de Barros" e da Funda&ccedil;&atilde;o Parque Zool&oacute;gico de S&atilde;o Paulo, e no projeto Resid&ecirc;ncia Educacional, da Secretaria de Educa&ccedil;&atilde;o do Estado. Participou de projetos de cultura como o M&uacute;sica na Cidade, dentro do campus da UFSCar, e do Projeto Cinese, em parceria com a Secretaria de Cultura de Votorantim. Colaboradora direta do Diret&oacute;rio Central dos Estudantes e Diret&oacute;rio Acad&ecirc;mico da UFSCar, e tamb&eacute;m &eacute; ex integrante da Associa&ccedil;&atilde;o Atl&eacute;tica Acad&ecirc;mica Lobo Guar&aacute;.  Atualmente &eacute; bolsista do Programa Institucional de Bolsas de Inicia&ccedil;&atilde;o à Doc&ecirc;ncia- PIBID e integra a Chapa Ubuntu nas elei&ccedil;&otilde;es do Diret&oacute;rio Central dos Estudantes.</p></td>

                </td>
            </tr>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/fernando.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Fernando Henrique Cardoso Abreu</strong><br>
                    <p align="justify" class="TextoBase2">Graduando do curso de Licenciatura Plena em Ci&ecirc;ncias Biol&oacute;gicas pela Universidade Federal de S&atilde;o Carlos (UFSCar), Campus Sorocaba (2012). Faz Inicia&ccedil;&atilde;o Cient&iacute;fica na &aacute;rea de Ecotoxicologia em pele de anf&iacute;bios expostos a LAS (Dodecilbenzeno Sulfonato de s&oacute;dio, um detergente), Clomazone (Herbicida) e Batracoquitr&iacute;dio (Fungo), orientado pelo Prof. Dr. F&aacute;bio Abdalla. Trabalhou no Projeto de Extens&atilde;o M&iacute;dia & Educa&ccedil;&atilde;o (2013), atuando na Escola Jardim Primavera, Salto de Pirapora (Curta na Quinta, sele&ccedil;&atilde;o e debate de curtas junto aos estudantes), coordenado pela Profa Dra. Maria Carla Corrochano. Atua no Projeto de Extens&atilde;o Mini Escola de Evolu&ccedil;&atilde;o, coordenado pela Profa. Dra. Mirian Liza Alves Foranccelli Pacheco. Representa os Estudantes do curso Licenciatura em Biologia no Conselho de Curso (2012 a 2015) e constr&oacute;i o Diret&oacute;rio Acad&ecirc;mico (2014/2015) e o Centro Acad&ecirc;mico Lobo Guar&aacute;, da Biologia (2013, 2014, 2015).</p></td>

                </td>
            </tr>
                </tbody></table>
                     <br><br>Comiss&atilde;o Julgadora da Maratona do Conhecimento:<br>
    <table class="tabela">
        <tbody>
            <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/isabel.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Isabel Cristina dos Santos Ferreira</strong><br>
                    <p align="justify" class="TextoBase2">Estudante do segundo ano do curso de Licenciatura plena em F&iacute;sica da Universidade Federal

de S&atilde;o Carlos - Campus Sorocaba. Membro do subprojeto de F&iacute;sica no PIBID UFSCar 

Sorocaba.</p></td>

                </td>
            </tr>
                        <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/driele.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Driele Cristina de Oliveira</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda de Licenciatura em Qu&iacute;mica pela UFSCar

Campus Sorocaba. Interc&acirc;mbio de 1 ano como bolsista da Capes pelo PLI - Projeto 

Licenciatura Internacional em Portugal. 

Presidente do Centro Acad&ecirc;mico de Qu&iacute;mica, C.A. Marie Curie.

Diretoria Financeira e Eventos na Atl&eacute;tica do Departamento de F&iacute;sica, Qu&iacute;mica e Matem&aacute;tica

Membro do Grupo de Itiner&acirc;ncia do Pibid UFSCar Sorocaba.</p></td>

                </td>
            </tr>
                        <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/rafael.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Rafael Romeiro Doin</strong><br>
                    <p align="justify" class="TextoBase2">Cursando o quinto semestre de Licenciatura em Pedagogia na

UFSCar, Campus Sorocaba, representante de sala, bolsista no programa PIBID e da 

prefeitura de Sorocaba, atualmente faz parte do grupo GIAPE - Grupo de Pesquisa sobre 

Inf&acirc;ncia, Arte, Pr&aacute;ticas Educativas e Psicossociais.</p></td>

                </td>
            </tr>
                        <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/isabelv.jpg" width="113"><br> 

                    </div>
                </td>

                <td  valign="top" class="Chamada1"><p><strong class="Titulo3">Isabel V. Mas&iacute;as</strong><br>
                    <p align="justify" class="TextoBase2">Estudante de Geografia, atuou em diversas &aacute;reas, como por exemplo, a

oficina do saber da prefeitura de Sorocaba.

Sendo membro do Centro Acad&ecirc;mico de seu curso, desenvolve atividades para o corpo 

discente.  Prestes a conseguir uma inicia&ccedil;&atilde;o cient&iacute;fica, j&aacute; trabalhou em um projeto volunt&aacute;rio 

no ICMBIO.</p></td>

                </td>
            </tr>
                        <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/giovanna.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Giovanna Verrone</strong><br>
                    <p align="justify" class="TextoBase2">Est&aacute; no terceiro ano do curso de Licenciatura em Matem&aacute;tica na

UFSCar, Campus Sorocaba. Al&eacute;m da gradua&ccedil;&atilde;o, faz inicia&ccedil;&atilde;o cient&iacute;fica na &aacute;rea de pesquisa 

operacional.</p></td>

                </td>
            </tr>
                        <tr>
                <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/tomas.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Tom&aacute;s Varallo Ribeiro de Sousa</strong><br>
                    <p align="justify" class="TextoBase2">Graduando, nono semestre em Bacharelado -

Ci&ecirc;ncias Biol&oacute;gicas pela UFSCar Sorocaba. Participou do Centro Acad&ecirc;mico e Diret&oacute;rio 

Acad&ecirc;mico, foi monitor das ma'terias de Zoologia Geral (Engenharia Florestal), Zoologia dos 

Vertebrados e Paleontologia (Biologia Bacharelado e Licenciatura integrais), Evolu&ccedil;&atilde;o e 

Diversidade dos Vertebrados e Fisiologia Animal Comparada (Licenciatura noturno). Est&aacute;gio 

completo em taxonomia e diversidade ictiol&oacute;gica. Atualmente, integra o projeto de extens&atilde;o 

Mini Escola de Evolu&ccedil;&atilde;o (MEEvol) desenvolvido pela UFSCar Sorocaba.</p></td>

                </td>
            </tr>
        </tbody>
    </table><br>-->
        </div>
        <div id="subEquipe7" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-child fa-2x"></i><br> Embaixadores<br><br>Em breve uma nova equipe de Embaixadores!<br><br>
                        <br><br>
            <!-- <table class="tabela">
                 <tbody>
                      <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/amanda.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Amanda de Souza Umburama</strong></span><strong><br>Iper&oacute;/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Roque Ayres de Oliveira</span><strong><br>
                            </strong></div></td>
                </tr>
                       <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/ana_giovana.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Ana Giovana Sneideris</strong></span><strong><br>S&atilde;o Roque/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Maria Aparecida de Oliveira Ribeiro</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/beatriz_nicole.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Beatriz Nicole Martins Sampaio</strong></span><strong><br>Ces&aacute;rio Lange/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Governador Andr&eacute; Franco Montoro</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/bruna.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Bruna Aparecida Ferrari</strong></span><strong><br>Anhembi/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Profª Olinda de F&aacute;tima Cassimiro Soares</span><strong><br>
                            </strong></div></td>
                </tr>
                
               
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/julia_de_maria.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>J&uacute;lia De Maria Almeida</strong></span><strong><br>Cap&atilde;o Bonito/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Oscar Kurtz de Camargo</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/kemily.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                        <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Kemily Teixeira de Oliveira</strong></span><strong><br>S&atilde;o Miguel Arcanjo/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Joaquim Nunes de Oliveira</span><strong><br>
                            </strong></div></td>
                </tr>
                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/lais_santana.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>La&iacute;s Am&acirc;ncio Santana</strong></span><strong><br>Salto de Pirapora/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Jos&eacute; Marcello</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/leonardo.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Leonardo Martins Soares</strong></span><strong><br>Sorocaba/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.E Dr. J&uacute;lio Prestes de Albuquerque</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/luana_correia.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Luana Fabr&iacute;zia de Jesus Correa</strong></span><strong><br>Pilar do Sul/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.E Maria Aparecida Rechinelli Modanezzi</span><strong><br>
                            </strong></div></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/ricardo.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Ricardo Tadeu Reis Souza J&uacute;nior</strong></span><strong><br>Iper&oacute;/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Dona Elisa Moreira dos Santos</span><strong><br>
                            </strong></div></td>
                </tr>
                 </tbody>
             </table><br>-->
        </div>
        
    </div>
    
    




</div>




<?php
include '../web/footer.php';
?>
