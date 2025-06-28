<?php
// Exemplo simples de conexão PDO
function getDbConnection() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=sgbfoz;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die('Erro de conexão com o banco de dados: ' . $e->getMessage());
    }
}
