<?php
 $sql = "SELECT COUNT(*) FROM $NomeDaTabela1 WHERE VALOR > 0";

 $resultado = $conexao->query($sql) OR die($conexao->error);

 $registro = $resultado->fetch_array();

 $quantidade = $registro[0];

 $sql2 = "SELECT SUM(VALOR) FROM $NomeDaTabela1";

 $resultado1 = $conexao->query($sql2) or die($conexao->error);
 $registro2 = $resultado1->fetch_array();
 $total = $registro2[0];

 $media = ($total/$quantidade);


//ACHANDO O NOME DO JOGO COM VALOR ABAIXO
$sql3 = "SELECT JOGO,VALOR FROM $NomeDaTabela1 WHERE VALOR < $media";
$registro3 = $conexao->query($sql3) Or exit($conexao->error);
    echo
    "<table>
    <caption>JOGOS COM PREÇO ABAIXO DO VALOR DA MÉDIA ( R$ $media reais )</caption>
    <tr>
    <th>JOGOS</th>
    <th>VALOR</th>
    </tr>";

    $vetorResultado = $conexao->query($sql3) OR die($conexao->error);

    while ($vetor = $vetorResultado->fetch_array())
    {
        $nome          = $vetor[0];
        $valor         = $vetor[1];

        echo
        "
        <tr>
        <td>$nome</td>
        <td>$valor</td>
        </tr>";

    }
    echo "</table>";