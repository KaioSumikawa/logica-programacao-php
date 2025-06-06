# logica-programacao-php
Exercícios e anotações do curso "Lógica de Programação Direcionada a PHP" do Senac. Foco em fundamentos da lógica com aplicação prática em PHP.

Aula 1 – Agenda de Contatos em PHP
Este projeto é uma aplicação simples para gerenciar contatos usando PHP e MySQL.
Permite cadastrar, editar, listar e excluir contatos com interface básica usando Bootstrap.

Funcionalidades
Cadastro de contatos (nome, email, telefone)

Edição de contatos

Exclusão de contatos

Listagem dos contatos ordenada por nome

Tecnologias utilizadas
PHP (PDO para conexão segura com banco de dados)

MySQL

Bootstrap 5 (para estilização básica)

Estrutura de arquivos
conexao.php – Arquivo para conexão com o banco de dados

index.php – Página principal que lista os contatos

opcontato.php – Script que executa as operações (cadastrar, editar, excluir)

adicionar.php – Formulário para adicionar novo contato

editar.php – Formulário para editar contato existente

README.md – Documentação do projeto

Como executar
Configure seu servidor local (XAMPP, WAMP, etc.) com PHP e MySQL

Crie o banco de dados agenda e a tabela contatos com os campos:

id (INT AUTO_INCREMENT PRIMARY KEY)

nome (VARCHAR)

email (VARCHAR)

telefone (VARCHAR)

Atualize as credenciais de conexão no arquivo conexao.php

Coloque os arquivos no diretório do servidor e acesse via navegador

# Aula 04 – Cadastro de Preferências com PHP

Este projeto é parte do curso de **Lógica de Programação com PHP** no SENAC. O objetivo é desenvolver um formulário web que colete informações do usuário e exiba os dados enviados utilizando PHP puro.

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

## 📌 Observações

Este projeto é apenas para fins didáticos, como parte de uma sequência de aulas introdutórias de PHP.  
Todos os dados são processados localmente, sem banco de dados.

## 🏫 Curso

**SENAC – Lógica de Programação com PHP**  
Professor: Fabiano Albers
Aluno: Kaio Sumikawa

📁 Licença: Uso educacional
