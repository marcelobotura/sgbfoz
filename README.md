# Estrutura do Projeto SGBFOZ

## /sgbfoz | Estrutura de Diretórios

### /app # Núcleo da aplicação (código principal e lógico)
|-- /config # Configurações globais
|   |-- app.php # Configurações gerais da aplicação (nome, timezone, etc.)
|   |-- database.php # Configuração de conexão com o banco de dados
|   |-- routes.php # Definição de todas as rotas da aplicação
|   |-- security.php # Configurações de segurança (chaves de sessão, etc.)
|   |-- services.php # Configuração de serviços/containers de dependência (opcional, para projetos maiores)

|-- /controllers # Lógica de controle (processa requisições e coordena models/views)
|   |-- AuthController.php # Controlador para autenticação e autorização (login, logout, registro)
|   |-- LivroController.php # Gerencia requisições relacionadas a livros
|   |-- UsuarioController.php # Gerencia requisições relacionadas a usuários
|   |-- EmprestimoController.php # Gerencia requisições relacionadas a empréstimos
|   |-- DashboardController.php # Gerencia a lógica do dashboard principal
|   |-- ErrorController.php # Lida com erros (404, 500, etc.)

|-- /core # Classes e componentes centrais do framework/aplicação
|   |-- App.php # Classe principal da aplicação (inicializa, gerencia rotas)
|   |-- Controller.php # Classe base para todos os controladores
|   |-- Model.php # Classe base para todos os models (conexão DB, métodos comuns)
|   |-- Router.php # Gerenciamento de rotas (parsing de URL, dispatch)
|   |-- Request.php # Encapsula dados da requisição HTTP (GET, POST, FILES)
|   |-- Response.php # Gerencia a resposta HTTP (headers, JSON, redirecionamentos)
|   |-- Session.php # Utilitário para gerenciamento de sessão
|   |-- View.php # Classe para renderização de views (passar dados, incluir templates)
|   |-- Auth.php # Lógica de autenticação e autorização
|   |-- ErrorHandler.php # Tratamento de erros e exceções
|   |-- Utilities.php # Funções utilitárias diversas (sanitização, validação)

|-- /models # Lógica de negócio e interação com o banco de dados
|   |-- Livro.php # Representa a entidade Livro, interage com a tabela 'livros'
|   |-- Usuario.php # Representa a entidade Usuário, interage com a tabela 'usuarios'
|   |-- Emprestimo.php # Representa a entidade Empréstimo, interage com a tabela 'emprestimos'
|   |-- BaseModel.php # (Opcional) Model base com métodos CRUD genéricos

|-- /views # Templates para exibição (HTML com dados dinâmicos)
|   |-- /auth # Views relacionadas à autenticação
|   |   |-- login.php
|   |   |-- register.php # (Se aplicável)
|   |-- /dashboard
|   |   |-- index.php # Dashboard principal
|   |-- /livros
|   |   |-- index.php # Listagem de livros
|   |   |-- create.php # Formulário para adicionar livro
|   |   |-- edit.php # Formulário para editar livro
|   |   |-- show.php # Detalhes de um livro
|   |-- /usuarios
|   |   |-- index.php # Listagem de usuários
|   |   |-- create.php
|   |   |-- edit.php
|   |-- /emprestimos
|   |   |-- index.php
|   |   |-- create.php
|   |   |-- edit.php
|   |-- /partials # Partes de templates reutilizáveis (equivalente ao seu /includes)
|   |   |-- header.php # Cabeçalho da página
|   |   |-- footer.php # Rodapé da página
|   |   |-- nav.php # Menu de navegação (seu menu.php)
|   |   |-- messages.php # Para exibir mensagens de sucesso/erro (flash messages)
|   |   |-- error.php # Página de erro genérica

### /bootstrap # Arquivos de inicialização e autoload
|-- app.php # Ponto de entrada para carregar a aplicação e serviços
|-- autoload.php # Configuração de autoloader (pode ser via Composer)
|-- constants.php # Definição de constantes globais (PATHs, etc.)

### /public # Ponto de entrada público do servidor web
|-- .htaccess # Regras de reescrita de URL (para Apache)
|-- index.php # O ÚNICO arquivo PHP acessível diretamente via navegador
|-- /assets # Arquivos públicos (CSS, JS, imagens)
|   |-- /css
|   |   |-- style.css
|   |-- /js
|   |   |-- script.js
|   |-- /images
|   |   |-- logo.png
|-- /vendor # (Se usar Composer) Arquivos de bibliotecas de terceiros (CSS/JS)
|-- /uploads # Arquivos carregados pelo usuário (capas de livros, etc.)

### /storage # Arquivos gerados pela aplicação (não públicos)
|-- /logs # Logs de erro e debug
|-- /cache # Arquivos de cache (se usados)
|-- /sessions # Armazenamento de sessões (se não for via banco de dados)

### /database # Scripts e configurações de banco de dados
|-- /migrations # Scripts para gerenciar alterações no schema do DB
|   |-- 2024_01_01_create_users_table.php
|   |-- 2024_01_02_create_books_table.php
|-- /seeders # Scripts para popular o DB com dados iniciais/falsos
|   |-- UserSeeder.php
|   |-- BookSeeder.php
|-- schema.sql # Backup ou inicialização do schema (complementar a migrations)
|-- initial_data.sql # Backup ou inicialização de dados (complementar a seeders)

### /vendor # (Gerenciado pelo Composer) Bibliotecas de terceiros
|-- autoload.php
|-- ... (outras pastas de bibliotecas)
|-- composer.json # Definição das dependências do Composer
|-- composer.lock # Bloqueio das versões das dependências

### Arquivos principais:
|-- .env # Variáveis de ambiente (ex: credenciais DB, chaves API)
|-- .gitignore # Arquivos e pastas a serem ignorados pelo Git
