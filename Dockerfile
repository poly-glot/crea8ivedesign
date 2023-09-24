FROM php:8.2.0-apache
RUN a2enmod rewrite \
    && service apache2 restart

COPY ./webapp /var/www/html
