A simple docker stack to fix issues with PHP 7.3 and Drupal 7.

Submit your patches in the [issue #3012308](https://drupal.org/node/3012308).

# Installation

```bash
docker-compose up -d
```

```bash
docker-compose exec -u www-data php composer install
```

```bash
docker-compose exec -u www-data php ./vendor/bin/taskman drupal:site-install
```

Using the default configuration, the development site web root should be in the `build` directory.

Then the site should be available at [http://127.0.0.1:80/](http://127.0.0.1:80/).

# PHP versions

You can change the version of PHP by editing the file `docker/php/Dockerfile` and changing the line

```dockerfile
FROM php:rc-fpm
```

into

```dockerfile
FROM php:7.2-fpm
```

or

```dockerfile
FROM php:7.1-fpm
```

You can use any available images from the [official PHP images on docker hub](https://hub.docker.com/_/php/).

As this stack is using nginx, make sure you use the fpm version (usually suffix `-fpm`).

# Run the tests

Here's an example command line to run the tests "User" and "Session".

```bash
docker-compose exec php sh -c "cd build; php ./scripts/run-tests.sh --url http://web:80/ --php /usr/local/bin/php --verbose Session,User"
```
