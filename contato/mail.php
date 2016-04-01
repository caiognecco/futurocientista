<?php

include_once("../web/class.phpmailer.php");
$usuario = 'contato@futurocientista.net';
$senha = '1q2w3e4r';
$nomeRemetente = ''.$_POST['nome'].'';
$emaiRemetente = ''.$_POST['email'].'';
$Subject = ''.$_POST['tipo'].' - '.$_POST['assunto'].'';
$Message = ''.$_POST['msg'].'';
$Host = 'mail.' . substr(strstr($usuario, '@'), 1);
echo $nomeRemetente;


$mail = new PHPMailer();

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
$mail->AddCC("tiagoliveirareis@gmail.com", "Tiago O. Reis");
$mail->AddCC("caroline.pfcufscar@gmail.com", "Caroline P. Brandini");

if (!$mail->Send()) {
    $mensagemRetorno = 'Erro ao enviar e-mail: ' . print($mail->ErrorInfo);
} else {
    $mensagemRetorno = 'E-mail enviado com sucesso!';
}


echo '<script>  alert("' . $mensagemRetorno . '"); history.go(-1);</script>';
?>
