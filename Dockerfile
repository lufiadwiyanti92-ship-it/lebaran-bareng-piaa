FROM php:8.2-cli

WORKDIR /app

RUN apt-get update && apt-get install -y unzip git curl

RUN curl -sS https://getcomposer.org/installer | php

COPY . .

RUN php composer.phar install

RUN cp .env.example .env || true
RUN php artisan key:generate || true

EXPOSE 3000

CMD php artisan serve --host=0.0.0.0 --port=3000