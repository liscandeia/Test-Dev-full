# Projeto Laravel sistema de gestão para  grupo econômico

Este projeto foi desenvolvido utilizando Laravel, com integração de Livewire, MySQL, Tailwind CSS, Jetstream e Auditing.

## Requisitos
Antes de iniciar, certifique-se de ter os seguintes requisitos instalados:
- PHP 8+
- Composer
- MySQL
- Node.js e NPM
- Laravel CLI

## Instalação e Configuração
Siga os passos abaixo para configurar o projeto:

1. Clone o repositório:
   bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
   

2. Instale as dependências do PHP:
   bash
   composer install
   

3. Renomeie o arquivo de ambiente e configure o banco de dados no arquivo .env:
   bash
   cp .env.example .env
   

4. Gere a chave da aplicação:
   bash
   php artisan key:generate
   

5. Execute as migrações e populadores:
   bash
   php artisan migrate --seed
   

6. Inicie o servidor:
   bash
   php artisan serve
   

7. Em um novo terminal, instale as dependências do Node.js:
   bash
   npm install
   

8. Compile os assets:
   bash
   npm run dev
   

## Tecnologias Utilizadas
- *Laravel*: Framework PHP para aplicações web
- *Livewire*: Biblioteca para componentes dinâmicos sem necessidade de JavaScript
- *MySQL*: Banco de dados relacional
- *Tailwind CSS*: Framework CSS para estilização
- *Jetstream*: Implementação de autenticação no Laravel
- *Auditing*: Rastreio e auditoria de dados

## Observação
O projeto está otimizado para o *modo claro. A implementação do **modo escuro* ainda está em desenvolvimento.
