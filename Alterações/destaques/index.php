<?php
//DESTAQUES
$titulo = ' Destaques - Programa Futuro Cientista®';
$descricao = 'Veja as principais novidades do P.F.C.!';
$img = 'facebook/destaques';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
$query = "SELECT link, titulo, data FROM noticia ORDER BY data DESC";
$result = mysql_query($query);
$query1 = "SELECT link, titulo, ano FROM publicacao ORDER BY ano DESC";
$result1 = mysql_query($query1);
$query2 = "SELECT link, titulo, ano FROM evento WHERE insc=1 ORDER BY ano DESC";
$result2 = mysql_query($query2);
$query3 = "SELECT link, titulo, ano FROM evento WHERE insc=0 ORDER BY ano DESC";
$result3 = mysql_query($query3);
?>

<div id="menu1">
    <div class="destaques_menu1 container"><span style="display:inline-block; vertical-align:middle"> <i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques</span></div>
</div>
<div id="corpo" style="width: 100%; padding-bottom: 3%;" align="center">

    <div id="destaques_sobre" style="height:13%; width: 100%; border-bottom: 0.15em white solid; margin-top: 1%;">
        <div style="width: 100%; height: 10%; padding-top: 1%; font-size: 1.7em; margin-left: 0;">
            <button style="background: #ff6600; color:white;" class="blog"> <i class='fa fa-rss fa-1x'></i> Blog</button> |
            <button style="background: #ff6600; color:white;" class="noticias"><i class='fa fa-newspaper-o fa-1x '></i> Noticias</button> |
            <button style="background: #ff6600; color:white;" class="eventos_destaque"><i class='fa fa-calendar-o fa-1x '></i> Eventos</button> |
            <button style="background: #ff6600; color:white;" class="publicacoes"><i class='fa fa-book fa-1x '></i> Publicações</button> |
            <button style="background: #ff6600; color:white;" class="guia_vestibulando"><i class='fa fa-graduation-cap fa-1x '></i> Guia do Vestibulando</button>
        </div>
    </div> <!-- MENU DESTAQUES -->

    <div class="slider" style="width: 80%; height: 60%; margin-left: auto; margin-right: auto;">
        <div style="height: 100%; width: 10%; float: left;">
            <div style="width: 49.66666666666667%; height: 100%; margin-right: 0.6%;background-color: #999; float:left;"><h1>NOTICIA PRINCIPAL</h1></div>
            <div style="width: 49.66666666666667%; height: 49.66666666666667%; margin-bottom: 0.6%; background-color: #ff6600; float:left;"><h1>NOTICIA SECUNDARIA 1</h1></div>
            <div style="width: 49.66666666666667%; height: 49.66666666666667%; background-color: #333; float:left;"><h1>NOTICIA SECUNDARIA 2</h1></div>
        </div>
        <div style="height: 100%; width: 10%; float: left;">
            <div style="width: 49.66666666666667%; height: 100%; margin-right: 0.6%;background-color: #999; float:left;"><h1>NOTICIA PRINCIPAL</h1></div>
            <div style="width: 49.66666666666667%; height: 49.66666666666667%; margin-bottom: 0.6%; background-color: #ff6600; float:left;"><h1>NOTICIA SECUNDARIA 1</h1></div>
            <div style="width: 49.66666666666667%; height: 49.66666666666667%; background-color: #333; float:left;"><h1>NOTICIA SECUNDARIA 2</h1></div>
        </div>
    </div>


	<div style="height: 30%; width: 80%; background-color: #ffffff; margin-top: 5%; padding: 2%;">
		<div style="height: 100%; width: 30%; background-color: #333; float: left;">
			<h1>NOTÍCIA</h1>
		</div>

		<h2 style="margin-left: 5%; float: left; color: #333;">Título</h2><br>

		<div style="width: 65%; float: left;">
			<li style="height: 1px; width: 100%; background-color: #333; margin-top: -2%; margin-left: 5%;"></li>
		</div>

		<div align="left" style=" float: left; width: 65%; margin-left: 5%;color: #000;;">
			<p>No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.</p>
		</div>
	</div>

	<div style="height: 30%; width: 80%; background-color: #ffffff; margin-top: 3%; padding: 2%;">
		<div style="height: 100%; width: 30%; background-color: #333; float: left;">
			<h1>NOTÍCIA</h1>
		</div>

		<h2 style="margin-left: 5%; float: left; color: #333;">Título</h2><br>

		<div style="width: 65%; float: left;">
			<li style="height: 1px; width: 100%; background-color: #333; margin-top: -2%; margin-left: 5%;"></li>
		</div>

		<div align="left" style=" float: left; width: 65%; margin-left: 5%;color: #000;;">
			<p>No entanto, não podemos esquecer que o comprometimento entre as equipes assume importantes posições no estabelecimento dos procedimentos normalmente adotados. Percebemos, cada vez mais, que o acompanhamento das preferências de consumo oferece uma interessante oportunidade para verificação das direções preferenciais no sentido do progresso. Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a expansão dos mercados mundiais estende o alcance e a importância do remanejamento dos quadros funcionais.</p>
		</div>
	</div>



          <!--

		  <div id="sub_destaques">

			  <div class="h-1-4" id="noticias" onclick="$('.ativo').toggleClass('ativo');
					  $(this).toggleClass('ativo')">
				  <div class="container">
					  <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-newspaper-o fa-2x"></i><br> Not&iacute;cias </span>
				  </div>
			  </div>
			  <div class="h-1-4" id="eventos_destaques" onclick="$('.ativo').toggleClass('ativo');
					  $(this).toggleClass('ativo')">
				  <div class="container">
					  <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-calendar fa-2x"></i><br> Eventos </span>
				  </div>
			  </div>
			  <div class="h-1-4" id="publicacoes" onclick="$('.ativo').toggleClass('ativo');
					  $(this).toggleClass('ativo')">
				  <div class="container">
					  <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-book fa-2x"></i><br> Publica&ccedil;&otilde;es </span>
				  </div>
			  </div>
			  <div class="h-1-4" id="guia_vest" onclick="$('.ativo').toggleClass('ativo');
					  $(this).toggleClass('ativo')">
				  <div class="container">
					  <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-graduation-cap fa-2x"></i><br> Guia do Vestibulando </span>
				  </div>
			  </div>
		  </div>
		  <div id="principal_destaques">
			  <div class="slider">
				  <div>
					<a href="<?php echo $root_html ?>destaques/noticia/HomenagemCMS2015" class="trs"><img class="sombra" src="<?php echo $root_html ?>img/facebook/HomenagemCMS2015.png" alt="Destaque 1" width="40%"/></a><p style="margin-top: 10px">PFC recebe homenagem na C&acirc;mara Municipal de Sorocaba!
					  </div>
					  <div>
						  <a href="<?php echo $root_html ?>destaques/noticia/EPFC2015" class="trs"><img class="sombra" src="<?php echo $root_html ?>img/facebook/EPFC2015.png" alt="Destaque 1" width="40%"/></a><p style="margin-top: 10px"> Cerca de 250 Alunos na II EPFC!! </div>
				  <div>

				  <a href="<?php echo $root_html ?>destaques/noticia/EducareCruzeiroDoSul2016" class="trs"><img class="sombra" src="<?php echo $root_html ?>img/destaques/noticias/EducareCruzeiroDoSul2016.png" alt="Destaque 1" width="40%"/></a><p style="margin-top: 10px"> PFC e o VI ERFC s&atilde;o destaques em reportagem do Jornal Cruzeiro do Sul!
					   </div>
				  <div>
					  <a href="<?php echo $root_html ?>destaques/noticia/TVTEM2015" class="trs"><img class="sombra" src="<?php echo $root_html ?>img/destaques/noticias/TVTEM2015.png" alt="Destaque 1" width="40%"/></a><p style="margin-top: 10px">PFC &eacute; tema de reportagem na TV TEM!
						</div>
				   <div>
					  <a href="<?php echo $root_html ?>destaques/noticia/CienciaEm3Minutos" class="trs"><img class="sombra" src="<?php echo $root_html ?>img/destaques/noticias/CienciaEm3Minutos.png" alt="Destaque 1" width="40%"/></a><p style="margin-top: 10px">Novo projeto no ar!
						</div>
				  <div>
						<a href="<?php echo $root_html ?>destaques/publicacao/ERFC2015" class="trs"><img class="sombra" src="<?php echo $root_html ?>img/destaques/publicacoes/ERFC2015.png" alt="Destaque 1" width="40%"/></a><p style="margin-top: 10px"> PFC lan&ccedil;a mais um livro!

				  </div>

			  </div>
		  </div>
		  <div id="noticias_principal">
			  <div class="container">
				  <span style="display:inline-block; vertical-align:middle"> <br><i class="fa fa-newspaper-o fa-2x"></i><br> Not&iacute;cias <br><br>
					  <table class="tabela" style="width: 100%">
						  <th>

							  Data

						  <th>
							  Not&iacute;cia

						  </th>
						  <?php
						  while ($row = mysql_fetch_array($result)) {
							  echo '<tr><td>' . implode("/", array_reverse(explode("-", $row["data"]))) . '</td><td><a class="br" href="noticia/' . $row["link"] . '">' . $row["titulo"] . '</a>';
						  }
						  ?>
					  </table><br>

				  </span>
			  </div>
		  </div>
		  <div id="eventos_destaques_principal">
			  <div class="container">
				  <span style="display:inline-block; vertical-align:middle"> <br><i class="fa fa-calendar fa-2x"></i><br> Eventos <br><br> Pr&oacute;ximos eventos:
					  <table class="tabela" style="width: 100%">
						  <th>
							  Ano
						  </th>
						  <th>
							  Evento
						  </th>

						  <?php
						  while ($row = mysql_fetch_array($result2)) {
								  echo '<tr><td>' . $row["ano"] . '</td><td><a class="br" href="evento/' . $row["link"] . '">' . $row["titulo"] . '</a>';
						  }
						  ?>
						  </tr>
					  </table><br>Eventos passados:<br>
					  <table class="tabela">
						  <th>
							  Ano
						  </th>
						  <th>
							  Evento
						  </th>

						  <?php
						  while ($row = mysql_fetch_array($result3)) {
							  echo '<tr><td>' . $row["ano"] . '</td><td><a class="br" href="evento/' . $row["link"] . '">' . $row["titulo"] . '</a>';
						  }
						  ?>
						  </tr>
					  </table><br>
				  </span>
			  </div>
		  </div>
		  <div id="publicacoes_principal">
			  <div class="container">
				  <span style="display:inline-block; vertical-align:middle"><br> <i class="fa fa-book fa-2x"></i><br> Publica&ccedil;&otilde;es<br><br>
					  <table  class="tabela" style="width: 100%">
						  <th>
							  Ano
						  </th>
						  <th>
							  Publica&ccedil;&atilde;o
						  </th>
						  <?php
						  while ($row = mysql_fetch_array($result1)) {
							  echo '<tr><td>' . $row["ano"] . '</td><td><a class="br" href="publicacao/' . $row["link"] . '">' . $row["titulo"] . '</a>';
						  }
						  ?>
					  </table><br>
				  </span>
			  </div>
		  </div>
		  <div id="guia_vest_principal">
			  <div class="container">
				  <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-graduation-cap fa-2x"></i><br> Guia do Vestibulando <br> Em breve... </span>
			  </div>
		  </div>

	  -->

</div>

<?php
include '../web/footer.php';
?>