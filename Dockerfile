FROM php:8.2.0-apache

RUN apt-get update \
    && a2enmod rewrite \
    && service apache2 restart

COPY ./webapp /var/www/html
