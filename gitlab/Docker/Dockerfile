FROM alpinelinux/ansible:latest

RUN apk update
RUN apk upgrade
RUN apk add rsync
RUN apk add --no-cache --repository http://dl-cdn.alpinelinux.org/alpine/edge/main/nodejs=20.12.2-r0 npm
