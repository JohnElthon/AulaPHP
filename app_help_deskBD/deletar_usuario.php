<?php
require_once "validador_acesso.php";
require 'config.php';



// Verifica se o usuário possui chamados
$sql = "SELECT COUNT(*) as total FROM chamados WHERE id_usuario = '{$_GET["id"]}';";
$resultado = $conexao->query($sql);
$dados = $resultado->fetch_assoc();

if ($dados['total'] > 0) {
    // Usuário tem chamados — não pode ser excluído
    header("Location: usuarios.php?erro=possui_chamados");
    exit;
} else {
    // Pode excluir o usuário
    $sql_delete = "DELETE FROM usuarios WHERE id_usuario = '{$_GET["id"]}';";
    if ($conexao->query($sql)) {
        header("Location: usuarios.php?delete=sucesso");
    } else {
        header("Location: usuarios.php?erro=delete_falhou");
    }
    exit;
}
?>
