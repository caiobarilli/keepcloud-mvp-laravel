#!/usr/bin/env bash

str=$1
container_id=$(docker ps -qf "name=web")

# Bash do container
if [ "$str" = "bash" ]; then
    docker exec -it $container_id /bin/bash
fi

# Instala o Laravel
if [ "$str" = "laravel:install" ]; then
    docker exec -it $container_id /bin/bash -c "
    rm -rf *.*
    composer create-project laravel/laravel .
    "
fi

# Permissões do container
if [ "$str" = "laravel:permissions" ]; then
    docker exec -it $container_id /bin/bash -c "
    addgroup -g 1000 www-data
    adduser -D -u 1000 -G www-data -s /sbin/nologin www-data
    chown -R 1000:www-data /var/www/html
    chown -R www-data:www-data /var/www/html/storage
    php artisan storage:link
    chmod o+w /var/www/html/storage/ -R
    "
fi

# Instala dependências do php
if [ "$str" = "composer:install" ]; then
    docker exec -it $container_id /bin/bash -c "
    composer install
    "
fi

# Instala dependências do node
if [ "$str" = "npm:install" ]; then
    docker exec -it $container_id /bin/bash -c "
    npm install && npm run build
    "
fi

# Gerar chave do app
if [ "$str" = "laravel:key" ]; then
    docker exec -it $container_id /bin/bash -c "
    php artisan key:generate
    "
fi

# Migrações do container
if [ "$str" = "laravel:migrate" ]; then
    docker exec -it $container_id /bin/bash -c "
    php artisan migrate:fresh --seed
    "
fi