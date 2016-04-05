<?php 
include '../../web/seguranca.php';
$query = "INSERT INTO escola (nome_escola, email_responsavel, telefone_fixo, cidade, logradouro, bairro, cep, nome_diretor) VALUES ('".$_POST['nome_cadastrar']."','".$_POST['email']."','".$_POST['tel']."','".$_POST['cidade1']."','".$_POST['logradouro']."','".$_POST['bairro']."','".$_POST['cep']."','".$_POST['nome_diretor']."');";

if (mysql_query($query)){
 echo "<span class='ajuda_user'>Escola cadastrada com sucesso!</span>";
}else{
    echo "<span class='ajuda_user'>Escola não cadastrada!</span>";
}

?>