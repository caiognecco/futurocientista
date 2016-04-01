<?php 
include '../../web/seguranca.php';
$query = "UPDATE escola SET nome_escola = '".htmlentities($_POST['nome_cadastrar'])."', email_responsavel = '".$_POST['email']."', telefone_fixo = '".$_POST['telefone_fixo']."', logradouro = '".htmlentities($_POST['logradouro'])."', bairro = '".htmlentities($_POST['bairro'])."', cep = '".$_POST['cep']."', cidade = '".htmlentities($_POST['cidade'])."', nome_diretor = '".htmlentities($_POST['nome_diretor'])."' WHERE id_escola = '".$_POST['id_escola']."'";

if (mysql_query($query)){
 echo "<span class='ajuda_user'>Dados atualizados com sucesso!</span>";
}else{
    echo "<span class='ajuda_user'>Dados não atualizados!</span>";
}

?>