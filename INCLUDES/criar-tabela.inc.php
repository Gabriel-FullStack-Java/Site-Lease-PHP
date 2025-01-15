<?php
$sql ="CREATE TABLE IF NOT EXISTS $NomeDaTabela1
    (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        NOME VARCHAR(255),
        EMAIL VARCHAR(255)
    )ENGINE = InnoDB";
$conexao->query($sql) OR exit($conexao->error);
