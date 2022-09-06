FROM yiisoftware/yii2-php:7.4-apache

ENV PHP_MEMORY_LIMIT=256M

RUN apt-get update &&  \
    apt install -y libc-client-dev libkrb5-dev &&  \
    docker-php-ext-configure imap --with-kerberos --with-imap-ssl && \
    docker-php-ext-install imap