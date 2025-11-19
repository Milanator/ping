# ZLOŽENIE PROJEKTU

- **backend/** – Laravel server
- **frontend/** – Vue.js aplikácia

---

## KLONOVANIE PROJEKTU
```bash
git clone https://github.com/Milanator/ping.git
```
```bash
cd ping
```

## BACKEND
```bash
cd backend
```
```bash
composer install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```
```bash
php artisan migrate
```
```bash
php artisan serve --port=3000
```

## FRONTEND
```bash
cd ../frontend
```
```bash
cp .env.example .env
```
```bash
npm install
```
```bash
npm run dev
```