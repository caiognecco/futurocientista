<?php

$root_php = $_SERVER['DOCUMENT_ROOT'].'/fc/';
include $root_php . 'web/seguranca.php';
$link = $_POST["link"];
$titulo = $_POST["titulo"];
$noticia = $_POST["noticia"];
$data = date("Y");
$uploaddir = $root.'destaques/publicacao/arquivos/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$arquivo = basename($_FILES['userfile']['name']);


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo '<script>  alert("Arquivo v&aacute;lido e enviado com sucesso.")</script>';
} else {
    echo '<script>  alert("Arquivo inv&aacute;lido."); history.go(-1);</script>';
}

$query1 = 'SELECT * FROM futurocientista.publicacao WHERE link LIKE "' . $link . '%"';
$consulta = mysql_query($query1);



if (!mysql_fetch_array($consulta)) {
    $query = "INSERT INTO futurocientista.publicacao (link, titulo, autores, arquivo, ano) VALUES ('$link', '$titulo', '$noticia', '$arquivo', '$data')";
    $inserir = mysql_query($query);
    if ($inserir) {
        echo '<script>  alert("Publica&ccedil;&atilde;o cadastrada com sucesso! "); history.go(-1);</script>';
    } else {
        echo '<script>  alert("Publica&ccedil;&atilde;o n&atilde;o cadastrada, sistema indisponivel. Volte mais tarde! "); history.go(-1);</script>';
    }
} else {
    echo '<script>  alert("Link ja cadastrado no sistema!"); history.go(-1);</script>';
}
?>
