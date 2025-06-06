# logica-programacao-php
- Exercícios e anotações do curso "Lógica de Programação Direcionada a PHP" do Senac. Foco em fundamentos da lógica com aplicação prática em PHP.

# Aula 1 – Agenda de Contatos em PHP 
- Este projeto implementa uma agenda de contatos básica utilizando PHP e MySQL, permitindo cadastrar, editar, excluir e listar contatos.

## ▶️ Como Usar
- Configure o banco de dados MySQL com a estrutura fornecida.

- Atualize os dados de conexão no arquivo conexao.php.

- Execute o projeto em um servidor local (XAMPP, WAMP, etc).

- Use a interface para cadastrar, editar, excluir e listar contatos.

## 🛠️ Tecnologias Utilizadas
- PHP com PDO para conexão segura ao banco de dados

- MySQL

- Bootstrap 5 para estilização

## 📂 Estrutura de Arquivos

- conexao.php — Conexão com o banco de dados

- index.php — Página principal com a lista de contatos

- opcontato.php — Processa as operações (inserir, editar, excluir)

- adicionar.php — Formulário para adicionar novo contato

- editar.php — Formulário para editar contato existente

- README.md — Documentação do projeto

# Aula 2 – Lógica de Programação em PHP
- -Este projeto traz exemplos práticos básicos de PHP envolvendo operações matemáticas, estruturas condicionais e manipulação de variáveis.

## ▶️ Como Usar
- Abra os arquivos PHP em seu servidor local.

- Veja os exemplos de cálculo de saldo, conversão de moedas, média de notas e operadores relacionais.

- Execute para entender a saída e testar alterações.

## 🛠️ Tecnologias Utilizadas
- PHP básico para lógica e manipulação de variáveis

- HTML e CSS para exibição e estilo simples

## 📂 Estrutura de Arquivos

- aula02.php — Código com exemplos e exercícios de lógica

- style.css — Estilos para as páginas de saída

- README.md — Documentação do projeto

# Aula 3 - Arrays e Estruturas de Dados em PHP
## 📚 Descrição
- Esta aula aborda o uso de arrays simples e associativos em PHP para armazenar dados estruturados. Você verá exemplos práticos com listas de clientes e estoque de carros, incluindo a manipulação e exibição dessas informações dinamicamente.

## 🗂️ Estrutura de Arquivos
- index.php — Página principal que carrega e exibe o estoque de carros usando PHP e HTML.

- clientes.php — Script PHP que contém os dados dos carros (arrays) e a lógica para exibir os itens.

- 01.jpg, 02.jpg, 03.jpg — Imagens representando os carros do estoque.

## ▶️ Como Usar
- Certifique-se de ter o PHP instalado no seu ambiente local ou servidor.

- Coloque todos os arquivos (index.php, clientes.php, imagens) na mesma pasta.

- Acesse o arquivo index.php pelo navegador (exemplo: http://localhost/aula3/index.php).

- Visualize a listagem dos carros com suas informações e imagens.

## 💡 Conceitos abordados
- Arrays simples e associativos.

- Estrutura de dados em PHP.

- Laços de repetição para percorrer arrays (foreach).

- Exibição dinâmica de dados no HTML via PHP.

- Boas práticas de segurança, como uso de htmlspecialchars() para evitar problemas de injeção de código.


# Aula 04 – Cadastro de Preferências com PHP

- Este projeto é parte do curso de **Lógica de Programação com PHP** no SENAC. O objetivo é desenvolver um formulário web que colete informações do usuário e exiba os dados enviados utilizando PHP puro.

## 💻 Funcionalidades

- Coleta de nome, sexo, serviços de streaming assinados, estado e data de nascimento.
- Processamento dos dados via método `POST`.
- Exibição dos dados recebidos de forma estruturada.
- Estilização com CSS para uma melhor apresentação visual.

## 🧰 Tecnologias Utilizadas

- HTML5
- CSS3
- PHP 8+

## 📂 Estrutura de Arquivos

- aula04/

- index.php – Página com o formulário HTML

- receber.php – Script PHP que processa e exibe os dados enviados

- estilos.css – Estilo visual da interface

- README.md – Documentação do projeto

## ▶️ Como Usar

1. Clone este repositório ou baixe os arquivos.
2. Coloque-os em um ambiente com servidor local, como XAMPP, WAMP, Laragon ou semelhante.
3. Acesse via navegador:
http://localhost/aula04/index.php

4. Preencha o formulário e clique em “Enviar” para visualizar os dados processados.

## 📚 Conceitos Praticados

- Manipulação de formulários com `input`, `radio`, `checkbox`, `select` e `date`.
- Utilização do array `$_POST` para captura dos dados.
- Conversão de data com `strtotime()` e `date()`.
- Laços de repetição `foreach` para listar múltiplos valores.
- Proteção contra XSS com `htmlspecialchars()`.
  
# Aula 5 - Formulários com PHP

## 📋 Descrição

- Nesta aula, você aprende a criar um formulário em HTML que envia dados para um script PHP, que os processa e exibe na tela. É uma introdução prática ao uso de formulários e ao tratamento de dados recebidos via método POST.

## ▶️ Como Usar

1. Abra o arquivo `index.php` no seu servidor local ou ambiente de desenvolvimento PHP.
2. Preencha os campos do formulário.
3. Clique em **Enviar**.
4. Você será redirecionado para a página `recebimento.php`, que mostrará os dados enviados.
5. Clique em **Voltar** para retornar ao formulário.

## 🗂 Estrutura de Arquivos

- `index.php` — Página com o formulário HTML
- `recebimento.php` — Script PHP que recebe e exibe os dados enviados
- `README.md` — Documentação do projeto

## 💡 Tecnologias Utilizadas

- PHP (processamento do formulário)
- HTML5 (estrutura do formulário)
- CSS (estilos básicos embutidos)

## 📝 Observações

- O código utiliza filtros básicos para sanitização dos dados recebidos.
- É importante validar e sanitizar dados em qualquer aplicação que receba entrada do usuário.

# Aula 6 - Agendamento Odontológico com PHP

## 📋 Descrição

- Nesta aula, criamos um sistema simples de agendamento odontológico usando PHP e formulários HTML. O usuário pode selecionar um dentista, escolher serviços, data e hora da consulta. Os dados são enviados via POST e exibidos em uma página de confirmação.

## ▶️ Como Usar

1. Abra o arquivo `index.php` em um servidor local ou ambiente PHP.
2. Preencha o formulário com seu nome, escolha o dentista, os serviços desejados, a data e a hora da consulta.
3. Clique em **Enviar**.
4. A página `receba.php` exibirá os dados enviados para confirmação.

## 🗂 Estrutura de Arquivos

- `index.php` — Formulário HTML para agendamento
- `receba.php` — Processa e exibe os dados enviados
- `style.css` — Estilos CSS para o formulário e página de resultado
- `README.md` — Documentação do projeto

## 💡 Tecnologias Utilizadas

- PHP (recepção e processamento dos dados)
- HTML5 (estrutura do formulário)
- CSS (estilo visual)

## 📝 Observações

- Utilizamos `htmlspecialchars()` para garantir a segurança ao exibir dados do usuário.
- O layout é responsivo e simples, focado na usabilidade.
- O sistema é um exemplo básico, ideal para entender o funcionamento de formulários em PHP.

## 📌 Observações

## Aula 7 – Formulário de Contato em PHP

## 📋 Descrição
Projeto simples em PHP que implementa um formulário de contato com os campos Nome, Email e Telefone. Ao enviar o formulário, os dados são recebidos, validados e exibidos para o usuário, que recebe uma confirmação de envio.

## ▶️ Como Usar
- Abra o arquivo index.php no navegador.

- Preencha os campos do formulário.

- Clique em "Enviar".

- O sistema redireciona para receba.php, que exibe os dados enviados e oferece a opção de voltar ao formulário com mensagem de confirmação.

## 🗂️ Estrutura de Arquivos
- index.php – Formulário HTML para inserção dos dados.

- receba.php – Script PHP que recebe, valida e exibe os dados do formulário.

## 💻 Tecnologias Utilizadas
- PHP (para processamento do formulário)

- HTML5 (estrutura do formulário)

- CSS básico inline para estilo simples e responsivo

## 📌 Observações
- Utiliza htmlspecialchars para evitar vulnerabilidades XSS.

- Mensagem de confirmação via parâmetro GET.

## Aula 8 - Sistema de Gerenciamento de Contatos e Fornecedores 📚
Este projeto corresponde à Aula 8 do curso e consiste em um sistema web simples para gerenciar contatos e fornecedores, utilizando PHP com PDO para conexão segura ao banco de dados MySQL e Bootstrap 5 para a interface.

## 🚀 Funcionalidades
- Cadastro, edição e exclusão de contatos.

- Cadastro, edição e exclusão de fornecedores.

- Interface responsiva com modais para formulários.

- Uso de prepared statements para segurança.

- Navegação por menu dinâmico.

## 🛠️ Tecnologias
- PHP 7+

- MySQL

- PDO

- Bootstrap 5

## 📂 Estrutura do Projeto
- conexao.php — conexão PDO.

- menu.php — menu comum.

- pgcontato.php — gerenciamento de contatos.

- pgfornecedor.php — gerenciamento de fornecedores.

- opcontato.php e opfornecedor.php — operações CRUD.

## ⚙️ Como usar
- Configure o banco de dados com as tabelas contatos e fornecedores.

- Atualize conexao.php com as credenciais.

- Coloque os arquivos no servidor web.

- Acesse as páginas via navegador e gerencie os registros.

## 🗃️ Tabelas SQL recomendadas
- sql
- Copiar
- Editar
- CREATE TABLE contatos (
    - id INT AUTO_INCREMENT PRIMARY KEY,
    - nome VARCHAR(100) NOT NULL,
    - email VARCHAR(100) NOT NULL,
    - telefone VARCHAR(20) NOT NULL
);

- CREATE TABLE fornecedores (
    - id INT AUTO_INCREMENT PRIMARY KEY,
    - razao VARCHAR(150) NOT NULL,
    - fantasia VARCHAR(150) NOT NULL,
    - endereco VARCHAR(255) NOT NULL,
    - email VARCHAR(100) NOT NULL,
    - telefone VARCHAR(20) NOT NULL
);
## ⚠️ Observações
- Recomendado PHP 7.4 ou superior.

- PDO e extensões MySQL devem estar habilitadas.

- Validações adicionais são indicadas para ambientes produtivos.



## 🏫 Curso

**SENAC – Lógica de Programação com PHP**  
- Professor: Fabiano Albers
- Aluno: Kaio Sumikawa

## 📜 Licença: Uso educacional
- Projeto aberto para uso e modificação.
