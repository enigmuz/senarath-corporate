# Senarath Bank — Corporate website
# LAB ENVIRONMENT · fictional institution · synthetic content
FROM php:8.2-apache

# Corporate site is informational only: no DB drivers, no app secrets.
RUN a2enmod rewrite headers

# Reasonable production-ish PHP settings for a static-ish PHP site
RUN { \
      echo 'expose_php=Off'; \
      echo 'display_errors=Off'; \
      echo 'upload_max_filesize=8M'; \
      echo 'post_max_size=8M'; \
    } > /usr/local/etc/php/conf.d/zz-corporate.ini

# App code
COPY src/ /var/www/html/
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
HEALTHCHECK --interval=30s --timeout=4s --retries=3 \
  CMD php -r 'exit(@file_get_contents("http://127.0.0.1/index.php")?0:1);' || exit 1
