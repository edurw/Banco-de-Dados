<?php
include 'conexao.php';

// Novos dados do usuário
$novoNome = 'Novo Nome';
$novaSenha = 'nova_senha';
$idUsuario = 1; // ID do usuário a ser atualizado

// Atualizar usuário
try {
    $sql = "UPDATE Usuario SET nome_usuario = ?, senha = ? WHERE id_usuario = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$novoNome, $novaSenha, $idUsuario]);
    echo "Usuário atualizado com sucesso!";
} catch (PDOException $e) {
    die("Erro ao atualizar usuário: " . $e->getMessage());
}
?>
