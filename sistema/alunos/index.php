<?php
$titulo = ' Alunos - Programa Futuro Cientista®';
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
    $query = "SELECT * FROM usuario AS u, escola AS e WHERE u.id_escola = e.id_escola AND u.h = 1 AND u.id_usuario=" . $r . "";
    $result = mysql_query($query);
    $aluno = mysql_fetch_assoc($result);
    ?>


    <?php if ($p == 'ver'): // VER   ?>

        <div id="menu1">
            <div class="container" ><span style="display:inline-block; vertical-align:middle">
                    <span style="display:inline-block; vertical-align:middle"><i class="fa fa-user fa-1x"></i> Alunos - Ver Informações </span>
            </div>
        </div>
        <div id="corpo" style="font-size: 1.2em;">
            <br><br>
            <div style="width: 76%; position: relative; left: 10%; background: lightgray;; text-align: justify; padding: 2%;">

                <span style="color: #ff6600">Nome:</span> <?php echo $aluno['nome']; ?><br>
                <span style="color: #ff6600"> E-mail:</span> <?php echo $aluno['email']; ?><br>
                <span style="color: #ff6600">Telefone: </span><?php echo $aluno['tel']; ?><br>
                <span style="color: #ff6600"> Data de Nascimento:</span> <?php echo $aluno['data']; ?><br>
                <span style="color: #ff6600"> Tamanho da Camiseta: </span><?php echo $aluno['camiseta']; ?><br>
                <span style="color: #ff6600"> Escola: </span><?php echo $aluno['nome_escola']; ?><br>
                <span style="color: #ff6600"> Série:</span> <?php echo $aluno['serie']; ?><br>
                <span style="color: #ff6600">  Cidade: </span> <?php echo $aluno['cidade'] ?><br><br>
                <div style="text-align: center">
                    <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema/alunos'"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button> | 
                    <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema/alunos/editar/<?php echo $aluno['id_usuario'] ?>'"><i class="fa fa-pencil-square fa-1x"></i> Editar</button> | 
                    <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema/alunos/excluir/<?php echo $aluno['id_usuario'] ?>'"><i class="fa fa-times-circle fa-1x"></i> Excluir</button>
                </div>
            </div>



        </div>




        <?php
    elseif ($p == 'editar'):

        $escola1 = mysql_query("SELECT DISTINCT cidade FROM escola");
    $query_qs = "SELECT * FROM questionariose ORDER BY pergunta_num";
    $result_qs = mysql_query($query_qs);
    
    
// EDITAR  
        ?>

        <script>
            $(document).ready(function () {

                $('#salvar_botao').click(function () {


                    var data = $(".formulario").serialize();
                    $.ajax({
                        url: '<?php echo $root_html ?>sistema/alunos/atualizar.php',
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
                        url: '<?php echo $root_html ?>sistema/alunos/busca_escola.php',
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
                        url: '<?php echo $root_html ?>sistema/alunos/busca_escola.php',
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
                
                $('.upper').keyup(function () {
                    $(this).val(($(this).val()).toUpperCase());
                });
            });
        </script>

        <div id="menu1">
            <div class="container" ><span style="display:inline-block; vertical-align:middle">
                    <span style="display:inline-block; vertical-align:middle"><i class="fa fa-user fa-1x"></i> Alunos - Editar </span>
            </div>
        </div>
        <div id="corpo"><br><br>
            <form class="formulario" id="cadastrar_form" enctype="multipart/form-data">
                <br>
               <input style="display: none" type="text" name="id_usuario" placeholder="Nome" value="<?php echo $r ?>">             
                <label>Nome:</label><input class="upper" type="text" name="nome_cadastrar" placeholder="Nome" value="<?php echo $aluno['nome'] ?>"><br><br>
                <label>E-mail:</label><input type="text" name="email" placeholder="E-mail" value="<?php echo $aluno['email'] ?>"><br><br>
                <label>Senha:</label><input type="text" name="senha" placeholder="Senha"  value="<?php echo $aluno['senha'] ?>"><br><br>
                <label>RG:</label><input type="text" name="rg" placeholder="RG"  value="<?php echo $aluno['rg'] ?>"><br><br>
                <label>RA:</label><input type="text" name="ra" placeholder="RA"  value="<?php echo $aluno['ra'] ?>"><br><br>
                <label>Endereço:</label><input class="upper" type="text" name="end" placeholder="Endereço"  value="<?php echo $aluno['end'] ?>"><br><br>
                <label>Telefone Fixo:</label><input type="text" name="tel" placeholder="Telefone Fixo"  value="<?php echo $aluno['tel'] ?>"><br><br>
                <label>Celular:</label><input type="text" name="cel" placeholder="Celular"  value="<?php echo $aluno['cel'] ?>"><br><br>
                <label>Sexo:</label> <select id="sexo" name="sexo">
                    <option selected="true" value="null">Sexo</option>
                    <option value="1" <?php if ($aluno['sexo']==1) echo 'selected="true"'; ?>>Masculino</option>
                    <option  value="2" <?php if ($aluno['sexo']==2) echo 'selected="true"'; ?>>Feminino</option>
                </select><br><br>
                <label>Etnia:</label><select id="etnia" name="etnia">
                    <option selected="true" value="null">Etnia</option>
                    <option value="1" <?php if ($aluno['sexo']==1) echo 'selected="true"'; ?>>Branco(a)</option>
                    <option value="2" <?php if ($aluno['sexo']==2) echo 'selected="true"'; ?>>Pardo(a)</option>
                    <option value="3" <?php if ($aluno['sexo']==3) echo 'selected="true"'; ?>>Negro(a)</option>
                    <option value="4" <?php if ($aluno['sexo']==4) echo 'selected="true"'; ?>>Amarelo(a)</option>
                     <option  value="5" <?php if ($aluno['sexo']==5) echo 'selected="true"'; ?>>Indígena</option>
                </select><br><br>
                <label>Mãe:</label><input class="upper" type="text" name="mae" placeholder="Mãe"  value="<?php echo $aluno['tel'] ?>"><br><br>
                <label>Pai:</label><input class="upper" type="text" name="pai" placeholder="Pai"  value="<?php echo $aluno['tel'] ?>"><br><br>
                <label>Data de Nascimento:</label><input type="text" id ="data_input" name="data" placeholder="Data de Nascimento"  value="<?php echo $aluno['data'] ?>"><br><br>
                <label>Tamanho da Camiseta:</label><input class="upper" type="text" name="camiseta" placeholder="Tamanho da camiseta"  value="<?php echo $aluno['camiseta'] ?>"><br><br>
                <label>Cidade::</label><select  id="cidade1"  name="cidade1">
                    <option selected="true" value="null">Escolha uma cidade</option>
                    <?php
                    while ($e1 = mysql_fetch_array($escola1)) {
                        if ($e1['cidade'] == $aluno['cidade']) {
                            echo '<option selected="true" value="' . $e1['cidade'] . '">' . $e1['cidade'] . '</option>';
                        } else {
                            echo '<option value="' . $e1['cidade'] . '">' . $e1['cidade'] . '</option>';
                        }
                    }
                    ?>
                </select> <br><br>
                <label>Escola:</label><select id="escola1" name="escola1"> 
                    <option value="<?php echo $aluno['id_escola'] ?>"><?php echo $aluno['nome_escola'] ?></option>
                </select>
                <br><br>
                <label>Série:</label><input class="upper" type="text" name="serie" placeholder="Série" value="<?php echo $aluno['serie'] ?>"><br><br>
                 <label>Página do Face:</label><input class="upper" type="text" name="face" placeholder="Perfil do Facebook" value="<?php echo $aluno['face'] ?>"><br><br>
               <br><br>
                  <span style="font-size: 1.2em;">Question&aacuterio S&oacute;cioecon&ocirc;mico:</span><br>
                     
                <br><br> 
                <?php 
                while ($questao = mysql_fetch_assoc($result_qs)){
                    $query_respostase = "SELECT resposta FROM respostase WHERE usuario_id = '".$r."' AND pergunta_num = '".$questao['pergunta_num']."'";
                    $result_respostase = mysql_query($query_respostase);
                    $respostase = mysql_fetch_assoc($result_respostase);
                    echo '<div style="text-align: left; width: 100%">';
                    echo $questao['pergunta_num'].') '.$questao['pergunta_texto'].'<br><br>';
                    switch ($questao['tipo']){
                    case 1:
                        echo '<select name="r'.$questao['pergunta_num'].'">';
                        for ($i=1;$i<=$questao['questoes'];$i++){
                            echo '<option value="'.$i.'"';
                            if ($i == $respostase['resposta']){
                                echo 'selected = "true" ';
                            }
                            echo '>'.$questao['r'.$i].'</option>';
                        }
                        echo '</select>';
                        break;
                    case 2:
                        
                        $respostase['resposta'] = explode(',', $respostase['resposta']);
                        for ($i=1;$i<=$questao['questoes'];$i++){
     
                                echo '<input type="checkbox" name="r'.$questao['pergunta_num'].'[]" value="'.$i.'"';
                                for ($j=0; $j < count($respostase['resposta']) ; $j++) { 
                                    if ($i == $respostase['resposta'][$j]){
                                        echo 'checked ';
                                    }
                                }
                                echo '>'.$questao['r'.$i];
                                if ($i!=$questao['questoes'])
                                    echo '<br>';
                        }
                        break;
                    case 3:
                        echo '<input class="upper" type="text" name="r'.$questao['pergunta_num'].'" value="'.$respostase['resposta'].'">';
                        break;
  
                    
                    }
                    echo '<br><br></div>';
                }
                ?>
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
                        'aluno': '<?php echo $r ?>'
                    };
                    $.ajax({
                        url: '<?php echo $root_html ?>sistema/alunos/excluir.php',
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
                    <span style="display:inline-block; vertical-align:middle"><i class="fa fa-user fa-1x"></i> Alunos - Excluir </span>
            </div>
        </div>
        <div id="corpo">
            
            <div style="width: 76%; position: relative; left: 10%; background: lightgray;; text-align: justify; padding: 2%;">
                <div style="font-size: 1.5em; color: red; text-align: center; width: 100%">Tem certeza que deseja excluir este aluno?</div><br><br>
                <span style="color: #ff6600">Nome:</span> <?php echo $aluno['nome']; ?><br>
                <span style="color: #ff6600"> E-mail:</span> <?php echo $aluno['email']; ?><br>
                <span style="color: #ff6600">Telefone: </span><?php echo $aluno['tel']; ?><br>
                <span style="color: #ff6600"> Data de Nascimento:</span> <?php echo $aluno['data']; ?><br>
                <span style="color: #ff6600"> Tamanho da Camiseta: </span><?php echo $aluno['camiseta']; ?><br>
                <span style="color: #ff6600"> Escola: </span><?php echo $aluno['nome_escola']; ?><br>
                <span style="color: #ff6600"> Série: </span> <?php echo $aluno['serie']; ?><br>
                <span style="color: #ff6600">  Cidade: </span> <?php echo $aluno['cidade'] ?><br><br>
                <div style="text-align: center">
                    <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema/alunos'"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button> | 
                    
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
    $query = "SELECT * FROM usuario AS u, escola AS e WHERE u.id_escola = e.id_escola AND u.h = 1 ORDER BY e.cidade, e.nome_escola, u.nome";
    $result = mysql_query($query);
    $escola = mysql_query("SELECT DISTINCT cidade FROM escola");
    $escola1 = mysql_query("SELECT DISTINCT cidade FROM escola");
    $query_qs = "SELECT * FROM questionariose ORDER BY pergunta_num";
    $result_qs = mysql_query($query_qs);
    ?>
    <script type="text/javascript">

        $(document).ready(function () {

            $('#nome').keyup(function () {

                $('#resultados').show();
                $('#cadastrar').hide();

                var data = $(".formulario").serialize();
                $.ajax({
                    url: '<?php echo $root_html ?>sistema/alunos/busca.php',
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
            $('.upper').keyup(function () {
                    $(this).val(($(this).val()).toUpperCase());
                });
            $('#cidade').change(function () {
                $('#resultados').show();
                $('#cadastrar').hide();


                var values = {
                    'cidade': $('#cidade').val()
                };
                $.ajax({
                    url: '<?php echo $root_html ?>sistema/alunos/busca_escola.php',
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
                    url: '<?php echo $root_html ?>sistema/alunos/busca.php',
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
                    url: '<?php echo $root_html ?>sistema/alunos/busca_escola.php',
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
                    url: '<?php echo $root_html ?>sistema/alunos/busca.php',
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
                    url: '<?php echo $root_html ?>sistema/alunos/cadastrar.php',
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
                <span style="display:inline-block; vertical-align:middle"><i class="fa fa-user fa-1x"></i> Alunos - Principal </span>
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
                        $('#cadastrar').show();"><i class="fa fa-user-plus fa-1x"></i> Cadastrar Aluno</button> | 

            <button type="button" onclick="window.location.href = '<?php echo $root_html; ?>sistema'"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button>
        </form>
        <div id="resultados">
            <?php
            while ($aluno = mysql_fetch_assoc($result)) {
                echo '<div class="resultado"><div class="resultado_titulo" >';
                echo $aluno["nome"];
                echo '<div style="float: right;"><small><small><button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/alunos/ver/' . $aluno['id_usuario'] . '\'"><i class="fa fa-plus fa-1x"></i> Ver Mais</button> | <button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/alunos/editar/' . $aluno['id_usuario'] . '\'"><i class="fa fa-pencil-square fa-1x"></i> Editar</button> | <button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/alunos/excluir/' . $aluno['id_usuario'] . '\'"><i class="fa fa-times-circle fa-1x"></i> Excluir</button></small></small></div>';
                echo ' </div>';
                echo '<div class="resultado_descricao" >';
                echo $aluno["cidade"] . ' | ' . $aluno['nome_escola'] . ' | ' . $aluno['serie'];
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>




        <div id="cadastrar" style="display: none;">
            <form class="formulario" id="cadastrar_form" enctype="multipart/form-data">
                <br>Preencha todos os campos:<br><br>
                <input class="upper" type="text" name="nome_cadastrar" placeholder="Nome"><br><br>
                <input type="text" name="email" placeholder="E-mail"><br><br>
                <input type="text" name="senha" placeholder="Senha"><br><br>
                <input type="text" name="rg" placeholder="RG"><br><br>
                <input type="text" name="ra" placeholder="RA"><br><br>
                <input class="upper" type="text" name="end" placeholder="Endereço"><br><br>
                <input type="text" name="tel" placeholder="Telefone"><br><br>
                <input type="text" name="cel" placeholder="Celular"><br><br>
                <input class="upper" type="text" name="face" placeholder="Perfil do Facebook"><br><br>
                <select id="sexo" name="sexo">
                    <option selected="true" value="null">Sexo</option>
                    <option value="1">Masculino</option>
                    <option  value="2">Feminino</option>
                </select><br><br>
                <select id="etnia" name="etnia">
                    <option selected="true" value="null">Etnia</option>
                    <option value="1">Branco(a)</option>
                    <option value="2">Pardo(a)</option>
                    <option value="3">Negro(a)</option>
                    <option value="4">Amarelo(a)</option>
                     <option  value="5">Indígena</option>
                </select><br><br>
                <input class="upper" type="text" name="pai" placeholder="Nome do Pai"><br><br>
                <input class="upper" type="text" name="mae" placeholder="Nome da Mãe"><br><br>
                <input type="text" id ="data_input" name="data" placeholder="Data de Nascimento"><br><br>
                <input class="upper" type="text" name="camiseta" placeholder="Tamanho da camiseta"><br><br>
                <select  id="cidade1"  name="cidade1">
                    <option selected="true" value="null">Escolha uma cidade</option>
                    <?php
                    while ($e1 = mysql_fetch_array($escola1)) {
                        echo '<option value="' . $e1['cidade'] . '">' . $e1['cidade'] . '</option>';
                    }
                    ?>
                </select> <br><br>
                <select id="escola1" name="escola1"> 
                    <option selected="true" value="null">Escolha uma escola</option>

                </select>
                <br><br>
                <input class="upper" type="text" name="serie" placeholder="Série"><br><br><br>
                  <span style="font-size: 1.2em;">Question&aacuterio S&oacute;cioecon&ocirc;mico:</span><br>
                     
                <br><br>
                <?php 
                while ($questao = mysql_fetch_assoc($result_qs)){
                    echo '<div style="text-align: left; width: 100%">';
                    echo $questao['pergunta_num'].') '.$questao['pergunta_texto'].'<br><br>';
                    switch ($questao['tipo']){
                    case 1:
                        echo '<select name="r'.$questao['pergunta_num'].'">';
                        for ($i=1;$i<=$questao['questoes'];$i++){
                            echo '<option value="'.$i.'">'.$questao['r'.$i].'</option>';
                        }
                        echo '</select>';
                        break;
                    case 2:
                        for ($i=1;$i<=$questao['questoes'];$i++){
     
                                echo '<input type="checkbox" name="r'.$questao['pergunta_num'].'[]" value="'.$i.'">'.$questao['r'.$i];
                                if ($i!=$questao['questoes'])
                                    echo '<br>';
                        }
                        break;
                    case 3:
                        echo '<input class="upper" type="text" name="r'.$questao['pergunta_num'].'">';
                        break;
  
                    
                    }
                    echo '<br><br></div>';
                }
                ?>
                
                <button type="button" id="cadastrar_botao"><i class="fa fa-user-plus fa-1x"></i> Cadastrar</button>
                <button type="button" onclick="$('#resultados').show();
                            $('#cadastrar').hide();"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button><br><br>
                <div id="resultado_cadastro"></div>
                
                
                
            </form>

        </div><br><br>




    </div>
<?php endif; ?>
<?php
if (!$mobile) {
    include '../../web/footer.php';
} else {
    include '../menu_aluno_mobile.php';
}
?>