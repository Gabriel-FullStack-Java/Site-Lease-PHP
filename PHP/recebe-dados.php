<?php
session_start(); // INICIANDO A SESSÃO

if (isset($_POST['opcao'])) {
    $_SESSION['opcao_selecionada'] = $_POST['opcao'];
}

require "../INCLUDES/dados-conexao.inc.php";
require "../INCLUDES/conectar.inc.php";
require "../INCLUDES/criar-banco.inc.php";
require "../INCLUDES/abrir-banco.inc.php";
require "../INCLUDES/definir-charset.inc.php";
require "../INCLUDES/criar-tabela.inc.php";

if (isset($_POST["enviar"])) {
    require "../INCLUDES/enviar-email.inc.php";
    require "../INCLUDES/cadastrar.inc.php";

    // Redireciona para outra página após a execução bem-sucedida
    header("Location: ../HTML/index.html");
    exit(); // Garante que o script pare aqui
}
?>