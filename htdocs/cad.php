<?php
include 'conexao.php';

$servername = "localhost";
$username = "root";
$password = "2715";
$dbname = "corretores_db";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$creci = $_POST['creci'];

// Insere os dados no banco de dados
$sql = "INSERT INTO corretores (name, cpf, creci) VALUES ('$nome', '$cpf', '$creci')";

if ($conn->query($sql) === TRUE) {
    echo "Novo corretor cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
