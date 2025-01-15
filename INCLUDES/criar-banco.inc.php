<?php
$sql = "CREATE DATABASE IF NOT EXISTS $NomeDoBanco ";
$conexao->query($sql) OR exit($conexao->error);