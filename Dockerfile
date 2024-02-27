# Use an official PHP runtime
FROM php:8.2-apache

# Actualizar y actualizar paquetes
RUN apt-get update && apt-get upgrade -y

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli