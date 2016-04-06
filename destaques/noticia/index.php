<?php
$p = @$_GET['p'];

//NOTICIA

include '../../web/seguranca.php';
$query = "SELECT * FROM noticia WHERE link='$p'";
$result = mysql_query($query);
$row = mysql_fetch_assoc ($result);
$descricao = $row["noticia"];
$img = "destaques/noticias/".$p;
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if($p=='' || mysql_num_rows($result)==0) {
    $titulo = 'Not&#237;cias - Programa Futuro Cientista';
} elseif($p !='' || mysql_num_rows($result) != 0)  {
    $titulo = $row['titulo'];
}

$query_noticia = "SELECT * FROM noticia ORDER BY data DESC ";
$result_noticia = mysql_query($query_noticia);


include '../../web/script.php';
include '../../web/header.php';


?>

<style rel="stylesheet" type="text/css">
    .as-prev-arrow {
        left: 0;
        top: 45%;
        font-size: 2.5em;
        z-index: 2;
        color: rgba(255,255,255,.5);
    }

    .as-next-arrow {
        right: 0;
        top: 45%;
        font-size: 2.5em;
        z-index: 2;
        color: rgba(255,255,255,.5);
    }
</style>

<!-- PROBLEMA COM O TITULO
<script>
    $(window).bind("load", function () {
        document.title = <?php echo '"'.$row['titulo'].'"'; ?>;
    });
</script>
-->
<?php if($p=='' || mysql_num_rows($result)==0): ?>
    <div id="menu1">
        <div class="destaques_menu1 container"><span style="display:inline-block; vertical-align:middle"> <i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques</span></div>
    </div>

    <div id="corpo">
        <div id="destaques_sobre" style="height:13%; width: 100%; border-bottom: 0.15em white solid; margin-top: 1%;">
            <div style="width: 100%; height: 10%; padding-top: 1%; font-size: 1.7em; margin-left: 0;">
              <!--  <button onclick=location.href="<?php echo $root_html ?>destaques/blog/" style="background: #ff6600; color:white;" class="blog"> <i class='fa fa-rss fa-1x'></i> Blog</button> | -->
                <button onclick=location.href="<?php echo $root_html ?>destaques/noticia/" style="background: white; color:#ff6600;" class=""><i class='fa fa-newspaper-o fa-1x '></i> Noticias</button> |
                <button onclick=location.href="<?php echo $root_html ?>destaques/evento/" style="background: #ff6600; color:white;" class="eventos_destaque"><i class='fa fa-calendar-o fa-1x '></i> Eventos</button> |
                <button onclick=location.href="<?php echo $root_html ?>destaques/publicacao/" style="background: #ff6600; color:white;" class="publicacoes"><i class='fa fa-book fa-1x '></i> Publicações</button> |
                <button onclick=location.href="<?php echo $root_html ?>destaques/guia_do_vestibulando/" style="background: #ff6600; color:white;" class="guia_vestibulando"><i class='fa fa-graduation-cap fa-1x '></i> Guia do Vestibulando</button>
            </div>
        </div> <!-- MENU DESTAQUES -->

        <div class="slider" style="width: 90%; height: 65%; margin-left: auto; margin-right: auto; position: relative; top: -1em;">

            <div style="height: 100%; width: 10%; float: left;">
                <div class="destaque1" onclick="location.href='Aprovados2016/'" style="width: 49.66666666666667%; background: url('../../img/destaques/noticias/Aprovados2016-destaque.png'); background-size: cover; background-repeat: no-repeat;  background-position: center center; height: 105%; margin-right: 0.6%; float:left; cursor: pointer; overflow: hidden; box-shadow: inset 0 0 70px .5em #000;">
                    <h1 class="hover-text-1" style="position: relative; margin-top: 50%; color: #ffffff; margin-left: 7.5%; margin-right: 7.5%; text-shadow: #000 2px 1px; font-family: 'Open Sans'; font-size: 140%;" align="left">Alunos do PFC realizam sonho de ingressar na universidade
                    </h1>
                </div>


                <div class="destaque-2" onclick="location.href='CesarioLange2016/'" style="width: 49.66666666666667%; height: 51.66666666666667%; margin-bottom: 0.6%; background: url('../../img/destaques/noticias/CesarioLange2016-destaque.png'); background-repeat: no-repeat; background-size: cover; background-position: center center; cursor: pointer; float:left; box-shadow: inset 0 0 70px .5em #000;">
                    <h1 class="hover-text-2" style="margin-top: 19%; margin-left: 7%; margin-right: 7%; color: #ffffff; text-shadow: #000 2px 1px; font-family: 'Open Sans'" align="left">Cesário Lange recebe primeiras atividades do PFC</h1>
                </div>

                <div class="destaque-3" onclick="location.href='HomenagemCMS2015/'" style="width: 49.66666666666667%; height: 51.66666666666667%; background: url('../../img/destaques/noticias/HomenagemCMS2015-destaque.png'); background-repeat: no-repeat; background-size: cover; background-position: center center; cursor: pointer; float:left; box-shadow: inset 0 0 70px .5em #000;">
                    <h1 class="hover-text-3" style="margin-top: 18%; margin-left: 7%; margin-right: 7%; color: #ffffff; text-shadow: #000 2px 1px; font-family: 'Open Sans'" align="left">PFC recebe homenagem na Câmara Municipal de Sorocaba</h1>
                </div>
            </div>

            <!-- <div style="height: 100%; width: 10%; float: left;">
                <div class="destaque1" onclick="location.href='EPFC2015/'" style="width: 49.66666666666667%; background: url('../../img/destaques/noticias/EPFC2015.png'); background-size: cover; background-repeat: no-repeat;  background-position: center center; height: 105%; margin-right: 0.6%; float:left; cursor: pointer; overflow: hidden; box-shadow: inset 0 0 70px .5em #000;">
                    <h1 class="hover-text-1" style="position: relative; margin-top: 50%; color: #ffffff; margin-left: 7.5%; margin-right: 7.5%; text-shadow: #000 2px 1px; font-family: 'Open Sans'; font-size: 140%;" align="left">Cerca de 250 Alunos participam da II EPFC
                    </h1>
                </div>


                <div class="destaque-2" onclick="location.href='EducareCruzeiroDoSul2016/'" style="width: 49.66666666666667%; height: 51.66666666666667%; margin-bottom: 0.6%; background: url('../../img/destaques/noticias/clube_de_ciencia.png'); background-repeat: no-repeat; background-size: cover; background-position: top center; cursor: pointer; float:left; box-shadow: inset 0 0 70px .5em #000;">
                    <h1 class="hover-text-2" style="margin-top: 16%; margin-left: 7%; margin-right: 7%; color: #ffffff; text-shadow: #000 2px 1px; font-family: 'Open Sans';" align="left">Programa estimula criação de clubes de ciências nas escolas - Jornal Cruzeiro do Sul</h1>
                </div>

                <div class="destaque-3" onclick="location.href='../publicacao/ERFC2015'" style="width: 49.66666666666667%; height: 51.66666666666667%; background: url('../../img/destaques/publicacoes/ERFC2015.png'); background-repeat: no-repeat; background-size: cover; background-position: center center; cursor: pointer; float:left; box-shadow: inset 0 0 70px .5em #000;">
                    <h1 class="hover-text-3" style="margin-top: 18%; margin-left: 7%; margin-right: 7%; color: #ffffff; text-shadow: #000 2px 1px; font-family: 'Open Sans'" align="left">PFC lança mais um livro!</h1>
                </div>
            </div> -->

        </div>


        <?php
        while($res = mysql_fetch_array($result_noticia)) {
            echo '<div style="position:relative; overflow: hidden; width: 90%; margin-left: 5%; margin-top: 1%; padding-top: 1%; padding-bottom: 1%;">';

            echo '<div style="border-radius: 5px; overflow: hidden; width: 40%;float: left;">
                <img src="../../img/destaques/noticias/'.$res['link'].'.png'.'" width="100%" style="position: relative; float: left;"/>
            </div>';

            echo '<p style="position: absolute; right: 0; top: 0;"><i class="fa fa-clock-o fa-1x"></i> \''.implode('/', array_reverse(explode('-', $res['data'])));

            echo '<a style="text-align: left; width: 60%; margin-left: 5%; float: left; color: #ff6600; font-size: 1.5em; font-weight: bold;" href="'.$res['link'].'">'.$res['titulo'].'</a>';

            echo '<br>';

            echo '<div style="position: relative; margin-top: 5%; margin-left: 5%; width: 50%; float: left; height: 1px; border-top: 1px solid #333;" ></div >';

            echo '<div style="position: relative; margin-left: 5%; float: left; width: 50%; color: #000; text-align: left;">
                <p>'.substr($res['noticia'], 0, 230).'...'.'<br> Leia a reportagem completa <a href="'.$res['link'].'">clicando aqui</a>'.'</p >
            </div >
        </div >';

            echo '        <div style="width: 90%;">
            <li style="height: 1px; width: 100%; background-color: rgba(0,0,0,.3); margin-top: 0%; margin-left: 5%;"></li>
        </div>';

        }
        ?>








        <div style="height: 5%; width: 23%; float: left;"></div>

        <div style="width: 90%;">
            <li style="height: 1px; width: 100%; background-color: rgba(0,0,0,.3); margin-top: -1%; margin-left: 5%;"></li>
        </div>

        <div style="position:relative; overflow: hidden; width: 70%; margin-left: 3%; margin-top: 1%; padding: 2%; float: left;">
            <div style="border-radius: 5px; height: 30%; width: 35%; background-color: #333; float: left;">
                <p style="font-size: 1.2em; font-weight: bolder;">NOTÍCIA</p>
            </div>

            <p style="position: absolute; right: 5%; top: 0;"><i class="fa fa-clock-o fa-1x"></i> tempo</p>

            <p style="margin-left: 5%; float: left; color: #333; font-size: 1.5em; font-weight: bolder;">Título(link noticia)</p><br>

            <div style="width: 60%; float: left;">
                <li style="height: 1px; width: 100%; background-color: #333; margin-top: -2%; margin-left: 5%;"></li>
            </div>

            <div align="left" style=" float: left; width: 60%; margin-left: 5%;color: #000;;">
                <p>No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais.</p>
            </div>
        </div>

        <div style="height: 5%; width: 20%; float: left;"></div>

        <div style="width: 90%;">
            <li style="height: 1px; width: 100%; background-color: rgba(0,0,0,.3); margin-top: 1%; margin-left: 5%;"></li>
        </div>

        <div style="position:relative; overflow: hidden; width: 70%; margin-left: 3%; margin-top: 1%; padding: 2%; float: left;">
            <div style="border-radius: 5px; height: 30%; width: 35%; background-color: #333; float: left;">
                <p style="font-size: 1.2em; font-weight: bolder;">NOTÍCIA</p>
            </div>

            <p style="position: absolute; right: 5%; top: 0;"><i class="fa fa-clock-o fa-1x"></i> tempo</p>

            <p style="margin-left: 5%; float: left; color: #333; font-size: 1.5em; font-weight: bolder;">Título(link noticia)</p><br>

            <div style="width: 60%; float: left;">
                <li style="height: 1px; width: 100%; background-color: #333; margin-top: -2%; margin-left: 5%;"></li>
            </div>

            <div align="left" style=" float: left; width: 60%; margin-left: 5%;color: #000;;">
                <p>No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais.</p>
            </div>
        </div>

        <div style="height: 5%; width: 20%; float: left;"></div>


    </div>
<?php endif; ?>


<?php if($p != '' || mysql_num_rows($result) != 0): ?>
<div id="menu1">
    <div class="container destaques_menu1">
        <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-newspaper-o fa-1x"></i> Not&iacute;cia </span>
    </div>
</div>
<div id="corpo">
    <div id="noticia">

                        <?php
                        
                        echo '<p align="center" style="font-size: 1.8em;">'.$row["titulo"].'</p><p style="font-size: 0.8em; text-align:center;">Por '.$row["autor"].' em '.implode("/",array_reverse(explode("-",$row["data"]))).'.</p>';
                            
                        ?>


        <img src="<?php echo $root_html ?>img/<?php echo $img ?>.png" class="sombra" style="margin-left: 25%; width: 50%;"><br><br><div style="width: 100%; text-align: center;"><small><?php echo $row["legenda"]; ?></small></div><br><br>
                    <?php 
                 
                        echo html_entity_decode($row["noticias"]);
                    
                    ?>
        
        <?php if($row["video"]!=''): ?>
        <br><br>
        <div style="text-align: center">
                    <iframe sty width="560" height="315" src="<?php echo $row["video"] ?>" frameborder="0" allowfullscreen></iframe></div>
                    <?php endif; ?>
                    <br><br><div style="text-align: center"><button onclick="window.location.href = '<?php echo $root_html; ?>destaques'" type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button> | <?php if($row["arquivo"]!=''): ?>
                    <button onclick="window.open('arquivos/<?php echo $row["arquivo"] ?>')"><i class="fa fa-newspaper-o fa-1x"></i> Veja o anexo (PDF)</button> | 
                    <?php endif; ?><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $url ?>"><button class="bw"><i class="fa fa-facebook-square fa-1x"></i> Compartilhar</button></a> <br><br></div>
</div>


</div>
    <?php endif; ?>
<?php
include '../../web/footer.php';
?>