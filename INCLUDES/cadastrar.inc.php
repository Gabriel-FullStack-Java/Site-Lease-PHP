<?php

$_SESSION['codigo_autenticacao'] = $codigoGerado;

$nome     = $conexao->escape_string(trim($_POST["nome-do-usuario"]));
$email    = $conexao->escape_string(trim($_POST["email-do-usuario"]));
$celular  = $conexao->escape_string(trim($_POST["celular-do-usuario"]));

if( empty($celular)) {

  $sql = "INSERT $NomeDaTabela1 VALUES
  (
    null,
    '$nome',
    '$email',
    null,
    '$codigoGerado',
    DEFAULT
  )";
  //Executar consulta no banco de dados
  $conexao->query($sql) OR exit($conexao->error);
  echo "<p> Dados do Cliente ( $nome Cód: $codigoGerado ) adicionados no banco com <br> <span class='sucesso'> SUCESSO! </span> </p>";

}
else {
  $sql = "INSERT $NomeDaTabela1 VALUES
  (
    null,
    '$nome',
    '$email',
    '$celular',
    '$codigoGerado',
    DEFAULT
  )";
  //Executar consulta no banco de dados
  $conexao->query($sql) OR exit($conexao->error);
  echo "<p> Dados do Cliente ( $nome Cód: $codigoGerado ) adicionados no banco com <br> <span class='sucesso'> SUCESSO! </span> </p>";

}
