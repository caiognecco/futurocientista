<?php
$titulo = ' Conteúdo - Programa Futuro Cientista®';
$descricao = '';
$img = '';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

include '../../web/seguranca.php';
include '../../web/script.php';
include '../../web/header.php';
$query = "SELECT * FROM tipo_conteudo ORDER BY RAND()";
$result = mysql_query($query);




if (isset($_GET['p'])){
    $p = $_GET['p'];
    $query3 = 'SELECT * FROM tipo_conteudo WHERE id_tipo LIKE "' . $p . '"';
    $result3 = mysql_query($query3);
    $nome1 = mysql_fetch_array($result3);
   
}
if (isset($p) && isset($_GET['r'])) {
    $r = $_GET['r'];
    $query1 = "SELECT * FROM conteudo WHERE id_conteudo LIKE '" . $r . "'";

    $result1 = mysql_query($query1);
    $nome = mysql_fetch_assoc($result1);

    $query_tag = 'SELECT t.nome from temas as t inner join tema_conteudo as t_c on t.tema = t_c.tema where t_c.id_conteudo = "' . $nome['id_conteudo'] . '"';
    $result_tag = mysql_query($query_tag);
    
    $query4 = "SELECT nome FROM usuario WHERE h = 1 ORDER BY nome";
    $result4 = mysql_query($query4);
}
$query2 = "SELECT * FROM temas";
$result2 = mysql_query($query2);

protegePagina(1);

?>
<script type="text/javascript">

    $(document).ready(function () {
        
        var r = 0;
        $('#rec').click(function(){
         
            if (r === 0){
                $('#recomendar_conteudo').show();
                r = 1;
                $("#corpoEquipe").animate({"scrollTop": window.scrollY+800}, 1000);
            }  
            else{
                $('#recomendar_conteudo').hide();
                r = 0;
            }
        });
            
       



        $('#titulo_input').keyup(function () {
            var data = $(".formulario").serialize();
            $.ajax({
                url: '<?php echo $root_html ?>sistema/conteudo/busca.php',
                type: 'POST',
                data: data,
                success: function (data) {
                    $('#resultados_container').html(data);

                },
                error: function (e) {
                    $('#resultados_container').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                }
            });

        });
        
        $('#tags').change(function () {
            var data = $(".formulario").serialize();
            $.ajax({
                url: '<?php echo $root_html ?>sistemaconteudo/busca.php',
                type: 'POST',
                data: data,
                success: function (data) {
                    $('#resultados_container').html(data);

                },
                error: function (e) {
                    $('#resultados_container').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                }
            });

        });
        
        $('#recomendar').click(function () {
       
            var data = $("#recomendar_form").serialize();
            $.ajax({
                url: '<?php echo $root_html ?>sistema/conteudo/recomendar.php',
                type: 'POST',
                data: data,
                success: function (data) {
                    $('#resultado_rec').html(data);
                   

                },
                error: function (e) {
                    $('#resultado_rec').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                }
            });

        });

        $("#tags2").autocomplete({
            source: [
<?php
while ($row2 = mysql_fetch_array($result2)) {
    echo '"' . html_entity_decode($row2["nome"]) . '",';
}
?>

            ],
            appendTo: "#resultado",
            open: function () {
                var position = $("#resultado").position(),
                        left = position.left, top = position.top;

                $("#resultado > ul").css({left: left + 20 + "px",
                    top: top + 4 + "px"});

            }
        });
        $( "#busca_usuario" ).autocomplete({
  source: [
  <?php
  if (isset($p) && isset($_GET['r'])){
                    while ($row4 = mysql_fetch_array($result4)) {
                        echo '"'.  html_entity_decode($row4["nome"]). '",';
                    }
  }
                    ?>
                                    
            ],
  appendTo: "#resultado_usuario",
  minLength: 3
    
});
    });





</script>


<div id="menu1" <?php if(isset($p)) echo 'style="background: ' . $nome1["cor"] . '; color: white;"'; ?>>

    <div class="container" ><span style="display:inline-block; vertical-align:middle"> 
<?php if (isset($r)): ?>
                <span style="display:inline-block; vertical-align:middle"><?php echo ' <i class=" fa ' . $nome1["ico"] . ' fa-1x"></i> ' . $nome1["nome"] ?> </span>
            <?php else:
                if (isset($p)):
                
                ?>
                <span style="display:inline-block; vertical-align:middle"><i class="fa fa-search fa-1x"></i> Busca Conteúdo (<?php echo ' <i class=" fa ' . $nome1["ico"] . ' fa-1x"></i> ' . $nome1["nome"] ?>) </span>
            <?php else: ?>
                <span style="display:inline-block; vertical-align:middle"><i class="fa fa-search fa-1x"></i> Busca Conteúdo </span>
                
                <?php endif; endif; ?>
        </span></div>
</div>
<div id="corpo">

<?php
if ($_SESSION['h'] === '1') {
    if (!$mobile) {
        include '../menu_aluno_pc.php';
    }
} elseif ($_SESSION['h'] === '3'){
    include '../menu_equipe_pc.php';
}//MENU ALUNOS 

?>
<?php

if (isset($p) && isset($r)) {
    $query1 = "SELECT * FROM conteudo WHERE id_conteudo LIKE '" . $r . "'";

    $result1 = mysql_query($query1);
    $nome = mysql_fetch_assoc($result1);

    $query_tag = 'SELECT t.nome from temas as t inner join tema_conteudo as t_c on t.tema = t_c.tema where t_c.id_conteudo = "' . $nome['id_conteudo'] . '"';
    $result_tag = mysql_query($query_tag);
}
?>
    <?php if (isset($r)): ?>
        <?php if(!$mobile): ?>
        <div id="corpoEquipe">
            <?php endif; ?>
            <div class="conteudo_titulo"><?php echo $nome["titulo"]; ?></div>
            <div class="conteudo_tags_container" >
                <?php
                while ($res_tags = mysql_fetch_assoc($result_tag)) {
                    echo '<div class="conteudo_tag"> <i class="fa fa-caret-right fa-1x" style="color: white;"></i> ';
                    echo $res_tags['nome'];
                    echo '</div>';
                }
                ?>
            </div>
            <div class="conteudo_descricao">
                <?php echo $nome["descricao"]; ?>
            </div>
            <div class="conteudo_link">
                <?php
                $link = explode('.', $nome["link"]);
                if ("youtube" == $link[1]) {
                    echo '<iframe id="frameyoutube" style="width: 100%; height: 100%;" src="';
                    echo $nome["link"];
                    echo '" frameborder="0" allowfullscreen></iframe></div>';
                    
                } else {
                    echo '<button onclick="window.open(\''.$nome["link"].'\')"';
                    echo ' ><i class="fa fa-send fa-1x"></i> Link para o conteúdo</button></div>';
                }
                ?>
                <div class="conteudo_acoes" >
                <button onclick="window.location.href = '<?php echo $root_html; ?>sistema'"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button> |
                <button type="button" id="rec" ><i class="fa fa-send fa-1x"></i> Recomendar Conteúdo</button> |
                <button type="button" class="bw" ><i class="fa fa-facebook-square fa-1x"></i> Compartilhar</button>
            </div> <br><br>
            <div id="recomendar_conteudo" style="display: none;">
                <form id="recomendar_form" class="formulario" style="height: 100%" method="post" action="recomendar.php">
                    <span> Escolha um usuário para recomendar por vez: </span><br><br>
                    <input name="busca" id="busca_usuario" type="text"><br><br>
                    <input type="text" style="display: none" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" name="url">
                    <button type="button" id="recomendar"><i class="fa fa-send fa-1x"></i> Recomendar</button><br><br>
                    <div id="resultado_rec"></div><br><br>
                     <div id="resultado_usuario"> Usuários: </div><br><br>
                </form><br><br>
            </div>
        </div>





    <?php else: ?>
<?php if (!$mobile): ?>
        <div id="corpoEquipe">
            <?php endif; ?>

            <br>
            <form class="formulario" style="height: auto" enctype="multipart/form-data" action="busca.php" method="POST"><br>
                <small class="ajuda_user"><i class="fa fa-1x fa-check-square"></i> Faça sua busca por título ou tema. Os resultados apareçem logo abaixo<br></small><br>

                <label for="titulo_input">Título:</label>  <input style="background: white; border-color: #9daccc; " id="titulo_input" name="titulo_input" type="text" autocomplete="off" />
                <br><br>
                <label for="titulo_input">Temas:</label>   <br>
                <small class="ajuda_user">
                    <i class="fa fa-1x fa-check-square"></i> Use as teclas <i class="fa fa-arrow-circle-up fa-1x"></i> e <i class="fa fa-arrow-circle-down fa-1x"></i> para navegar entre as sugestões.<br>
                    <i class="fa fa-1x fa-check-square"></i> Pressione "enter" para inserir o tema. <br>
                    <i class="fa fa-1x fa-check-square"></i> Pressione "enter" ou "vírgula" para inserir mais temas. <br>

                </small><br>
                <input type="text" value="<?php if(isset($p)) echo $p; else echo''; ?>" style="display: none;" name="tipo">
                <input type="text" data-role="tagsinput" data-provide="typeahead" name="tags" id="tags" autocomplete="off"><br><br>
                <div id="resultado"> Sugestões de temas: </div><br><br>
                <button type="button" onclick="window.location.href = '<?php echo $root_html;  ?>sistema'"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button>
            </form><br><br>
            <div class="resultados">
                <div class="resultados_header"><div class="container">
                        <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-reorder fa-1x"></i> Resultados </span>
                    </div></div>
                <div id="resultados_container">
                    <br>
<span class='ajuda_user'>Digite algo nos campos de busca!</span>
<br><br>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php if (!$mobile): ?>
</div>
    <?php endif; ?>




<?php
if (!$mobile) {
    include '../../web/footer.php';
} else {
    include '../menu_aluno_mobile.php';
}
?>
