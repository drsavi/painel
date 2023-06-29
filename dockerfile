FROM ubuntu:20.04
FROM php:7.3-fpm as builder


WORKDIR /var/www/vendor/autoload.php

RUN apt-get update
RUN apt-get install --yes --force-yes gzip wget cron g++ gettext libicu-dev openssl libc-client-dev libkrb5-dev  libxml2-dev libfreetype6-dev libgd-dev libmcrypt-dev bzip2 libbz2-dev libtidy-dev libcurl4-openssl-dev libz-dev libmemcached-dev libxslt-dev poppler-utils xfonts-75dpi wkhtmltopdf nano

# Copia o arquivo composer.lock e o arquivo composer.json separadamente
COPY composer.lock composer.json /mnt/c/Users/T.I/painel/

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        php7.3-pgsql; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*


RUN pecl install xdebug-3.1.5 && docker-php-ext-enable xdebug
#RUN apt-get install --yes --force-yes libmagickwand-dev libmagickcore-dev
#RUN yes '' | pecl install -f imagick
#RUN docker-php-ext-enable imagick
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer self-update --1

RUN echo 'export PATH="$HOME/.composer/vendor/bin:$PATH"' >> ~/.bashrc source ~/.bashrc

RUN docker-php-ext-configure zip --enable-zip --without-libzip
RUN docker-php-ext-install zip

RUN docker-php-ext-configure hash --with-mhash
RUN docker-php-ext-install sockets

#RUN composer install --no-interaction --no-dev --optimize-autoloader

COPY . /mnt/c/Users/T.I/painel/

#RUN composer install --no-interaction --no-dev --optimize-autoloader

COPY artisan /var/www/artisan
RUN chown -R www-data:www-data /var/www
#RUN chmod -R 755 /var/www/storage
 
RUN COMPOSER_MEMORY_LIMIT=-1 composer install
RUN COMPOSER_MEMORY_LIMIT=-1 composer require php-amqplib/php-amqplib
RUN COMPOSER_MEMORY_LIMIT=-1 composer require firebase/php-jwt
RUN php artisan key:generate
RUN php artisan db:seed
RUN php artisan migrate

EXPOSE 8000

FROM php:7.3-fpm

COPY --from=builder /var/www /var/www

WORKDIR /var/www
RUN php artisan key:generate
RUN php artisan db:seed
RUN php artisan migrate
RUN php artisan update-class-list
RUN php artisan remove-all-from-maintenance

# Inicie o servidor web e o serviço PHP-FPM

COPY . /var/www
RUN chmod +x /var/www/artisan
#RUN chown -R www-data:www-data /var/www
#RUN chmod -R 755 /var/www/storage
#CMD ["php","artisan","serve","--host=0.0.0.0"]