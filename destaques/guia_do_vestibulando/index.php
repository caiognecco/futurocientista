<?php
$p = @$_GET['p'];

//GUIA DO VESTIBULANDO

$titulo = 'Guia do Vestibulando - Programa Futuro Cientista';

include '../../web/seguranca.php';
include '../../web/script.php';
include '../../web/header.php';
?>

    <div id="menu1">
        <div class="destaques_menu1 container">
            <span style="display:inline-block; vertical-align:middle"> <i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques</span>
        </div>
    </div>
<div id="corpo">

    <div id="destaques_sobre" style="height:13%; width: 100%; border-bottom: 0.15em white solid; margin-top: 1%;">
        <div style="width: 100%; height: 10%; padding-top: 1%; font-size: 1.7em; margin-left: 0;">
            <button onclick=location.href="<?php echo $root_html ?>destaques/blog/" style="background: #ff6600; color:white;" class="blog"> <i class='fa fa-rss fa-1x'></i> Blog</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/noticia/" style="background: #ff6600; color:white;" class="noticias"><i class='fa fa-newspaper-o fa-1x '></i> Noticias</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/evento/" style="background: #ff6600; color:white;" class="eventos_destaque"><i class='fa fa-calendar-o fa-1x '></i> Eventos</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/publicacao/" style="background: #ff6600; color:white;" class="publicacoes"><i class='fa fa-book fa-1x '></i> Publicações</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/guia_do_vestibulando/" style="background: white; color:#ff6600;" class=""><i class='fa fa-graduation-cap fa-1x '></i> Guia do Vestibulando</button>
        </div>
    </div> <!-- MENU DESTAQUES -->

        <span style="color: #ff6600; margin-left: auto; margin-right: auto; font-size: 1.5em;"><i class='fa fa-graduation-cap fa-3x '></i><br>Em Construção</span>
        <br>
        <span style="color: #ff6600; margin-left: auto; margin-right:auto; font-size: 1em;">Desculpe o transtorno</span>

    <table style="display:block; width: 90%; margin-left: auto; margin-right: auto; background: #333; color: white; border: 0.2em solid white; margin-top: 2em; margin-bottom: 2em;">
        <tbody>
            <tr>
                <td style="line-height: 2em; font-weight: bolder; color: #333; background-color: #999; border: 1px solid #000; text-align: center">
                    Vestibular
                </td>
                <td style="line-height: 2em; font-weight: bolder; color: #333; background-color: #999; border: 1px solid #000; text-align: center">
                    Data da Inscrição
                </td>
                <td style="line-height: 2em; font-weight: bolder; color: #333; background-color: #999; border: 1px solid #000; text-align: center">
                    Data do Vestibular
                </td>
                <td style="line-height: 2em; font-weight: bolder; color: #333; background-color: #999; border: 1px solid #000; text-align: center">
                    Valor
                </td>
            </tr>

            <tr>
                <td style="line-height: 2em; color: #ff6600; border: 1px solid #000; text-align: center">
                    ENEM
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    Maio
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    30/10/2016
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    R$50,00
                </td>
            </tr>

            <tr>
                <td style="line-height: 2em; color: #ff6600; border: 1px solid #000; text-align: center">
                    FUVEST
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    Maio
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    30/10/2016
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    R$50,00
                </td>
            </tr>

            <tr>
                <td style="line-height: 2em; color: #ff6600; border: 1px solid #000; text-align: center">
                    UNESP
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    Maio
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    30/10/2016
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    R$50,00
                </td>
            </tr>

            <tr>
                <td style="line-height: 2em; color: #ff6600; border: 1px solid #000; text-align: center">
                    UNICAMP
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    Maio
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    30/10/2016
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    R$50,00
                </td>
            </tr>

            <tr>
                <td style="line-height: 2em; color: #ff6600; border: 1px solid #000; text-align: center">
                    UNISO
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    Maio
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    30/10/2016
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    R$50,00
                </td>
            </tr>

            <tr>
                <td style="line-height: 2em; color: #ff6600; border: 1px solid #000; text-align: center">
                    UNIP
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    Maio
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    30/10/2016
                </td>
                <td style="line-height: 2em; border: 1px solid #000; text-align: center">
                    R$50,00
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php
include '../../web/footer.php';
?>