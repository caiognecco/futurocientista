<?php 
include '../../web/seguranca.php';
$query = "UPDATE usuario SET nome = '".$_POST['nome_cadastrar']."', email = '".$_POST['email']."', tel = '".$_POST['tel']."', id_escola = '".$_POST['escola1']."', camiseta = '".$_POST['camiseta']."', serie = '".$_POST['serie']."', senha = '".$_POST['senha']."', data = '".$_POST['data']."' WHERE id_usuario = '".$_POST['id_usuario']."'";

if (mysql_query($query)){
 echo "<span class='ajuda_user'>Dados atualizados com sucesso!</span>";
}else{
    echo "<span class='ajuda_user'>Dados não atualizados!</span>";
}

?>