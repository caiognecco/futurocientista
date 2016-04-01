<?php 
include '../../web/seguranca.php';
$query = "DELETE FROM usuario WHERE id_usuario = '".$_POST['cl']."'";

if (mysql_query($query)){
 echo "<span class='ajuda_user'>Coordenador Local excluido com sucesso!</span>";
}else{
    echo "<span class='ajuda_user'>Coordenador Local não exluido!</span>";
}

?>
