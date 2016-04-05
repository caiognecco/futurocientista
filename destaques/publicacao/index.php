<?php
$p = @$_GET['p'];

//PUBLICA&ccedil;&otilde;ES

include '../../web/seguranca.php';
$query = "SELECT * FROM publicacao WHERE link='$p'";
$result = mysql_query($query);
$row = mysql_fetch_assoc ($result);
$descricao = str_replace('<br>','',html_entity_decode($row["autores"]));
$img = "destaques/publicacoes/".$p;
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if($p=='' || mysql_num_rows($result)==0) {
    $titulo = 'Publica&#231;&#245;es - Programa Futuro Cientista';
} else {
    $titulo = $row['titulo'].' ('.$row['ano'].')';
}

include '../../web/script.php';
include '../../web/header.php';



?>
<!-- PROBLEMA COM O TITULO
<script>
    $(window).bind("load", function () {
        document.title = <?php echo '"'.$row['titulo'].'"'; ?>;
    });
</script>
-->
<?php if($p=='' || mysql_num_rows($result)==0):?>
    <div id="menu1">
        <div class="destaques_menu1 container"><span style="display:inline-block; vertical-align:middle"> <i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques</span></div>
    </div>

    <div id="corpo">
        <div id="destaques_sobre" style="position:relative; height:13%; width: 100%; border-bottom: 0.15em white solid; margin-top: 0%;">
            <div style="width: 100%; height: 10%; padding-top: 1%; font-size: 1.7em; margin-left: 0;">
               <!-- <button onclick=location.href="<?php echo $root_html ?>destaques/blog/" style="background: #ff6600;; color: white" class="blog"> <i class='fa fa-rss fa-1x'></i> Blog</button> | -->
                <button onclick=location.href="<?php echo $root_html ?>destaques/noticia/" style="background: #ff6600; color:white;" class="noticias"><i class='fa fa-newspaper-o fa-1x '></i> Noticias</button> |
                <button onclick=location.href="<?php echo $root_html ?>destaques/evento/" style="background: #ff6600; color:white;" class="eventos_destaque"><i class='fa fa-calendar-o fa-1x '></i> Eventos</button> |
                <button onclick=location.href="<?php echo $root_html ?>destaques/publicacao/" style="background: white; color: #ff6600;" class=""><i class='fa fa-book fa-1x '></i> Publicações</button> |
                <button onclick=location.href="<?php echo $root_html ?>destaques/guia_do_vestibulando/" style="background: #ff6600; color:white;" class="guia_vestibulando"><i class='fa fa-graduation-cap fa-1x '></i> Guia do Vestibulando</button>
            </div>
        </div> <!-- MENU DESTAQUES -->

        <div style="width: 50%; overflow: hidden; padding-bottom: 5%; float:left;">
           <!-- <div style="height: 150px; width: 20%; background: #333; float: left; margin-left: 3%; margin-top: 1%;"></div> -->

            <img onclick="location.href='ERFC2014'" src="arquivos/1%20volume%20ERFC.png" alt="" width="30%" style="float: left; margin-left: 3%; cursor: pointer;">
            <h2 style="margin-left: 5%; margin-top: 0%; float: left; color: #333;">Encontro Regional de Futuro Cientistas - Volume I </h2><br>

           <div style="width: 60%; float: left; margin-left: 5%;">
                <li style="height: 1px; width: 100%; background-color: #333; margin-top: -1%; margin-left: 0%;"></li>
            </div>


            <div align="left" style=" float: left; width: 55%; margin-left: 5%;color: #000;;">
                <p><strong>Autores:</strong> <br>
                    &#8226; Caroline Pavan Brandini <br>
                    &#8226; Fábio De Lima Leite <br>
                    &#8226; Fernanda Keila Marinho da Silva <br>
                    &#8226; Franciane Andrade de Pádua <br>
                    &#8226; Ismail Barra Nova de Melo <br>
                    &#8226; Luiz Carlos de Faria <br>
                    &#8226; Tiago de Oliveira Reis <br>
                   (Orgs.) <br>
                </p>
                
                <p style="float:left;">
                    Para mais informações acesse o <a style="color: #ff6600; font-weight: bolder;" href="../publicacao/ERFC2014">link da publicação.</a>
                </p>
            </div>
        </div>

        <div style="width: 50%; overflow: hidden; padding-bottom: 5%; float:left;">
            <!--<div style="height: 150px; width: 20%; background: #333; float: left; margin-left: 3%; margin-top: 1%;"></div>-->
            <img onclick="location.href='ERFC2015'" src="arquivos/2-volume-ERFC.png" alt="" width="30%" style="float: left; margin-left: 3%; cursor: pointer;">

           <h2 style="margin-left: 5%; margin-top: 0%;float: left; color: #333;">Encontro Regional de Futuro Cientistas - Volume II </h2><br>

            <div style="width: 60%; float: left; margin-left: 5%;">
                <li style="height: 1px; width: 100%; background-color: #333; margin-top: -1%; margin-left: 0%;"></li>
            </div>

            <div align="left" style=" float: left; width: 55%; margin-left: 5%;color: #000;;">
                <p><strong>Autores:</strong> <br>

                   &#8226; Caroline Pavan Brandini <br>
                   &#8226; Fábio De Lima Leite <br>
                   &#8226; Fernanda Keila Marinho da Silva <br>
                   &#8226; Franciane Andrade de Pádua <br>
                   &#8226; Ismail Barra Nova de Melo <br>
                   &#8226; Luiz Carlos de Faria <br>
                   &#8226; Tiago de Oliveira Reis <br>
                   &#8226; (Orgs.)</p>

                <p style="float:left;">
                    Para mais informações acesse o <a style="color: #ff6600; font-weight: bolder;" href="../publicacao/ERFC2015">link da publicação.</a>
                </p>

            </div>
        </div>

    </div>
<?php endif; ?>

<?php if($p != '' || mysql_num_rows($result) != 0): ?>

    <div id="menu1">
    <div class="container destaques_menu1">
        <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-book fa-1x"></i> Publica&ccedil;&atilde;o </span>
    </div>
</div>
<div id="corpo">
     <div id="noticia">

                        <?php
                        
                        echo '<p align="center" style="font-size: 1.8em;">'.$row["titulo"].'</p><p style="font-size: 0.8em; text-align:center;">Publicado em: '.$row["ano"].'.</p>';
                            
                        ?>


        <img src="<?php echo $root_html ?>img/<?php echo $img ?>.png" class="sombra" style="margin-left: 25%; width: 50%;"><br><br><div style="width: 100%; text-align: center;"></div><br><br>
                    <?php 
                   
                        echo '<br>Autores:<br><br>'.$row["autores"];
                    
                    ?>
        
 

                    <br><br><div style="text-align: center"><button onclick="window.location.href = '<?php echo $root_html; ?>destaques'" type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button> | <?php if($row["arquivo"]!=''): ?>
                    <button onclick="window.open('arquivos/<?php echo $row["arquivo"] ?>')"><i class="fa fa-newspaper-o fa-1x"></i> Publica&ccedil;&atilde;o (PDF)</button> | 
                    <?php endif; ?><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $url ?>"><button class="bw"><i class="fa fa-facebook-square fa-1x"></i> Compartilhar</button></a> <br><br></div>
</div>
</div>
    <?php endif; ?>


<?php
include '../../web/footer.php';
?>