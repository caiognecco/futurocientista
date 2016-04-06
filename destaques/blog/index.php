<?php
$p = @$_GET['p'];

//NOTICIA

include '../../web/seguranca.php';
$query = "SELECT * FROM noticias WHERE link='$p'";
$result = mysql_query($query);
$row = mysql_fetch_assoc ($result);
$descricao = $row["noticias"];
$img = "destaques/noticias/".$p;
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if($p=='' || mysql_num_rows($result)==0) {
	$titulo = 'Blog - Programa Futuro Cientista';
} else {
	$titulo = $row['titulo'];
}

include '../../web/script.php';
include '../../web/header.php';


?>
<div id="menu1">
	<div class="destaques_menu1 container"><span style="display:inline-block; vertical-align:middle"> <i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques</span></div>
</div>

<div id="corpo">
	<div id="destaques_sobre" style="position:relative; height:13%; width: 100%; border-bottom: 0.15em white solid; margin-top: 0%;">
		<div style="width: 100%; height: 10%; padding-top: 1%; font-size: 1.7em; margin-left: 0;">
			<button onclick=location.href="<?php echo $root_html ?>destaques/blog/" style="background: white; color: #ff6600;" class=""> <i class='fa fa-rss fa-1x'></i> Blog</button> |
			<button onclick=location.href="<?php echo $root_html ?>destaques/noticias/" style="background: #ff6600; color:white;" class="noticias"><i class='fa fa-newspaper-o fa-1x '></i> Noticias</button> |
			<button onclick=location.href="<?php echo $root_html ?>destaques/evento/" style="background: #ff6600; color:white;" class="eventos_destaque"><i class='fa fa-calendar-o fa-1x '></i> Eventos</button> |
			<button onclick=location.href="<?php echo $root_html ?>destaques/publicacao/" style="background: #ff6600; color:white;" class="publicacoes"><i class='fa fa-book fa-1x '></i> Publicações</button> |
			<button onclick=location.href="<?php echo $root_html ?>destaques/guia_do_vestibulando/" style="background: #ff6600; color:white;" class="guia_vestibulando"><i class='fa fa-graduation-cap fa-1x '></i> Guia do Vestibulando</button>
		</div>
	</div> <!-- MENU DESTAQUES -->

	<span style="color: #ff6600; margin-left: auto; margin-right: auto; font-size: 1.5em;"><i class='fa fa-rss fa-3x '></i><br>Em Construção</span>
	<br>
	<span style="color: #ff6600; margin-left: auto; margin-right:auto; font-size: 1em;">Desculpe o transtorno</span>


	<div style="display: none; width: 80%; overflow: hidden; padding-bottom: 5%;">
		<div style="height: 150px; width: 20%; background: #333; float: left; margin-left: 3%; margin-top: 1%;"></div>

		<h2 style="margin-left: 5%; margin-top: 0%;float: left; color: #333;">Título</h2><br>

		<div style="width: 70%; float: left; margin-left: 5%;">
			<li style="height: 1px; width: 100%; background-color: #333; margin-top: -1%; margin-left: 0%;"></li>
		</div>

		<div align="left" style=" float: left; width: 65%; margin-left: 5%;color: #000;;">
			<p>No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.</p>
		</div>
	</div>
	
</div>



<?php
include '../../web/footer.php';
?>
