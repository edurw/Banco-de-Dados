<?php
include 'conexao.php';

// Dados do novo usuário
$nomeUsuario = 'Novo Usuário';
$senha = 'nova_senha';
$telefone = '123456789';

// Inserir novo usuário
try {
    $sql = "INSERT INTO Usuario (nome_usuario, senha, telefone) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nomeUsuario, $senha, $telefone]);
    echo "Usuário inserido com sucesso!";
} catch (PDOException $e) {
    die("Erro ao inserir usuário: " . $e->getMessage());
}
?>
