<?php
$p = @$_GET['p'];

//ARQUIVO

$root_php = $_SERVER['DOCUMENT_ROOT'].'/fc/';
include '../../web/seguranca.php';
$query = "SELECT * FROM arquivo WHERE link='$p'";
$result = mysql_query($query);
$row = mysql_fetch_assoc ($result);
$titulo = $row['arquivo'];
$descricao = $row["descricao"];
$img = $p;
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

include '../../web/script.php';
include '../../web/header.php';


?>
<script>
    $(window).bind("load", function () {
        document.title = <?php echo '"'.$row['arquivo'].'"'; ?>;
    });
    
    <?php if($p=='' || mysql_num_rows($result)==0): ?>
        window.location = '/erro404';
        <?php endif; ?>
</script>                    


<div id="menu1">
    <div class="container destaques_menu1">
        <span style="display:inline-block; vertical-align:middle"> <i class="fa fa-file fa-1x"></i> Arquivo </span>
    </div>
</div>
<div id="corpo">
    <table style="width: 90%; margin-left: auto; margin-right: auto; background: #666666; color: white; border: 0.2em solid white; margin-top: 2em; margin-bottom: 2em;">
        <tbody>

            <tr>
                <td colspan="2"><p align="center" class="Chamada1">
                        <?php
                        
                        echo'<p align="center" style="font-size: 1.8em;">'.$row["arquivo"].'</p>';
                            
                        ?>
                </td>
            </tr>
            
            <tr>
                <td>
                    <?php 
                   
                        echo '<pre>     '.$row["descricao"].'</pre>';
                    
                    ?>
                    
                    <?php if($row["arquivo"]!=''): ?>
                    <p align="center"><button class="ob" onclick="window.open('<?php echo $row["arquivo"] ?>')"><i class="fa fa-file fa-1x"></i> Baixar</button></p>
                    <?php endif; ?>
                    <br><br><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo $url ?>"><button class="bw"><i class="fa fa-facebook-square fa-1x"></i> Compartilhar</button></a><br><br><button onclick="window.location.href = '/destaques'" class="ob" type="submit"><i class="fa fa-arrow-circle-left fa-1x"></i> Voltar</button><br><br>
                </td>
            </tr>
        </tbody></table>
</div>
<?php
include '../../web/footer.php';
?>