<?php
$titulo = ' Coordenadores Locais - Programa Futuro Cientista®';
$descricao = '';
$img = '';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


include '../../web/seguranca.php';
include '../../web/script.php';
include '../../web/header.php';

protegePagina(3);
?>


<?php
if (isset($_GET['p']) && isset($_GET['r'])):
    $p = $_GET['p'];
    $r = $_GET['r'];
    $query = "SELECT * FROM usuario AS u, escola AS e WHERE u.id_escola = e.id_escola AND u.h = 2 AND u.id_usuario=" . $r . "";
    $result = mysql_query($query);
    $cl = mysql_fetch_assoc($result);
    ?>


    <?php if ($p == 'ver'): // VER   ?>

        <div id="menu1">
            <div class="container" ><span style="display:inline-block; vertical-align:middle">
                    <span style="display:inline-block; vertical-align:middle"><i class="fa fa-map-marker fa-1x"></i> Coordenadores Locais - Ver Informações </span>
            </div>
        </div>
        <div id="corpo" style="font-size: 1.2em;">
            <br><br>
            <div style="width: 76%; position: relative; left: 10%; background: lightgray;; text-align: justify; padding: 2%;">

                <span style="color: #ff6600">Nome:</span> <?php echo $cl['nome']; ?><br>
                <span style="color: #ff6600"> E-mail:</span> <?php echo $cl['email']; ?><br>
                <span style="color: #ff6600">Telefone: </span><?php echo $cl['tel']; ?><br>
                <span style="color: #ff6600"> Data de Nascimento:</span> <?php echo $cl['data']; ?><br>
                <span style="color: #ff6600"> Tamanho da Camiseta: </span><?php echo $cl['camiseta']; ?><br>
                <span style="color: #ff6600"> Escola: </span><?php echo $cl['nome_escola']; ?><br>
                <span style="color: #ff6600"> Série:</span> <?php echo $cl['serie']; ?><br>
                <span style="color: #ff6600">  Cidade: </span> <?php echo $cl['cidade'] ?><br><br>
                <div style="text-align: center">
                    <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema/cls'"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button> | 
                    <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema/cls/editar/<?php echo $cl['id_usuario'] ?>'"><i class="fa fa-pencil-square fa-1x"></i> Editar</button> | 
                    <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema/cls/excluir/<?php echo $cl['id_usuario'] ?>'"><i class="fa fa-times-circle fa-1x"></i> Excluir</button>
                </div>
            </div>



        </div>




        <?php
    elseif ($p == 'editar'):

        $escola1 = mysql_query("SELECT DISTINCT cidade FROM escola");
// EDITAR  
        ?>

        <script>
            $(document).ready(function () {

                $('#salvar_botao').click(function () {


                    var data = $(".formulario").serialize();
                    $.ajax({
                        url: '<?php echo $root_html ?>sistema/cls/atualizar.php',
                        type: 'POST',
                        data: data,
                        success: function (data) {
                            $('#resultado_salvar').html(data);

                        },
                        error: function (e) {
                            $('#resultado_salvar').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                        }
                    });


                });


                $('#escola1').click(function () {
                    var values = {
                        'cidade': $('#cidade1').val()
                    };
                    $.ajax({
                        url: '<?php echo $root_html ?>sistema/cls/busca_escola.php',
                        type: 'POST',
                        data: values,
                        success: function (data) {
                            $('#escola1').html(data);

                        },
                        error: function (e) {
                            $('#escola1').html("<option>Nenhum resultado encontrado.</option>");

                        }
                    });

                });

                $('#cidade1').change(function () {



                    var values = {
                        'cidade': $('#cidade1').val()
                    };
                    $.ajax({
                        url: '<?php echo $root_html ?>sistema/cls/busca_escola.php',
                        type: 'POST',
                        data: values,
                        success: function (data) {
                            $('#escola1').html(data);

                        },
                        error: function (e) {
                            $('#escola1').html("<option>Nenhum resultado encontrado.</option>");

                        }
                    });

                });

                $('#data_input').mask("99/99/9999");
            });
        </script>

        <div id="menu1">
            <div class="container" ><span style="display:inline-block; vertical-align:middle">
                    <span style="display:inline-block; vertical-align:middle"><i class="fa fa-map-marker fa-1x"></i> Coordenadores Locais - Editar </span>
            </div>
        </div>
        <div id="corpo"><br><br>
            <form class="formulario" id="cadastrar_form" enctype="multipart/form-data">
                <br>
               <input style="display: none" type="text" name="id_usuario" placeholder="Nome" value="<?php echo $r ?>">             
                <label>Nome:</label><input type="text" name="nome_cadastrar" placeholder="Nome" value="<?php echo $cl['nome'] ?>"><br><br>
                <label>E-mail:</label><input type="text" name="email" placeholder="E-mail" value="<?php echo $cl['email'] ?>"><br><br>
                <label>Senha:</label><input type="text" name="senha" placeholder="Senha"  value="<?php echo $cl['senha'] ?>"><br><br>
                <label>Telefone:</label><input type="text" name="tel" placeholder="Telefone"  value="<?php echo $cl['tel'] ?>"><br><br>
                <label>Data de Nascimento:</label><input type="text" id ="data_input" name="data" placeholder="Data de Nascimento"  value="<?php echo $cl['data'] ?>"><br><br>
                <label>Tamanho da Camiseta:</label><input type="text" name="camiseta" placeholder="Tamanho da camiseta"  value="<?php echo $cl['camiseta'] ?>"><br><br>
                <label>Cidade::</label><select  id="cidade1"  name="cidade1">
                    <option selected="true" value="null">Escolha uma cidade</option>
                    <?php
                    while ($e1 = mysql_fetch_array($escola1)) {
                        if ($e1['cidade'] == $cl['cidade']) {
                            echo '<option selected="true" value="' . $e1['cidade'] . '">' . $e1['cidade'] . '</option>';
                        } else {
                            echo '<option value="' . $e1['cidade'] . '">' . $e1['cidade'] . '</option>';
                        }
                    }
                    ?>
                </select> <br><br>
                <label>Escola:</label><select id="escola1" name="escola1"> 
                    <option value="<?php echo $cl['id_escola'] ?>"><?php echo $cl['nome_escola'] ?></option>
                </select>
                <br><br>
                <label>Série:</label><input type="text" name="serie" placeholder="Série" value="<?php echo $cl['serie'] ?>"><br><br>
                <button type="button" id="salvar_botao"><i class="fa fa-save fa-1x"></i> Salvar</button>
                <button type="button" onclick="history.go(-1);"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button>
                <br><br><div id="resultado_salvar"></div>
            </form><br><br>
        </div>
       



    <?php elseif ($p == 'excluir'): // EXCLUIR   ?>
        
         <script>
            $(document).ready(function () {

                $('#excluir_botao').click(function () {

                    var values = {
                        'cl': '<?php echo $r ?>'
                    };
                    $.ajax({
                        url: '<?php echo $root_html ?>sistema/cls/excluir.php',
                        type: 'POST',
                        data: values,
                        success: function (data) {
                            $('#resultado_excluir').html(data);

                        },
                        error: function (e) {
                            $('#resultado_excluir').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                        }
                    });


                });
                });

</script>
        <div id="menu1">
            <div class="container" ><span style="display:inline-block; vertical-align:middle">
                    <span style="display:inline-block; vertical-align:middle"><i class="fa fa-map-marker fa-1x"></i> Coordenadores Locais - Excluir </span>
            </div>
        </div>
        <div id="corpo">
            
            <div style="width: 76%; position: relative; left: 10%; background: lightgray;; text-align: justify; padding: 2%;">
                <div style="font-size: 1.5em; color: red; text-align: center; width: 100%">Tem certeza que deseja excluir este Coordenador Local?</div><br><br>
                <span style="color: #ff6600">Nome:</span> <?php echo $cl['nome']; ?><br>
                <span style="color: #ff6600"> E-mail:</span> <?php echo $cl['email']; ?><br>
                <span style="color: #ff6600">Telefone: </span><?php echo $cl['tel']; ?><br>
                <span style="color: #ff6600"> Data de Nascimento:</span> <?php echo $cl['data']; ?><br>
                <span style="color: #ff6600"> Tamanho da Camiseta: </span><?php echo $cl['camiseta']; ?><br>
                <span style="color: #ff6600"> Escola: </span><?php echo $cl['nome_escola']; ?><br>
                <span style="color: #ff6600"> Série: </span> <?php echo $cl['serie']; ?><br>
                <span style="color: #ff6600">  Cidade: </span> <?php echo $cl['cidade'] ?><br><br>
                <div style="text-align: center">
                    <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema/cls'"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button> | 
                    
                    <button type="button" id="excluir_botao"><i class="fa fa-times-circle fa-1x"></i> Excluir</button>
                </div>
                <br><div id="resultado_excluir" style="width: 100%; text-align: center;"></div>
            </div>

        </div>




        <?php
    else:
        die("<script>location.href = '" . $root_html . "erro404'</script>");
    endif;


else: //NORMAL
    $query = "SELECT * FROM usuario AS u, escola AS e WHERE u.id_escola = e.id_escola AND u.h = 2 ORDER BY e.cidade, e.nome_escola, u.nome";   
$result = mysql_query($query);
    $escola = mysql_query("SELECT DISTINCT cidade FROM escola");
    $escola1 = mysql_query("SELECT DISTINCT cidade FROM escola");
    ?>
    <script type="text/javascript">

        $(document).ready(function () {

            $('#nome').keyup(function () {

                $('#resultados').show();
                $('#cadastrar').hide();

                var data = $(".formulario").serialize();
                $.ajax({
                    url: '<?php echo $root_html ?>sistema/cls/busca.php',
                    type: 'POST',
                    data: data,
                    success: function (data) {
                        $('#resultados').html(data);

                    },
                    error: function (e) {
                        $('#resultados').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                    }
                });


            });
            $('#cidade').change(function () {
                $('#resultados').show();
                $('#cadastrar').hide();


                var values = {
                    'cidade': $('#cidade').val()
                };
                $.ajax({
                    url: '<?php echo $root_html ?>sistema/cls/busca_escola.php',
                    type: 'POST',
                    data: values,
                    success: function (data) {
                        $('#escola').html(data);

                    },
                    error: function (e) {
                        $('#escola').html("<option>Nenhum resultado encontrado.</option>");

                    }
                });

                var data = $(".formulario").serialize();
                $.ajax({
                    url: '<?php echo $root_html ?>sistema/cls/busca.php',
                    type: 'POST',
                    data: data,
                    success: function (data) {
                        $('#resultados').html(data);

                    },
                    error: function (e) {
                        $('#resultados').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                    }
                });



            });


            $('#cidade1').change(function () {


                var values = {
                    'cidade': $('#cidade1').val()
                };
                $.ajax({
                    url: '<?php echo $root_html ?>sistema/cls/busca_escola.php',
                    type: 'POST',
                    data: values,
                    success: function (data) {
                        $('#escola1').html(data);

                    },
                    error: function (e) {
                        $('#escola1').html("<option>Nenhum resultado encontrado.</option>");

                    }
                });


            });

            $('#escola').change(function () {
                $('#resultados').show();
                $('#cadastrar').hide();

                var data = $(".formulario").serialize();
                $.ajax({
                    url: '<?php echo $root_html ?>sistema/cls/busca.php',
                    type: 'POST',
                    data: data,
                    success: function (data) {
                        $('#resultados').html(data);

                    },
                    error: function (e) {
                        $('#resultados').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                    }
                });

            });
            $('#cadastrar_botao').click(function () {


                var data = $(".formulario").serialize();
                $.ajax({
                    url: '<?php echo $root_html ?>sistema/cls/cadastrar.php',
                    type: 'POST',
                    data: data,
                    success: function (data) {
                        $('#resultado_cadastro').html(data);

                    },
                    error: function (e) {
                        $('#resultado_cadastro').html("<span class='ajuda_user'>Nenhum resultado encontrado.</span>");

                    }
                });


            });

            $('#data_input').mask("99/99/9999");







        });



    </script>


    <div id="menu1">
        <div class="container" ><span style="display:inline-block; vertical-align:middle">
                <span style="display:inline-block; vertical-align:middle"><i class="fa fa-map-marker fa-1x"></i> Coordenadores Locais - Principal </span>
        </div>
    </div>


    <div id="corpo">
        <form class="formulario" style="height: auto" enctype="multipart/form-data" action="busca.php" method="POST">

            <label for="titulo_input">Nome: </label>  <input style="width: 20%" id="nome" name="nome" type="text" autocomplete="off" /> | 
            <label for="titulo_input">Cidade: </label> <select style="width: 20%" id="cidade"  name="cidade">
                <option selected="true" value="null">Escolha uma cidade</option>
                <?php
                while ($e = mysql_fetch_array($escola)) {
                    echo '<option value="' . $e['cidade'] . '">' . $e['cidade'] . '</option>';
                }
                ?>
            </select> | 
            <label for="titulo_input">Escola: </label> <select style="width: 20%" id="escola" name="escola"> 

            </select><br><br>
            <button type="button" onclick="$('#resultados').hide();
                        $('#cadastrar').show();"><i class="fa fa-plus fa-1x"></i> Cadastrar Coordenador Local</button> | 

            <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema'"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button>
        </form>
        <div id="resultados">
            <?php
            while ($cl = mysql_fetch_assoc($result)) {
                echo '<div class="resultado"><div class="resultado_titulo" >';
                echo $cl["nome"];
                echo '<div style="float: right;"><small><small><button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/cls/ver/' . $cl['id_usuario'] . '\'"><i class="fa fa-plus fa-1x"></i> Ver Mais</button> | <button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/cls/editar/' . $cl['id_usuario'] . '\'"><i class="fa fa-pencil-square fa-1x"></i> Editar</button> | <button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/cls/excluir/' . $cl['id_usuario'] . '\'"><i class="fa fa-times-circle fa-1x"></i> Excluir</button></small></small></div>';
                echo ' </div>';
                echo '<div class="resultado_descricao" >';
                echo $cl["cidade"] . ' | ' . $cl['nome_escola'] . ' | ' . $cl['serie'];
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>




        <div id="cadastrar" style="display: none;">
            <form class="formulario" id="cadastrar_form" enctype="multipart/form-data">
                <br>Preencha todos os campos:<br><br>
                <input type="text" name="nome_cadastrar" placeholder="Nome"><br><br>
                <input type="text" name="email" placeholder="E-mail"><br><br>
                <input type="text" name="senha" placeholder="Senha"><br><br>
                <input type="text" name="tel" placeholder="Telefone"><br><br>
                <input type="text" id ="data_input" name="data" placeholder="Data de Nascimento"><br><br>
                <input type="text" name="camiseta" placeholder="Tamanho da camiseta"><br><br>
                <select  id="cidade1"  name="cidade1">
                    <option selected="true" value="null">Escolha uma cidade</option>
                    <?php
                    while ($e1 = mysql_fetch_array($escola1)) {
                        echo '<option value="' . $e1['cidade'] . '">' . $e1['cidade'] . '</option>';
                    }
                    ?>
                </select> <br><br>
                <select id="escola1" name="escola1"> 

                </select>
                <br><br>
                <input type="text" name="serie" placeholder="Série"><br><br>
                <button type="button" id="cadastrar_botao"><i class="fa fa-map-marker-plus fa-1x"></i> Cadastrar</button>
                <button type="button" onclick="$('#resultados').show();
                            $('#cadastrar').hide();"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button><br><br>
                <div id="resultado_cadastro"></div>
            </form>

        </div>




    </div>
<?php endif; ?>
<?php
if (!$mobile) {
    include '../../web/footer.php';
} else {
    include '../menu_cl_mobile.php';
}
?>