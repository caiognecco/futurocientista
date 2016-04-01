<?php

include '../../web/seguranca.php';

$query = "SELECT * FROM usuario AS u, escola AS e WHERE u.id_escola = e.id_escola AND u.h = 2 ";
if (isset($_POST['nome']))
    $query .= "AND u.nome LIKE '". $_POST['nome']."%' ";
if ($_POST['cidade'] != 'null')
    $query .= "AND e.cidade LIKE '". htmlentities($_POST['cidade'])."' ";
if (isset($_POST['escola']) && $_POST['escola'] != 'todas')
    $query .= "AND u.id_escola LIKE '". $_POST['escola']."' ";


$query .= "ORDER BY e.cidade, e.nome_escola, u.nome";
$result = mysql_query($query);


if (mysql_num_rows($result) != 0){
    while ($cl = mysql_fetch_assoc($result)) {
            echo '<div class="resultado"><div class="resultado_titulo" >';
                echo $cl["nome"];
                echo '<div style="float: right;"><small><small><button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/cls/ver/' . $cl['id_usuario'] . '\'"><i class="fa fa-plus fa-1x"></i> Ver Mais</button> | <button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/cls/editar/' . $cl['id_usuario'] . '\'"><i class="fa fa-pencil-square fa-1x"></i> Editar</button> | <button type="button" onclick="window.location.href = \'' . $root_html . 'sistema/cls/excluir/' . $cl['id_usuario'] . '\'"><i class="fa fa-times-circle fa-1x"></i> Excluir</button></small></small></div>';
                echo ' </div>';
                echo '<div class="resultado_descricao" >';
                echo $cl["cidade"] . ' | ' . $cl['nome_escola'] . ' | ' . $cl['serie'];
                echo '</div>';
                echo '</div>';
        }
} else {

        echo "<br><small class='ajuda_user'>Nenhum resultado encontrado!</small><br><br>";
}
?>






