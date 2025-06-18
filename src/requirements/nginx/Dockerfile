FROM debian:12.10

RUN apt-get update && apt-get install -y nginx && \
	rm -rf /var/lib/apt/lists/*

COPY conf/nginx.conf /etc/nginx/nginx.conf
COPY conf/default.conf /etc/nginx/conf.d/default.conf
COPY conf/cert.pem /etc/nginx/ssl/cert.pem
COPY conf/key.pem /etc/nginx/ssl/key.pem

CMD ["nginx", "-g", "daemon off;"]