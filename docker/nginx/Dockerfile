FROM nginx:mainline-alpine

LABEL maintainer="Diakov Artem"

ENV NGINX_SERVER_NAME=app_name \
    NGINX_ROOT_DIRECTORY=/service/public

RUN adduser -u 1000 -D -S -G www-data www-data

COPY docker/nginx/nginx.conf /etc/nginx/nginx.conf
COPY docker/nginx/nginx.site.template /etc/nginx/conf.d/default.conf
