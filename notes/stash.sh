
# PROJECT
cd /var/www/jslmariano/package-demo
docker-compose up -d
docker-compose down

# LUMEN INSTALL
cd /var/www/jslmariano/package-demo
composer create-project --prefer-dist laravel/lumen demo-api

# LUMEN SETUP
cd /var/www/jslmariano/package-demo/docker-local
docker-compose exec demo-api bash
composer install
composer require demo/api

# COMPOSER
composer install

# TEST
./vendor/bin/phpunit ./vendor/demo/sample/