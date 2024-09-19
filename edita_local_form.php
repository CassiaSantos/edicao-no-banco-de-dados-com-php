<?php
include 'db.php'; // Inclui o arquivo de conexão com o banco de dados.

if (isset($_GET['id'])) { // Verifica se o parâmetro "id" foi passado na URL.
    $id = $_GET['id']; // Armazena o valor do "id" passado na URL.

    // Prepara uma consulta SQL para selecionar o local com o ID especificado.
    $sql = "SELECT * FROM mgt_local WHERE id = ?";
    $stmt = $conn->prepare($sql); // Prepara a consulta para execução.
    $stmt->bind_param("i", $id); // Liga o parâmetro ID à consulta, garantindo que seja tratado como um inteiro.
    $stmt->execute(); // Executa a consulta.

    $result = $stmt->get_result(); // Obtém o resultado da consulta.

    if ($result->num_rows > 0) { // Verifica se algum local foi encontrado.
        $local = $result->fetch_assoc(); // Armazena os dados do local em um array associativo.
        print_r($local);
    } else {
        echo "Local não encontrado."; // Exibe uma mensagem se o local não for encontrado.
        exit(); // Encerra a execução do script.
    }
} else {
    echo "ID de local não especificado."; // Exibe uma mensagem se o ID não for fornecido.
    // exit(); // Encerra a execução do script.
}
?>

<!-- Formulário de contato -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Alteração de Locais</title>
    </head>
    <body>
        <!-- Início do formulário de edição -->
        <form action="altera_local_db.php" method="POST">
            <!-- Campo oculto para armazenar o ID do local -->
            <input type="hidden" name="id" value="<?php echo $local['id']; ?>">
            <div class="form-group">
                <label for="nome">Nome do Local:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $local['nome']; ?>">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição do Local:</label><br>
                <input type="text" id="descricao" name="descricao" value="<?php echo $local['descricao']; ?>"><br>
            </div>

            <div class="form-group">
                <label for="responsavel">Nome do Responsável:</label><br>
                <input type="text" id="responsavel" name="responsavel" value="<?php echo $local['responsavel']; ?>"><br><br>
            </div>

            <input type="submit" value="Atualizar Dados" class="btn btn-primary">
        </form>
    </body>
</html>