# logica-programacao-php
Exercícios e anotações do curso "Lógica de Programação Direcionada a PHP" do Senac. Foco em fundamentos da lógica com aplicação prática em PHP.

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

aula04/
├── index.php # Página com o formulário HTML
├── receber.php # Script PHP que exibe os dados enviados
├── estilos.css # Estilo visual da interface
└── README.md # Este arquivo de documentação

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
