<?php
include 'conexao.php';

// ID do usuário a ser excluído
$idUsuario = 1;

// Excluir usuário
try {
    $sql = "DELETE FROM Usuario WHERE id_usuario = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$idUsuario]);
    echo "Usuário excluído com sucesso!";
} catch (PDOException $e) {
    die("Erro ao excluir usuário: " . $e->getMessage());
}
?>
