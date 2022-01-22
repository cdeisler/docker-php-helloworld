FROM php:7.0-apache
COPY src/ /var/www/html
EXPOSE 80
RUN echo "ServerName localhost:80" >> /etc/apache2/apache2.conf