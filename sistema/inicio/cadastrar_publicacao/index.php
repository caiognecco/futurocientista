<?php
//SISTEMA/INICIO/CADASTRAR_PUBLICACAO


include '../../../web/seguranca.php';
include '../../../web/script.php';
include '../../../web/header.php';
protegePagina();
?>


<div id="menu1">
    <div class="container sistema" >
        <span style="display:inline-block; vertical-align:middle"><i class="fa fa-gear fa-1x"></i> Sistema </span>
    </div>
</div>
<div id="corpo">

    <table style="width: 90%; margin-left: auto; margin-right: auto; background: #666666; color: white; border: 0.2em solid white; margin-top: 2em; margin-bottom: 2em;">
        <tbody>

            <tr>
                <td colspan="2"><p align="center" class="Chamada1">
                        <i class="fa fa-book fa-1x"></i> Cadastrar Publica&ccedil;&atilde;o
                </td>
            </tr>
            <tr><td>
                    <br>
                        <form class="formulario" enctype="multipart/form-data" action="cadastrar.php" method="post">
            <input type="hidden" value="empresa" name="tipo">
            <input required="required" type="text" name="link" placeholder="Link (www.futurocientista.net/destaques/publicacao/link)"><br><br>
            <input required="required" type="text" name="titulo" placeholder="T&iacute;tulo"><br><br>
            <input id="fakeupload" name="fakeupload" class="fakeupload" type="text" placeholder="Arquivo" />
            <input id="realupload" name="userfile" class="realupload" type="file" onchange="this.form.fakeupload.value = this.value;" /><br><br>
            <textarea rows="8" name="noticia">Autores</textarea> <br><br>
            <p align="center" class="Chamada1"><button type="submit" class=""><i class="fa fa-send fa-1x"></i> Cadastrar</button></p>
        </form><br><br>
                    <p align="center" class="Chamada1">
                        <button onclick="window.location.href = '<?php echo $root_html ?>sistema/inicio'" class="ob" type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button><br><br>
                    </p> 

                </td> </tr>
        </tbody></table>


</div>

<?php
include '../../../web/footer.php';
?>