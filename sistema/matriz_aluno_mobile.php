<?php

$query = "SELECT * FROM tipo_conteudo ORDER BY RAND()";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result)) {
    $query1 = "SELECT count(*) AS total FROM conteudo WHERE id_tipo LIKE '" . $row["id_tipo"] . "' ";
    $result1 = mysql_query($query1);
    $busca = mysql_fetch_assoc($result1);
    if ($busca['total'] > 0) {
        echo '<div class="tipo_conteudo_mobile" onclick="location.href=\'conteudo/' . $row["id_tipo"] . '\'" style="background:' . $row["cor"] . '"><div class="container"><span style="display:inline-block; vertical-align:middle"><i class="fa ' . $row["ico"] . ' fa-1x"></i> ' . $row["nome"] . '</span></div></div>';
    }
}
?>