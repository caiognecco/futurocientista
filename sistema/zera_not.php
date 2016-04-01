<?php

include '../web/seguranca.php';

$query = "UPDATE notificacao SET lida = 1 WHERE id_user2 = '".$_SESSION['usuarioID']."' AND lida = 0";
$exec = mysql_query($query);
if ($exec){
    if($mobile){
        echo "<div class='container' ><span style='display:inline-block; vertical-align:middle; font-size: 2em;' onclick='show_central_notificacao();'> <i class='fa fa-globe fa-2x'></i> </span></div>";
   
    }else{
        echo "<div class='container' ><span style='display:inline-block; vertical-align:middle'> <i class='fa fa-globe fa-1x'></i> Notificações </span></div>";

          }
     
   
    
    }else{
    echo "ERRO";
}
