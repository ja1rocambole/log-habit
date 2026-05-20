# 🚀 Projeto de Estudo - CRUD com Laravel

Bem-vindo ao meu projeto de estudo! O principal objetivo deste repositório foi **aprender e praticar como criar um CRUD (Create, Read, Update, Delete)** utilizando o framework [Laravel](https://laravel.com/). 

Para tornar o estudo mais prático, desenvolvi um simples **Rastreador de Hábitos**, onde é possível gerenciar e acompanhar seus hábitos no dia a dia.

## 📌 Funcionalidades

- **Autenticação de Usuários:** Cadastro, login e acesso restrito.
- **Gerenciamento de Hábitos (O CRUD principal):**
  - **Create:** Cadastrar novos hábitos.
  - **Read:** Visualizar todos os hábitos criados.
  - **Update:** Editar o nome, descrição ou tipo de um hábito.
  - **Delete:** Excluir permanentemente um hábito do sistema.
- **Registros (Logs):** Marcar os hábitos como concluídos para acompanhar o progresso (HabitLog).

## 🛠️ Tecnologias Utilizadas

- **PHP 8.x+**
- **Laravel 11.x+** (Framework Backend e ORM Eloquent)
- **Banco de Dados:** SQLite (padrão) / MySQL
- **Frontend / Visualização:** Laravel Blade Components e CSS/TailwindCSS (empacotados via Vite)
- **Testes:** Pest PHP framework

## 📂 Compreendendo os Arquivos (Foco de Aprendizado)

Os componentes principais que desenvolvi/estudei estão centralizados nos seguintes diretórios:
- **Models:** pp/Models/User.php, Habit.php e HabitLog.php
- **Tabelas (Database):** database/migrations/
- **Rotas Básicas:** outes/web.php
- **Interface e Telas:** esources/views/ (Telas para exibir os itens, formulários de criação/edição e dashboard)

## 🚀 Como testar localmente

Siga o passo a passo para acessar a aplicação na sua máquina:

1. **Clone do repositório:**
   \\\ash
   git clone https://github.com/seu-usuario/learn-crud.git
   cd learn-crud
   \\\

2. **Instalação das dependências e pacotes:**
   \\\ash
   composer install
   npm install
   \\\

3. **Configuração do ambiente de Banco de dados:**
   Copie o arquivo padrão do Laravel para criar suas variáveis e gere a Application Key:
   \\\ash
   cp .env.example .env
   php artisan key:generate
   \\\
   *(Certifique-se que o .env possui DB_CONNECTION=sqlite, e se não houver um database.sqlite em database/, o artisan o criará para você no próximo passo).*

4. **Rodando as tabelas e alimentando o banco (Migrations & Seeders):**
   \\\ash
   php artisan migrate --seed
   \\\

5. **Iniciando o servidor:**
   Você precisará rodar 2 recursos, caso tenha componentes do Vite:
   \\\ash
   # Terminal 1: Inicia o servidor PHP do Laravel no localhost:8000
   php artisan serve
   \\\
   \\\ash
   # Terminal 2: Inicia o empacotador de arquivos estáticos
   npm run dev
   \\\

Abra o navegador em http://localhost:8000 e veja o app rodando!

---
✨ *Projeto desenvolvido com fins puramente educacionais para evolução em engenharia de software e backend com Laravel.*
