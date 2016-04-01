<?php
//AJUDE
$titulo = 'Ajude - Programa Futuro Cientista®';
$descricao = 'A sua solidariedade &eacute; o nosso combust&iacute;vel!';
$img = 'facebook/ajude';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>

<div id="menu1">
    <div class="ajude_corpo" style="background: #660000; height: 100%">
        <div class="container">
            <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-heart fa-1x" ></i> Ajude o Programa Futuro Cientista® </span>
        </div>
    </div>

</div>
<div id="corpo">

    <div class="hover" id="pjuridica">
        <div class="container" id="pjuridica_inicial">
            <span style="display:inline-block; vertical-align:middle">


                <i  id="icoParceiro" class="fa fa-institution fa-5x"></i><br>

                Pessoa Jur&iacute;dica<br>Saiba como nos ajudar. <br>

            </span>



        </div>
        <div class="container" id="pjuridica_final">
            <span style="display:inline-block; vertical-align:middle">


                <i  id="icoParceiro" class="fa fa-institution fa-3x"></i><br>

                Pessoa Jur&iacute;dica:<br><br>

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

    <div class="hover" id="pfisica">
        <div class="container" id="pfisica_inicial">
            <span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro" class="fa fa-user fa-5x"></i> <br>Pessoa F&iacute;sica<br>Saiba como nos ajudar.


                </div>
                <div class="container" id="pfisica_final" style="background: white; color: #ff6600;">
                    <span style="display:inline-block; vertical-align:middle"><i  id="icoParceiro" class="fa fa-user fa-3x"></i> <br>Pessoa F&iacute;sica:<br><br>
                        <table class="tabela" style="width: 100%">
                               <tr><td>
                                    <i  id="icoParceiro" class="fa fa-check-square fa-1x"></i>  Voc&ecirc; pode curtir, comentar e compartilhar em nossas p&aacute;ginas no <button class="facebook_menu1 "><i  id="icoParceiro" class="fa fa-facebook-square fa-1x" ></i> Facebook </button> e no <button class="youtube_botao"><i  id="icoParceiro" class="fa fa-youtube-play fa-1x" ></i> Youtube </button> .

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




        </div>
    </div>
    <?php
    include '../web/footer.php';
    ?>