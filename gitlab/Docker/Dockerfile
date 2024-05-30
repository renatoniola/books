FROM node:20.5.0-slim

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get -y install rsync
RUN apt-get -y install ansible

RUN apt-get -y install curl php-cli php-mbstring php-xml php-intl php-curl php-zip git unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer