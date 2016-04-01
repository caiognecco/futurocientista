<?php

include '../../web/seguranca.php';


$_POST['nome_cadastrar'] = htmlentities($_POST['nome_cadastrar']);
$_POST['end'] = htmlentities($_POST['end']);
$_POST['mae'] = htmlentities($_POST['mae']);
$_POST['pai'] = htmlentities($_POST['pai']);


$query = "INSERT INTO usuario (nome, email, tel, h, id_escola, camiseta, serie, senha, data_nasc, data_cadastro, rg, ra, cel, end, sexo, etnia, mae, pai, face) VALUES ('" . $_POST['nome_cadastrar'] . "','" . $_POST['email'] . "','" . $_POST['tel'] . "','1','" . $_POST['escola1'] . "','" . $_POST['camiseta'] . "','" . $_POST['serie'] . "','" . $_POST['senha'] . "','" . $_POST['data'] . "','" . date("d/m/Y") . "','" . $_POST['rg'] . "','" . $_POST['ra'] . "','" . $_POST['cel'] . "','" . $_POST['end'] . "','" . $_POST['sexo'] . "','" . $_POST['etnia'] . "','" . $_POST['mae'] . "','" . $_POST['pai'] . "','" . $_POST['face'] . "');";

if (mysql_query($query)) {
    $id_usuario = mysql_insert_id();
    $erro = 0;
    for ($i = 1; $i <= 11; $i++) {
        if (isset($_POST['r'. $i])){
            if (is_array($_POST['r'. $i])){
                $resposta = implode(',', $_POST['r'. $i]);
            }else{
            $resposta = $_POST['r'. $i];
            }
        }else{
            $resposta ='';
        }
        $query = "INSERT INTO respostase (usuario_id, pergunta_num, resposta) VALUES ('$id_usuario','$i','$resposta');";
        if (!mysql_query($query)){
            $erro = 1;
        }
    }
    if ($erro != 1) {
        echo "<span class='ajuda_user'>Aluno cadastrado com sucesso!</span>";
    } else {
        echo "<span class='ajuda_user'>Aluno não cadastrado!</span><br>";
        echo mysql_error();
    }
}else{
    echo "<span class='ajuda_user'>Aluno não cadastrado!</span><br>";
    echo mysql_error();
}
?>