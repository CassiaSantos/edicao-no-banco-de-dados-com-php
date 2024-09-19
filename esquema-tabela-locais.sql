CREATE TABLE IF NOT EXISTS erpl.mgt_local (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(255) NULL,
  descricao LONGTEXT NULL,
  responsavel VARCHAR(255) NULL,
  PRIMARY KEY (id))
ENGINE = InnoDB

INSERT INTO mgt_local (nome, descricao, responsavel)
VALUES
('Matriz', 'Sede principal da empresa', 'João Silva'),
('Filial 1', 'Primeira filial no centro da cidade', 'Maria Oliveira'),
('Filial 2', 'Segunda filial em bairro residencial', 'Carlos Almeida'),
('Filial 3', 'Filial em área industrial', 'Ana Souza');