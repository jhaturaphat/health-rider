# !php ใช้ version 8.2 สามารถเปลี่ยนได้ตามที่เราต้องการแต่ต้องเป็นตัว fpm นะครับ เพื่อที่จะให้กับ nginx
FROM php:8.2-fpm-buster

# !Install คำสั่งสำหรับการลง package ที่ laravel required ไว้นะครับ
RUN apt-get update \
  && apt-get install -y \
    nano \
    cron \
    libfreetype6-dev \
    libicu-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libonig-dev \
    libmcrypt-dev \    
    libxslt1-dev \
    openssh-server \
    openssh-client \
    zlib1g-dev \
    libzip-dev \    
    unzip \
    rsync \
    nodejs 

RUN apt-get clean && rm -rf /var/lib/apt/lists/* 

RUN docker-php-ext-install zip pdo_mysql mbstring exif pcntl bcmath gd
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
ARG uid=1000
ARG user=web
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user && \
    mkdir -m 777 /var/www/storage && \
    mkdir -m 777 /var/www/bootstrap && \
    mkdir -m 777 /var/www/bootstrap/cache && \
    chmod -R 777 /var/www/storage && \
    chmod -R 777 /var/www/bootstrap/cache

WORKDIR /var/www


#&& docker-php-ext-enable pdo_mysql \