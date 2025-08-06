FROM php:8.2-cli

WORKDIR /var/www/html

COPY . .

CMD [ "php", "index.php" ]
