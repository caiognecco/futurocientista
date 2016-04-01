<?php
$titulo = ' Criar Conteúdo - Programa Futuro Cientista®';
$descricao = '';
$img = '';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

include '../../web/seguranca.php';
if (!$mobile) {
    include '../../web/script.php';
} else {
    include '../../web/script_mobile.php';
}
if (!$mobile) {
    include '../../web/header.php';
} else {
    include '../../web/header_mobile.php';
}

$query = "SELECT * FROM tipo_conteudo";
$result = mysql_query($query);
$query1 = "SELECT * FROM temas";
$result1 = mysql_query($query1);
protegePagina(1);
?>

<script>
    function Avanca(ide) {
        var aux = ide.split('_');
        document.getElementById('bloco_' + aux[1] + '').style.display = 'none';
        aux_int = parseInt(aux[1]);
        aux_int++;
        document.getElementById('bloco_' + aux_int + '').style.display = 'block';
    }

    function Volta(ide) {
        var aux = ide.split('_');
        document.getElementById('bloco_' + aux[1] + '').style.display = 'none';
        aux_int = parseInt(aux[1]);
        aux_int--;
        document.getElementById('bloco_' + aux_int + '').style.display = 'block';
    }

    $(document).ready(function () {
        $( "#tags2" ).autocomplete({
  source: [
  <?php
                    while ($row1 = mysql_fetch_array($result1)) {
                        echo '"'.  html_entity_decode($row1["nome"]). '",';
                    }
                    ?>
                                    
            ],
  appendTo: "#resultado",
  minLength: 3
    
});

$('#botao_criar').toggleClass('ativo');

$('#criar').click(function () {
            var data = $(".formulario").serialize();
            $.ajax({
                url: '<?php echo $root_html ?>sistema/criar_conteudo/cadastrar.php',
                type: 'POST',
                data: data,
                success: function (data) {
                    $('#resultados').html(data);

                },
                error: function (e) {
                    $('#resultados').html("<span class='ajuda_user'>Erro AJAX.</span>");

                }
            });

        });
    });



</script>






<div id="menu1">

    <div class="container"><span style="display:inline-block; vertical-align:middle"> 


            <i class="fa fa-upload fa-1x"></i> Criar Conteúdo </span>

        </span></div>
</div>
<div id="corpo">
<?php
if ($_SESSION['h'] === '1') {
    if (!$mobile) {
        include '../menu_aluno_pc.php';
    }
} //MENU ALUNOS 
?>

    <div id="corpoEquipe"> 

        <br> <p align="center" class="Chamada1">Insira os dados para criar seu conteúdo. 

        <form class="formulario" action="cadastrar.php" method="post" enctype="multipart/form-data">

            <div id="bloco_1">
                <span>Tipo do conteúdo</span><br><br>
                <small class="ajuda_user"><i class="fa fa-1x fa-check-square"></i> Escolha da lista a seguir o tipo do conteúdo que deseja criar.</small> <br><br>
                <select name="tipo" required>
                    <?php
                    while ($row = mysql_fetch_array($result)) {
                        echo '<option value="'.$row["id_tipo"].'">' . $row["nome"] . '</option>';
                    }
                    ?>
                </select><br><br>
                <button type="button" id="Av_1"  onclick="Avanca(this.id);"><i class="fa fa-arrow-circle-right fa-1x"></i> Próximo</button>
            </div>
            
                <div id="bloco_2" style="display:none;">
                    <span>Link</span><br><br>
                    <small class="ajuda_user"><i class="fa fa-1x fa-check-square"></i> Insira aqui a URL(link da web) da origem do conteúdo.<br>
                    </small><br>
                    <input type="text" name="link" required><br><br>
                <button type="button" id="Vol_2" onclick="Volta(this.id);" ><i class="fa fa-arrow-circle-left fa-1x"></i> Anterior</button> | 
               <button type="button" id="Av_2"  onclick="Avanca(this.id);" ><i class="fa fa-arrow-circle-right fa-1x"></i> Próximo</button>
           


            </div>  


            <div id="bloco_3" style="display:none;">
                <span>Título do conteúdo</span><br>
                <small class="ajuda_user"><i class="fa fa-1x fa-check-square"></i> Escolha um nome para o seu conteúdo ou insira o nome já existente.<br>
                    <i class="fa fa-1x fa-check-square"></i> O nome deve ser o original caso já exista, ou remeter ao conteúdo caso seja escolhido.</small><br><br>
                <input type="text" name="titulo" required><br><br>
                <button type="button" id="Vol_3" onclick="Volta(this.id);" ><i class="fa fa-arrow-circle-left fa-1x"></i> Anterior</button> | 
                <button type="button" id="Av_3"  onclick="Avanca(this.id);" ><i class="fa fa-arrow-circle-right fa-1x"></i> Próximo</button>

            </div>


            <div id="bloco_4" style="display:none;">
                <span>Temas</span><br>
                <small class="ajuda_user"><i class="fa fa-1x fa-check-square"></i>Escolha o(s) temas abordados pelo conteúdo.<br>
                    <i class="fa fa-1x fa-check-square"></i> Use as teclas <i class="fa fa-arrow-circle-up fa-1x"></i> e <i class="fa fa-arrow-circle-down fa-1x"></i> para navegar entre as sugestões.<br>
                    <i class="fa fa-1x fa-check-square"></i> Pressione "enter" para inserir o tema. <br>
                    <i class="fa fa-1x fa-check-square"></i> Pressione "enter" ou "vírgula" para inserir mais temas. <br>
                   
                </small><br>


                <input type="text" data-role="tagsinput" data-provide="typeahead" name="tags" id="tags" required><br><br>
                <div id="resultado"> Sugestões de temas: </div>


                <br><br>
                <button type="button" id="Vol_4" onclick="Volta(this.id);" ><i class="fa fa-arrow-circle-left fa-1x"></i> Anterior</button> | 
                <button type="button" id="Av_4"  onclick="Avanca(this.id);" ><i class="fa fa-arrow-circle-right fa-1x"></i> Próximo</button>
            </div>

            <div id="bloco_5" style="display:none;">
                <span>Descrição</span><br>
                <small class="ajuda_user"><i class="fa fa-1x fa-check-square"></i> Elabore um breve resumo sobre o conteúdo.</small><br><br>
                <textarea name="descricao" required></textarea><br><br>
                <button type="button" id="Vol_5" onclick="Volta(this.id);" ><i class="fa fa-arrow-circle-left fa-1x"></i> Anterior</button> | 
                <button type="button" id="criar"   ><i class="fa fa-upload fa-1x"></i> Criar Conteúdo</button>
                <br><br><div id="resultados"></div><br>

                 </div>


        




        </form><br><br>

        <button onclick="window.location.href = '<?php echo $root_html; ?>sistema'" type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button>


    </div>

</div>

<?php
if (!$mobile) {
    include '../../web/footer.php';
} else {
    include '../menu_aluno_mobile.php';
}
?>
