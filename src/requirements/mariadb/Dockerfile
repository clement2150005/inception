FROM debian:12.10

RUN apt-get update && \
	DEBIAN_FRONTEND=noninteractive apt-get install -y mariadb-server && \
	rm -rf /var/lib/apt/lists/*

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY tools/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]