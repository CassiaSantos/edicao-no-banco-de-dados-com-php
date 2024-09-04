-- Essa é uma noção da tabela de locais do sistema de ERP:
CREATE TABLE `Locais` (
    `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(255) NOT NULL,
    `descricao` TEXT,
    `nomeDoResponsavelpeloLocal` VARCHAR(255) NOT NULL
);
