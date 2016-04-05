<?php

include '../../web/seguranca.php';

$query = "SELECT * FROM escola WHERE ";
if (isset($_POST['nome'])){
    $query .= "nome_escola LIKE '%". $_POST['nome']."%' ";
    if ($_POST['cidade'] != 'null')
        $query .= "AND cidade LIKE '". htmlentities($_POST['cidade'])."' ";
}else{
    if ($_POST['cidade'] != 'null')
        $query .= " cidade LIKE '". htmlentities($_POST['cidade'])."' ";
}


$query .= "ORDER BY nome_escola";

$result = mysql_query($query);


if (mysql_num_rows($result) != 0){
    while ($escola = mysql_fetch_assoc($result)) {
                echo '<div class="resultado"><div class="resultado_titulo" >';
                echo $escola["nome_escola"];
                echo '<div style="float: right;"><small><small><button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/escolas/ver/' . $escola['id_escola'] . '\'"><i class="fa fa-plus fa-1x"></i> Ver Mais</button> | <button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/escolas/editar/' . $escola['id_escola'] . '\'"><i class="fa fa-pencil-square fa-1x"></i> Editar</button> | <button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/escolas/excluir/' . $escola['id_escola'] . '\'"><i class="fa fa-times-circle fa-1x"></i> Excluir</button></small></small></div>';
                echo ' </div>';
                echo '<div class="resultado_descricao" >';
                echo $escola["cidade"] . ' | ' . $escola['telefone_fixo'] . ' | ' . $escola['nome_diretor'];
                echo '</div>';
                echo '</div>';
            }
} else {

        echo "<br><small class='ajuda_user'>Nenhum resultado encontrado!</small><br><br>";
}
?>






