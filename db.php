// ARQUIVO DE CONEXÃO COM BANCO DE DADOS:
<?php
$servername = "localhost"; // Define o nome do servidor de banco de dados, geralmente "localhost".
$username = "seu_usuario"; // Nome de usuário para acessar o banco de dados.
$password = "sua_senha"; // Senha para acessar o banco de dados.
$dbname = "nome_do_banco"; // Nome do banco de dados que você deseja acessar.

// Cria uma conexão com o banco de dados usando as credenciais fornecidas.
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida.
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error); // Se houver erro, a execução para e uma mensagem é exibida.
}
?>
