# Teste Contass

Teste feito para concorrer a vaga de programador PHP na Contass Contabilidade

## Instalação

O projeto foi feito utilizando o Framework [Laravel](http://laravel.com/). Para rodar projeto é necessário fazer algumas configurações.

Após clonar o projeto entre na pasta e rode o comando
```bash
composer install
```

Crie um banco de dados com o nome que preferir e altere a linha de código do arquivo <code>.env </code>

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teste_contass
DB_USERNAME=root
DB_PASSWORD=
```

Em seguida abra o terminal ou CMD e navegue até a pasta do projeto e rode os comandos
```bash
php artisan migrate
```

```bash
php artisan serve
```

Pronto se tudo ocorrer corretamente seu projeto já estará executando para acessar basta acessar o navegador na URL: <em>localhost:8000</em>

## Editando
As principais pastas para editar o sistema são:

###Model:
- <code>app/Tarefas.php</code>

###Controller:
- <code>app/Http/TarefasController.php</code>

###Funções Ajax:
- <code>public/js/ajax.js</code>

###Funções Views:
- <code>resources/views</code>

###Rotas:
- <code>routes/web.php</code>
