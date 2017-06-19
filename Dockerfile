FROM whatwedo/symfony3

# Copy symfony files and a copy of composer
COPY web ./var/www/web
COPY app ./var/www/app
COPY bin ./var/www/bin
COPY src ./var/www/src
COPY var ./var/www/var
COPY tests ./var/www/tests
ADD composer.json ./var/www/
ADD composer.phar ./var/www/


# Change folder owneship to stop Symfony crapping itself
RUN chown -R www-data:www-data ./var/www


# Replace the base image's Nginx config file with ours, which is basically the the same but updated to force https
RUN rm ./etc/nginx/nginx.conf
ADD nginx.conf ./etc/nginx

# Do the Composer thing
RUN php ./var/www/composer.phar clear-cache
# RUN cd ./var/www/ && php composer.phar install
