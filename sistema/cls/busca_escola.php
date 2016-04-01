<?php

include '../../web/seguranca.php';

$query = "SELECT id_escola, nome_escola FROM escola WHERE cidade LIKE '".htmlentities($_POST['cidade'])."'";
$result = mysql_query($query);
    echo '<option selected="true" value="todas"> Todas </option>';
    while ($escola = mysql_fetch_assoc($result)) {
            echo '<option value="'.$escola['id_escola'].'">'.$escola['nome_escola'].'</option>';
        }
?>

