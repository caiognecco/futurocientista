<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$root = $root . '/';
include_once($root . "web/class.phpmailer.php");

if($_POST['categoria'] == 'ERFC'){
  $usuario = 'erfc@futurocientista.net'; 
  $Subject = 'Relatorio ERFC de '.$_POST['nome'];
  $senha = 'pfc20102015';
}else{
$usuario = 'concursocontos@futurocientista.net';
$Subject = $_POST['categoria'];
$senha = '1q2w3e';
}

$nomeRemetente = ''.$_POST['nome'].'';
$emailRemetente = ''.$_POST['email'].'';
$serie = ''.$_POST['serie'].'';

$Message = 'Nome: '.$_POST['nome'].' - Email: '.$_POST['email'].' - Cidade: '.$_POST['cidade'].' - Escola: '.$_POST['escola'].' - S&eacute;rie: '.$_POST['serie'].'';
$Host = 'mail.' . substr(strstr($usuario, '@'), 1);
$source = $_FILES['userfile']['tmp_name'];
$filename = $_FILES['userfile']['name'];


$mail = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = $Host;
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
$mail->Port = "587";                    // set the SMTP port for the GMAIL server
$mail->Username = $usuario;
$mail->Password = $senha;
$mail->SetFrom($emailRemetente, $nomeRemetente);
$mail->AddReplyTo($emailRemetente, $nomeRemetente);
$mail->Body = $Message;
$mail->Subject = $Subject;
if($_POST['categoria'] == 'ERFC'){
    $mail->AddAddress("erfc@futurocientista.net", "ERFC");
}else{
$mail->AddAddress("concursocontos@futurocientista.net", "Concurso Contos");
}
$mail->AddAttachment($source, $filename);
echo "ok";



if (!$mail->Send()) {
    $mensagemRetorno = 'Erro ao enviar conto: ' . print($mail->ErrorInfo);
} else {
    if($_POST['categoria'] == 'ERFC'){
        $mensagemRetorno = 'Relatório enviado com sucesso!';
    }else{
    $mensagemRetorno = 'Conto enviado com sucesso!';
    }
}


echo '<script>  alert("' . $mensagemRetorno . '"); history.go(-1);</script>';
?>
