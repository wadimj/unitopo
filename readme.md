# Unitopo

```
git clone git@github.com:wadimj/unitopo.git unitopo
docker-compose up -d mysql nginx redis workspace

(optionally remove vendor and node_modules before)
composer install
npm install
```

## Backend DB & seed
`php artisan migrate`
`php artisan db:seed`

## Frontend
`npm run dev` - to compile
`npm run watch`
