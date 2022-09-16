FROM php:8.0.8-fpm-alpine3.13

ENV COMPOSER_ALLOW_SUPERUSER="1"

RUN set -e \
    && apk add --quiet --no-cache icu-dev > /dev/null \
    && docker-php-ext-install pdo_mysql sockets bcmath intl mysqli > /dev/null \
    && rm -rf /var/cache/apk/* \
    && mkdir /app /home/user /run/nginx

COPY --chown=www-data:www-data . /app

WORKDIR /app

EXPOSE 5000