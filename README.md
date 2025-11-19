# ZLOŽENIE PROJEKTU

- **backend/** – Laravel server
- **frontend/** – Vue.js aplikácia

---

## KLONOVANIE PROJEKTU
```bash
git clone https://github.com/Milanator/ping.git
cd ping
```

## BACKEND
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
```

**Nastavenie súboru .env a databázy**

```bash
php artisan migrate
php artisan serve --port=3000
```

## FRONTEND
```bash
cd ../frontend
cp .env.example .env
npm install
npm run dev
```