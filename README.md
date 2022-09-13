# Projeto teste COPA DO MUNDO

## Iniciando o projeto

### Backend
```
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
<!-- Iniciando com banco de dados -->
./vendor/bin/sail up -d
```

### Frontend
```
cd frontend
npm install
npm run dev
```

## Acessando o projeto
### frontend: http://localhost:3000
### backend: http://localhost:8000# copa2022
