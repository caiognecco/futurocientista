

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

<div id="central_notificacao">
    <small><div style="width: 100%; border-bottom: 0.1em solid black; padding-bottom: 2%; padding-top: 1%"><span style="color: #ff6600;"><i class="fa fa-globe fa 1x"></i> Notificações</span></div></small>
    <?php 
    if (mysql_num_rows($exec_not) != 0){
        
       
        while ($not = mysql_fetch_array($exec_not)) {
            $query_user = "SELECT nome FROM usuario WHERE id_usuario LIKE '".$not['id_user1']."'";
            $exec_user = mysql_query($query_user);
            $result_user = mysql_fetch_assoc($exec_user);
           
            if ($not['lida'] == 0)
                echo '<div style="padding: 2%; height:16%; border-bottom: 0.1em solid black;"><small><span style="color: #ff6600"><i class="fa fa-star fa-1x"></i> <b>Nova : </b></span>';
            else
                echo '<div style="padding: 2%; height:16%; border-bottom: 0.1em solid black;"><small>';
            echo ''.$result_user['nome'];
            if ($not['tipo_notificacao'] == 1)
                   echo ' te recomendou um conteúdo ás <br>'.$not['hora'].' do dia '.implode("/",array_reverse(explode("-",$not["data"]))).'';
             echo '<br><a class="br" href="'.$not['link'].'"><i class="fa fa-arrow-circle-right fa-1x"></i> Ver link</a>';
            echo '</small></div></a>';
        }
        
    }else{
        echo '<br><small>Você não possui nenhuma nova notificação</small>';
    }
    ?>
             
        </div>
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
        <div class="h-1-7" id="botao_notificacao" onclick="show_central_notificacao(a);">
            <div class="container" >
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-globe fa-1x"></i> Notificações</span>
            </div>
        </div>
        <div class="h-1-7" id="botao_criar" onclick="location.href = '<?php echo $root_html ?>sistema/criar_conteudo'">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-upload fa-1x"></i> Criar Conteúdo</span>
            </div>
        </div>
        <div class="h-1-7" id="botao_projetos" onclick="show4();">
<div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-gears fa-1x"></i> Projetos</span>
            </div>
        </div>
        <div class="h-1-7" id="botao_plantao" onclick="show5();">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-question fa-1x"></i> Plantão de Dúvidas </span>
            </div>
            
        </div>
        <div class="h-1-7" id="botao_cc" onclick="show6();">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-group fa-1x"></i> Clubes de Ciências</span>
            </div>
            
        </div>
        <div class="h-1-7" onclick="document.location ='<?php echo $root_html ?>sistema/sair'">
            <div class="container">
                <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-arrow-circle-left fa-1x"></i> Sair</span>
            </div>
            
        </div>
    </div>

