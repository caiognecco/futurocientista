<?php
$titulo = 'Programa Futuro Cientista®';
$descricao = 'Site oficial do Programa Futuro Cientista.';
$img = 'facebook';

include 'web/seguranca.php';
include 'web/script.php';
include 'web/header.php';

$query_conteudo = "SELECT * FROM conteudo as c, tipo_conteudo as tipc WHERE c.id_tipo = tipc.id_tipo AND c.destaque = 1 ";
$result_conteudo = mysql_query($query_conteudo);
?>
<div id="fb-root"></div>
<script>
    $(document).ready(function () {

        $(".acesso").click(function () {

            $("#inicio").fadeOut(1000);

        });
    });
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4&appId=184934305014634";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    $(window).bind("load", function () {
        // mostraAlerta('<i class="fa fa-gamepad fa-1x"></i> Movimente o cursor para interagir com o site!<br> <i class="fa fa-photo fa-1x"></i> Melhor vizualizado em resolu&ccedil;&atilde;o panor&acirc;mica.', 4000);
        $("#credito").one().mouseenter(function () {
            mostraAlerta('<i class="fa fa-code fa-1x"></i> Desenvolvido por Caio Perroni Gnecco.<br> <i class="fa fa-phone fa-1x"></i> (15)98126-3628<br><i class="fa fa-envelope fa-1x"></i> caiognecco@gmail.com', 5000);
            Caio
            Per
        });
        $("#corpo").one().mouseenter(function () {
            initialize();
        });

    });
    google.maps.event.addDomListener(window, 'load', initialize);


</script>  
<script>
    (function () {
        var cx = '015382384524993887066:oesn6cpjzay';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                '//cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();

</script>


<a href="https://plus.google.com/108469515438550033322" style="display: none" rel="publisher">Google+</a>


<?php if ($mobile): ?>
    <div id="corpo" style="overflow: scroll; position: relative">
        <div class="destaques_menu1 container" style="height: 5%;"><span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques</span></div>
        <div class="slider" style="height: 45%; ">
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/HomenagemCMS2015" class="trs"><img  src="<?php echo $root_html ?>img/facebook/HomenagemCMS2015.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 15px"> <small>PFC recebe homenagem na C&acirc;mara Municipal de Sorocaba!</small>
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/EPFC2015" class="trs"><img  src="<?php echo $root_html ?>img/facebook/EPFC2015.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 15px"> <small>Cerca de 250 Alunos na II EPFC!!</small>
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/EducareCruzeiroDoSul2016" class="trs"><img  src="<?php echo $root_html ?>img/destaques/noticias/EducareCruzeiroDoSul2016.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 15px"> <small>PFC e o VI ERFC s&atilde;o destaques em reportagem do Jornal Cruzeiro do Sul!</small>
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/TVTEM2015" class="trs"><img  src="<?php echo $root_html ?>img/destaques/noticias/TVTEM2015.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 15px"> <small>PFC &eacute; tema de reportagem na TV TEM!</small>
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/CienciaEm3Minutos" class="trs"><img  src="<?php echo $root_html ?>img/destaques/noticias/CienciaEm3Minutos.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 15px"> <small>Novo projeto no ar!</small>
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/publicacao/ERFC2015" class="trs"><img  src="<?php echo $root_html ?>img/destaques/publicacoes/ERFC2015.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 15px"> <small>PFC lan&ccedil;a mais um livro!</small>
            </div>


        </div>  
        <div class="parceiros_menu1 container" style="height: 5%;"><span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro" class="fa fa-institution fa-1x"></i> Parceiros</span></div>
        <div class="slider" style="height: 45%;">
            <div> <a onclick=window.open("http://www.gerdau.com.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/gerdau.png" alt="" width="39.9%" /></a><p style="margin-top: 15px"><small>Gerdau</small></div>
            <div> <a onclick=window.open("http://www.anhembi.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefanhembi.png" alt="" width="39.9%" /></a><p style="margin-top: 15px"><small>Prefeitura de Anhembi</small></div>
            <div> <a onclick=window.open("http://capaobonito.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefcapaobonito.jpg" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Prefeitura de Cap&atilde;o Bonito</small></div>
            <div> <a onclick=window.open("http://www.cesariolange.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefcesario.png" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Prefeitura de Ces&aacute;rio Lange</small></div>
            <div> <a onclick=window.open("http://www.ipero.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefipero.png" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Prefeitura de Iper&oacute;</small></div>
            <div>  <a onclick=window.open("http://www.pilardosul.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefpilardosul.png" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Prefeitura de Pilar do Sul</small></div>
            <div> <a onclick=window.open("http://www.saltodepirapora.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefsaltopirapora.jpg" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Prefeitura de Salto de Pirapora</small></div>  
            <div>  <a onclick=window.open("http://www.saomiguelarcanjo.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefsaomiguel.png" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Prefeitura de S&atilde;o Miguel Arcanjo</small></div>
            <div>  <a onclick=window.open("http://www.saoroque.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefsaoroque.jpg" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Prefeitura de S&atilde;o Roque</small></div>               
            <div> <a onclick=window.open("http://www.sorocaba.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefsorocaba.png" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Prefeitura de Sorocaba</small></div>
            <div> <a onclick=window.open("http://www.uniso.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/uniso.png" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>UNISO - Universidade de Sorocaba</small></div>
            <div> <a onclick=window.open("http://www.objetivosorocaba.com.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/objetivo.png" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Col&eacute;gio Objetivo Sorocaba</small></div>
            <div> <a onclick=window.open("https://www.fbb.org.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/tecsocial.png" alt="" width="39.9%"  /></a><p style="margin-top: 15px"><small>Fundação Banco do Brasil</small></div>

        </div>
        <div class="youtube_titulo_corpo container" style="height: 5%;">
            <span style="display:inline-block; vertical-align:middle; "> <i  id="icoYoutube"  class="fa fa-youtube-play fa-1x"></i> YouTube </span>
        </div>
        <div id="youtube_frame_corpo" style="height: 45%;">

            <iframe id="frameyoutube" style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/fBG6XBIc8H4" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="rede_titulo_corpo container" style="height: 5%">
            <span style="display:inline-block; vertical-align:middle"> <i  id="icoYoutube"  class="fa fa-map-marker fa-1x"></i> Rede de N&uacute;cleos </span>
        </div>
        <div id="rede_frame_corpo" style="height: 45%;">
            <div id="map-canvas" style="width: 100%; height: 100%; overflow: hidden;"></div>
        </div>

    </div>
<?php else: ?>


    <div class="destaques_menu1 container" style="width: 59.9%; height: 6%; float: left; cursor: pointer;"><span style="display:inline-block; vertical-align:middle; "><i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques</span></div>
    <div class="facebook_menu1 container" style="width: 39.9%; height: 6%; float: right; cursor: pointer;"><span style="display:inline-block; vertical-align:middle"><i id="icoFace"  class="fa fa-facebook-square fa-1x"></i> Facebook</span> </div>


    <div id="destaques_corpo" style="border-bottom: 0.15em white solid; overflow: hidden;">
        <div style="width: 100%; height: 10%; padding-top: 2%; font-size: 1.5em;  ">
          <!--  <button onclick=location.href="<?php echo $root_html ?>destaques/blog/" style="background: #ff6600; color:white;" class="blog"> <i class='fa fa-rss fa-1x'></i> Blog</button> | -->
            <button onclick=location.href="<?php echo $root_html ?>destaques/noticia/" style="background: #ff6600; color:white;" class="noticias"><i class='fa fa-newspaper-o fa-1x '></i> Noticias</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/evento/" style="background: #ff6600; color:white;" class="eventos_destaque"><i class='fa fa-calendar-o fa-1x '></i> Eventos</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/publicacao/" style="background: #ff6600; color:white;" class="publicacoes"><i class='fa fa-book fa-1x '></i> Publicações</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/guia_do_vestibulando/" style="background: #ff6600; color:white;" class="guia_vestibulando"><i class='fa fa-graduation-cap fa-1x '></i> Guia do Vestibulando</button>
        </div>
        <div class="slider" style="height: 85%">
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/HomenagemCMS2015" class="trs"><img  src="<?php echo $root_html ?>img/facebook/HomenagemCMS2015.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 10px"> PFC recebe homenagem na C&acirc;mara Municipal de Sorocaba!
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/EPFC2015" class="trs"><img  src="<?php echo $root_html ?>img/facebook/EPFC2015.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 10px"> Cerca de 250 Alunos na II EPFC!!
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/EducareCruzeiroDoSul2016" class="trs"><img  src="<?php echo $root_html ?>img/destaques/noticias/EducareCruzeiroDoSul2016.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 10px"> PFC e o VI ERFC s&atilde;o destaques em reportagem do Jornal Cruzeiro do Sul!
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/TVTEM2015" class="trs"><img  src="<?php echo $root_html ?>img/destaques/noticias/TVTEM2015.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 10px"> PFC &eacute; tema de reportagem na TV TEM!
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/noticia/CienciaEm3Minutos" class="trs"><img  src="<?php echo $root_html ?>img/destaques/noticias/CienciaEm3Minutos.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 10px"> Novo projeto no ar!
            </div>
            <div>
                <a href="<?php echo $root_html ?>destaques/publicacao/ERFC2015" class="trs"><img  src="<?php echo $root_html ?>img/destaques/publicacoes/ERFC2015.png" alt="Destaque 1" width="60%"/></a><p style="margin-top: 10px"> PFC lan&ccedil;a mais um livro!
            </div>


        </div>
    </div>
    <div id="facebook_corpo" style="overflow: hidden; width: 100%; border-bottom: 0.15em white solid;" >
        <div class="fb-page" data-width="500" data-height="500" style="overflow-y: scroll" data-href="https://www.facebook.com/futurocientista" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/futurocientista"><a href="https://www.facebook.com/futurocientista">Programa Futuro Cientista</a></blockquote></div></div>
    </div>









    <div id='rede_corpo' style="border-bottom: 0.15em white solid;">
        <div class="rede_titulo_corpo container" style="height: 8%">
            <span style="display:inline-block; vertical-align:middle"> <i  id="icoYoutube"  class="fa fa-map-marker fa-1x"></i> Rede de N&uacute;cleos </span>
        </div>
        <div id="rede_frame_corpo">
            <div id="map-canvas" style="width: 100%; height: 100%; overflow: hidden; margin-left: auto; margin-right: auto;"></div>
        </div>
    </div>

    <div id='youtube_corpo' style="border-bottom: 0.15em white solid;">
        <div class="youtube_titulo_corpo container">
            <span style="display:inline-block; vertical-align:middle"> <i  id="icoYoutube"  class="fa fa-youtube-play fa-1x"></i> YouTube </span>
        </div>
        <div id="youtube_frame_corpo">

            <iframe id="frameyoutube" style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/fBG6XBIc8H4" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>







    <div  class="conteudo_ead" style="float: left; width: 59.9%; height: 6%; border-bottom: 0.15em white solid; cursor: pointer;">
        <div class="container">
            <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-gear fa-1x" ></i> Conte&uacute;do EAD </span>

        </div>
    </div>

    <div class="ajude_corpo" style="border-bottom: 0.1em white solid; background-color: #ff6600; color: #ffffff; height: 6%; width: 39.9%; float: right; ">
        <div class="container">
            <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-heart fa-1x" ></i> Ajude o Programa Futuro Cientista® </span>
        </div>
    </div>



    <div  class="conteudo_ead_corpo" style="float: left; width: 59.9%; height: 63%;  background: lightgray; color: #ff6600; border-bottom: 0.15em white solid;">
    <div class="slider" style="height: 100%; ">
        
        <?php
        while ($res = mysql_fetch_array($result_conteudo)) {
            echo '<div>';
            echo '<div style="cursor: pointer; position: relative; left: 10%; width: 80%; height: 70%; background: lightgray; color: black;" onclick="location.href= \''.$root_html.'/conteudo/'.$res['id_tipo'].'/'.$res['id_conteudo'].'\'"/>';
            echo  '<div style="height: 10%; width: 100%; background: '.$res['cor'].'; color: white; border-bottom: 0.1em solid white;" class="container"><span><i class="fa '.$res['ico'].' fa-1x"></i> '.$res['nome'].'</span></div>';
            echo  '<div style="height: 10%; width: 100%; background: white; color: '.$res['cor'].';" class="container"><span>'.$res['titulo'].'</span></div>';
            echo  '<div style="height: 7%; width: 100%; background: '.$res['cor'].'; color: white;" class="container"><span><small>Temas <i class="fa fa-angle-double-down fa-1x"></i></small></span></div>';
            echo  '<div style="height: 23%; width: 100%; background: white ">';
            $query_tag = 'SELECT t.nome from temas as t inner join tema_conteudo as t_c on t.tema = t_c.tema where t_c.id_conteudo = "' . $res['id_conteudo'] . '"';
            $result_tag = mysql_query($query_tag);
            while ($res_tags = mysql_fetch_assoc($result_tag)) {
                echo '<div class="resultado_tag"><small><i class="fa fa-caret-right fa-1x" style="color: #ff6600;"></i> ';
                echo $res_tags['nome'];
                echo '</small></div>';
            }
            echo  '</div>';
            echo  '<div style="height: 7%; width: 100%; background: '.$res['cor'].'; color: white ;" class="container"><span><small>Descrição <i class="fa fa-angle-double-down fa-1x"></i></small></span></div>';
            echo  '<div style="height: 43%; width: 98%; padding-left: 1%; padding-right: 1%; background: white;" ><small><br>'.$res['descricao'].'</small></div>';
            echo'</div>';
            echo '</div>';
        }
        
        ?>
            
            


        </div>  
    </div>

    <div id="ajude_corpo" style="float: right; width: 39.9%; height: 63%;  color: #ff6600; border-bottom: 0.15em white solid; overflow: hidden;">
       <!-- <div class="hover" id="pessoa_juridica">
            <div class="container" id="pessoa_juridica_inicial">
                    <span style="display:inline-block; vertical-align:middle">

                        <i  id="icoParceiro" class="fa fa-institution fa-5x"></i><br>

                        Pessoa Jur&iacute;dica<br>Saiba como nos ajudar. <br>

                    </span>

            </div>

            <div class="container" id="pessoa_juridica_final">
                    <span style="display:inline-block; vertical-align:middle">


                        <i  id="icoParceiro" class="fa fa-institution fa-3x"></i><br>

                        Pessoa Jur&iacute;dica:<br>

                        <table class="tabela" style="width: 100%">

                            <tr><td>
                                    <i class="fa fa-check-square fa-1x"></i> Voc&ecirc; pode se tornar nosso  <button class="parceiros_menu1 "> <i  id="icoParceiro" class="fa fa-institution fa-1x "></i> Parceiro </button> .

                                </td></tr>
                            <tr><td>
                                    <i class="fa fa-check-square fa-1x"></i> Voc&ecirc; pode nos enviar sugest&otilde;es atrav&eacute;s do nosso canal de <button class="contato " style="background: black; color: #ff6600;"> <i  id="icoParceiro" class="fa fa-phone fa-1x"></i> Contato</button> .

                                </td></tr>
                            <tr><td>
                                    <i class="fa fa-check-square fa-1x"></i> Voc&ecirc; pode nos doar qualquer valor, atrav&eacute;s do PagSeguro:

                                </td></tr>
                            <tr><td style="text-align: center;">
                                    <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">

                                        <input type="hidden" name="currency" value="BRL" />
                                        <input type="hidden" name="receiverEmail" value="coordenador@futurocientista.net" />
                                        <input  class=" doacao sombra" type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/205x30-doar-preto.gif" name="submit" alt="Pague com PagSeguro - &eacute; r&aacute;pido, gr&aacute;tis e seguro!" />
                                    </form>
                                </td> </tr>
                        </table>
                    </span>
            </div>

        </div>

        <div class="hover" id="pessoa_fisica">
            <div class="container" id="pessoa_fisica_inicial">
                    <span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro" class="fa fa-user fa-5x"></i> <br>Pessoa F&iacute;sica<br>Saiba como nos ajudar.
            </div>

            <div class="container" id="pessoa_fisica_final" style="background: white; color: #ff6600;">
                    <span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro" class="fa fa-user fa-3x"></i> <br>Pessoa F&iacute;sica<br>
                        <table class="tabela" style="width: 100%;">
                            <tr><td>
                                    <i  id="icoParceiro" class="fa fa-check-square fa-1x"></i>  Curta, comente e compartilhe em nossas p&aacute;ginas no <button class="facebook_menu1 "><i  id="icoParceiro" class="fa fa-facebook-square fa-1x" ></i> Facebook </button>
                                    <br>  e no <button class="youtube_botao"><i  id="icoParceiro" class="fa fa-youtube-play fa-1x" ></i> Youtube </button>.
                                </td> </tr>
                            <tr><td>
                                    <i class="fa fa-check-square fa-1x"></i> Voc&ecirc; pode nos indicar  <button class="parceiros_menu1 "> <i  id="icoParceiro" class="fa fa-institution fa-1x "></i> Parceiros </button> conhecidos.

                                </td></tr>
                            <tr><td>
                                    <i class="fa fa-check-square fa-1x"></i> Voc&ecirc; pode nos enviar sugest&otilde;es atrav&eacute;s do nosso canal de <button class="contato " style="background: black; color: #ff6600;"> <i  id="icoParceiro" class="fa fa-phone fa-1x"></i> Contato</button> .

                                </td></tr>
                            <tr><td>
                                    <i class="fa fa-check-square fa-1x"></i> Voc&ecirc; pode nos doar qualquer valor, atrav&eacute;s do PagSeguro:

                                </td></tr>
                            <tr><td style="text-align: center;">
                                    <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">

                                        <input type="hidden" name="currency" value="BRL" />
                                        <input type="hidden" name="receiverEmail" value="coordenador@futurocientista.net" />
                                        <input  class=" doacao sombra" type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/205x30-doar-preto.gif" name="submit" alt="Pague com PagSeguro - &eacute; r&aacute;pido, gr&aacute;tis e seguro!" />
                                    </form>
                                </td> </tr>
                        </table>

                    </span>
            </div>

        </div> -->

        <span style="position: relative; top: 5%; font-size: 1.3em; margin-left: auto; margin-right: auto;">Sua solidariedade é nosso combustível !</span>

        <img src="img/ajude_index.jpg" width="70%" alt="" style="position: relative; top: 5%; margin-left: auto; margin-right: auto;">
    </div>

    <script type="text/javascript" language="JavaScript">

        $("#pessoa_fisica_inicial").mouseenter(function () {
            $("#pessoa_fisica_inicial").hide();
            $(".barra").hide();
            $("#pessoa_juridica").stop().animate({width: '23%'});
            $("#pessoa_fisica").stop().animate({width: '77%'});
            $("#pessoa_fisica_final").show();
        });

        $("#pessoa_fisica_final").mouseleave(function () {
            $("#pessoa_juridica").stop().animate({width: '50%'});
            $("#pessoa_fisica").stop().animate({width: '50%'});
            $("#pessoa_fisica_inicial").show();
            $("#pessoa_fisica_final").hide();
        });

        $("#pessoa_juridica_inicial").mouseenter(function () {
            $("#pessoa_juridica_inicial").hide();
            $(".barra").hide();
            $("#pessoa_fisica").stop().animate({width: '23%'});
            $("#pessoa_juridica").stop().animate({width: '77%'});
            $("#pessoa_juridica_final").show();
        });

        $("#pessoa_juridica_final").mouseleave(function () {
            $("#pessoa_juridica").stop().animate({width: '50%'});
            $("#pessoa_fisica").stop().animate({width: '50%'});
            $("#pessoa_juridica_inicial").show();
            $("#pessoa_juridica_final").hide();
        });

    </script>


    <div class="equipe" style="float: left; width: 39.9%; height: 6%; background: black; color: #ff6600; border-bottom: 0.15em white solid; cursor: pointer;">
        <div class="container">
            <span style="display:inline-block; vertical-align: middle"> <i class="fa fa-users fa-1x" ></i> Equipe </span>
        </div>
    </div>



    <div  class="sobre" style="float: right; width: 59.9%; height: 6%; background: black; color: #ff6600; border-bottom: 0.15em white solid; cursor: pointer;">
        <div class="container">
            <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-file-text-o fa-1x" ></i> Sobre </span>

        </div>
    </div>




    <div  class="equipe_corpo" style="float: left; width: 39.9%; height: 63%; color: #000; border-bottom: 0.15em white solid;">
        <div class="slider" style="margin-left: auto; margin-right: auto; width: 100%; height: 100%; float:left;">
            <div>
                <h1>Diretor Presidente</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/fabio_leite.png" alt="" width="30%">

                <p>Prof. Dr. Fábio de Lima Leite</p>
            </div>

            <div>
                <h1>Vice-Diretora Presidenta</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/carol.jpg" alt="" width="30%">

                <p>Caroline Pavan Brandini</p>
            </div>

            <div>
                <h1>Superintentende de Marketing</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/fran.jpg" alt="" width="30%">

                <p>Francine de Moraes da Cunha</p>
            </div>

            <div>
                <h1>Superintentende de T.I</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/caio.jpg" alt="" width="30%">

                <p>Caio Perroni Gnecco</p>
            </div>

            <div>
                <h1>Assistente de T.I e Webmaster</h1>

                <img class="sombra" src="img/equipe/superintendentes/bernardo.jpg" width="30%" alt="">

                <p>Bernardo Pinheiro Camargo</p>
            </div>

            <div>
                <h1>Superintendente de Comunicação</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/miriam.jpg" alt="" width="30%">

                <p>Míriam Bonora dos Santos</p>
            </div>

            <div>
                <h1>Superintendente de Prospec&#231;ão e Negócios Públicos</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/neto.jpg" alt="" width="30%">

                <p>José Carlos Tallarico Neto</p>
            </div>

            <div>
                <h1>Superintendente de Prospec&#231;ão e Negócios Privados</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/veronica.jpg" alt="" width="30%">

                <p>Verônica Leal</p>
            </div>

            <div>
                <h1>Superintendente de Atividades e Eventos</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/cesar.jpg" alt="" width="30%">

                <p>César Lopes de Oliveira Gregório</p>
            </div>

            <div>
                <h1>Superintendente Educacional e Social</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/mari.jpg" alt="" width="20%">

                <p>Lucimari Cristini de Oliveira Gimenez</p>
            </div>

            <div>
                <h1>Superintendente Científica</h1>

                <!--  <div style="width: 25%; height: 40%; margin-left: auto; margin-right:auto; background-color: #333;"></div> -->
                <img class="sombra" src="img/equipe/superintendentes/moema.jpg" alt="" width="30%">

                <p>Moema A. Hausen</p>
            </div>
        </div>
    </div> <!-- EQUIPE CORPO -->


    <div  class="sobre_corpo" style="overflow: hidden; float: right; width: 49.9%; height: 63%;  background: lightgray;  color: #000; border-bottom: 0.15em white solid; padding-left: 5%; padding-right: 5%;">
        <div>
            <h1>Sobre o Programa Futuro Cientista</h1>
            <p>
                O Programa Futuro Cientista é uma Tecnologia Social criada para descobrir futuros talentos para a ciência entre jovens de baixa renda, e proporcionar condições para seu desenvolvimento desde a educação básica até a vida universitária. A iniciativa nasceu em 2010 na Universidade Federal de São Carlos (Ufscar), campus Sorocaba, e já acolheu centenas de estudantes em 11 cidades da região.
            </p>

            <img src="img/sobre/plano-de-vida-PFC.png" width="70%" alt="" style="margin-left: auto; margin-right: auto;"/>
        </div>
    </div> <!-- SOBRE CORPO -->


    <div  class="eventos" style="float: left; width: 59.9%; height: 6%; background: black; color: #ff6600; border-bottom: 0.1em white solid; cursor: pointer;">
        <div class="container">
            <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-gear fa-1x" ></i> Projetos </span>
        </div>
    </div>
    <div class="contato" style="float: right; width: 39.9%; height: 6%; background: black; color: #ff6600; border-bottom: 0.1em white solid; cursor: pointer;">
        <div class="container">
            <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-phone fa-1x" ></i> Contato </span>
        </div>
    </div>

    <div  class="projetos_corpo" style="overflow: hidden; float: left; width: 59.9%; height: 64.1%;  background: lightgray;  color: #ff6600; border-bottom: 0.15em white solid; padding-bottom: 2%;">
        <div class="slider" style="width: 100%; height: 100%;">
            <div>
                <h1 align="center">Ação social nas Casas Lares Bethel</h1>
                <img src="img/projetos/acao-social.jpg" width="60%" alt="" style="margin-left: auto; margin-right: auto;">
            </div>

            <div>
                <h1 align="center">Escola Preparat&#243;ria para Futuros Cientistas</h1>
                <img src="img/projetos/EPFC-logo.png" width="40%" alt="" style="margin-left: auto; margin-right: auto;">
            </div>

            <div>
                <h1 align="center">Encontro Regional de Futuros Cientistas</h1>
                <img src="img/sobre/todos-alunos.jpg" width="80%" alt="" style="margin-left: auto; margin-right: auto;">
            </div>

            <div>
                <h1 align="center">Concurso Liter&aacute;rio</h1>
                <img src="img/projetos/concurso-literario.jpg" width="60%" alt="" style="margin-left: auto; margin-right: auto;">
            </div>

            <div>
                <h1 align="center">Maratona do Conhecimento</h1>
                <img src="img/projetos/maratona-do-conhecimento.png" width="60%" alt="" style="margin-left: auto; margin-right: auto;">
            </div>

            <div>
                <h1 align="center">Cursinho Talentos do Futuro</h1>
                <img src="img/projetos/cursinho-vestibular.jpg" width="60%" alt="" style="margin-left: auto; margin-right: auto;">
            </div>

            <div>
                <h1 align="center">Ci&#234;ncia em 3 minutos</h1>
                <img src="img/destaques/noticias/CienciaEm3Minutos.png" width="80%" alt="" style="margin-left: auto; margin-right: auto;">
            </div>

            <div>
                <h1 align="center">Clubes de Ci&#234;ncia</h1>
                <img src="img/projetos/clubes-de-ciencia.jpg" width="60%" alt="" style="margin-left: auto; margin-right: auto;">
            </div>

        </div>
    </div>

    <div  class="contato_corpo" style="float: right; width: 39.9%; height: 63%;  color: #ff6600; border-bottom: 0.15em white solid; margin-left: auto; margin-right: auto; padding-top: 2em; background-color: lightgray;">
        <form style="float: left; width: 93%; height: 100%; " class="formulario"   action="contato/mail.php" method="post">

            <select name="tipo"  required>
                <option disabled selected value="OUTROS">Tipo de contato</option>
                <option value="DUVIDA">D&uacute;vida</option>
                <option value="SUGESTAO">Sugest&atilde;o</option>
                <option value="RECLAMACAO">Reclama&ccedil;&atilde;o</option>
                <option value="OUTROS">Outros</option>
            </select><br><br>
            <input  required="required" type="text" name="nome" placeholder="Seu nome"><br><br>
            <input  required="required" type="text" name="email" placeholder="Seu e-mail"><br><br>
            <input  required="required" type="text" name="assunto" placeholder="Assunto"><br><br>
            <textarea style="height: 15%;" rows="10" name="msg" placeholder="Mensagem"></textarea> <br>

            <p align="center">Por favor preencha todos os campos</p>
            <button type="submit" class=""><i class="fa fa-send fa-1x"></i> Enviar</button>
        </form> <!-- CONTATO -->
    </div>
    <div class="sistema" style="width: 100%; height: 6%; float: left; background: black; color: #ff6600; border-bottom: 0.15em white solid; cursor: pointer;">
        <div class="container">
            <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-gear fa-1x"></i> Sistema EAD </span>

        </div>
    </div>


    <div class="sistema_corpo" style="background: lightgray; width: 100%; height: 30%; float: left; border-bottom: 0.15em white solid; ">
        <form class="formulario" style=" padding: 0; box-shadow: none; height: 50%; width: 100%; background: transparent; color: white;" id="form" action="sistema/login.php" method="post">

            <br><br>
            <input class="login_email" style="width: 25%; height: 1.5em; border-radius: 0.3em; padding-left: 0.2em; font-size: 1em;" type="text" name="email" placeholder="Email (nome@exemplo.com)" required="required">
            <br><br>

            <input class="login_senha"  style="width: 25%; height: 1.5em; border-radius: 0.3em; padding-left: 0.2em; font-size: 1em " type="password" name="senha" maxlength=10 pattern="^.{6,10}$" placeholder="Senha" required="required">
            <br><br>

            <button class="login_submit" style="height: 1.5em; font-size: 1em " type="submit"><i class="fa fa-send fa-1x"></i> Entrar</button>
        </form>
    </div>


    <?php
endif;
include 'web/footer.php';
    ?>

<div id="inicio" style=" position: absolute; bottom: 0; right: 0; width: 100%; height: 80.2%; overflow: scroll; background: black; text-align: center; z-index: 6; font-family: 'Yanone Kaffeesatz', sans-serif; line-height: 0.8em;">
    <div style="background-color: white; color: black; width: 100%; height: 300%; font-size: 0.8em; border-top: 1em #ff6600 solid; z-index: 6;  ">

        <style>
            #animation{
                height: 25%;
                width: 100%;
                background: white;
                float: left;
                color: white;
                text-align: left;
                margin-left: auto;
                margin-right: auto;
            }
            #ico1{
                position: absolute;
                bottom: -50%;
                left: 0;
                font-size: 2em;
                height: 5%;
                width: 5%;
                -webkit-animation-name: example; /* Chrome, Safari, Opera */
                -webkit-animation-duration: 10s; /* Chrome, Safari, Opera */
                animation-name: mov1;
                animation-duration: 10s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
                animation-delay: 2s;
                color: #ff6600;
                z-index: 3;
                float: left;

            }
            #ico2{
                position: absolute;
                bottom: -50%;
                left: 0;
                font-size: 4em;
                height: 5%;
                width: 5%;
                -webkit-animation-name: example; /* Chrome, Safari, Opera */
                -webkit-animation-duration: 10s; /* Chrome, Safari, Opera */
                animation-name: mov2;
                animation-duration: 10s;
                animation-timing-function: linear;
                animation-delay: 2s;
                animation-iteration-count: infinite;
                color: white;
                z-index: 2;
                float: left;


            }
            #ico3{
                position: absolute;
                bottom: -50%;
                left: 0;
                font-size: 6em;
                height: 5%;
                width: 5%;
                -webkit-animation-name: example; /* Chrome, Safari, Opera */
                -webkit-animation-duration: 10s; /* Chrome, Safari, Opera */
                animation-name: mov3;
                animation-duration: 10s;
                animation-timing-function: linear;
                animation-delay: 2s;
                animation-iteration-count: infinite;
                color: white;
                z-index: 1;
                float: left;

            }



            /* Chrome, Safari, Opera */
            /* Chrome, Safari, Opera */
            @-webkit-keyframes mov1 {
                0%   {color:#ff6600; left:0; bottom:-50%;}
                33%  {z-index: 3; color:#ff6600; font-size: 4em; left:40%; bottom:-50%;}
                38%  {z-index: 1; color: white; font-size: 4em; left:45%; bottom:-50%}
                66%  {z-index: 1; color: white; font-size: 4em; left:90%; bottom:-50%}
                71%  {z-index: 1; color: white; font-size: 4em; left:90%; bottom:-50%}
                100%  {z-index: 1; color: white; font-size: 4em; left:100%; bottom:-50%}


            }

            /* Standard syntax */
            @keyframes mov1 {
                0%   {color:#ff6600; left:0; bottom:-50%;}
                33%  {z-index: 3; color:#ff6600; font-size: 4em; left:33%; bottom:-50%;}
                38%  {z-index: 1; color: white; font-size: 4em; left:38%; bottom:-50%}
                66%  {z-index: 1; color: white; font-size: 4em; left:66%; bottom:-50%}
                71%  {z-index: 1; color: white; font-size: 4em; left:71%; bottom:-50%}
                100%  {z-index: 1; color: white; font-size: 4em; left:100%; bottom:-50%}
            }


            /* Chrome, Safari, Opera */
            /* Chrome, Safari, Opera */
            @-webkit-keyframes mov2 {
                0%   {color:white; left:0%; bottom:-50%;}
                33%  {z-index: 2; color: white; font-size: 4em; left:40%; bottom:-50%;}
                38%  {z-index: 3; color: #ff6600; font-size: 4em; left:45%; bottom:-50%}
                66%  {z-index: 3; color: #ff6600; font-size: 6em; left:90%; bottom:-50%}
                71%  {z-index: 2; color: white; font-size: 6em; left:90%; bottom:-50%}
                100%  {z-index: 2; color: white; font-size: 6em; left:100%; bottom:-50%}
            }

            /* Standard syntax */
            @keyframes mov2 {
                0%   {color:white; left:0%; bottom:-50%;}
                33%  {z-index: 2; color: white; font-size: 4em; left:33%; bottom:-50%;}
                38%  {z-index: 3; color: #ff6600; font-size: 4em; left:38%; bottom:-50%}
                66%  {z-index: 3; color: #ff6600; font-size:6em; left:66%; bottom:-50%}
                71%  {z-index: 2; color: white; font-size: 6em; left:71%; bottom:-50%}
                100%  {z-index: 2; color: white; font-size: 6em; left:100%; bottom:-50%}
            }


            /* Chrome, Safari, Opera */
            /* Chrome, Safari, Opera */
            @-webkit-keyframes mov3 {
                0%   {color: white; left:0%; bottom:-50%;}
                33%  {z-index: 1; color: white; font-size: 4em; left:33%; bottom:-50%;}
                38%  {z-index: 1; color: white; font-size: 4em; left:38%; bottom:-50%}
                66%  {z-index: 1; color: white; font-size: 6em; left:90%; bottom:-50%}
                71%  {z-index: 3; color: #ff6600; font-size: 6em; left:90%; bottom:-50%}
                100%  {z-index: 3; color: #ff6600; font-size: 6em; left:100%; bottom:-50%}
            }

            /* Standard syntax */
            @keyframes mov3 {
                0%   {color: white; left:0%; bottom:-50%;}
                33%  {z-index: 1; color: white; font-size: 4em; left:33%; bottom:-50%;}
                38%  {z-index: 1; color: white; font-size: 4em; left:38%; bottom:-50%}
                66%  {z-index: 1; color: white; font-size: 6em; left:66%; bottom:-50%}
                71%  {z-index: 3; color: #ff6600; font-size: 6em; left:71%; bottom:-50%}
                100%  {z-index: 3; color: #ff6600; font-size: 6em; left:100%; bottom:-50%}
            }




        </style>

        <div id="animation" style="height: 23%; width: 100%; margin-left: auto; margin-right: auto;">

            <img id="acesso" src="img/landing.png" style="position: relative; top: 10%; left: 10%; width: 35%; cursor: pointer; float: left;">

             <span style="font-size: 3em; color: black; position: relative; top: 30%; left: 15%; width: 50%; float: left;"> Educação e ciência transformam vidas.<br><br><br><br>  Junte-se a nós e ajude a transformar <br><br><br><br> o mundo.<br><br><br><br>
                 <span style="font-size: 0.7em;">
                 <button class="sobre_inicio" style="cursor: pointer; background: #ff6600; color: white; "><i class="fa fa-file-text-o fa-1x"></i> Sobre o PFC</button> |
              <button class="parceiros_menu1" style=" cursor: pointer; "><i class="fa fa-institution fa-1x"></i> Parceiros</button> |
             <button class="acesso" style=" cursor: pointer; background: #3b5998; color: white "><i class="fa fa-arrow-circle-right fa-1x"></i> Entre no site !</button>
                 </span>
             </span>

        </div>

        <div style="width: 70%; overflow: hidden; border-radius: 10px; background-color: transparent; border: 1px solid #ff6600; margin-left: auto; margin-right: auto; padding: 1em; position: relative; top: 0;">

            <h1 class="sobre_inicio2" align="center" style="background-color: white; font-size: 2em; color: #ff6600; font-weight: normal; cursor: pointer;">Conheça o Programa Futuro Cientista <i class="fa fa-angle-double-down fa-1x"></i>
            </h1>
            <p style="font-size: 1.5em; line-height: 1em;">
                O Programa Futuro Cientista (PFC) tem a miss&#227;o de incentivar e proporcionar condi&#231;&#245;es para o desenvolvimento cient&#237;fico desde a fase escolar, investindo na forma&#231;&#227;o b&#225;sica dos estudantes e preparando-os para encarar e superar desafios. A iniciativa nasceu em 2010 na Universidade Federal de S&#227;o Carlos (Ufscar), campus Sorocaba, e &#233; reconhecida como Tecnologia Social pela Funda&#231;&#227;o Banco do Brasil.
            </p>
            <p style="font-size: 1.5em;  line-height: 1em;">
                Encontrar futuros talentos para a ci&#234;ncia &#233; o que move o PFC, que promove diversas atividades complementares ao ensino regular e acompanha de perto cada jovem em sua trajet&#243;ria estudantil, promovendo a alfabetiza&#231;&#227;o cient&#237;fica. Participam alunos de escolas p&#250;blicas e Organiza&#231;&#245;es N&#227;o-Governamentais (Ongs) que estejam cursando do 6&#186; ao 9&#186; ano do Ensino Fundamental e do 1&#186; ao 3&#186; ano do Ensino M&#233;dio.
            </p>
        </div>

        <br><br><br><br><br><br><br><br>

        <div style="width: 100%; height: 1px; border-top: 1px solid rgba(0,0,255,.4);"></div>

        <h1 id="plano_de_vida" align="center" style="background-color: white; font-size: 2em; color: #3b5998; font-weight: normal; cursor: pointer; border: 1px solid rgba(0,0,255,.4); padding: .5em; border-radius: 10px; width: 20%; margin-left: auto; margin-right:auto; margin-top: -2%;"> Conheça nosso Plano de Vida <i class="fa fa-angle-double-down fa-1x"></i></h1>
        <br><br><br><br>



        <i class="fa fa-child fa-4x" id="ico1"></i>
        <i class="fa fa-male fa-4x" id="ico2"></i>
        <i class="fa fa-graduation-cap fa-4x" id="ico3"></i>


        <div id="plano_vida" style=" width: 100%; height: 5%;">
            
            <div style="width: .25%; height: 100%; float: left;"></div>


            <div style="width: 12%; overflow: hidden; background-color: #FFCB08; float: left; padding-top: .6em; padding-bottom: .6em;">
                <h1 align="center" style="line-height: 1em;">Cientista Júnior <br> (6º e 7º ano)</h1>
            </div>

            <div style="width: .5%; height: 100%; float: left;"></div>

            <div style="width: 12%; overflow: hidden; background-color: #FFCB08; float: left;">
                <h1 align="center" style="line-height: 1em;">Estagiário de Investigação Cientifica <br> (8º ano)</h1>

            </div>

            <div style="width: .5%; height: 100%; float: left;"></div>


            <div style="width: 12%; overflow: hidden; background-color: #FFCB08; float: left;">
                <h1 align="center" style="line-height: 1em;">Assistente de Investigação Cientifica <br> (9º ano)</h1>
            </div>

            <div style="width: .5%; height: 100%; float: left;"></div>


            <div style="width: 12%; overflow: hidden; background-color: #A6CE39; float: left;">
                <h1 align="center" style="line-height: 1em;">Investigado Cientifico <br>Júnior <br> (1º e 2º ano)</h1>
            </div>

            <div style="width: .5%; height: 100%; float: left;"></div>


            <div style="width: 12%; overflow: hidden; background-color: #A6CE39; float: left;">
                <h1 align="center" style="line-height: 1em;">Investigado Cientifico <br>Senior <br> (1º e 2º ano)</h1>

            </div>

            <div style="width: .5%; height: 100%; float: left;"></div>


            <div style="width: 12%; overflow: hidden; background-color: #0095DA; float: left;">
                <h1 align="center" style="line-height: 1em;">Cientista <br> Multiplicador <br> (Graduação)</h1>
            </div>

            <div style="width: .5%; height: 100%; float: left;"></div>

            <div style="width: 12%; overflow: hidden; background-color: #0095DA; float: left; padding-top: .6em; padding-bottom: .6em;">
                <h1 align="center" style="line-height: 1em;">Cientista <br> (Pós-Graduação)</h1>
            </div>

            <div style="width: .5%; height: 100%; float: left;"></div>

            <div style="width: 12%; overflow: hidden; background-color: #F58220; float: left;">
                <h1 align="center" style="line-height: 1em;">Cientista <br> Senior <br>(Pesquisador)</h1>
            </div>

            <div style="width: .25%; height: 100%; float: left;"></div>

        </div>

        <style>
            #plano_vida {
                position: relative;
                top: 3.5%;
            }

            @media (max-width: 2001px){
                #plano_vida{
                    position: relative;
                    top: 6%;
                }
            }
        </style>

        <div style="width: 100%; height: 3%;"></div>

        <div style="margin-top: 10%;width: 100%; height: 1px; border-top: 1px solid rgba(0,255,0,.5);"></div>

        <h1 id="parceiros_inicio" align="center" style="background-color: white; font-size: 2em; color: green; font-weight: normal; cursor: pointer; border: 1px solid rgba(0,255,0,.5); padding: .5em; border-radius: 10px; width: 20%; overflow: hidden; margin-left: auto; margin-right:auto; margin-top: -2%;">Conheça nossos Parceiros <i class="fa fa-angle-double-down fa-1x"></i></h1>


        <div style="margin-top: 0%;width: 100%; overflow: hidden; background-color: white;">

            <div id="prefeituras_inicio" style="width: 100%; overflow: hidden; padding-bottom: 3%; padding-top: 1%;  background: white;"><br><br><br>
                <span style="font-size: 2em; color: #ff6600;"><i class="fa fa-institution fa-1x"></i> Prefeituras</span><br><br><br>

                <div style="float: left; width: 16.666666666%; overflow: hidden; ">
                    <a onclick=window.open("http://www.anhembi.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefanhembi.png" alt="" width="70%" class="pref_anhembi"/></a>
                    <br><br>Prefeitura de Anhembi
                </div>

                <div style="float: left; width: 16.666666666%;  overflow: hidden; ">
                    <a onclick=window.open("http://capaobonito.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefcapaobonito.jpg" alt="" width="70%"  class="pref_capao_bonito"/>
                    </a><br><br>
                    Prefeitura de Cap&atilde;o Bonito
                </div>

                <div style="float: left; width: 16.666666666%; overflow: hidden;">
                    <a onclick=window.open("http://www.cesariolange.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefcesario.png" alt="" width="70%"  class="pref_cesario_lange"/></a>
                    <br><br>Prefeitura de Ces&aacute;rio Lange
                </div>

                <div style="float: left; width: 16.666666666%; overflow: hidden; ">
                    <a onclick=window.open("http://www.ipero.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefipero.png" alt="" width="70%"  class="pref_ipero"/></a>
                    <br><br>Prefeitura de Iper&oacute;
                </div>

                <div style="float: left; width: 16.666666666%; overflow: hidden;">
                    <a onclick=window.open("http://www.pilardosul.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefpilardosul.png" alt="" width="70%" class="pref_pilar_do_sul"/></a>
                    <br><br>Prefeitura de Pilar do Sul
                </div>

              <!--  <div style="float: left; width: 20%;  height: 45% ">
                    <a onclick=window.open("http://www.saltodepirapora.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefsaltopirapora.jpg" alt="" width="70%"  class="pref_salto_de_pirapora"/></a>
                    <br><br>Prefeitura de Salto de Pirapora
                </div> -->

               <!-- <div style="float: left; width: 20%;  height: 45% ">
                    <a onclick=window.open("http://www.saomiguelarcanjo.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefsaomiguel.png" alt="" width="70%"  class="pref_sao_miguel"/></a>
                    <p style="margin-top: 10px">Prefeitura de S&atilde;o Miguel Arcanjo
                </div> -->

                <div style="float: left; width: 16.666666666%; overflow: hidden; ">
                    <a onclick=window.open("http://www.saoroque.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefsaoroque.jpg" alt="" width="70%"  class="pref_sao_roque"/></a>
                    <br><br>Prefeitura de S&atilde;o Roque
                </div>

              <!--  <div style="float: left; width: 20%; height: 45% ">
                    <a onclick=window.open("http://www.sorocaba.sp.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/prefsorocaba.png" alt="" width="70%"  class="pref_sorocaba"/></a>
                    <br><br>Prefeitura de Sorocaba
                </div> -->

            </div>

            <!-- EMPRESAS -->
            <div id="empresas_inicio"  style=" width: 100%; overflow: hidden; padding-bottom: 10%; padding-top: 3%; background: white;">
                <span style="font-size: 2em; color: #ff6600;"><i class="fa fa-building fa-1x"></i> Empresas</span><br><br><br>
                <div style="float: left; width: 10%; height: 10%"></div>
                <div class="parc_gerdau" style="float: left; width: 20%;"> <a onclick=window.open("http://www.gerdau.com.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/gerdau.png" alt="" width="70%" id="parc_gerdau"/></a><br><br>Gerdau</div>
                <div class="parc_uniso" style="float: left; width: 20%;"> <a onclick=window.open("http://www.uniso.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/uniso.png" alt="" width="70%"  id="parc_uniso"/></a><br><br>UNISO - Universidade de Sorocaba</div>
                <div class="parc_objetivo_sorocaba" style="float: left; width: 20%;"> <a onclick=window.open("http://www.objetivosorocaba.com.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/objetivo.png" alt="" width="70%" id="parc_objetivo_sorocaba" /></a><br><br>Col&eacute;gio Objetivo Sorocaba</div>
                <div class="parc_banco_brasil" style="float: left; width: 20%;"> <a onclick=window.open("https://www.fbb.org.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/tecsocial.png" alt="" width="70%" id="parc_banco_brasil" /></a><p style="margin-top: 10px">Fundação Banco do Brasil</div>
                <div style="float: left; width: 10%; height: 10%"></div>
            </div>

            <div id="realizacao_inicio" style="width: 100%; overflow: hidden; background: black; color: #ff6600; padding-bottom: 3%; padding-top: 3%;">
                <span style="font-size: 2em; color: #ff6600;"><i class="fa fa-plus fa-1x"></i> Realiza&ccedil;&atilde;o e Selos</span><br><br>

                <div style="float: left; width: 20%;">
                    <a onclick=window.open("http://www.ufscar.br/") class="trs">
                        <img  src="<?php echo $root_html ?>img/parceiros/ufscar.png" alt="" width="70%" class="ufscar" />
                    </a>
                    <p style="margin-top: 15px">Universidade Federal de S&atilde;o Carlos - Campus Sorocaba
                </div>

                <div style="float: left; width: 20%;">
                    <a onclick=window.open("http://www.proex.ufscar.br/") class="trs">
                        <img src="<?php echo $root_html ?>img/parceiros/proex.png" alt="" width="70%"  class="proex_ufscar"/>
                    </a>
                    <p style="margin-top: 15px">PROEX - UFSCar</p>
                </div>

                <div style="float: left; width: 20%;">
                    <a onclick=window.open("http://www.brasil.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/brasil.png" alt="" width="70%" class="governo_federal" />
                    </a>
                    <p style="margin-top: 15px">Governo Federal do Brasil</div>

                <div style="float: left; width: 20%;">
                    <a onclick=window.open("http://www.mec.gov.br/") class="trs"><img  src="<?php echo $root_html ?>img/parceiros/mec.png" alt="" width="70%" class="mec"/>
                    </a>
                    <p style="margin-top: 15px"> Minist&eacute;rio da Educa&ccedil;&atilde;o</div>

                <div style="float: left; width: 20%;" onclick="window.open('http://fbb.org.br/tecnologiasocial/banco-de-tecnologias-sociais/pesquisar-tecnologias/detalhar-tecnologia-379.htm')"><img id="logo" src="<?php echo $root_html ?>img/tecsocial.png" width="70%" class="image tecsocial"><p style="margin-top: 45px;"> Selo de Tecnologia Social</div>

            </div>
             <div id="footer_inicio" style="width: 100%; float: left; height: 3.8%; background: white; color: #ff6600; font-size: 1.8em; font-weight: normal;" class="container">
            <span style="vertical-align: middle;">
             <i class="fa fa-copyright fa-1x"></i> Programa Futuro Cientista - Aprendizado pela Descoberta  (<?php echo date("Y") ?> ) | Todos os direitos reservados
             | <i class="fa fa-phone fa-1x"></i> (15)3229-8840 | <i class="fa fa-envelope fa-1x"></i> contato@futucientista.net
           </span>
             </div>
                 <div id="footer_inicio2" style="width: 100%; float: left; height: 4.5%; background: lightgray; color: #ff6600; font-size: 1.4em; padding-top: 1%;">
                 <span style="display: inline-block; vertical-align: middle;">
                    <i class="fa fa-code fa-1x"></i> Site e Sistema desenvolvidos por:
                    <a target="_blank" href="https://br.linkedin.com/in/caio-perroni-gnecco-5908a260">Caio Perroni Gnecco</a> | <a href="mailto:bernardopcamargo@gmail.com">Bernardo Pinheiro Camargo</a>
                </span>
             </div>
         </div>


    </div>
</div>