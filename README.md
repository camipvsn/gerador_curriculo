# Gerador de Currículos

Este projeto é um **Gerador de Currículos Dinâmico**, desenvolvido utilizando **HTML, CSS, JavaScript e PHP**.  
O usuário preenche um formulário com seus dados pessoais, experiências profissionais e formação acadêmica, e o sistema gera automaticamente uma página de currículo formatada.

---

## ✅ Funcionalidades

- Formulário completo para:
  - Dados pessoais
  - Data de nascimento e cálculo automático da idade
  - Telefone
  - Experiências profissionais (com botão para adicionar mais itens)
  - Formação acadêmica (com botão para adicionar mais itens)

- Geração automática do currículo com:
  - Sanitização dos dados usando `htmlspecialchars`
  - Listagem organizada de experiências e cursos
  - Estrutura visual simples e limpa

---

## ✅ Estrutura do Projeto

- index.html # Formulário para o usuário preencher
- curriculo.php # Página gerada com os dados do currículo
- style.css # Estilos do formulário
- estilo.css # Estilos da página do currículo
- script.js # Funções JS (como cálculo da idade e adicionar campos)

---

## ✅ Como Funciona

### 1. O usuário acessa `index.html`
O arquivo contém um formulário dividido em seções organizadas:

- Nome, e-mail, telefone
- Data de nascimento → o script calcula a idade automaticamente
- Experiências profissionais (campos dinâmicos)
- Formação acadêmica (campos dinâmicos)

Os dados são enviados via **POST** para `curriculo.php`.

---

### 2. O PHP recebe e formata os dados

O arquivo `curriculo.php`:

- Recebe todos os campos usando `$_POST`
- Sanitiza os valores com `htmlspecialchars` para evitar XSS
- Lista itens de experiência e formação usando loops
- Ignora entradas vazias
- Exibe o currículo final em HTML

---

## ✅ Tecnologias Utilizadas

- **HTML5**: estrutura principal
- **CSS3**: estilização das páginas
- **JavaScript**: cálculo da idade e criação dinâmica de campos
- **PHP 7+/8+**: tratamento dos dados e geração do currículo

---

## ✅ Parâmetros Recebidos pelo PHP

O arquivo `curriculo.php` processa:

### Dados pessoais
Nome, email, telefone, nascimento e idade.

### Experiências profissionais (arrays)
Cargo, empresa e período.

### Formação acadêmica (arrays)
Curso, instituição e conclusão.

---

Projeto desenvolvido para fins de estudo e prática de HTML, CSS, JavaScript e PHP.
