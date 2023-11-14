## Laravel API

Exemplo de API em Laravel 10.

Gerenciamento de registros de generos musicais, países e bandas.

## Instalação

Para a instalação do projeto, é necessário ter o [Composer](https://getcomposer.org/) instalado.

Rode os seguintes comandos na raiz do projeto:

```sh
composer install
```

```sh
cp .env.example .env
```

```sh
php artisan key:generate
```

```sh
php artisan migrate
```

```sh
php artisan db:seed
```

```sh
php artisan serve
```

## Modelo de dados

| countries  | genres     | bands      | band_genre |
| ------     | ------     | ------     | ------     |
| id         | id         | id         | band_id    |
| name       | name       | name       | genre_id   |
| created_at | created_at | country_id | created_at |
| updated_at | updated_at | created_at | updated_at |

## Endpoints

| Método | URI                  | Descrição                     | Dados                                                     |
| ------ | ------               | ------                        | ------                                                    |
| GET    | /api/v1/paises       | Retorna todos os países       |                                                           |
| GET    | /api/v1/paises/{id}  | Retorna um país específico    | id (int)                                                  |
| POST   | /api/v1/paises       | Cria um novo país             | name (string)                                             |
| PUT    | /api/v1/paises/{id}  | Atualiza um país específico   | id (int), name (string)                                   |
| DELETE | /api/v1/paises/{id}  | Deleta um país específico     | id (int)                                                  |
| GET    | /api/v1/generos      | Retorna todos os gêneros      |                                                           |
| GET    | /api/v1/generos/{id} | Retorna um gênero específico  | id (int)                                                  |
| POST   | /api/v1/generos      | Cria um novo gênero           | name (string)                                             |
| PUT    | /api/v1/generos/{id} | Atualiza um gênero específico | id (int), name (string)                                   |
| DELETE | /api/v1/generos/{id} | Deleta um gênero específico   | id (int)                                                  |
| GET    | /api/v1/bandas       | Retorna todas as bandas       |                                                           |
| GET    | /api/v1/bandas/{id}  | Retorna uma banda específica  | id (int)                                                  |
| POST   | /api/v1/bandas       | Cria uma nova banda           | name (string), country_id (int), genres (array)           |
| PUT    | /api/v1/bandas/{id}  | Atualiza uma banda específica | id (int), name (string), country_id (int), genres (array) |
| DELETE | /api/v1/bandas/{id}  | Deleta uma banda específica   | id (int)                                                  |

## Recursos para busca

Para buscar um recurso específico, você pode adicionar os seguintes parâmetros na URL:

| Parâmetro          | Descrição                                 |
| ------             | ------                                    |
| ?campo=            | Busca pelo parâmetro exato                |
| ?campo_like=       | Busca por texto que contenha o parâmetro  |
| ?relacao-campo=    | Busca pelo parâmetro do relacionamento    |