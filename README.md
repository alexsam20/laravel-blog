#Laravel Blog<br>
##This is Laravel 10 blog project with Filament PHP admin panel.
## Installation without docker
#### 1. Clone the project<br>
```bash
git clone https://github.com/alexsam20/laravel-blog.git
```

#### 2. Run composer install<br>
```bash
composer install
```

#### 3. Copy .env.example into .env<br>
```bash
cp .env.example .env
```

#### 4. Set encryption key<br>
```bash
php artisan key:generate --ansi
```

#### 5. Run migrations
```bash
php artisan migrate
```

#### 6. Run NPM
```bash
npm run dev
```

#### 7. Add Filament Admin user
```bash
php artisan db:seed
```

#### 8. Use in browser:
```bash
http://localhost:8000/admin
```
email: admin@mail.com<br>
password: admin123
