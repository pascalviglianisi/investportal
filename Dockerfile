FROM richarvey/nginx-php-fpm:3.1.6

COPY . /var/www/html

WORKDIR /var/www/html

ENV APP_NAME=InvestPortal
ENV APP_ENV=production
ENV APP_KEY=base64:5NvNmkzQFRDUrfgqAVrRR3FKTC6GeKV3hdrAgsRGuAc=
ENV APP_DEBUG=true
ENV APP_URL=https://investportal.onrender.com
ENV LOG_CHANNEL=stderr
ENV LOG_LEVEL=debug
ENV SESSION_DRIVER=file
ENV CACHE_STORE=file
ENV QUEUE_CONNECTION=sync
ENV DB_CONNECTION=sqlite

RUN composer install --no-dev --optimize-autoloader

RUN mkdir -p /var/www/html/database
RUN touch /var/www/html/database/database.sqlite

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

ENV WEBROOT=/var/www/html/public
