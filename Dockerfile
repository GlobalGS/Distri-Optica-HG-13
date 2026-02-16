# Imagen base con PHP 8 y Apache
FROM php:8.2-apache

# Instalar mysqli para conectarse a MySQL
RUN docker-php-ext-install mysqli

# Copiar tu proyecto al contenedor
COPY . /var/www/html/

# Asegurarse de permisos correctos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80 para la web
EXPOSE 80

# Comando por defecto de Apache
CMD ["apache2-foreground"]
