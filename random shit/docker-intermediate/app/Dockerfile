FROM alpine
RUN apk add --no-cache nginx && mkdir -p /var/www/html
COPY index.html /var/www/html
CMD ["nginx", "-g", "daemon off;"]
