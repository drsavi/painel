FROM php:7.3-fpm

RUN apt-get update \
    && apt-get install --yes \
        gzip \
        wget \
        g++ \
        gettext \
        libicu-dev \
        openssl \
        libc-client-dev \
        libkrb5-dev \
        libxml2-dev \
        libfreetype6-dev \
        libgd-dev \
        bzip2 \
        libbz2-dev \
        libtidy-dev \
        libcurl4-openssl-dev \
        libz-dev \
        libxslt-dev \
        xfonts-75dpi \
        libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql \
    && docker-php-ext-install pcntl \
        bcmath \
        bz2 \
        calendar \
        dba \
        exif \
        fileinfo \
    && docker-php-ext-configure gd --with-freetype-dir=/usr --with-jpeg-dir=/usr \
    && docker-php-ext-install gd \
        gettext \
    && docker-php-ext-install intl \
        soap \
        tidy \
        xmlrpc \
        mbstring \
        xsl \
    && docker-php-ext-configure zip --enable-zip --without-libzip \
    && docker-php-ext-install zip \
    && docker-php-ext-configure hash --with-mhash \
    && docker-php-ext-install sockets \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && sed -i "s/TLSv1.2/TLSv1/g" /etc/ssl/openssl.cnf \
    && sed -i "s/SECLEVEL=2/SECLEVEL=1/g" /etc/ssl/openssl.cnf \
    && apt-get clean

WORKDIR /var/www/html
COPY . .

RUN chown -R www-data:www-data /var/www/html/vendor
RUN COMPOSER_MEMORY_LIMIT=-1 composer install --no-dev --optimize-autoloader

RUN php artisan key:generate
RUN php artisan db:seed

EXPOSE 8000
