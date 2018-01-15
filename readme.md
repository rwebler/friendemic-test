Install
=
* The only pre-requisite is to have Docker installed.
* Run
```
git clone git@github.com:rwebler/friendemic-test.git
cd friendemic-test/
docker run --rm -v $(pwd):/app composer/composer install
docker-compose up
cp .env.example .env
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan optimize
docker-compose exec app php artisan storage:link
```
* Access [http://0.0.0.0:8080/](http://0.0.0.0:8080/)