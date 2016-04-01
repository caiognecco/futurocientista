<?php 
include '../../web/seguranca.php';
$query = "INSERT INTO usuario (nome, email, tel, h, id_escola, camiseta, serie, senha, data, data_cadastro) VALUES ('".$_POST['nome_cadastrar']."','".$_POST['email']."','".$_POST['tel']."','2','".$_POST['escola1']."','".$_POST['camiseta']."','".$_POST['serie']."','".$_POST['senha']."','".$_POST['data']."','".  date("d/m/Y")."');";

if (mysql_query($query)){
 echo "<span class='ajuda_user'>Coordenador Local cadastrado com sucesso!</span>";
}else{
    echo "<span class='ajuda_user'>Coordenador Local não cadastrado!</span>";
}

?>