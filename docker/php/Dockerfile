FROM composer:1.9.2 as composer
FROM php:7.4-fpm-alpine

LABEL maintainer="Diakov Artem"

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN mkdir /app

RUN adduser --shell /bin/bash --home /home/codekeeper --disabled-password codekeeper

ADD ./ /app

WORKDIR /app

RUN chown -R codekeeper:codekeeper .

USER codekeeper

RUN composer install

USER root
RUN apk add acl
# Give permissions to write to var
RUN setfacl -dR -m u:www-data:rwX -m u:codekeeper:rwX var
RUN setfacl -R -m u:www-data:rwX -m u:codekeeper:rwX var


CMD ["sh", "-c", "(setfacl -R -m u:www-data:rwX -m u:codekeeper:rwX var) && (setfacl -dR -m u:www-data:rwX -m u:codekeeper:rwX var) && php-fpm"]