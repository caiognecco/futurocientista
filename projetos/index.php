<?php
//EVENTOS
$titulo = 'Projetos - Programa Futuro Cientista®';
$descricao = 'Veja os projetos do P.F.C. e detalhes de cada um deles.';
$img = 'facebook/projetos';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
$query2 = "SELECT link, titulo, ano FROM evento WHERE insc=1 ORDER BY ano DESC";
$result2 = mysql_query($query2);
$query3 = "SELECT link, titulo, ano FROM evento WHERE insc=0 ORDER BY ano DESC";
$result3 = mysql_query($query3);
?>

<div id="menu1">
    <div class="container " >
        <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-cogs fa-1x" ></i> Projetos </span>
    </div>
</div>
<div id="corpo" style=" overflow: hidden; width: 100%; padding-bottom: 5%;">

    <div style="overflow: hidden; width: 70%; margin-left: auto; margin-right: auto; margin-top: 1%;" align="center">
        <h2 style="color: #ff6600;">A&#231;&#227;o social nas Casas Lares Bethel</h2>

       <!-- <div style="height: 40%; width: 70%; background-color: #333;" class="sombra">

        </div> -->

        <img src="../img/projetos/acao-social.jpg" alt="" width="75%">

        <div align="left" style="overflow: hidden; width: 70%">
            <p style="font-size: 1.2em;">&ensp;&ensp;&ensp;&ensp;Os adolescentes da unidade de Sorocaba das Casas Lares Bethel t&#234;m a oportunidade de mergulhar no mundo da Ci&#234;ncia por meio do PFC. Eles participam das mesmas atividades dos n&#250;cleos escolares, com aten&#231;&#227;o especial para que consigam vencer seus desafios.

                <div style="font-size:1.2em;text-align: left;">
               <strong>P&#250;blico:</strong> jovens que cursam do 6&#186; ao 9&#186; ano do Ensino Fundamental, com idade entre 12 e 15 anos.
                <br>
               <strong>Per&#237;odo de realiza&#231;&#227;o:</strong> nos dois semestres do ano, desde 2015, quando a parceria foi firmada.
                </div>
            </p>
        </div>
    </div> <!-- CASAS LARES BETHEL -->

    <div style="width: 70%; height: 5%; margin-left: auto; margin-right:auto;">
        <li style="height: 1px; width: 100%; background-color: #000; margin-top: 2.5%;"></li>
    </div> <!-- ===== Espaço height 5% ===== -->

    <div style="overflow: hidden; width: 70%; margin-left: auto; margin-right: auto; margin-top: 2%;" align="center">
        <h2 style="color: #ff6600;">Escola Preparat&#243;ria para Futuros Cientistas</h2>

       <!-- <div class="sombra" style="height: 40%; width: 70%; background-color: #333;">
        </div> -->

        <img src="../img/projetos/EPFC-logo.png" alt="" width="40%"/>

        <div align="left" style="width: 70%; overflow: hidden;">
            <p style="font-size: 1.2em;">&ensp;&ensp;&ensp;&ensp;Durante um dia inteiro, os alunos do programa participam de palestras, mini-cursos, oficinas e desafios. Tudo para se prepararem para as descobertas do segundo semestre do PFC nos clubes de ci&#234;ncias, quando se re&#250;nem para elaborar um projeto a ser apresentado no final do ano, produto de pesquisa e explora&#231;&#227;o cient&#237;fica. O objetivo da Escola Preparat&#243;ria &#233; justamente dar as ferramentas necess&#225;rias para essa atividade, como, por exemplo, por meio do Manual do Cientista, al&#233;m de orienta&#231;&#245;es sobre como escrever relat&#243;rios. O evento tamb&#233;m t&#234;m a fun&#231;&#227;o de alimentar nos estudantes a sede por novos conhecimentos e a certeza de que todos s&#227;o capazes de serem pesquisadores de verdade.
            <div style="font-size: 1.2em; text-align: left;">
                <strong>P&#250;blico:</strong> todos os alunos conveniados ao Programa, do Ensino Fundamental II e Ensino M&#233;dio, com idade entre 12 e 18 anos.
                <br>
                <strong>Per&#237;odo de realiza&#231;&#227;o:</strong> um evento por ano, sempre em agosto, desde 2014.</div>
            </p>
        </div>
    </div> <!-- ESCOLA PREPARATORIA PARA FUTURO CIENTISTAS -->

    <div style="width: 70%; height: 5%; margin-left: auto; margin-right:auto;">
        <li style="height: 1px; width: 100%; background-color: #000; margin-top: 2.5%;"></li>
    </div> <!-- ===== Espaço height 5% ===== -->

    <div style="overflow: hidden; width: 70%; margin-left: auto; margin-right: auto; margin-top: 2%;" align="center">
        <h2 style="color: #ff6600;">Encontro Regional de Futuros Cientistas</h2>

        <img src="../img/sobre/todos-alunos.jpg" alt="V Encontro Regional de Futuro Cientistas" width="80%"/>
        <p align="center" style="font-size: 0.9em; margin-top: -0.1em;">Encontro regional dos Futuros Cientistas no ano de 2014</p>

        <div align="left" style="width: 70%; overflow: hidden;">
            <p style="font-size: 1.2em;">&ensp;&ensp;&ensp;&ensp;Esse &#233; o grande evento do PFC, onde os resultados de um ano inteiro de trabalho s&#227;o apresentados, tal como em uma feira de ci&#234;ncias. &#201; um dia que os alunos de todos os N&#250;cleos de Desenvolvimento Cient&#237;fico (NDCs), de todas as cidades participantes, compartilham suas descobertas, al&#233;m de serem avaliados por profissionais para concorrerem aos pr&#234;mios finais.
                <br>&ensp;&ensp;&ensp;&ensp;Neste dia s&#227;o premiados os melhores projetos cient&#237;ficos, divididos por etapas de ensino e cidades; e tamb&#233;m os melhores textos do Concurso Literario e as maiores pontua&#231;&#245;es da Maratona do Conhecimento.
                <div style="font-size: 1.2em; text-align: left;">
                <strong>P&#250;blico:</strong> todos os alunos conveniados ao Programa, do Ensino Fundamental II e Ensino M&#233;dio, com idade entre 12 e 18 anos.
                <br>
                <strong>Per&#237;odo de realiza&#231;&#227;o:</strong> um evento no final de cada ano, desde 2011.</div>
            </p>
        </div>
    </div> <!-- ENCONTRO REGIONAL DE FUTUROS CIENTISTAS -->

    <div style="width: 70%; height: 5%; margin-left: auto; margin-right:auto;">
        <li style="height: 1px; width: 100%; background-color: #000; margin-top: 2.5%;"></li>
    </div> <!-- ===== Espaço height 5% ===== -->

    <div style="overflow: hidden; width: 70%; margin-left: auto; margin-right: auto; margin-top: 2%;" align="center">
        <h2 style="color: #ff6600;">Concurso Liter&aacute;rio</h2>

       <!-- <div class="sombra" style="height: 40%; width: 70%; background-color: #333;">

        </div> -->

        <img src="../img/projetos/concurso-literario.jpg" alt="" width="75%">

        <div align="left" style="width: 70%;">
            <p style="font-size: 1.2em;">&ensp;&ensp;&ensp;&ensp;Essa &#233; a primeira atividade que os alunos participam no ano. Para fazer os contos, eles precisam desenvolver a linguagem escrita, a capacidade de interpreta&#231;&#227;o, criatividade, senso cr&#237;tico, al&#233;m de terem que pesquisar para incluir elementos cient&#237;ficos nas aventuras narrativas. &#201; um est&#237;mulo para que eles desenvolvam essas habilidades t&#227;o necess&#225;rias para a vida de um pesquisador.
                <p style="font-size: 1.2em; text-align: left;">
                    <strong>P&#250;blico:</strong>  todos os alunos conveniados ao Programa, do Ensino Fundamental II e Ensino M&#233;dio, com idade entre 12 e 18 anos.
                    <br>
                    <strong>Per&#237;odo de realiza&#231;&#227;o:</strong> duas edi&#231;&#245;es por ano, uma em cada semestre, desde 2015.
                </p>
            </p>
        </div>
    </div> <!-- CONCURSO LITERARIO -->

    <div style="width: 70%; height: 5%; margin-left: auto; margin-right:auto;">
        <li style="height: 1px; width: 100%; background-color: #000; margin-top: 2.5%;"></li>
    </div> <!-- ===== Espaço height 5% ===== -->

    <div style=" overflow: hidden; width: 70%; margin-left: auto; margin-right: auto; margin-top: 2%;" align="center">
        <h2 style="color: #ff6600;">Maratona do Conhecimento</h2>

       <!-- <div class="sombra" style="height: 40%; width: 70%; background-color: #333;">

        </div> -->

        <img src="../img/projetos/maratona-do-conhecimento.png" alt="" width="75%"/>

        <div align="left" style="width: 70%;">
            <p style="font-size: 1.2em;">&ensp;&ensp;&ensp;&ensp;O desafio dos estudantes nesta atividade &#233; alimentar a mente com conhecimentos das diferentes &#225;reas, como hist&#243;ria, geografia, ci&#234;ncia e tecnologia e portugu&#234;s, assuntos das quest&#245;es de duas provas aplicadas durante o ano. Al&#233;m disso, os alunos s&#227;o estimulados ao aprendizado cont&#237;nuo, j&#225; que as notas na escola s&#227;o parte da pontua&#231;&#227;o no ranking da Maratona. Para os alunos do Ensino Fundamental s&#227;o 20 quest&#245;es a serem respondidas em cada prova, subindo para 35 perguntas para os estudantes do Ensino M&#233;dio.
            <div style="font-size: 1.2em; text-align: left;">
                <strong>P&#250;blico:</strong>  todos os alunos conveniados ao Programa, do Ensino Fundamental II e Ensino M&#233;dio, com idade entre 12 e 18 anos.
                <br>
                <strong>Per&#237;odo de realiza&#231;&#227;o:</strong> duas edi&#231;&#245;es por ano, uma em cada semestre, desde 2015. Na primeira fase h&#225; um ranking parcial, e a premia&#231;&#227;o final &#233; no final do ano, durante o Encontro Regional de Futuros Cientistas.
            </div>
            </p>
        </div>
    </div> <!-- MARATONA DO CONHECIMENTO -->

    <div style="width: 70%; height: 5%; margin-left: auto; margin-right:auto;">
        <li style="height: 1px; width: 100%; background-color: #000; margin-top: 2.5%;"></li>
    </div> <!-- ===== Espaço height 5% ===== -->

    <div style=" overflow: hidden; width: 70%; margin-left: auto; margin-right: auto; margin-top: 2%;" align="center">
        <h2 style="color: #ff6600;">Cursinho Talentos do Futuro</h2>

       <!-- <div class="sombra" style="height: 40%; width: 70%; background-color: #333;">

        </div> -->
        <img src="../img/projetos/cursinho-vestibular.jpg" alt="" title="Aprovados 2016" width="75%"/>
        <p align="center" style="font-size: 0.9em; margin-top: -0.1em;">Alunos do Cursinho Talentos do Futuro 2015</p>

        <div style="width: 70%;">
            <p align="left" style="font-size: 1.2em;">&ensp;&ensp;&ensp;&ensp;Para que os alunos do PFC tivessem melhores condições de se preparar para o Vestibular, o programa fez uma parceria com o Colégio Objetivo de Sorocaba, que cedeu espaço para aulas e material didático, para a realização do Cursinho Talentos do Futuro. Neste ano não haverá o cursinho e sim bolsas para participantes do programa Futuro Cientista em cursinhos locais.
                <br>&ensp;&ensp;&ensp;&ensp;Os professores eram alunos do último ano de graduação e alunos do Mestrado da Ufscar, que deram aulas voluntárias: <br>
                <p align="left" style="font-size: 1.2em; position:relative; width: 50%; left: 12%;">
                     &#8226; Thaís Cruz (Português)<br>
                     &#8226; Clarissa de Oliveira (Biologia)<br>
                     &#8226; Caio Gnecco (Matemática)<br>
                     &#8226; Marcos Moraes (História)<br>
                     &#8226; Tiago Martins (História)<br>
                     &#8226; Thaís Rodrigues (Geografia)<br>
                     &#8226; Danielle Gottardi (Química)<br>
                     &#8226; Eduardo Reis (Física)<br>
                     &#8226; César Lopes de Oliveira Gregório (Inglês)<br>
                </p>
            <div style="font-size: 1.2em; text-align: left;">
                <strong>P&#250;blico:</strong> alunos conveniados ao PFC que est&#227;o cursando o 3&#186; ano do Ensino M&#233;dio.
                <br>
                <strong>Per&#237;odo de realiza&#231;&#227;o:</strong> Por enquanto apenas no ano de 2015.
            </div>
            </p>
        </div>
    </div> <!-- CURSINHO TALENTOS DO FUTURO -->

    <div style="width: 70%; height: 5%; margin-left: auto; margin-right:auto;">
        <li style="height: 1px; width: 100%; background-color: #000; margin-top: 2.5%;"></li>
    </div> <!-- ===== Espaço height 5% ===== -->

    <div style=" overflow: hidden; width: 70%; margin-left: auto; margin-right: auto; margin-top: 2%;" align="center">
        <h2 style="color: #ff6600;">Ci&#234;ncia em 3 minutos</h2>

        <iframe style="float: left;" width="49%" height="43%" src="https://www.youtube.com/embed/WtxQziRaICs" frameborder="0" allowfullscreen></iframe>

        <iframe style="float: left; margin-left: 2%" width="49%" height="43%" src="https://www.youtube.com/embed/PeJ7AVHe0tQ" frameborder="0" allowfullscreen></iframe>

        <div align="left" style="width: 70%; position:relative; top: 5px;">
            <p style="font-size: 1.2em;">&ensp;&ensp;&ensp;&ensp;Alunos da gradua&#231;&#227;o em Biologia da Ufscar produzem v&#237;deos sobre temas cient&#237;ficos, voluntariamente. S&#227;o tr&#234;s minutos de conte&#250;do apresentado em forma de desenhos, que servem de material de apoio para os aprendizados.
            <div style="font-size: 1.2em; text-align: left;">
                <strong>P&#250;blico:</strong> alunos conveniados ao PFC e p&#250;blico em geral, com foco para os jovens do Ensino Fundamental.
                <br>
                <strong>Per&#237;odo de realiza&#231;&#227;o:</strong> desde o final de 2015 at&#233; agora.
            </div>
            </p>
        </div>
    </div> <!-- CIENCIA EM 3 MINUTOS -->

    <div style="width: 70%; height: 5%; margin-left: auto; margin-right:auto;">
        <li style="height: 1px; width: 100%; background-color: #000; margin-top: 2.5%;"></li>
    </div> <!-- ===== Espaço height 5% ===== -->

    <div style=" overflow: hidden; width: 70%; margin-left: auto; margin-right: auto; margin-top: 2%;" align="center">
        <h2 style="color: #ff6600;">Clubes de Ci&#234;ncia</h2>

       <!-- <div class="sombra" style="height: 40%; width: 70%; background-color: #333;">

        </div> -->

        <img src="../img/projetos/clubes-de-ciencia.jpg" alt="" width="75%"/>
        <p align="center" style="font-size: 0.9em; margin-top: -0.1em;">Apresentação dos projetos de ciência denvolvidos no ano de 2013 pelos alunos conveniados pelo PFC</p>

        <div align="left" style="width: 70%;">
            <p style="font-size: 1.2em;">&ensp;&ensp;&ensp;&ensp;Depois de participarem das atividades do primeiro semestre do ano, os alunos do PFC est&#227;o preparados para mergulharem mais fundo no mundo das pesquisas. &#201; quando eles formam os &#8220;Clubes de Ci&#234;ncia&#8221;, pequenos grupos para que estudem juntos, fa&#231;am experimentos e troquem informa&#231;&#245;es. Esse grupo tamb&#233;m prepara um projeto final, a ser apresentado no Encontro Regional de Futuros Cientistas, em dezembro, que concorre a pr&#234;mios. Os jovens fazem anota&#231;&#245;es durante o semestre em seus Cadernos de Bordo, que funciona como um di&#225;rio do cientista, onde eles anotam os caminhos que percorreram para realizar suas descobertas.
            <div style="font-size: 1.2em; text-align: left;">
                <strong>P&#250;blico:</strong> todos os alunos conveniados ao Programa, do Ensino Fundamental II e Ensino M&#233;dio, com idade entre 12 e 18 anos.
                <br>
                <strong>Per&#237;odo de realiza&#231;&#227;o:</strong> sempre no segundo semestre, desde 2011.
            </div>
            </p>
        </div>
    </div> <!-- CLUBES DE CIENCIA -->
        
</div>


<?php
include '../web/footer.php';
?>