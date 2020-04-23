## image
FROM php:7.3.6-apache-stretch

## envs
ENV INSTALL_DIR /var/www/html

# install composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

## install libraries
RUN requirements="vim nano wget sudo mlocate git-core curl build-essential openssl libssl-dev nodejs mysql-client git cron libpng-dev libmcrypt-dev libmcrypt4 libcurl3-dev libfreetype6 libjpeg62-turbo libjpeg62-turbo-dev libfreetype6-dev libicu-dev libxslt1-dev libzip-dev zip" \
    && apt-get update \
    && apt-get install -y $requirements \
    && apt-get update -yq \
    && apt-get install curl gnupg -yq \
    && curl -sL https://deb.nodesource.com/setup_10.x | bash \
    && apt-get install nodejs -yq \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && yes '' | pecl install mcrypt-1.0.2 \
    && docker-php-ext-enable mcrypt \
    && docker-php-ext-install mbstring \ 
    && docker-php-ext-install zip \
    && docker-php-ext-install intl \
    && docker-php-ext-install xsl \
    && docker-php-ext-install soap \
    && docker-php-ext-install bcmath \
    && apt-get autoremove -y \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*



## copy configs files
COPY config/apache/000-default.conf /etc/apache2/sites-available/
# COPY config/apache/default-ssl.conf /etc/apache2/sites-available/
# COPY config/SW6/production.env /var/www/html/.env

# RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/ssl-cert-snakeoil.key -out /etc/ssl/certs/ssl-cert-snakeoil.pem -subj "/C=AT/ST=Vienna/L=Vienna/O=Security/OU=production/CN=example.com"


## turn on mod_rewrite
RUN a2enmod rewrite
# RUN a2ensite default-ssl
# RUN a2enmod ssl

# set memory limits
RUN echo "memory_limit=2048M" > /usr/local/etc/php/conf.d/memory-limit.ini

## www-data should own /var/www
RUN chown -R www-data:www-data /var/www

## switch user to www-data
USER www-data

## copy sources with proper user
COPY --chown=www-data code $INSTALL_DIR



## www-data should own /var/www
RUN chown -R www-data:www-data /var/www

## copy sources with proper user
# COPY --chown=www-data alpha $INSTALL_DIR

# RUN cd /var/www && composer global require hirak/prestissimo predis/predis
# RUN cd /var/www && composer global require hirak/prestissimo

## set working dir
WORKDIR $INSTALL_DIR

# composer install
RUN composer global require hirak/prestissimo predis/predis
# RUN composer global require hirak/prestissimo
# RUN ln -s /var/www/html/public/bundles/storefront/assets public/assets
# RUN chown -R www-data /var/www/html
# RUN chgrp -R www-data /var/www/html
RUN composer install
# RUN composer config
# RUN bin/setup -n -vvv
# RUN chown -R www-data /var/www/html
# RUN chgrp -R www-data /var/www/html



## switch back
USER root

## run cron alongside apache
CMD [ "sh", "-c", "cron && apache2-foreground" ]
