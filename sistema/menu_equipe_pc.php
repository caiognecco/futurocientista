

<?php
$query_not = "SELECT * FROM notificacao WHERE id_user2 = '".$_SESSION['usuarioID']."' ORDER BY data DESC, hora DESC";
$query_not2 = "SELECT * FROM notificacao WHERE id_user2 = '".$_SESSION['usuarioID']."' AND lida = 0 ORDER BY data DESC, hora DESC";
$exec_not = mysql_query($query_not);
$exec_not2 = mysql_query($query_not2);
$num_rows = mysql_num_rows($exec_not2);



?>

<script>
var a = 0;
$(document).ready(function(){
    $("#botao_notificacao").html("<div class='container' ><span style='display:inline-block; vertical-align:middle'> <i class='fa fa-globe fa-1x'></i> Notificações <?php if($num_rows > 0) echo '('.$num_rows.')'; ?></span></div>");
});

</script>


<div id="menuEquipe">
    <div class="h-1-7" id="botao_perfil" onclick="show1(); ">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle">
                    <i class="fa fa-user fa-1x" ></i> Bem vindo(a) <?php
                    $nome = explode(" ", $_SESSION['usuarioNome']);
                    echo $nome[0];
                    ?>!
                </span>
            </div>
    </div>
        <button onclick="window.location.href = '<?php echo $root_html ?>sistema'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-home fa-1x"></i> Início</button> <br> 
         <button onclick="window.location.href = '<?php echo $root_html ?>sistema/alunos'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-user fa-1x"></i> Alunos</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/escolas'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-building fa-1x"></i> Escolas</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/cls'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-map-marker fa-1x"></i> Coordenadores Locais</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/clubes'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-group fa-1x"></i> Clubes de Ciências</button> <br>
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/noticias'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-newspaper-o fa-1x"></i> Not&iacute;cias</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/eventos'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-calendar fa-1x"></i> Eventos</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/publicacoes'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-book fa-1x"></i> Publica&ccedil;&otilde;es</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/vestibulares'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-graduation-cap fa-1x"></i> Vestibulares (Guia)</button> <br>
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/projetos'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-gears fa-1x"></i> Projetos</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/equipe'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-user-secret fa-1x"></i> Equipe</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/conteudo'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-gear fa-1x"></i> Conte&uacute;do EAD</button> <br> 
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/parceiros'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-institution fa-1x"></i> Parceiros</button> <br>
            <button onclick="window.location.href = '<?php echo $root_html ?>sistema/sair'" class="ob" type="submit" style="width: 100%; text-align: left;"><i class="fa fa-arrow-circle-left fa-1x"></i> Sair</button> 

    </div>

