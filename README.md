
# Setup Docker Laravel 12 com PHP 8.4

Country-City Dropdowns with Livewire 3

This project is a simple Laravel 12 application that demonstrates how to build dependent dropdowns (Country → City) using Livewire 3.
When a user selects a country, the cities dropdown is automatically updated with all the cities belonging to that country.

The project includes two main routes:

/companies/create – Create a new company.

/companies/{companyId}/edit – Edit an existing company.

It uses:

Livewire 3 (full-page components, hooks like mount and updated, form validations, layouts).

Docker for PHP 8.4 and Laravel setup.

Example of form handling with validation and relational dropdowns.

### Passo a passo
Clone Repositório
```sh
git clone git clone https://github.com/Fabricio-Guima/country-city-dropdowns-livewire-3.git app-laravel
```
```sh
cd app-laravel
```

Suba os containers do projeto
```sh
docker-compose up -d
```


Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

OPCIONAL: Gere o banco SQLite (caso não use o banco MySQL)
```sh
touch database/database.sqlite
```

Rodar as migrations
```sh
php artisan migrate
```

Acesse o projeto
[http://localhost:8000](http://localhost:8000)


📖 Example usage

Go to /companies/create to create a company.

Go to /companies/{companyId}/edit to edit a company.

Select a Country → the City dropdown updates automatically.
