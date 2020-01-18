# Stack for Webdevelopmenent built with Docker Compose
!(https://ibb.co/Jzs3pJx)
A basic stack environment. It consists of the following:
- **Apache2**
- **PHP 7.3**
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

You can change some Envoirement Variables like MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE in ./docker-compose.yaml 

```yaml
version: "3"

services:
  web:
    build:
      context: ./
      dockerfile: ./app/dockerfile
    environment:
      - ALLOW_OVERRIDE=true
    ports:
      - "80:80"
    links:
      - db
    volumes:
      - ./app/html/:/var/www/html/

  db:
    image: mariadb
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
    container_name: phpmyadmin
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

```bash

> docker-compose up -d

```

## Ready

Now you can acces your Webserver via: **http://localhost**