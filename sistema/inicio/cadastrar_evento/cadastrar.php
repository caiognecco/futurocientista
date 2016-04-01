<?php

$root_php = $_SERVER['DOCUMENT_ROOT'].'/fc/';
include $root_php . 'web/seguranca.php';
$link = $_POST["link"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$cronograma = $_POST["cronograma"];
$infos = $_POST["infos"];
$data = date("Y");
$uploaddir = $root_php.'destaques/evento/arquivos/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$arquivo = basename($_FILES['userfile']['name']);
$uploaddir1 = $root_php.'img/destaques/eventos/';
$uploadfile1 = $uploaddir1 . $_POST["link"].'.png';
$arquivo1 = $_POST["link"];


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo '<script>  alert("Arquivos v&aacute;lidos e enviado com sucesso.")</script>';
} else {
    echo '<script>  alert("Arquivos inv&aacute;lidos."); history.go(-1);</script>';
}

if (move_uploaded_file($_FILES['userfile1']['tmp_name'], $uploadfile1)) {
    echo '<script>  alert("Imagem v&aacute;lida e enviado com sucesso.")</script>';
} else {
    echo '<script>  alert("Imagem inv&aacute;lida."); history.go(-1);</script>';
}

$query1 = 'SELECT * FROM futurocientista.evento WHERE link LIKE "' . $link . '%"';
$consulta = mysql_query($query1);



if (!mysql_fetch_array($consulta)) {
    $query = "INSERT INTO futurocientista.evento (link, titulo, descricao, cronograma, infos, chamada, ano) VALUES ('$link', '$titulo', '$descricao', '$cronograma', '$infos', '$arquivo', '$data')";
    $inserir = mysql_query($query);
    if ($inserir) {
        echo '<script>  alert("Evento cadastrado com sucesso! "); history.go(-1);</script>';
    } else {
        echo '<script>  alert("Evento n&atilde;o cadastrado, sistema indisponivel. Volte mais tarde! "); history.go(-1);</script>';
    }
} else {
    echo '<script>  alert("Link ja cadastrado no sistema!"); history.go(-1);</script>';
}
?>
