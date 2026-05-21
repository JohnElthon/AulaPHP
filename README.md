# Aula PHP - Senac Santos

Repositório com projetos e exercícios desenvolvidos durante o curso Técnico em Desenvolvimento de Sistemas no Senac Santos em 2024.

## Sobre

Aqui estão reunidos os projetos e exercícios feitos ao longo das aulas de PHP, cobrindo desde variáveis básicas até sistemas completos com banco de dados MySQL.

## Projetos em Destaque

### App Help Desk (com Banco de Dados)
Sistema completo de gerenciamento de chamados técnicos com MySQL, desenvolvido como projeto prático do curso.

- Login com sessões e autenticação via banco de dados com senha criptografada (MD5)
- Cadastro de usuários com validação de e-mail duplicado
- Controle de acesso por perfil: Administrador, Técnico e Usuário
- Autorização de perfis pelo administrador
- Abertura e consulta de chamados
- Edição e exclusão de chamados com confirmação
- Gerenciamento de usuários com validação de chamados pendentes antes de excluir
- Relatórios de chamados por status: Aberto, Andamento e Finalizado
- Interface responsiva com Bootstrap

O script para criar o banco de dados está no arquivo [database.sql](app_help_deskBD/database.sql).

### App Help Desk (com Arquivo TXT)
Versão anterior do sistema de chamados, onde os dados eram salvos em arquivo `.txt` em vez de banco de dados.

- Login com sessões e usuários pré-cadastrados em array
- Controle de acesso por perfil
- Abertura e consulta de chamados
- Dados salvos e lidos via arquivo de texto

## Exercícios

### Orientação a Objetos
- Classes com atributos, métodos, getters/setters e magic methods (`__get` e `__set`)
- Exemplos com carros e times de futebol

### Arrays
- Gerador de números aleatórios para loteria sem repetição

### Estruturas de Repetição
- Impressão de números pares entre 1000 e 2000
- Tabuada de qualquer número escolhido pelo usuário
- Números primos de 1 a 100
- Pesquisa de opinião com 10 pessoas via formulário

### Exercícios Iniciais
- Cálculos com variáveis via `$_GET` (soma, multiplicação e comparações)
- Cálculo de IMC via URL
- Manipulação de strings e variáveis

## Tecnologias

- PHP
- MySQL
- Bootstrap 4
- HTML e CSS

## Instituição

Curso Técnico em Desenvolvimento de Sistemas — Senac Santos (2024)
