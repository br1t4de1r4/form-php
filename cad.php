<?php

include 'conexao.php';

// removi a conexão daqui
// não é necessario ja que vc ta fazendo a inclusão
// coloquei echo no arquivo para ver oq ta acontecendo 

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$creci = $_POST['creci'];
echo "<br>";
echo "Nome: $nome <br>";
echo "CPF: $cpf <br>";
echo "CRECI: $creci <br>";

// Insere os dados no banco de dados
$sql = "INSERT INTO corretores (name, cpf, creci) VALUES ('$nome', '$cpf', '$creci')";

if ($conn->query($sql) === TRUE) {
    echo "Novo corretor cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>