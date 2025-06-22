FROM debian:12.10

RUN apt-get remove -y apache2 apache2-bin apache2-utils apache2-data || true

RUN apt-get update && apt-get install -y --no-install-recommends \
	ca-certificates \
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

WORKDIR /var/www/html
RUN curl -O https://wordpress.org/latest.tar.gz && \
	tar -xzf latest.tar.gz --strip-components=1 && \
	rm latest.tar.gz

EXPOSE 9000

CMD ["php-fpm", "-F"]
