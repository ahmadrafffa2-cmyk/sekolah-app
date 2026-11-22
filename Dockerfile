FROM php:8.4-cli
RUN apt-get update && apt-get install -y git unzip libzip-dev libpng-dev libonig-dev libxml2-dev zip curl nodejs npm
RUN docker-php-ext-install pdo_mysql mbstring zip bcmath
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /app
COPY . .
RUN composer install --no-interaction --no-dev --optimize-autoloader
RUN npm install && npm run build
EXPOSE 8080
CMD php artisan serve --host=0.0.0.0 --port=$PORT
