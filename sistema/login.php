<?php

include '../web/seguranca.php';
$email = $_POST["email"];
$senha = $_POST["senha"];
if (validaUsuario($email, $senha)) {
    ?> <script> window.location = '<?php echo $root_html ?>sistema';</script> <?php

} else {
    echo '<script>  alert("Login ou senha incorretos! "); history.go(-1);</script>';
}
?>
