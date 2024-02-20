<?php
// Configurações do banco de dados
$host = 'localhost'; // Endereço do banco de dados
$usuario = 'root'; // Nome de usuário do banco de dados
$senha = ''; // Senha do banco de dados
$banco_de_dados = 'marketplace'; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
} else {
    echo "Conexão bem sucedida!";
}  
?>
 