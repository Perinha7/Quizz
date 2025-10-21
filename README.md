## Projeto Quizz

Este é um projeto de um aplicativo de quiz desenvolvido para testar conhecimentos em diversas áreas. O aplicativo apresenta perguntas de múltipla escolha e fornece feedback imediato sobre as respostas.

### Funcionalidades
- Perguntas de múltipla escolha
- Pontuação baseada nas respostas corretas no final
- Imagens nas perguntas para maior interatividade

## Criação do Projeto

```bash
composer create-project laravel/laravel Quizz
```

### Criação do Modelo e Migração

Para criar o modelo `Pergunta` e a migração correspondente, você pode usar o seguinte comando no terminal:

```bash
php artisan make:model Pergunta -m
```

Isso vai criar o arquivo do modelo `Pergunta.php` em `app/Models` e o arquivo de migração em `database/migrations`.


## Criação de Seeder para perguntas
Para popular o banco de dados com perguntas iniciais, você pode criar um seeder usando o comando:

```bash
php artisan make:seeder PerguntasSeeder
```

## Rodar as migrações e seeders
Após criar as migrações e seeders, você pode rodá-los com o comando:

```bash
php artisan migrate
php artisan db:seed --class=PerguntasSeeder
```

## Criação do Controlador

Para criar um controlador para gerenciar as perguntas, você pode usar o comando:

```bash
php artisan make:controller PerguntaController
```
