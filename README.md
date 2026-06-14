# Teste Técnico DEV — Soft-line Soluções em Sistemas

Aplicação web de cadastro (CRUD) de **Produtos** e **Clientes**, com tela de login e dashboard, desenvolvida em **Laravel**.

---

## ✨ Funcionalidades

- **Autenticação**: tela de login com usuário, senha e validações básicas.
- **Dashboard**: página inicial após o login, com acesso aos módulos de Produtos e Clientes e contadores em tempo real.
- **CRUD completo** (inserir, editar, visualizar e deletar) para:
  - **Produtos**: código, descrição, código de barras, valor de venda, peso bruto e peso líquido.
  - **Clientes**: código, nome, fantasia, documento (CPF/CNPJ com máscara) e endereço.
- Paginação nas listagens.
- Mensagens de sucesso e confirmação antes de excluir.
- Validações no front-end e no back-end.
- Interface com tema escuro (dark mode).

---

## 🛠️ Tecnologias

- **Back-end**: PHP / Laravel
- **Front-end**: Blade, JavaScript, CSS, HTML
- **Banco de Dados**: MySQL
- **Gerenciadores**: Composer e NPM

> Observação: o teste indica preferência por C# / SQL Server, mas a própria descrição permite o uso de outras tecnologias. Optei por Laravel + MySQL.

---

## ✅ Pré-requisitos

- PHP >= 8.1
- Composer
- Node.js e NPM
- MySQL

---

## 🚀 Como rodar o projeto

```bash
# 1. Clonar o repositório
git clone https://github.com/AqueleCara1/PROJETO-CRUD.git
cd PROJETO-CRUD

# 2. Instalar dependências do PHP
composer install

# 3. Instalar dependências do front-end
npm install
npm run build

# 4. Criar o arquivo de ambiente
cp .env.example .env

# 5. Gerar a chave da aplicação
php artisan key:generate
```

### Configurar o banco de dados

Abra o arquivo `.env` e ajuste as credenciais:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=softline  
DB_USERNAME=root
DB_PASSWORD=
```

### Criar as tabelas e o usuário de acesso

Você pode usar **uma** das duas opções:

**Opção A — via migrations (recomendado):**
```bash
php artisan migrate --seed
```

**Opção B — via script SQL:**  
Importe o arquivo `database/sql/script.sql` (veja a pasta `database/sql`) diretamente no seu MySQL ou MySQL Workbench.

### Subir a aplicação

```bash
php artisan serve
```

Acesse: **http://localhost:8000**

---

## 🔑 Credenciais de acesso

| Usuário | Senha |
|---------|-------|
| admin@softline.com | 123456 |

> Ajuste conforme o usuário criado no seu Seeder.

---

## 📂 Scripts do Banco de Dados

Os scripts de criação do banco, tabelas e campos estão na pasta:

```
database/script.sql
```

---

## 📑 Páginas da aplicação

1. **Login**
2. **Dashboard** (acesso a Produtos e Clientes)
3. **Lista de Produtos**
4. **Cadastro de Produtos**
5. **Lista de Clientes**
6. **Cadastro de Clientes**

---

Desenvolvido para o processo seletivo da **Soft-line Soluções em Sistemas**.
