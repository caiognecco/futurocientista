<?php 
include '../../web/seguranca.php';
$query = "DELETE FROM escola WHERE id_escola = '".$_POST['escola']."'";

if (mysql_query($query)){
 echo "<span class='ajuda_user'>Escola excluida com sucesso!</span>";
}else{
    echo "<span class='ajuda_user'>Escola não exluida!</span>";
}

?>
