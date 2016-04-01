<?php
//SISTEMA/INICIO/CADASTRAR_EVENTO

$titulo = "Cadastrar Evento";
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
                        <i class="fa fa-newspaper-o fa-1x"></i> Cadastrar Evento
                </td>
            </tr>
            <tr><td>
                    <br>
                        <form class="formulario" enctype="multipart/form-data" action="cadastrar.php" method="post">
            <input required="required" type="text" name="link" placeholder="Link (www.futurocientista.net/destaques/noticia/link)"><br><br>
            <input required="required" type="text" name="titulo" placeholder="T&iacute;tulo"><br><br>
            <input id="fakeupload" name="fakeupload" class="fakeupload" type="text" placeholder="Arquivos" />
            <input id="realupload" name="userfile" class="realupload" type="file" onchange="this.form.fakeupload.value = this.value;" /><br><br>
            <input id="fakeupload1" name="fakeupload1" class="fakeupload" type="text" placeholder="Imagem" />
            <input id="realupload1" name="userfile1" class="realupload" type="file" onchange="this.form.fakeupload1.value = this.value;" /><br><br>
            <textarea rows="8" name="descricao">Sobre</textarea> <br><br>
            <textarea rows="8" name="cronograma">Cronograma</textarea> <br><br>
            <textarea rows="8" name="infos">Informa&ccedil;&otilde;es importantes</textarea> <br><br>
            <p align="center" class="Chamada1"><button type="submit" class=""><i class="fa fa-send fa-1x"></i> Cadastrar</button></p>
        </form><br><br> <p align="center" class="Chamada1">
                        <button onclick="window.location.href = '<?php echo $root_html ?>sistema/inicio'" class="ob" type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button><br><br>
                    </p> 

                </td> </tr>
        </tbody></table>


</div>

<?php
include '../../../web/footer.php';
?>