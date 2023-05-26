<?php
$servidor = "localhost";
$dbName = "livraria";
$user = "root";
$senha = "";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$dbName", $user, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>