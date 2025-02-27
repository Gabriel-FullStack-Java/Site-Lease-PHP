<?php
function conectarBanco() {
    $host = 'localhost';
    $dbname = 'sistema_login';
    $usuario = 'seu_usuario';
    $senha = 'sua_senha';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro ao conectar: " . $e->getMessage());
    }
}
