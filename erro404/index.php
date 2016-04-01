<?php
//SISTEMA

$titulo = 'Erro 404 - Programa Futuro Cientista®';
$descricao = 'Essa p&aacute;gina n&atilde;o foi encontrada!';
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>


<div id="menu1">
    <div class="container" >
        <span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x"></i> Erro 404 </span>
    </div>
</div>
<div id="corpo">

    <table style="width: 90%; margin-left: auto; margin-right: auto; background: lightgray; color: black; border: 0.2em solid white; margin-top: 2em; margin-bottom: 2em;">
        <tbody>

            <tr>
                <td colspan="2"><p align="center" class="Chamada1">
                    <div class="container">
                        <span style="display:inline-block; vertical-align:middle; width: 100%; text-align: center;">
                            Ops! Essa p&aacute;gina n&atilde;o foi encontrada! Verifique se o endere&ccedil;o digitado est&aacute; correto.<br><br><br><br>
                            <button onclick="window.location.href = '/'"  type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button><br><br>
                            </div>
                            </td></tr></tbody>
                            </table>
                        </span>

                    </div> 


                    <?php
                    include '../web/footer.php';
                    ?>