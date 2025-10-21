## Projeto Quizz

Este é um projeto de um aplicativo de quiz desenvolvido para testar conhecimentos em diversas áreas. O aplicativo apresenta perguntas de múltipla escolha e fornece feedback imediato sobre as respostas.

### Funcionalidades
- Perguntas de múltipla escolha
- Pontuação baseada nas respostas corretas no final
- Imagens nas perguntas para maior interatividade


### Criação do Modelo e Migração

Para criar o modelo `Pergunta` e a migração correspondente, você pode usar o seguinte comando no terminal:

```bash
php artisan make:model Pergunta -m
```

Isso vai criar o arquivo do modelo `Pergunta.php` em `app/Models` e o arquivo de migração em `database/migrations`.
