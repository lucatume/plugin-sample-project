# Yet another WordPress plugin test setup example project

A basic, container-based, setup to test a WordPress plugin with [Codeception](http://codeception.com/ "Codeception - BDD-style PHP testing.") and [wp-browser](https://github.com/lucatume/wp-browser "lucatume/wp-browser · GitHub").

## Requirements

1. [Composer](https://getcomposer.org/)
2. [Docker](https://docs.docker.com/install/)
3. [docker-compose](https://docs.docker.com/compose/)

## Getting started

1. Run `composer install` and install the required dependencies.
2. Run `docker-compose up` and start the Docker stack.
3. Run `vendor/bin/codecept run acceptance` to run a first test.
