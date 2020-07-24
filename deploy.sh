sudo docker-compose down
git pull
sudo docker-compose up --build -d
sudo docker-compose exec docker-php-fpm composer install
sudo docker-compose exec docker-php-fpm composer clear-all-cache
sudo docker-compose exec docker-php-fpm php vendor/bin/doctrine orm:schema-tool:update --force --dump-sql
