# Docker Apache2 PHP NodeJS MariaDB phpMyAdmin

Stack for Webdevelopmenent built with Docker Compose

![Landing Page](https://i.ibb.co/vJjXdns/image.png)

A basic stack environment. It consists of the following:
- **Apache2**
- **PHP 7.3.x**
- **MariaDB**
- **phpMyAdmin**

Apache Container also included:
- Composer
- Nano
- NodeJS
- Git
- Zip / Unzip
- Screen

## Download
```bash

# Clone Git-Repository
> git clone https://github.com/lix-dev/docker-apache-php-nodejs-mariadb-phpmyadmin

# Repository folder
> cd docker-apache-php-nodejs-mariadb-phpmyadmin/

```

## Configuration

You can change some environment variables like MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE in ./docker-compose.yaml 

```yaml
version: "3"

services:
  web:
    container_name: dev-web
    build:
      context: ./
      dockerfile: ./app/dockerfile
    environment:
      - ALLOW_OVERRIDE=true
      - APACHE_LOG_DIR=/var/www/logs/
      - APACHE_DOCUMENT_ROOT=/var/www/html/
    ports:
      - "80:80"
    links:
      - db
    volumes:
      - ./app/html/:/var/www/html/
      - ./app/logs/:/var/www/logs/

  db:
    image: mariadb
    container_name: dev-mariadb
    restart: always
    volumes:
      - ./db/data/:/var/lib/mysql
    environment:
      MYSQL_ROOT_PASSWORD: dev-root
      MYSQL_USER: dev-user
      MYSQL_PASSWORD: dev-password
      MYSQL_DATABASE: dev-database
    ports:
      - "8889:3306"
  
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    container_name: dev-phpmyadmin
    environment:
      PMA_HOST: db
      PMA_PORT: 3306
    restart: always
    ports:
        - 8080:80
    volumes:
        - /sessions
    links:
        - db
```

## Run Container Stack

Run Container Stack detached

```bash

> docker-compose up -d

```

Rebuild after some configuration changes	

```bash

> docker-compose up -d --build

```

Stop and remove Container Stack

```bash

> docker-compose down

```

## Ready

Access your Webserver via: **http://localhost**