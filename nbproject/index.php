<?php
//EQUIPE
$titulo = 'Equipe - Programa Futuro Cientista®';
$descricao = 'Conhe&ccedil;a nosso time de cientistas!';
$img = 'equipe';
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>

<div id="menu1">
    <div class="container " >
        <span style="display:inline-block; vertical-align:middle"><i class="fa fa-group fa-1x"></i> Equipe </span>
    </div>
</div>


<div id="corpo">
    
    <div id="menuEquipe">
        <div class="h-1-7 ativo" onclick="show1();  $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-legal fa-1x"></i> Diretoria</span>
            </div>
        </div>
        <div class="h-1-7" onclick="show2(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container" >
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-user-secret fa-1x"></i> Supervisores</span>
            </div>
        </div>
        <div class="h-1-7" onclick="show3(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-graduation-cap fa-1x"></i> Membros Honorários<br><small> (Comitê Científico)</small></span>
            </div>
        </div>
        <div class="h-1-7" onclick="show4(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
<div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-user-plus fa-1x"></i> Coordenadores</span>
            </div>
        </div>
        <div class="h-1-7" onclick="show5(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-street-view fa-1x"></i> Coordenadores Locais<br><small>(Professores)</small></span>
            </div>
            
        </div>
        <div class="h-1-7" onclick="show6(); $('.ativo').toggleClass('ativo'); $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-users fa-1x"></i> Nucleadores</span>
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
            
            <i class="fa fa-legal fa-2x"></i> <br>Diretoria<br><br><button class="organograma_button"><i class="fa fa-tree fa-1x"></i> Veja o organograma completo</button>
             <br><br>
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
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/ismail.jpg" width="105" height="125"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/3576937472687059" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span></div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Ismail Barra Nova de Melo<br>Vice-Diretor Presidente</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em Licenciatura Plena Em  Geografia pela Faculdade de Educa&ccedil;&atilde;o S&atilde;o Lu&iacute;s (1991), mestrado em Geografia  pela Universidade Estadual Paulista J&uacute;lio de Mesquita Filho (2003) e doutorado  em Geografia pela Universidade Estadual Paulista J&uacute;lio de Mesquita Filho  (2007). Atualmente &eacute; professor Adjunto da Universidade Federal de S&atilde;o Carlos -  UFScar e vice Coordenador do Curso de Geografia - Campus Sorocaba-SP. Tem  experi&ecirc;ncia no ensino de Geografia na Educa&ccedil;&atilde;o B&aacute;sica e no ensino Superior. &eacute; Vice-Diretor Presidente do Programa Futuro Cientista® (PFC). Participa de tr&ecirc;s grupos de  pesquisas com enfoques geogr&aacute;ficos, multidisciplinar e forma&ccedil;&atilde;o de futuros  cientistas. </p></td>
                </tr>

                <tr>
                    <td width="18%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/carol.jpg" width="105" height="125"><br>
                            <br>
                           </div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Caroline Pavan Brandini<br>Diretora Executiva</strong></span><strong></strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Graduanda no Curso de Licenciatura Plena em Ci&ecirc;ncias Biol&oacute;gicas na Universidade Federal de S&atilde;o Carlos (UFSCar), Campus Sorocaba (2012). Atua como Diretora Executiva no Programa Futuro Cientista® (PFC), e participa como Organizadora do Encontro Regional de Futuros Cientistas (ERFC) e da Escola Preparat&oacute;ria para Futuros Cientistas (EPFC), m&oacute;dulos Ensino Fundamental II, M&eacute;dio e Superior, ambos do PFC. </p></td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/tiago.jpg" width="113"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/0860332394591067" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span></div>
                    </td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Tiago de Oliveira Reis<br>Diretor Admnistrativo</strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Possui gradua&ccedil;&atilde;o em F&iacute;sica - Licenciatura Plena - pela Universidade Federal de S&atilde;o Carlos (UFSCar) -  Campus Sorocaba. Entre 2010 e 2014 participou como Supervisor Executivo no Programa Futuro Cientista® (PFC) (www.futurocientista.net) e atualmente &eacute; Diretor Admnistrativo no PFC. Participa como organizador do Encontro Regional de Futuros Cientistas (ERFC) e da Escola Preparat&oacute;ria para Futuros Cientistas (EPFC), ambos do PFC. Atua tamb&eacute;m como professor de f&iacute;sica no Col&eacute;gio Objetivo Sorocaba. </p></td>
                    </td>
                </tr>
            </tbody>
        </table>
       
        </div>
        <div id="subEquipe2" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-user-secret fa-2x"></i><br> Supervisores<br><br><button class="organograma_button"><i class="fa fa-tree fa-1x"></i> Veja o organograma completo</button>
            <br><br>Administrativos:
             <table class="tabela">
                 <tbody>
                                 <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/caio.jpg" width="105" height="125"><br>
                            <br><span class="TextoBase"><a class="br" href="https://br.linkedin.com/pub/caio-perroni-gnecco/60/8a2/590" target="_blank">LinkedIn
                                </a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Caio Perroni Gnecco</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Supervisor de Rela&ccedil;&otilde;es Comerciais e T.I.</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduando no curso de Bacharelado em Ci&ecirc;ncia da Computa&ccedil;&atilde;o pela Universidade Federal de S&atilde;o Carlos (UFSCAR) - Campus Sorocaba. Atua como Supervisor de Rela&ccedil;&otilde;es Comerciais e T.I. do Programa Futuro Cientista® (PFC) e tamb&eacute;m como Consultor aut&ocirc;nomo na &aacute;rea de Tecnologia da Informa&ccedil;&atilde;o.</p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/fran.jpg" width="105" height="125"><br>
                            <br> <span class="TextoBase"><a class="br" href="http://kawek.net/franmoraes">Portif&oacute;lio</a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Francine de Moraes da Cunha</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Supervisora de Marketing</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduanda em Comunica&ccedil;&atilde;o Social ­ Publicidade e Propaganda, produz jobs voltados para &aacute;rea

de cria&ccedil;&atilde;o, produ&ccedil;&atilde;o gr&aacute;fica, reda&ccedil;&atilde;o, produ&ccedil;&atilde;o e edi&ccedil;&atilde;o de &aacute;udio e v&iacute;deo, fotografia,

planejamento de campanha, estrat&eacute;gias de marketing, entre outros. Amante de Sociologia,

musicista e engajada em projetos sociais h&aacute; alguns anos, agora integra a equipe do Futuro

Cientista.
</p></td>
                </tr>
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/camila.jpg" width="105" height="125"><br>
                            <br></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Camila de Oliveira Silva</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Supervisora de Imprensa</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduanda no curso de Publicidade e propaganda na Unip - Campus Sorocaba, Atua no Programa Futuro Cientista® (PFC) como Supervisora de Imprensa, desde 2015.</p></td>
                </tr>
    
                 </tbody>
             </table>
             <br><br>Executivos:
             <table class="tabela">
                 <tbody>
                                     <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/default.jpg" width="105" height="125"><br>
                            <br></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Débora Bergamini</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Supervisora Educacional</strong></span></p>
                        <p align="justify" class="TextoBase2"></p></td>
                </tr>
                 </tbody>
             </table>
            
        </div>
        <div id="subEquipe3" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-graduation-cap fa-2x"></i><br> Membros Honorários<br><br><button class="organograma_button"><i class="fa fa-tree fa-1x"></i> Veja o organograma completo</button>
             <br><br>
             <table class="tabela">
                 <tbody>
                      
                 <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/luizfaria.jpg" width="105" height="105"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/2656343277991754" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Luiz Carlos de Faria<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2">Graduado em Engenharia Florestal pela Universidade Federal de Vi&ccedil;osa, realizou Mestrado e Doutorado na Escola Superior de Agricultura Luiz de Queiroz, Universidade de São Paulo. Atua na &aacute;rea de Gest&atilde;o Ambiental e de Recursos Florestais, com &ecirc;nfase em economia, pol&iacute;tica e legisla&ccedil;&atilde;o ambiental e florestal, sendo coordenador de diversos projetos e atividades sobre esses temas. Participa em representa&ccedil;&otilde;es institucionais, como no Conselho Municipal de Desenvolvimento do Meio Ambiente do Munic&iacute;pio de Sorocaba. Atualmente &eacute; Professor Adjunto na UFSCar campus Sorocaba, onde ocupa o cargo de Vice Chefe do Departamento de Ci&ecirc;ncias Ambientais. </p></td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra. Franciane Andrade de P&aacute;dua<br>Professora da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Murillo Rodrigo Petrucelli Homem<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Sra. Offir Paschoalick Castilho de Madureira<br>Chefe do Departamento de Ensino de Gradua&ccedil;&atilde;o - UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Fernando Del Fiol<br>Reitor da Uniso</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Adilson Jesus Aparecido de Oliveira<br>Vice Reitor da UFSCar</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Prof. Dr. Isaias Torres<br>Professor da UFSCar/Comit&ecirc; Cient&iacute;fico</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Profa. Dra.D&eacute;bora Cristina Morato Pinto<br>Pr&oacute; Reitora de P&oacute;s Gradua&ccedil;&atilde;o</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mh/default.jpg" width="105" height="125"><br>
                            <br>
                            </div></td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Sr. Roberval de Oliveira<br>Gerdau</strong>
                            <span class="TextoBase"><strong> </strong></span></p>
                        <p align="justify" class="TextoBase2"> </p></td>
                </tr>
                 </tbody>
             </table>
             <br><br>Comitê Científico:
             <table class="tabela">
                 <tbody>
                     <tr>
                         <td>
                             Em breve..
                         </td>
                     </tr>
                 </tbody>
             </table>
        </div>
        <div id="subEquipe4" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-user-plus fa-2x"></i> <br>Coordenadores<br><br><button class="organograma_button"><i class="fa fa-tree fa-1x"></i> Veja o organograma completo</button>
                        <br><br>Administrativos
             <table class="tabela">
                 <tbody>
                        
                <tr>
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/marcos.jpg" width="105" height="125"><br>
                            <br><span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/1376428639674404" target="_blank">Curr&iacute;culo<br>Lattes / <a class="br" href="https://br.linkedin.com/in/mcavalcante" target="_blank">LinkedIn
                                </a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Marcos Cavalcante Barboza</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Coordenador de Desenvolvimento Web</strong></span></p>
                        <p align="justify" class="TextoBase2">Atualmente &eacute; estudante do curso de Ci&ecirc;ncia da Computa&ccedil;&atilde;o na Universidade Federal de S&atilde;o Carlos - campus Sorocaba, tem experi&ecirc;ncia em Intelig&ecirc;ncia Artificial e Aprendizagem de M&aacute;quina. Atua como Desenvolvedor Web no Programa Futuro Cientista® (PFC).</p></td>
                </tr>

                 </tbody>
             </table>
                                    <br><br>Executivos
             <table class="tabela">
                 <tbody>
                      <tr>
                    
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/cesar.jpg" width="113"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/2363842303055819" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span></div>
                    </td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">C&eacute;sar Lopes de Oliveira Greg&oacute;rio<br>Coordenador do Cursinho Semi-extensivo Talentos do Futuro  (Objetivo e UFSCar Sorocaba)</strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Graduando em Ci&ecirc;ncias Biol&oacute;gicas pela Universidade Federal de S&atilde;o Carlos. Certificado pelo Curso Academic da Harvard University para lecionar a l&iacute;ngua Inglesa.. Trabalhou como Coordenador Pedag&oacute;gico em escola de idiomas, e atualmente trabalha como Coordenador do Cursinho Talentos do Futuro al&eacute;m de dar aulas de Ingl&ecirc;s. </p></td>
                    </td>
                </tr>
                <tr>
                    <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/mari.jpg" width="113"><br>
                            <br>
                            <span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/0860332394591067" target="_blank">Curr&iacute;culo<br>
                                    Lattes</a></span></div>
                    </td>

                    <td valign="top" class="Chamada1"><p><strong class="Titulo3">Lucimari C. O. Gimenez<br>Coordenadora do Concurso de Contos de Fic&ccedil;&atilde;o Cient&iacute;fica</strong><br>
                            </strong></p><p align="justify" class="TextoBase2">Formada no curso de Licenciatura Plena em Pedagogia na Escola Superior de Administra&ccedil;&atilde;o, Propaganda e Comunica&ccedil;&atilde;o (ESAMC) . Graduanda no Curso de Licenciatura Plena em Ci&ecirc;ncias Biol&oacute;gicas na Universidade Federal de S&atilde;o Carlos (UFSCar), Campus Sorocaba (2013). Atua como Coordenadora do Concurso de Contos no Programa Futuro Cientista (PFC) e como Estagi&aacute;ria na Secret&aacute;ria do Meio Ambiente de Sorocaba no Parque Zool&oacute;gico Municipal Quinzinho de Barros em Sorocaba.</p></td>
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
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/leonardo.jpg" width="105" height="125"><br>
                            <br><span class="TextoBase"><a class="br" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K8178175U9" target="_blank">Curr&iacute;culo<br>Lattes
                                </a></span></div></td>

                    <td width="80%" valign="top" class="Chamada1"><p><span class="Titulo3"><strong>Leonardo Oliveira da Costa</strong></span><strong><br>
                            </strong><span class="TextoBase"><strong>Coordenador de A&ccedil;&otilde;es Sociais</strong></span></p>
                        <p align="justify" class="TextoBase2">Graduando no curso de Licenciatura Plena em Ci&ecirc;ncia Biol&oacute;gicas pela Universidade Federal de S&atilde;o Carlos (UFSCAR) - Campus Sorocaba. Atua como pesquisador em ecologia de Comunidades Zooplanctonicas e Coordenador de A&ccedil;&otilde;es Sociais do Programa Futuro Cientista® (PFC).</p></td>
                </tr>
                 </tbody>
             </table>
                                  <br><br>Comiss&atilde;o Julgadora do Concurso de Contos:<br>
    <table class="tabela">
        <tbody>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/marilia.jpg" width="113"><br>
                        <br>
                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Mar&iacute;lia Birochi Sarago&ccedil;a</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda no curso de Licenciatura Plena de Pedagogia da Universidade Federal de S&atilde;o Carlos – Campus Sorocaba. Atua como estagi&aacute;ria no Col&eacute;gio Uirapuru, professora de dan&ccedil;a na Escola Educativa de Dan&ccedil;a Isadora Duncan. </p></td>

                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/camila.jpg" width="113"><br>
                        <br>
                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Camila Seixas</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda do curso de Turismo na UFSCar, Sorocaba. Atualmente faz inicia&ccedil;&atilde;o cient&iacute;fica pelo PIBIC na &aacute;rea de metodologia cient&iacute;fica no Turismo. Tamb&eacute;m atua como diretora acad&ecirc;mica no centro acad&ecirc;mico de Turismo e como presidente do Diret&oacute;rio Acad&ecirc;mico da UFSCar (representa&ccedil;&atilde;o dos estudantes da UFSCar em Sorocaba), &eacute; representante discente do CoACE (Conselho de Assuntos Comunit&aacute;rios e Estudantis) e do CoG (Conselho de Gradua&ccedil;&atilde;o). Em 2014 foi Rondonista no Piaui, como um projeto de extens&atilde;o do Minist&eacute;rio da Defesa, governo federal. Em 2013 foi banca do concurso de reda&ccedil;&atilde;o parceria caixa econ&ocirc;mica federal e UFSCar.</p></td>
                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/carlos.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Carlos Vinicius Antunes Rufini</strong><br>
                    <p align="justify" class="TextoBase2">Formado em Jornalismo pela Universidade de Sorocaba e atualmente est&aacute; no 2º ano de Licenciatura em Geografia pela UFSCar – Campus Sorocaba. &eacute; membro do Centro Acad&ecirc;mico de Geografia e do F&oacute;rum Popular do Plano Diretor de Sorocaba. Tem interesse nas &aacute;reas de Geografia Urbana e no Direito à Cidade.</p></td>

                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/caliope.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Cal&iacute;ope Corcovia</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda de Pedagogia na UFSCar (campus Sorocaba), onde se engaja nas atividades do Coletivo Mandala. Participou da a&ccedil;&atilde;o solid&aacute;ria de doa&ccedil;&atilde;o de cabelos no seu ingresso à Universidade, doando todo seu cabelo (2014). &eacute; ativista das causas LGBT e transfeministas; e tamb&eacute;m uma das pessoas idealizadoras e organizadoras da Semana Trans - Formando Vis&otilde;es (visite a p&aacute;gina no Facebook e canal no YouTube).</p></td>

                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/luiz.jpg" width="113"><br> 

                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Luiz Renato Ferreira Gon&ccedil;alvez</strong><br>
                    <p align="justify" class="TextoBase2">Graduando do quinto semestre do curso Bacharelado em Turismo, DGTH - Departamento de Geografia, Turismo e Humanidades, UFSCar - campus Sorocaba. Estudante nos grupos de pesquisa do CNPq (R)exist&ecirc;ncias e metaquest&otilde;es dos marcadores de diferen&ccedil;a da Universidade Estadual de Londrina e N&uacute;cleo de Estudos G&ecirc;nero e Diversidade Sexual da Universidade Federal de S&atilde;o Carlos. Realiza pesquisas relacionadas às quest&otilde;es de g&ecirc;nero e diversidade sexual no turismo. Possui qualifica&ccedil;&atilde;o internacional em Turismo e Hospitalidade</p></td>

                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/ellen.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">&Eacute;llen Cristina Santos da Silveira</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda do &uacute;ltimo ano no curso de Licenciatura Plena em Ci&ecirc;ncias Biol&oacute;gicas pela Universidade Federal de S&atilde;o Carlos (UFSCar). Professora de Ci&ecirc;ncias e de Projeto de Apoio à Aprendizagem em escola estadual em Sorocaba. Formada como T&eacute;cnica em Seguran&ccedil;a do Trabalho, pela ETEC Fernando Prestes, Gestora Ambiental Industrial, pela Universidade de Sorocaba (UNISO).</p></td>

                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/carolina.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Carolina Jacobini de Lima</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda do curso de Licenciatura em Ci&ecirc;ncias Biol&oacute;gicas Noturno da UFSCar Sorocaba. Estagiou nos setores de Educa&ccedil;&atilde;o Ambiental do Zool&oacute;gico Municipal "Quinzinho de Barros" e da Funda&ccedil;&atilde;o Parque Zool&oacute;gico de S&atilde;o Paulo, e no projeto Resid&ecirc;ncia Educacional, da Secretaria de Educa&ccedil;&atilde;o do Estado. Participou de projetos de cultura como o M&uacute;sica na Cidade, dentro do campus da UFSCar, e do Projeto Cinese, em parceria com a Secretaria de Cultura de Votorantim. Colaboradora direta do Diret&oacute;rio Central dos Estudantes e Diret&oacute;rio Acad&ecirc;mico da UFSCar, e tamb&eacute;m &eacute; ex integrante da Associa&ccedil;&atilde;o Atl&eacute;tica Acad&ecirc;mica Lobo Guar&aacute;.  Atualmente &eacute; bolsista do Programa Institucional de Bolsas de Inicia&ccedil;&atilde;o à Doc&ecirc;ncia- PIBID e integra a Chapa Ubuntu nas elei&ccedil;&otilde;es do Diret&oacute;rio Central dos Estudantes.</p></td>

                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/fernando.jpg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Fernando Henrique Cardoso Abreu</strong><br>
                    <p align="justify" class="TextoBase2">Graduando do curso de Licenciatura Plena em Ci&ecirc;ncias Biol&oacute;gicas pela Universidade Federal de S&atilde;o Carlos (UFSCar), Campus Sorocaba (2012). Faz Inicia&ccedil;&atilde;o Cient&iacute;fica na &aacute;rea de Ecotoxicologia em pele de anf&iacute;bios expostos a LAS (Dodecilbenzeno Sulfonato de s&oacute;dio, um detergente), Clomazone (Herbicida) e Batracoquitr&iacute;dio (Fungo), orientado pelo Prof. Dr. F&aacute;bio Abdalla. Trabalhou no Projeto de Extens&atilde;o M&iacute;dia & Educa&ccedil;&atilde;o (2013), atuando na Escola Jardim Primavera, Salto de Pirapora (Curta na Quinta, sele&ccedil;&atilde;o e debate de curtas junto aos estudantes), coordenado pela Profa Dra. Maria Carla Corrochano. Atua no Projeto de Extens&atilde;o Mini Escola de Evolu&ccedil;&atilde;o, coordenado pela Profa. Dra. Mirian Liza Alves Foranccelli Pacheco. Representa os Estudantes do curso Licenciatura em Biologia no Conselho de Curso (2012 a 2015) e constr&oacute;i o Diret&oacute;rio Acad&ecirc;mico (2014/2015) e o Centro Acad&ecirc;mico Lobo Guar&aacute;, da Biologia (2013, 2014, 2015).</p></td>

                </td>
            </tr>
                </tbody></table>  
        </div>
        <div id="subEquipe5" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-street-view fa-2x"></i><br> Coordenadores Locais<br><br><button class="organograma_button"><i class="fa fa-tree fa-1x"></i> Veja o organograma completo</button>
                        <br><br>
             <table class="tabela">
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
                            </strong><span class="TextoBase2">Possui Mestrado Profissionalizante pela Universidade Federal de S&atilde;o Carlos - UFSCar (2013). Gradua&ccedil;&atilde;o em Matem&aacute;tica pela Universidade Estadual Paulista J&uacute;lio de Mesquita Filho - UNESP (2002). Licenciatura em Pedagogia pela Universidade Nove de Julho (2009) e P&oacute;s Gradua&ccedil;&atilde;o em Gest&atilde;o Escolar pela UNIARARAS (2007). &Eacute; Professor Titular de Cargo de Matem&aacute;tica na Rede Estadual de Ensino de São Paulo, ministrando aulas para o Ensino Fundamental e M&eacute;dio. Atua como professor de &Aacute;lgebra e Geometria na Escola Anglo Pilar do Sul</span><strong><br>
                            </strong></div></td>
                </tr>
                 </tbody>
             </table>
        </div>
        <div id="subEquipe6"  class="subEquipe" style="display: none;"><br>
            <i class="fa fa-users fa-2x"></i> <br>Nucleadores<br><br><button class="organograma_button"><i class="fa fa-tree fa-1x"></i> Veja o organograma completo</button>
                        <br><br>
             <table class="tabela">
                 <tbody>
                      <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/Andrielli.jpg" width="113"><br>
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
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/Eliezer.jpg" width="113"><br>
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

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Yoshimitsu Watari<br>Nucleador</strong><br>
                    <p align="justify" class="TextoBase2">Graduando no curso de Engenharia Civil pela Universidade de Sorocaba (UNISO) Cidade Universit&aacute;ria.
                        Participou do Programa Futuro Cientista® (PFC) em 2010, como Inicia&ccedil;&atilde;o Cient&iacute;fica J&uacute;nior bolsista do CNPq na &aacute;rea da Matem&aacute;tica.
                        Em 2014 atuou como Nucleador do PFC em uma escola de Sorocaba. Hoje atua como Nucleador do PFC.</p></td>

                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/leticia.jpeg" width="113"><br> 

                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Let&iacute;cia Orsi<br>Nucleadora (Orfanatos)</strong><br>
                    <p align="justify" class="TextoBase2">Estudante de Licenciatura em Ci&ecirc;ncias Biol&oacute;gicas pela Universidade Federal de S&atilde;o Carlos - Campus Sorocaba e, no momento, atua como nucleadora no Programa Futuro Cientista.</p></td>

                </td>
            </tr>
            <tr>
                <td valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/de/mariana.jpg" width="113"><br> 
                        <br><span class="TextoBase"><a class="br" href="http://lattes.cnpq.br/1232885734168714" target="_blank">Curr&iacute;culo<br>
                                Lattes</a></span>
                    </div>
                </td>

                <td valign="top" class="Chamada1"><p><strong class="Titulo3">Mariana Arnaud<br>Nucleadora (Orfanatos)</strong><br>
                    <p align="justify" class="TextoBase2">Graduanda do Curso de Bacharelado em Ci&ecirc;ncias Biol&oacute;gicas da Universidade Federal de S&atilde;o Carlos (UFSCar) Campus Sorocaba; Integrante do Grupo de Pesquisa em Nanoneurobiof&iacute;sica – Universidade Federal de S&atilde;o Carlos (UFSCar) Campus Sorocaba; Inicia&ccedil;&atilde;o Cient&iacute;fica na &aacute;rea de Nanosensoriamento baseado em microalavancas de Microscopia de For&ccedil;a At&ocirc;mica (AFM) e em intera&ccedil;&otilde;es ant&iacute;geno-anticorpo aplicadas na agricultura (V&iacute;rus CTV); Colabora em projeto de nanobiossensores baseados em microalavancas AFM aplicados ao c&acirc;ncer de cabe&ccedil;a e pesco&ccedil;o.</p></td>

                </td>
            </tr>
                 </tbody>
             </table>
        </div>
        <div id="subEquipe7" class="subEquipe" style="display: none;"><br>
            <i class="fa fa-child fa-2x"></i><br> Embaixadores<br><br><button class="organograma_button"><i class="fa fa-tree fa-1x"></i> Veja o organograma completo</button>
                        <br><br>
             <table class="tabela">
                 <tbody>
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
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/joao.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>Jo&atilde;o Henrique Batista</strong></span><strong><br>Iper&oacute;/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Roque Ayres de Oliveira</span><strong><br>
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
                    <td width="20%" valign="top"><div align="center"><img class="sombra" src="<?php echo $root_html ?>img/equipe/embaixadores/lais_santana.jpg" width="105" height="125"><br>
                            <br>
                        </div></td>

                    <td width="80%" valign="top" class="Chamada1"><div align="justify"><span class="Titulo3"><strong>La&iacute;s Am&acirc;ncio Santana</strong></span><strong><br>Salto de Pirapora/SP<br>
                            </strong><span class="TextoBase"><strong> </strong></span><strong><br>
                            </strong><span class="TextoBase2">E.M Jos&eacute; Marcello</span><strong><br>
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
             </table>
        </div>
        
    </div>
    
    




</div>




<?php
include '../web/footer.php';
?>
