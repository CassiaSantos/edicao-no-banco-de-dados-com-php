<?php
// Este arquivo processa a atualização dos dados no banco de dados.
//-----------------------------------------------------------------------------------------------|
include 'db.php'; // Inclui o arquivo de conexão com o banco de dados.

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verifica se o formulário foi enviado via POST.
    $id = $_POST['id']; // Obtém o ID do local a ser atualizado.
    $nome = $_POST['nome']; // Obtém o valor atualizado do campo "nome".
    $descricao = $_POST['descricao']; // Obtém o valor atualizado do campo "descrição".
    $nomeDoResponsavelpeloLocal = $_POST['nomeDoResponsavelpeloLocal']; // Obtém o valor atualizado do campo "nome do responsável".

    // Prepara a consulta SQL para atualizar o local.
    $sql = "UPDATE Locais SET nome = ?, descricao = ?, nomeDoResponsavelpeloLocal = ? WHERE id = ?";
    $stmt = $conn->prepare($sql); // Prepara a consulta para execução.
    $stmt->bind_param("sssi", $nome, $descricao, $nomeDoResponsavelpeloLocal, $id); // Liga os valores à consulta.
    
    if ($stmt->execute()) { // Executa a consulta e verifica se foi bem-sucedida.
        echo "Local atualizado com sucesso."; // Exibe uma mensagem de sucesso.
    } else {
        echo "Erro ao atualizar local: " . $conn->error; // Exibe uma mensagem de erro em caso de falha.
    }
} else {
    echo "Método de requisição inválido."; // Exibe uma mensagem se o método não for POST.
}
?>
