#!/bin/sh

if [ ! -d "/var/lib/mysql/${DB_NAME}" ]; then
	mysqld --initialize-insecure --user=mysql
	mysqld_safe --skip-networking &
	sleep 5
	mysql -u root <<-EOSQL
		CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\`;
		CREATE USER IF NOT EXISTS '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASS}';
		GRANT ALL PRIVILEGES ON \`${DB_NAME}\`.* TO '${DB_USER}'@'%';
		ALTER USER 'root'@'localhost' IDENTIFIED BY '${MARIADB_ROOT_PASSWORD}';
		FLUSH PRIVILEGES;
		
	EOSQL
	mysqladmin -uroot -p"${MARIADB_ROOT_PASSWORD}" shutdown
fi

exec mysqld_safe
