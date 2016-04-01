
<?php
//rede
$titulo = 'Rede de N&uacute;cleos - Programa Futuro Cientista®';
$descricao = 'Veja no mapa onde ficam todos os parceiros e n&uacute;cleos cient&iacute;ficos do P.F.C.!';
$img = 'facebook/rede';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>

<script>google.maps.event.addDomListener(window, 'load', initialize);</script>
    

<div id="menu1">
    <div class="container rede_titulo_corpo">
        <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-map-marker fa-1x"></i> Rede de N&uacute;cleos </span>
    </div>
</div>
<div id="corpo" style="padding-top: 3%; padding-bottom: 3%;">
         <div align="center" id="map-canvas" style="width: 80%; height: 100%; overflow: hidden; margin-left: auto; margin-right: auto;"></div>
</div>




<?php
include '../web/footer.php';
?>