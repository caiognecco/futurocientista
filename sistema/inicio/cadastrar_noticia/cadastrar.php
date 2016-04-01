<?php

$root_php = $_SERVER['DOCUMENT_ROOT'].'/fc/';
include $root_php . 'web/seguranca.php';
$link = $_POST["link"];
$titulo = $_POST["titulo"];
$noticia = $_POST["noticia"];
$data = date("Y-m-d");
$autor = $_SESSION['usuarioNome'];
$uploaddir = $root_php.'destaques/noticia/arquivos/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$arquivo = basename($_FILES['userfile']['name']);
$uploaddir1 = $root_php.'img/destaques/noticias/';
$uploadfile1 = $uploaddir1 . $_POST["link"].'.png';
$arquivo1 = $_POST["link"];


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo '<script>  alert("Arquivo v&aacute;lido e enviado com sucesso.")</script>';
} else {
    echo '<script>  alert("Arquivo inv&aacute;lido."); history.go(-1);</script>';
}

if (move_uploaded_file($_FILES['userfile1']['tmp_name'], $uploadfile1)) {
    echo '<script>  alert("Imagem v&aacute;lida e enviado com sucesso.")</script>';
} else {
    echo '<script>  alert("Imagem inv&aacute;lida."); history.go(-1);</script>';
}

$query1 = 'SELECT * FROM futurocientista.noticia WHERE link LIKE "' . $link . '%"';
$consulta = mysql_query($query1);



if (!mysql_fetch_array($consulta)) {
    $query = "INSERT INTO futurocientista.noticia (link, titulo, noticia, arquivo, data, autor) VALUES ('$link', '$titulo', '$noticia', '$arquivo', '$data', '$autor')";
    $inserir = mysql_query($query);
    
    if ($inserir) {
        echo '<script>  alert("Not&iacute;cia cadastrada com sucesso! "); history.go(-1);</script>';
    } else {
         echo '<script> alert("'.  mysql_error($_SG['link']).'");</script>';
        echo '<script>  alert("Not&iacute;cia n&atilde;o cadastrada, sistema indisponivel. Volte mais tarde! "); history.go(-1);</script>';
    }
} else {
    echo '<script>  alert("Link ja cadastrado no sistema!"); history.go(-1);</script>';
}
?>
