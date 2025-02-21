<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <title>Site Lease</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>

<body>
    <?php
    session_start(); // INICIANDO A SESSÃO

    if (isset($_POST['opcao'])) {
        $_SESSION['opcao_selecionada'] = $_POST['opcao'];
    }
    else {
        echo "Nenhuma opção foi selecionada.";
    }

    require "../INCLUDES/dados-conexao.inc.php";
    require "../INCLUDES/conectar.inc.php";
    require "../INCLUDES/criar-banco.inc.php";
    require "../INCLUDES/abrir-banco.inc.php";
    require "../INCLUDES/definir-charset.inc.php";
    require "../INCLUDES/criar-tabela.inc.php";

    if(isset($_POST["enviar"]))
    {
        require "../INCLUDES/enviar-email.inc.php";
        require "../INCLUDES/cadastrar.inc.php";
    }
    ?>
</body>
</html>