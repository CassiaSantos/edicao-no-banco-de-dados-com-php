# Funcionalidade de edição de locais de uma empresa para um sistema de ERP com acessao ao Banco De Dados SQL e PHP
Esse repositório é destinado a armazenar os códigos desenvolvidos durante a disciplina de Programação para WEB para a funcionalidade de "Alterar Locais" em de um sistema de ERP para empresas. A funcionalidade permite que os usuários editem dados de locais cadastrados, como Matriz, Filial 1, Filial 2, etc.

## Funcionalidades
- Listar todos os locais cadastrados no sistema.
- Editar os detalhes de um local específico.
- Atualizar o banco de dados com as novas informações fornecidas pelo usuário.

## Estrutura do Projeto
- `db.php`: Arquivo de configuração para conexão com o banco de dados.
- `edita_local_form.php`: Página que exibe o formulário de edição com os dados do local selecionado.
- `altera_local_db.php`: Script que processa a atualização dos dados no banco de dados.

## Pré-requisitos
Antes de executar o projeto, certifique-se de ter:
- PHP 7.4 ou superior
- MySQL 5.7 ou superior
- Servidor Web (Apache, Nginx, etc.)

### Executar XAMPP no Ubuntu:
sudo /opt/lampp/manager-linux-x64.run