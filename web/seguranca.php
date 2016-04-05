<?php
$root_html = '/fc/';
header('Content-Type: text/html; charset=UTF-8');
//  Configurações do Script
// ==============================
$_SG['conectaServidor'] = true;    // Abre uma conexão com o servidor MySQL?
$_SG['abreSessao'] = true;         // Inicia a sessão com um session_start()?

$_SG['caseSensitive'] = true;     // Usar case-sensitive? Onde 'thiago' é diferente de 'THIAGO'

$_SG['validaSempre'] = true;       // Deseja validar o usuário e a senha a cada carregamento de página?
// Evita que, ao mudar os dados do usuário no banco de dado o mesmo contiue logado.


$_SG['servidor'] = 'localhost';    // Servidor MySQL
$_SG['usuario'] = 'root';          // Usuário MySQL
$_SG['senha'] =  '';                // Senha MySQL
$_SG['banco'] = 'futurocientista';     // Banco de dados MySQL
$_SG['resultado'] = '';
$_SG['paginaLogin'] = $root_html . 'sistema'; // Página para redirecionar em caso de login/senha inválidos.

$_SG['tabela'] = 'usuario';       // Nome da tabela onde os usuários são salvos
// ==============================
// Verifica se precisa fazer a conexão com o MySQL



$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true){
    $mobile = true;
}else{
    $mobile = false;
}




if ($_SG['conectaServidor'] == true) {
    $_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("MySQL: Não foi possível conectar-se ao servidor [" . $_SG['servidor'] . "].");
    mysql_select_db($_SG['banco'], $_SG['link']) or die("MySQL: Não foi possível conectar-se ao banco de dados [" . $_SG['banco'] . "].");
}

// Verifica se precisa iniciar a sessão
if ($_SG['abreSessao'] == true) {
    session_start();
}

/**
 * Função que valida um usuário e senha
 *
 * @param string $usuario - O usuário a ser validado
 * @param string $senha - A senha a ser validada
 *
 * @return bool - Se o usuário foi validado ou não (true/false)
 */
function validaUsuario($usuario, $senha) {
    global $_SG;

    $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';

// Usa a função addslashes para escapar as aspas
    $nusuario = addslashes($usuario);
    $nsenha = addslashes($senha);

// Monta uma consulta SQL (query) para procurar um usuário
    $sql = "SELECT * FROM `" . $_SG['tabela'] . "` WHERE " . $cS . " `email` = '" . $nusuario . "' AND " . $cS . " `senha` = '" . $nsenha . "' LIMIT 1";
    $query = mysql_query($sql);
    $resultado = mysql_fetch_assoc($query);

// Verifica se encontrou algum registro
    if (empty($resultado)) {
// Nenhum registro foi encontrado => o usuário é inválido
        return false;
    } else {
// O registro foi encontrado => o usuário é valido
// Definimos dois valores na sessão com os dados do usuário
        $_SESSION['usuarioNome'] = $resultado['nome']; // Pega o valor da coluna 'nome' do registro encontrado no MySQL
        $_SESSION['h'] = $resultado['h'];
// Verifica a opção se sempre validar o login
        if ($_SG['validaSempre'] == true) {
// Definimos dois valores na sessão com os dados do login
            $_SESSION['usuarioLogin'] = $usuario;
            $_SESSION['usuarioSenha'] = $senha;
            $_SESSION['usuarioID'] = $resultado['id_usuario'];
            
        }

        return true;
    }
}

/**
 * Função que protege uma página
 */
function protegePagina($h) {
    global $_SG;
   

    if (/* !isset($_SESSION['usuarioID']) OR */!isset($_SESSION['usuarioNome'])) {
// Não há usuário logado, manda pra página de login

        expulsaVisitante();
    } else if (!isset($_SESSION['usuarioID']) OR ! isset($_SESSION['usuarioNome'])) {
// Há usuário logado, verifica se precisa validar o login novamente
        
        
        if ($_SG['validaSempre'] == true) {
// Verifica se os dados salvos na sessão batem com os dados do banco de dados
            if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
// Os dados não batem, manda pra tela de login

                expulsaVisitante();
            }
        }
    }
    if ($h > $_SESSION['h']){
           
            expulsaVisitante();
        }
}

/**
 * Função para expulsar um visitante
 */
function expulsaVisitante() {
    global $_SG;

// Remove as variáveis da sessão (caso elas existam)
    unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);
    session_unset();
// Manda pra tela de erro
    echo "<script> window.location = '../';</script>";
}
?>