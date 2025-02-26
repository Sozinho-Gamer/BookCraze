<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
$sql = "ALTER TABLE usuarios ADD COLUMN last_login TIMESTAMP NULL DEFAULT NULL";

if ($conn->query($sql) === TRUE) {
    echo "Coluna 'last_login' adicionada com sucesso.";
} else {
    echo "Erro ao adicionar a coluna: " . $conn->error;
}

$conn->close();
?>