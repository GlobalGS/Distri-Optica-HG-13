# Usamos PHP 8.2 con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite (opcional, útil para URLs bonitas)
RUN a2enmod rewrite

# Copiar todo el proyecto al contenedor
COPY . /var/www/html/

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80
