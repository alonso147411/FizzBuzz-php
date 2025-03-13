# Usa una imagen oficial de PHP con CLI (versión 7.1)
FROM php:7.1-cli

# Instala las dependencias necesarias (incluyendo Composer)
RUN apt-get update && apt-get install -y unzip git \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /app

# Copia el archivo composer.json y composer.lock (si existe) al contenedor
COPY composer.json composer.lock* ./

# Instala las dependencias de Composer
RUN composer update
RUN composer install 

# Copia el resto de los archivos del repositorio al contenedor menos el dockerfile
COPY . .

# Comando por defecto al ejecutar el contenedor
CMD ["php", "fizzbuzz.php"]
