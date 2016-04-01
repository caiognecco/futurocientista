<?php
//CONTATO
$titulo = 'Organograma - Programa Futuro Cientista®';
$descricao = 'Veja o organograma da equipe do PFC!';
$img = 'facebook/organograma';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>







<div id="menu1">
    <div class="container " >
        <span style="display:inline-block; vertical-align:middle"><i class="fa fa-sitemap fa-1x"></i> Organograma </span>
    </div>
</div>
<div id="corpo">
    <iframe src="frame.html" style="width: 100%; height: 100%"></iframe><br>
    <button onclick="window.location.href = '../equipe'"  type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button><br><br>

</div>
<?php
include '../web/footer.php';
?>