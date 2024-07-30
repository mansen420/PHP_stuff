FROM nginx:latest

# Copy the public directory
COPY public/ /var/www/mywebsite.com/html/

COPY docker/nginx/hosts /etc/hosts

# Copy the nginx config file
COPY docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf