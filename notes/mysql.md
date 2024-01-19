## stop mysql service command (if you have 2 instances running)

sudo service mysql stop

# .env vars for connecting to db

## DB_CONNECTION=mysql

specify the type of db connection

## DB_HOST=127.0.0.1

hostname of db server (running on local so used localhost)

## DB_PORT=3306

port of db server

## DB_DATABASE=laravel-tasks-list

name of db that it will connect to

## DB_USERNAME=root

username for db server

## DB_PASSWORD=root

pw of db server

# docker-compose up -d

## the -d or --detach will make the docker containers run on background
