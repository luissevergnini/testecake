# Teste de conhecimentos - Analista Desenvolvedor

Resolução de exercícios correspondentes a uma avaliação para o cargo de Analista Desenvolvedor. Uma das questões da avaliação exigia a implementação de uma api REST para um gerenciador de tarefas. A api foi desenvolvida utilizando o framework [CakePHP](http://cakephp.org) 3.x.

## Instalação

Para rodar a aplicação por meio do servidor PHP pré-configurado pelo CakePHP, navegue 
pela linha de comando até a pasta do projeto e execute o seguinte comando:

```bash
bin\cake server -p 8765
```

Visite `http://localhost:8765` para acessar a página inicial (listagem de tarefas).

## Configuração

Para criar o banco de dados, copie o conteúdo do arquivo `config/schema/todolist.sql`
e o execute em um cliente do banco de dados MySQL.

Altere as propriedades `username`, `password` e `database` na seção Datasources do 
arquivo `config/app.php` para refletir as configurações do seu ambiente de desenvolvimento.

## Testes

Para testar o exercício n°1, acesse o diretório do projeto pela linha de comando, e execute:

```bash
php ex1.php
```

Para testar o exercício n°4, correspondente à Api REST, utilize o cliente HTTP de sua preferência
(ex: Postman). As seguintes ações estão disponíveis através das URLs:

```
HTTP format     URL (.json ou .xml)     Ação
GET            /tasks.json              Retorna todas as tarefas
GET            /tasks/3.json            Retorna a tarefa com id => 3
POST           /tasks.json              Grava uma nova tarefa*
PUT            /tasks/3.json            Atualiza os dados tarefa com id => 3*
PATCH          /tasks/3.json            Atualiza os dados tarefa com id => 3*
DELETE         /tasks/3.json            Deleta a tarefa com id => 3
```

* Nestes casos, o formato do body da requisição HTTP deverá ser do tipo x-www-form-urlencoded.
As propriedades da tarefa que devem ser informadas são: 
    - description (descrição)
    - priority (prioridade)
    - status (0, 1 ou 2)

Versão do PHP utilizada nos testes: 5.6.30.
