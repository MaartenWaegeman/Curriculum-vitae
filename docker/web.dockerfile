FROM nginx:1.19-alpine

COPY ./docker/config/vhost.conf /etc/nginx/conf.d/default.conf
