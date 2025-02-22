<?php
$sql = "SELECT * FROM $NomeDaTabela1";
$resultado = $conexao->query($sql) OR exit($conexao->error);

while ($registro = $resultado->fetch_assoc()) {
  echo "ID: " . $registro['ID'] . "<br>";
  echo "Nome: " . $registro['NOME'] . "<br>";
  echo "E-mail: " . $registro['EMAIL'] . "<br>";
  echo "Celular: " . $registro['CELULAR'] . "<br>";
  echo "Código: " . $registro['CODIGO'] . "<br>";
  echo "Data: " . $registro['DATA'] . "<br><br>";
}