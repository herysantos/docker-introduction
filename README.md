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

Run docker-compose to deploy container
> sudo docker-composer up -d

Create database using script.sql
> sudo docker exec -i mysql-container mysql -uroot -p'myrootpass' < api/db/script.sql

Install NodeJS and Express
> cd api && sudo npm install api

Alright! Your environment is set up.

## Debugging

If nodeJS API doesn't work properly
> sudo docker logs -f node-container

If web page doesn't work properly
> sudo docker logs -f php-container

## References

Docker Documentation:
> https://docs.docker.com/engine/reference/commandline/docker/

NPM install: 
> https://docs.npmjs.com/cli/install

Programador a Bordo:
> https://www.youtube.com/watch?v=Kzcz-EVKBEQ

### Considerations

Yes, I know. There is a tracked password on mysql dockerfile.

This shoudn't be there.