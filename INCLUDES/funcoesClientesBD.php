<?php

function clientesComCelular($conexao, $NomeDaTabela1) {
  
  // Consulta SQL
  $sql = "SELECT * FROM $NomeDaTabela1 WHERE CELULAR IS NOT NULL";
  $resultado = $conexao->query($sql) OR exit($conexao->error);

  // Exibir a tabela
  echo "<div class='col-10 tabelaClientes'>";
    echo "<table class='col-12 table table-primary'>";
      echo "<caption>Clientes Cadastrados</caption>";
      echo "<thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Código</th>
        <th>Data</th>";
      echo "</thead>";

      while ($registro = $resultado->fetch_assoc()) {
      echo "<tbody>";
        echo "<tr>";
          echo "<td>" . $registro['ID'] . "</td>";
          echo "<td>" . $registro['NOME'] . "</td>";
          echo "<td>" . $registro['EMAIL'] . "</td>";
          echo "<td>" . $registro['CELULAR'] . "</td>";
          echo "<td>" . $registro['CODIGO'] . "</td>";
          echo "<td>" . $registro['DATA'] . "</td>";
        echo "</tr>";
      echo "</tbody>";
      }

    echo "</table>";
  echo "</div>";
}

function clientesComEmails($conexao, $NomeDaTabela1) {
  
  // Consulta SQL
  $sql = "SELECT * FROM $NomeDaTabela1 WHERE EMAIL IS NOT NULL";
  $resultado = $conexao->query($sql) OR exit($conexao->error);

  // Exibir a tabela
  echo "<div class='col-10 tabelaClientes'>";
    echo "<table class='col-12 table table-primary'>";
      echo "<caption>Clientes Cadastrados</caption>";
      echo "<thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Código</th>
        <th>Data</th>";
      echo "</thead>";

      while ($registro = $resultado->fetch_assoc()) {
      echo "<tbody>";
        echo "<tr>";
          echo "<td>" . $registro['ID'] . "</td>";
          echo "<td>" . $registro['NOME'] . "</td>";
          echo "<td>" . $registro['EMAIL'] . "</td>";
          echo "<td>" . $registro['CELULAR'] . "</td>";
          echo "<td>" . $registro['CODIGO'] . "</td>";
          echo "<td>" . $registro['DATA'] . "</td>";
        echo "</tr>";
      echo "</tbody>";
      }

    echo "</table>";
  echo "</div>";
}

function clientesSemCelular($conexao, $NomeDaTabela1) {
  
  // Consulta SQL
  $sql = "SELECT * FROM $NomeDaTabela1 WHERE CELULAR IS NULL";
  $resultado = $conexao->query($sql) OR exit($conexao->error);

  // Exibir a tabela
  echo "<div class='col-10 tabelaClientes'>";
    echo "<table class='col-12 table table-primary'>";
      echo "<caption>Clientes Cadastrados</caption>";
      echo "<thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Código</th>
        <th>Data</th>";
      echo "</thead>";

      while ($registro = $resultado->fetch_assoc()) {
      echo "<tbody>";
        echo "<tr>";
          echo "<td>" . $registro['ID'] . "</td>";
          echo "<td>" . $registro['NOME'] . "</td>";
          echo "<td>" . $registro['EMAIL'] . "</td>";
          echo "<td>" . $registro['CELULAR'] . "</td>";
          echo "<td>" . $registro['CODIGO'] . "</td>";
          echo "<td>" . $registro['DATA'] . "</td>";
        echo "</tr>";
      echo "</tbody>";
      }

    echo "</table>";
  echo "</div>";
}
function clientesSemEmails($conexao, $NomeDaTabela1) {
  
  // Consulta SQL
  $sql = "SELECT * FROM $NomeDaTabela1 WHERE EMAIL IS NULL";
  $resultado = $conexao->query($sql) OR exit($conexao->error);

  // Exibir a tabela
  echo "<div class='col-10 tabelaClientes'>";
    echo "<table class='col-12 table table-primary'>";
      echo "<caption>Clientes Cadastrados</caption>";
      echo "<thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Código</th>
        <th>Data</th>";
      echo "</thead>";

      while ($registro = $resultado->fetch_assoc()) {
      echo "<tbody>";
        echo "<tr>";
          echo "<td>" . $registro['ID'] . "</td>";
          echo "<td>" . $registro['NOME'] . "</td>";
          echo "<td>" . $registro['EMAIL'] . "</td>";
          echo "<td>" . $registro['CELULAR'] . "</td>";
          echo "<td>" . $registro['CODIGO'] . "</td>";
          echo "<td>" . $registro['DATA'] . "</td>";
        echo "</tr>";
      echo "</tbody>";
      }

    echo "</table>";
  echo "</div>";
}

function todosClientes($conexao, $NomeDaTabela1) {
  
  // Consulta SQL
  $sql = "SELECT * FROM $NomeDaTabela1";
  $resultado = $conexao->query($sql) OR exit($conexao->error);

  // Exibir a tabela
  echo "<div class='col-10 tabelaClientes'>";
    echo "<table class='col-12 table table-primary'>";
      echo "<caption>Clientes Cadastrados</caption>";
      echo "<thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Código</th>
        <th>Data</th>";
      echo "</thead>";

      while ($registro = $resultado->fetch_assoc()) {
      echo "<tbody>";
        echo "<tr>";
          echo "<td>" . $registro['ID'] . "</td>";
          echo "<td>" . $registro['NOME'] . "</td>";
          echo "<td>" . $registro['EMAIL'] . "</td>";
          echo "<td>" . $registro['CELULAR'] . "</td>";
          echo "<td>" . $registro['CODIGO'] . "</td>";
          echo "<td>" . $registro['DATA'] . "</td>";
        echo "</tr>";
      echo "</tbody>";
      }

    echo "</table>";
  echo "</div>";
}

function todosClientesComEmailECelular($conexao, $NomeDaTabela1) {
  
  // Consulta SQL
  $sql = "SELECT * FROM $NomeDaTabela1 WHERE EMAIL IS NOT NULL AND CELULAR IS NOT NULL";
  $resultado = $conexao->query($sql) OR exit($conexao->error);

  // Exibir a tabela
  echo "<div class='col-10 tabelaClientes'>";
    echo "<table class='col-12 table table-primary'>";
      echo "<caption>Clientes Cadastrados</caption>";
      echo "<thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Código</th>
        <th>Data</th>";
      echo "</thead>";

      while ($registro = $resultado->fetch_assoc()) {
      echo "<tbody>";
        echo "<tr>";
          echo "<td>" . $registro['ID'] . "</td>";
          echo "<td>" . $registro['NOME'] . "</td>";
          echo "<td>" . $registro['EMAIL'] . "</td>";
          echo "<td>" . $registro['CELULAR'] . "</td>";
          echo "<td>" . $registro['CODIGO'] . "</td>";
          echo "<td>" . $registro['DATA'] . "</td>";
        echo "</tr>";
      echo "</tbody>";
      }

    echo "</table>";
  echo "</div>";
}
?>