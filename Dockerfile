# Dockerfile
FROM php:7.0-apache

RUN docker-php-ext-install pdo
RUN a2enmod rewrite
