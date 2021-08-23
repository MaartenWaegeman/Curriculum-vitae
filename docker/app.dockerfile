FROM php:7.4-fpm-buster as app

# Copy everything from project root into
COPY . /var/www/html/

# Install wkhtmltopdf
RUN apt-get update && apt install ./docker/bin/wkhtmltox_0.12.5-1.buster_amd64.deb -y \
 && apt-get clean \
 && rm -rf /var/lib/apt/lists/*