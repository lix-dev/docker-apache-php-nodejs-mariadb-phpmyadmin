# Stack for Webdevelopmenent built with Docker Compose

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

## Installation
```bash

# Clone Git-Repository
git clone https://github.com/lix-dev/docker-apache-php-nodejs-mariadb-phpmyadmin

# Repository folder
cd docker-apache-php-nodejs-mariadb-phpmyadmin/

# Run Docker Container Stack
docker-compose up -d

```