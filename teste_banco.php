<?php
$host = "SEU_ENDPOINT_DO_BANCO_OU_IP";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "seu_nome_do_banco";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("❌ Erro cruel! A conexão falhou: " . $conexao->connect_error);
}
echo "🚀 Sensacional! O banco de dados está CONECTADO com sucesso!";
?>