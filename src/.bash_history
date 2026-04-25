ls -la /var/www
composer create-project laravel/laravel . "^11.0"
composer create-project laravel/laravel temp "^11.0"
mv temp/* temp/.* . 2>/dev/null
rm -rf temp
ls
clear
ls
clear
php artisan migrate
php artisan migrate
php artisan db:seed
php artisan migrate
php artisan db:seed
clear
docker ps
exit
