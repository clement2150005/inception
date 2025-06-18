FROM debian:12.10

RUN apt-get update && apt-get install -y \
	php \
	php-fpm \
	php-mysql \
	php-mbstring \
	php-opcache \
	php-gd \
	php-xml \
	php-curl \
	curl && \
	ln -s /usr/sbin/php-fpm8.2 /usr/sbin/php-fpm && \
	rm -rf /var/lib/apt/lists/*

COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf

CMD ["php-fpm", "-F"]
