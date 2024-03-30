FROM ubuntu:22.04

RUN apt-get update && apt-get install -y nginx

ADD src/index.html /var/www/html/

CMD [ "nginx", "-g", "daemon off;" ]