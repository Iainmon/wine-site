composer install --no-dev;
php artisan key:generate;
php artisan cahe:clear;
php artisan config:cache;
php artisan view:cache;