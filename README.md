# Resumo do Projeto SGBFOZ

O **SGBFOZ** é um sistema de gerenciamento para uma biblioteca comunitária, desenvolvido com a arquitetura **MVC** (Model-View-Controller), proporcionando uma estrutura modular, escalável e de fácil manutenção.

## Estrutura do Sistema

### **Arquitetura MVC**
- **Model (Modelo)**: Responsável pela lógica de negócios e interação com o banco de dados. Ex: `Livro.php`, `Usuario.php`, `Emprestimo.php`.
- **View (Visão)**: Templates HTML dinâmicos que gerenciam a interface do usuário. Ex: `login.php`, `dashboard/index.php`, `livros/show.php`.
- **Controller (Controlador)**: Processa as requisições, interage com os models e carrega as views. Ex: `AuthController.php`, `LivroController.php`, `EmprestimoController.php`.

### **Funcionalidades Criadas**
- **Autenticação de Usuário**: Sistema de login e logout com validação de e-mail e senha. Gerenciado por `AuthController`.
- **Cadastro de Livros**: Função de adicionar, editar e visualizar livros com campos como título, autor, ISBN e categorias.
- **Controle de Empréstimos**: Registro de empréstimos de livros, com datas de retirada e devolução.
- **Dashboard**: Visão geral do sistema com informações de livros, empréstimos e usuários.

### **Banco de Dados**
- **Migrações**: Scripts para criar as tabelas no banco de dados (ex.: `2024_01_01_create_users_table.php`).
- **Seeders**: Inserção de dados iniciais (ex.: usuários, livros, empréstimos) para facilitar o teste.

### **Organização do Projeto**
- **Pasta `app/`**: Contém o núcleo da aplicação (controllers, models, views).
- **Pasta `public/`**: Arquivo `index.php` e recursos estáticos (CSS, JS, imagens).
- **Pasta `storage/`**: Arquivos gerados pela aplicação (logs, cache, sessões).
- **Pasta `database/`**: Scripts de migração e inicialização do banco de dados.

### **Configurando o Ambiente**
- **.env**: Variáveis de ambiente (ex.: credenciais do banco de dados).
- **composer.json**: Gerenciamento de dependências via Composer.

## Melhorias Implementadas
- **Estrutura Modular**: Separação clara de responsabilidades, facilitando manutenção e escalabilidade.
- **Autenticação de Usuário**: Login seguro com criptografia de senha.
- **Interface Simples e Funcional**: Layout limpo para páginas como login, dashboard e listagem de livros.
- **Fácil Expansão**: Sistema preparado para incluir novas funcionalidades, como filtros e exportação de relatórios.

## Próximos Passos
- **Melhorias no Frontend**: Tornar a interface mais atrativa e responsiva.
- **Funcionalidades Avançadas**: Adicionar exportação de relatórios e integração com APIs externas como o Google Books.
- **Segurança e Performance**: Implementar medidas de segurança (validação de dados) e melhorar a performance de consultas ao banco de dados.

---
