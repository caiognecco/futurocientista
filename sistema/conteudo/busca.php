<?php

include '../../web/seguranca.php';

$query = "SELECT *, tc.id_conteudo, count(*) FROM conteudo as c, tema_conteudo as tc, tipo_conteudo as tipc WHERE tc.id_conteudo = c.id_conteudo AND c.id_tipo = tipc.id_tipo ";

if (isset($_POST['tipo']) && !empty($_POST["tipo"]))
    $query .= "AND c.id_tipo = '" . $_POST['tipo'] . "' ";
if (isset($_POST['titulo_input']) && !empty($_POST["titulo_input"]))
    $query .= "AND c.titulo LIKE '%" . $_POST['titulo_input'] . "%' ";
if (isset($_POST['tags']) && !empty($_POST["tags"])) {
    $tags = explode(",", $_POST["tags"]);
    $query .= "AND tc.tema IN (";
    $i = 0;
    $len = count($tags);
    foreach ($tags as $tag) {
        $query_nome_tag ="SELECT tema FROM temas WHERE nome LIKE '".htmlentities($tag)."' LIMIT 1";              
        $result_nome_tag = mysql_query($query_nome_tag);
        $busca_nome_tag = mysql_fetch_array($result_nome_tag);
        if ($i == $len - 1) {
            $query .= "'" . $busca_nome_tag['tema'] . "'";
        } else {
            $query .= "'" . $busca_nome_tag['tema'] . "', ";
        }
        $i++;
    }
    $query .= ") ";
   
}
$query .= "GROUP BY tc.id_conteudo ORDER BY count(*) DESC;";
$result = mysql_query($query);


if (mysql_num_rows($result) != 0 && (!empty($_POST['titulo_input']) || !empty($_POST['tags']))) {
    while ($res = mysql_fetch_array($result)) {
        $query_tag = 'SELECT t.nome from temas as t inner join tema_conteudo as t_c on t.tema = t_c.tema where t_c.id_conteudo = "' . $res['id_conteudo'] . '"';
        $result_tag = mysql_query($query_tag);
        echo '<div class="resultado" onclick="document.location=\'' . $res['id_tipo'] . '/' . $res["id_conteudo"] . '\'" onclick="" ><div class="resultado_titulo" style="background: '.$res['cor'].';" >';
        echo $res['nome'].' <i class="fa fa-angle-double-right fa-1x"></i> '.$res["titulo"];
        echo ' </div>';
        echo ' <div class="resultado_tag_container">';
        while ($res_tags = mysql_fetch_assoc($result_tag)) {
            echo '<div class="resultado_tag"><i class="fa fa-caret-right fa-1x" style="color: #ff6600;"></i> ';
            echo $res_tags['nome'];
            echo '</div>';
        }
        echo '</div>';
        echo '<div class="resultado_descricao" >';
        echo $res["descricao"];
        echo '</div>';
        echo '</div>';
    }
} else {
    if (mysql_num_rows($result) == 0)
        echo "<br><small class='ajuda_user'>Nenhum resultado encontrado!</small><br><br>";
    else
        echo "<br><small class='ajuda_user'>Digite algo nos campos de busca!</small><br><br>";
}
?>

