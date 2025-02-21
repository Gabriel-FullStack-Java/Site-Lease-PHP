<?php
$sql ="CREATE TABLE IF NOT EXISTS $NomeDaTabela1
    (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        NOME VARCHAR(255),
        EMAIL VARCHAR(255),
        CELULAR VARCHAR(11),
        CODIGO VARCHAR(6),
        DATA TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )ENGINE = InnoDB";
$conexao->query($sql) OR exit($conexao->error);
