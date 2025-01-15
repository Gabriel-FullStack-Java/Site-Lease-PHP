<?php
$nome   = $conexao->escape_string(trim($_POST["nome-do-usuario"]));
$email  = $conexao->escape_string(trim($_POST["email-do-usuario"]));

//Inserindo os dados recebidos no banco de dados
if( empty($nome) || empty($email) )
{
  echo"<p>Por favor, preencha <span class='atencao'> TODOS </span> os campos!!</p>";
  exit;
}
else
{
  $sql = "INSERT $NomeDaTabela1 VALUES
    (
      null,
      '$nome',
      '$email'
    )";
  //Executar consulta no banco de dados
  $conexao->query($sql) OR exit($conexao->error);
  echo "<p> Dados do Cliente ( $nome ) adicionados no banco com <br> <span class='sucesso'> SUCESSO! </span> </p>";
}