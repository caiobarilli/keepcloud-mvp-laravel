<p align="center">
   <img src="https://raw.githubusercontent.com/caiobarilli/keepcloud-mvp-laravel/main/docs/Logo.png" />
</p>


# Laravel com MySQL, Blade, CRUD de Sócios e Integração com ViaCEP

| Software    | Port |
| ----------- | ---- |
| **Laravel** | 8000 |
| **MySQL**   | 3306 |

<br />

## Instruções solicitadas

Para acessar o documento com as instruções solicitadas,
[clique aqui](https://raw.githubusercontent.com/caiobarilli/keepcloud-mvp-laravel/main/docs/Instru%C3%A7%C3%B5es.md).

<br />

## Tarefas realizadas

Para acessar o documento com as instruções realizadas,
[clique aqui](https://raw.githubusercontent.com/caiobarilli/keepcloud-mvp-laravel/main/docs/Todo.md).

<br />

## Pré-requisitos

Para começar, certifique-se de ter o [Docker](https://docs.docker.com/) e também o [Docker Compose](https://docs.docker.com/compose/install/) no seu sistema.

<br />

## Download

Faça o download do projeto com o comando:

```sh
git clone git@github.com:caiobarilli/keepcloud-mvp-laravel.git
```

<br />

## Instalação

Acesse a pasta do projeto, e faça o build do container web:

```sh
docker-compose build
```

Suba a primera vez os containers:

```sh
docker-compose up
```

Abra um novo terminal e instale as dependências do laravel:

```sh
sh ./app composer:install
```

instale as dependências do node e faça o build com o comando:

```sh
sh ./app npm:install
```

Adicione as permissões necessárias na pasta storage:

```sh
sh ./app laravel:permissions
```

Entre na pasta do Laravel em ./laravel e faça uma copia do arquivo .env.example para .env:

```sh
cp .env.example .env
```

Agora volte para a raiz do projeto e gere uma chave para o projeto:

```sh
sh ./app laravel:key
```

faça a migração do banco de dados:

```sh
sh ./app laravel:migrate
```

acesse seu [navegador](http://localhost:8000/) para visualizar o projeto.

## Testes

Para rodar os testes, execute o comando:

```sh
sh ./app laravel:tests
```