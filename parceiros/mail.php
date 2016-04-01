<?php

$root = $_SERVER['DOCUMENT_ROOT'];
$root = $root . '/';
include_once($root . "web/class.phpmailer.php");
$usuario = 'contato@futurocientista.net';
$senha = '1q2w3e';
$nomeRemetente = ''.$_POST['nome_contato'].'';
$emaiRemetente = ''.$_POST['email'].'';
$Subject = ''.$_POST['tipo'].'';
$Message = 'NOME DO CONTATO: '.$_POST['nome_contato'].'<br/>EMAIL DO CONTATO: '.$_POST['email'].'<br/>NOME CIDADE/PREFEITURA/INSITUICAO: '.$_POST['nome_empresa'].'<br/>CARGO: '.$_POST['cargo'].'<br/>MENSAGEM: '.$_POST['msg'].'';
$Host = 'mail.' . substr(strstr($usuario, '@'), 1);
echo $nomeRemetente;


$mail = new PHPMailer();



$mail->isHTML(true);
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = $Host;
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
$mail->Port = "587";                    // set the SMTP port for the GMAIL server
$mail->Username = $usuario;
$mail->Password = $senha;
$mail->SetFrom($emaiRemetente, $nomeRemetente);
$mail->AddReplyTo($emaiRemetente, $nomeRemetente);
$mail->Body = $Message;
$mail->Subject = $Subject;
$mail->AddAddress("contato@futurocientista.net", "Contato");
$mail->AddCC("coordenador@futurocientista.net", "Coordenador");

if (!$mail->Send()) {
    $mensagemRetorno = 'Erro ao enviar e-mail: ' . print($mail->ErrorInfo);
} else {
    $mensagemRetorno = 'E-mail enviado com sucesso!';
}


echo '<script>  alert("' . $mensagemRetorno . '"); history.go(-1);</script>';
?>
