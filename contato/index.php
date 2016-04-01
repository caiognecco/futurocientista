<?php
//CONTATO
$titulo = 'Contato - Programa Futuro Cientista®';
$descricao = 'D&uacute;vidas e sugest&otilde;es s&atilde;o sempre bem-vindas, gostamos de conversar!';
$img = 'facebook/contato';
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include '../web/seguranca.php';
include '../web/script.php';
include '../web/header.php';
?>

<div id="menu1">
    <div class="container " >
        <span style="display:inline-block; vertical-align:middle"><i class="fa fa-phone fa-1x"></i> Contato </span>
    </div>
</div>
<div id="corpo">
<p align="center" class="Chamada1">Obrigado pelo seu contato! <br>Por favor, preencha todos os campos. 
                    <form class="formulario"  action="mail.php" method="post">

                        <select name="tipo"  required>
                            <option disabled selected value="OUTROS">Tipo de contato</option>
                            <option value="DUVIDA">D&uacute;vida</option>
                            <option value="SUGESTAO">Sugest&atilde;o</option>
                            <option value="RECLAMACAO">Reclama&ccedil;&atilde;o</option>
                            <option value="OUTROS">Outros</option>
                        </select><br><br> <input  required="required" type="text" name="nome" placeholder="Seu nome"><br><br>
                        <input  required="required" type="text" name="email" placeholder="Seu e-mail"><br><br>
                        <input  required="required" type="text" name="assunto" placeholder="Assunto"><br><br>


                        <textarea rows="10" name="msg">Mensagem</textarea> <br><br>
                        <button type="submit" class=""><i class="fa fa-send fa-1x"></i> Enviar</button>
                    </form><br><br>

</div>
<?php
include '../web/footer.php';
?>