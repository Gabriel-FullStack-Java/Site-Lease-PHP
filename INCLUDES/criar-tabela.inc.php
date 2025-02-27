<?php
$sql ="CREATE TABLE IF NOT EXISTS $NomeDaTabela1(
    ID INT AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(255),
    EMAIL VARCHAR(255) UNIQUE,
    CELULAR VARCHAR(11) UNIQUE,
    CODIGO VARCHAR(6),
    DATA TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )ENGINE = InnoDB";
$conexao->query($sql) OR exit($conexao->error);



$sql = "CREATE TABLE IF NOT EXISTS  Venda (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    funcionario_id INT NOT NULL,
    servico_id INT NOT NULL,
    data_venda DATETIME DEFAULT CURRENT_TIMESTAMP,
    observacoes TEXT,
    FOREIGN KEY (cliente_id) REFERENCES Cliente(id),
    FOREIGN KEY (funcionario_id) REFERENCES Funcionario(id),
    FOREIGN KEY (servico_id) REFERENCES Servico(id)
)ENGINE = InnoDB";
$conexao->query($sql) OR exit($conexao->error);
