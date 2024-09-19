<?php
require 'db.php'; // Inclua o arquivo de conexão ao banco de dados

    // Captura dos dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $responsavel = $_POST['responsavel'];

    // Atualiza dados no banco de dados
    $update_locais = "UPDATE" . " mgt_local " . "SET nome = " . "'" . $nome . "'" . 
      ",descricao = " . "'" . $descricao . "'" . 
      ", responsavel = " . "'" . $responsavel . "'" . 
      " WHERE id = " . $id;

    $conn->query($update_locais);

    // Mensagem informativa após alteração ter sido bem sucedida:
    echo "Local atualizado com sucesso!";
?>