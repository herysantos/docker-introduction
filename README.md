## Didactic project using Docker, NodeJS, PHP and Mysql.

It consists of creating an API to interact with the database and a PHP web page to consume the API.

Each node is separeted in a container: mysql-container, node-container and php-container.

## Preview

Web Page (http://localhost:8888/)
![tela1](https://i.imgur.com/ioiIHmJ.png)

API (http://localhost:9001/products)
![tela2](https://i.imgur.com/Rd4AAl9.png)

## To Clone and Setup the environment

(Linux - Ubuntu)

Clone the repository
> git clone https://github.com/herysantos/docker-introduction.git && cd docker-introduction

If Docker isn't installed
> sudo snap install docker

Create a mysql image on docker
> sudo docker build -t mysql-image -f api/db/dockerfile .

Initiate the mysql-container
> sudo docker run -d -v $(pwd)/tmp/db/data:/var/lib/mysql --rm --name mysql-container mysql-image --default-authentication-plugin=mysql_native_password

Create database using script.sql
> sudo docker exec -i mysql-container mysql -uroot -p'myrootpass' < api/db/script.sql

Install NodeJS and Express
> cd api && npm install api

Create a NodeJS image on docker 
> cd .. && sudo docker build -t node-image -f api/dockerfile .

Initiate the node-container
> sudo docker run -d -v $(pwd)/api:/home/node/app -p 9001:9001 --link mysql-container --rm --name node-container node-image

Create a PHP7.2-apache image on docker
> sudo docker build -t php-image -f website/dockerfile .

Initiate the php-container
> sudo docker run -d -v $(pwd)/website:/var/www/html -p 8888:80 --link node-container --rm --name php-container php-image

Alright! Your environment is set up.

## Debugging

If nodeJS API doesn't work properly
> sudo docker logs -f node-container

If web page doesn't work properly
> sudo docker logs -f php-container

## References

Docker Documentation:
> https://docs.docker.com/engine/reference/commandline/docker/

NPM Build: 
> https://docs.npmjs.com/cli/build

Programador a Bordo:
> https://www.youtube.com/watch?v=Kzcz-EVKBEQ

### Considerations

Yes, I know. There is a tracked password on mysql dockerfile.

This shoudn't be there.