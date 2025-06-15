FROM alpine:3.20.6

RUN apk add --no-cache nginx

COPY conf/nginx.conf /etc/nginx/nginx.conf
COPY conf/default.conf /etc/nginx/conf.d/default.conf
COPY conf/cert.pem /etc/nginx/ssl/cert.pem
COPY conf/key.pem /etc/nginx/ssl/key.pem
COPY html/ /var/www/html/

CMD ["nginx", "-g", "daemon off;"]