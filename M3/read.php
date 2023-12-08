<?php
include 'conexao.php';

// Buscar todos os usuários
try {
    $sql = "SELECT * FROM Usuario";
    $stmt = $pdo->query($sql);

    // Exibir resultados
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: {$row['id_usuario']}, Nome: {$row['nome_usuario']}, Telefone: {$row['telefone']}<br>";
    }
} catch (PDOException $e) {
    die("Erro ao buscar usuários: " . $e->getMessage());
}
?>
