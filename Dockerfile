FROM trafex/alpine-nginx-php7
COPY client.php /var/www/html
COPY config.php /var/www/html
COPY led_on.php /var/www/html
COPY led_off.php /var/www/html
COPY index.php /var/www/html
