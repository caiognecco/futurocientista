<?php

include '../../web/seguranca.php';
$query = "SELECT id_usuario FROM usuario WHERE nome LIKE '".$_POST['busca']."' AND h = 1";
$exec = mysql_query($query);
$result = mysql_fetch_assoc($exec);
$data = date('y-m-d');
$hora = date('H:m:s');
$link = $_POST['url'];
$query1 = "INSERT INTO notificacao (id_user1, id_user2, link, tipo_notificacao, lida, data, hora) VALUES ('".$_SESSION['usuarioID']."','".$result['id_usuario']."','$link',1,'0', '$data', '$hora') ";
$exec1 = mysql_query($query1);
if ($exec1){
    echo '<span class="ajuda_user">Recomendação enviada com sucesso!</span>';
}else{
    echo '<span class="ajuda_user">Recomendação não enviada! Tente novamente!</span>';
}
?>