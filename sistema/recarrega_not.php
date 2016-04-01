<?php

include '../web/seguranca.php';
$query_not = "SELECT * FROM notificacao WHERE id_user2 = '".$_SESSION['usuarioID']."' ORDER BY data DESC, hora DESC";
$exec_not = mysql_query($query_not);
if (mysql_num_rows($exec_not) != 0){
        
       echo ' <small><div style="width: 100%; border-bottom: 0.1em solid black; padding-bottom: 2%; padding-top: 1%"><span style="color: #ff6600;"><i class="fa fa-globe fa 1x"></i> Notificações</span></div></small>';
           
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
        echo ' <small><div style="width: 100%; border-bottom: 0.1em solid black; padding-bottom: 2%; padding-top: 1%"><span style="color: #ff6600;"><i class="fa fa-globe fa 1x"></i> Notificações</span></div></small>';
           
        echo '<br><small>Você não possui nenhuma nova notificação</small>';
    }
    ?>

