<?php
$p = @$_GET['p'];

//EVENTOS

include '../../web/seguranca.php';
$query = "SELECT * FROM evento WHERE link='$p'";
$query1 = "SELECT * FROM destaque_arquivo WHERE link='evento/$p'";
$result = mysql_query($query);
$result1 = mysql_query($query1);
$row = mysql_fetch_assoc ($result);
$descricao = $row["descricao"];
$img = "destaques/eventos/".$p;
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if($p == '' || mysql_num_rows($result) == 0) {
    $titulo = 'Eventos - Programa Futuro Cientista';
} elseif($p !='' || mysql_num_rows($result) != 0)  {
    $titulo = $row['titulo'];
}


include '../../web/script.php';
include '../../web/header.php';

?>

<!--
<script>
    $(window).bind("load", function () {
        document.title = <?php echo '"'.$row['titulo'].'"'; ?>;
    });
</script>
-->
<?php if($p == '' || mysql_num_rows($result) == 0): ?>

    <div id="menu1">
        <div class="destaques_menu1 container"><span style="display:inline-block; vertical-align:middle"> <i  id="icoParceiro"  class="fa fa-star fa-1x"></i> Destaques</span></div>
    </div>

    <div id="destaques_sobre" style="height:13%; width: 100%; border-bottom: 0.15em white solid; margin-top: 1%;">
        <div style="width: 100%; height: 10%; padding-top: 1%; font-size: 1.7em; margin-left: 0;">
            <button onclick=location.href="<?php echo $root_html ?>destaques/blog/" style="background: #ff6600; color:white;" class="blog"> <i class='fa fa-rss fa-1x'></i> Blog</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/noticia/" style="background: #ff6600; color: white;" class="noticias"><i class='fa fa-newspaper-o fa-1x '></i> Noticias</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/evento/" style="background: white; color: #ff6600;" class=""><i class='fa fa-calendar-o fa-1x '></i> Eventos</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/publicacao/" style="background: #ff6600; color:white;" class="publicacoes"><i class='fa fa-book fa-1x '></i> Publicações</button> |
            <button onclick=location.href="<?php echo $root_html ?>destaques/guia_do_vestibulando/" style="background: #ff6600; color:white;" class="guia_vestibulando"><i class='fa fa-graduation-cap fa-1x '></i> Guia do Vestibulando</button>
        </div>
    </div> <!-- MENU DESTAQUES -->


    <div id="corpo" style="width: 100%; overflow: hidden; padding-right: 7.5%; padding-left: 7.5%; padding-bottom: 10%;">

        <div style="width: 25.3333333333%; height: 30%; float:left; ">
            
            <h1 onclick="location.href='<?php echo $root_html ?>destaques/evento/IConcursoDeContos'" style="font-weight: bolder; font-size: 1.5em; color: #ff6600; cursor: pointer;" align="center">I Concurso de Contos de Fic&#231;&#227;o Cient&#237;fica</h1>
            <!--<div style="background-color: #333; width: 100%; height: 80%;"></div>-->
            <img onclick="location.href='<?php echo $root_html ?>destaques/evento/IConcursoDeContos'" src="../../img/destaques/eventos/IConcursoDeContos.png" width="100%" alt="" style="cursor: pointer;">
            <p style="font-size: 1.1em; margin-top: -.7%;" align="center"><strong>2015</strong><br> Para mais informações acesse o
                <a style="color: #ff6600; font-weight: bold;" href="<?php echo $root_html ?>destaques/evento/IConcursoDeContos">link do evento</a></p>

        </div>

        <div style="width: 25.3333333333%; height: 30%; float:left; margin-left: 4.5%;">

            <h1 onclick="location.href='<?php echo $root_html ?>destaques/evento/IIConcursoDeContos'" style="font-weight: bolder; font-size: 1.5em; color: #ff6600; cursor: pointer;" align="center">II Concurso de Contos de Aventura</h1>

            <img onclick="location.href='<?php echo $root_html ?>destaques/evento/IIConcursoDeContos'" src="../../img/destaques/eventos/IIConcursoDeContos.png" width="100%" alt="" style="cursor: pointer;">

            <p style="font-size: 1.1em; margin-top: -.7%;" align="center"><strong>2015</strong><br> Para mais informações acesse o
                <a style="color: #ff6600; font-weight: bold;" href="<?php echo $root_html ?>destaques/evento/IIConcursoDeContos">link do evento</a></p>
    </div>

        <div style="width: 25.3333333333%; height: 30%; float:left; margin-left: 4.5%;">

            <h1 onclick="location.href='<?php echo $root_html ?>destaques/evento/IIEPFC'" style="font-weight: bolder; font-size: 1.5em; color: #ff6600; cursor: pointer;" align="center">II Escola Preparatória Para Futuros Cientistas
            </h1>

            <img onclick="location.href='<?php echo $root_html ?>destaques/evento/IIEPFC'" src="../../img/destaques/eventos/IIEPFC.png" width="100%" alt="" style="cursor: pointer;">

            <p style="font-size: 1.1em; margin-top: -.7%;" align="center"><strong>2015</strong><br> Para mais informações acesse o
                <a style="color: #ff6600; font-weight: bold;" href="<?php echo $root_html ?>destaques/evento/IIEPFC">link do evento</a></p>

        </div>

        <div style="width: 25.3333333333%; height: 30%; float:left; margin-top: 10%;">

            <h1 onclick="location.href='<?php echo $root_html ?>destaques/evento/IMaratonadoConhecimentoFase1'" style="font-weight: bolder; font-size: 1.5em; color: #ff6600; cursor: pointer;" align="center">I Maratona do Conhecimento (1ª Fase)</h1>

            <img onclick="location.href='<?php echo $root_html ?>destaques/evento/IMaratonadoConhecimentoFase1'" src="../../img/destaques/eventos/IMaratonadoConhecimentoFase1.png" width="100%" alt="" style="cursor: pointer;">

            <p style="font-size: 1.1em; margin-top: -.7%;" align="center"><strong>2015</strong><br> Para mais informações acesse o
                <a style="color: #ff6600; font-weight: bold;" href="<?php echo $root_html ?>destaques/evento/IMaratonadoConhecimentoFase1">link do evento</a></p>

        </div>

        <div style="width: 25.3333333333%; height: 30%; float:left; margin-left: 4.5%; margin-top: 10%;">

            <h1 onclick="location.href='<?php echo $root_html ?>destaques/evento/IMaratonadoConhecimentoFase2'" style="font-weight: bolder; font-size: 1.5em; color: #ff6600; cursor: pointer;" align="center">I Maratona do Conhecimento (2ª Fase)

            </h1>
            <img onclick="location.href='<?php echo $root_html ?>destaques/evento/IMaratonadoConhecimentoFase2'" src="../../img/destaques/eventos/IMaratonadoConhecimentoFase2.png" width="100%" alt="" style="cursor: pointer;">

            <p style="font-size: 1.1em; margin-top: -.7%;" align="center"><strong>2015</strong><br> Para mais informações acesse o
                <a style="color: #ff6600; font-weight: bold;" href="<?php echo $root_html ?>destaques/evento/IMaratonadoConhecimentoFase2">link do evento</a></p>

        </div>

        <div style="width: 25.3333333333%; height: 30%; float:left; margin-left: 4.5%; margin-top: 7.7%;">

            <h1 onclick="location.href='<?php echo $root_html ?>destaques/evento/VIERFC'" style="font-weight: bolder; font-size: 1.5em; color: #ff6600; cursor: pointer;" align="center">VI Encontro Regional de Futuros Cientistas (E.R.F.C.)
            </h1>

            <img onclick="location.href='<?php echo $root_html ?>destaques/evento/VIERFC'" src="../../img/destaques/eventos/VIERFC.png" width="100%" alt="" style="cursor: pointer;">

            <p style="font-size: 1.1em; margin-top: -.7%;" align="center"><strong>2015</strong><br> Para mais informações acesse o
                <a style="color: #ff6600; font-weight: bold;" href="<?php echo $root_html ?>destaques/evento/VIERFC">link do evento</a></p>

        </div>

    </div>
<?php endif; ?>

<?php if($p != '' || mysql_num_rows($result) != 0): ?>

<div id="menu1">
    <div class="container destaques_menu1">
        <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-calendar fa-1x"></i> Evento </span>
    </div>
</div>

<div id="corpo">
    
    
       <div id="sub_destaques">

        <div class="h-1-4" id="noticias" onclick="$('.ativo').toggleClass('ativo');
                $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-file-text-o fa-2x"></i><br> Sobre </span>
            </div>
        </div>
        <div class="h-1-4" id="eventos_destaques" onclick="$('.ativo').toggleClass('ativo');
                $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-calendar fa-2x"></i><br> Cronograma </span>
            </div>
        </div>
        <div class="h-1-4" id="publicacoes" onclick="$('.ativo').toggleClass('ativo');
                $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-check-square fa-2x"></i><br> Informa&ccedil;&otilde;es importantes </span>
            </div>
        </div>
        <div class="h-1-4" id="guia_vest" onclick="$('.ativo').toggleClass('ativo');
                $(this).toggleClass('ativo')">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-folder-open fa-2x"></i><br> Arquivos </span>
            </div>
        </div>
    </div>
    <div id="principal_destaques">
        
        
        <img class="sombra" src="http://futurocientista.net/img/<?php echo $img ?>.png" style="width: 40%; margin-top: 2.5%"><br><?php echo '<p align="center" style="font-size: 1.4em;">'.$row["titulo"].'</p><br>'; ?>
        <br><p align="center"><button class="evento" onclick="window.open('arquivos/<?php echo $row["chamada"] ?>')"><i class="fa fa-folder-open fa-1x"></i> Chamada</button> 
        
     <?php if(strpos($row["titulo"],'Contos') !== false && $row["insc"]==1): ?>
         | <button class="evento" id="envia_botao"><i class="fa fa-send fa-1x"></i> Envie seu conto</button> 
       
<?php elseif(strpos($row["titulo"],'Encontro Regional') !== false && $row["insc"]==1): ?>
          | <button class="evento" id="envia_botao"><i class="fa fa-send fa-1x"></i> Envie seu relatório</button? 
       
 <?php endif; ?>
         </p>  
        
    </div>
    <div id="noticias_principal">
        <div style="width: 80%; margin-left: 10%; margin-top: 3%">

            <i class="fa fa-file-text-o fa-2x"></i><br>Sobre<br><br><div style="text-align: left">
 <p style="color: black;">
                      <?php echo $row["descricao"]; ?>
 </p>
                </div>
                 
        </div>
                  

           
 
    </div>
    <div id="eventos_destaques_principal">
               <div style="width: 80%; margin-left: 10%; margin-top: 3%">

        <i class="fa fa-calendar fa-2x"></i><br>Cronograma<br><br><div style="text-align: left">
                 
            <p style="color: black;">
                      <?php echo $row["cronograma"]; ?>
</p>
        </div>
        </div>
                  
    </div>
    <div id="publicacoes_principal">
               <div style="width: 80%; margin-left: 10%; margin-top: 3%">

        <i class="fa fa-check-square fa-2x"></i><br>Informa&ccedil;&otilde;es importantes<br><br><div style="text-align: left">
                 
 <p style="color: black;">
                      <?php echo $row["infos"]; ?>
 </p>
        </div>
        </div>
                  
    </div>
    <div id="guia_vest_principal">
        <div style="width: 80%; margin-left: 10%; margin-top: 3%; text-align: center">
            
         <i class="fa fa-folder-open fa-2x"></i><br> Arquivos e material de apoio<br><br>
         <table class="tabela">
                    <th>
                        Arquivo
                    </th>
                    <th>
                        Descri&ccedil;&atilde;o
                    </th>
                    <?php
                        while ($row1 = mysql_fetch_array($result1)) {
                            echo '<tr><td><a class="br" href="arquivos/'.$row1["arquivo"].'">'.$row1["arquivo"].'</a></td><td><a class="br" href="arquivos/'.$row1["arquivo"].'">'.$row1["descricao"].'</a>';
                        }
                    ?>
                </table><br>
            </span>
        </div>
     
    </div>
    
   </div>
<div id="envia_evento" style="display: none; background: white; overflow-y: scroll; height: 63%">
    
     <?php if(strpos($row["titulo"],'Contos') !== false && $row["insc"]==1): ?>
    
    <span style="color: #ff6600"><br><br><i class="fa fa-send fa-2x"></i><br>Envie seu conto<br><br></span>
        <div id="noticia">
               Preencha todos os campos. Dever&aacute; ser enviado um arquivo .zip ou .rar contendo o conto e as autoriza&ccedil;&otilde;es assinadas e escaneadas. Pe&ccedil;a ajuda aos seus pais, professores ou para nossa equipe atrav&eacute;s do canal de contato. Os alunos que n&atilde;o tiverem acesso a um scanner podem entregar os documentos assinados para o Coordenador Local da sua escola no mesmo per&iacute;odo. A n&atilde;o entrega dos documentos desclassifica o aluno sem aviso pr&eacute;vio.
                   
        </div><br><br>
               <form class="formulario"  action="mail.php" method="post" enctype="multipart/form-data">

                        <select name="categoria"  required>
                            <option disabled selected value="SEMCATEGORIA">Categoria</option>
                            <option value="PROFESSOR">Professor</option>
                            <option value="ALUNO EM">Aluno Ensino M&eacute;dio</option>
                            <option value="ALUNO EF">Aluno Ensino Fundamental</option>
                        </select><br><br> <input  required="required" type="text" name="nome" placeholder="Seu nome">
                        <br><br> <input  required="required" type="email" name="email" placeholder="Seu email">
                        <br><br> <input  required="required" type="text" name="cidade" placeholder="Cidade da sua escola"><br><br>
                         <input  required="required" type="text" name="escola" placeholder="Escola (Exemplo: E.M.E.F Programa Futuro Cientista)"><br><br>
                         
                         <input  required="required" type="text" name="serie" placeholder="S&eacute;rie"><br><br>
                         <input id="fakeupload" name="fakeupload" class="fakeupload" type="text" placeholder="Arquivos" />
            <input id="realupload" type="file" name="userfile" class="realupload"  onchange="this.form.fakeupload.value = this.value;" /><br><br>
           
            <button type="submit" class=""><i class="fa fa-send fa-1x"></i> Enviar</button><br><br>
        <button class="evento" id="voltar_botao"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button>
                    </form><br><br>
       
<?php elseif(strpos($row["titulo"],'Encontro Regional') !== false && $row["insc"]==1): ?>
                    
                   <span style="color: #ff6600"><br><br><i class="fa fa-send fa-2x"></i><br>Envie seu Relatório:<br><br></span>
                   <div id="noticia">
               Preencha todos os campos. Dever&aacute; ser enviado um arquivo .pdf ou .doc(x) contendo o relatório do projeto desenvolvido para o E.R.F.C. Pe&ccedil;a ajuda aos seus pais, professores ou para nossa equipe atrav&eacute;s do canal de contato. 
                   
        </div><br><br>
               <form class="formulario"  action="mail.php" method="post" enctype="multipart/form-data">

                   <select name="categoria"  required style="display: none">
                            <option selected value="ERFC">Categoria</option>
                            
                        </select> <input  required="required" type="text" name="nome" placeholder="Seu nome">
                        <br><br> <input  required="required" type="email" name="email" placeholder="Seu email">
                        <br><br> <input  required="required" type="text" name="cidade" placeholder="Cidade da sua escola"><br><br>
                         <input  required="required" type="text" name="escola" placeholder="Escola (Exemplo: E.M.E.F Programa Futuro Cientista)"><br><br>
                         
                         <input  required="required" type="text" name="serie" placeholder="S&eacute;rie"><br><br>
                         <input id="fakeupload" name="fakeupload" class="fakeupload" type="text" placeholder="Arquivos" />
            <input id="realupload" type="file" name="userfile" class="realupload"  onchange="this.form.fakeupload.value = this.value;" /><br><br>
           
            <button type="submit" class=""><i class="fa fa-send fa-1x"></i> Enviar</button> | 
        <button class="evento" id="voltar_botao"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button>
                    </form><br><br>
        
 <?php endif; ?>

</div>
<?php endif; ?>

<?php
include '../../web/footer.php';
?>