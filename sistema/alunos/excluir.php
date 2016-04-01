<?php 
include '../../web/seguranca.php';
$query = "DELETE FROM usuario WHERE id_usuario = '".$_POST['aluno']."'";

if (mysql_query($query)){
 echo "<span class='ajuda_user'>Aluno excluido com sucesso!</span>";
}else{
    echo "<span class='ajuda_user'>Aluno não exluido!</span>";
}

?>
