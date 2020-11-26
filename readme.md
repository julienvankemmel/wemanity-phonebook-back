# Phonebook API :

1. Project requirements :

To run this project you will need docker on your computer, if you don't have it, please refer to official documentation at :

[Get docker]: https://docs.docker.com/get-docker/



2. Get up and running :

```bash
git clone https://github.com/julienvankemmel/wemanity-phonebook-back.git
cd wemanity-phonebook-back/docker
docker-compose up -d

```

3. Create DB using doctrine :

```sh
docker exec -it phonebook-back sh
php bin/console doctrine:migrations:migrate
```

4. Load fixtures

If you want to have some data to test the front-end of the application just run those command :

```sh
docker exec -it phonebook-back sh
php bin/console d:f:l
```

5. Run unit tests

```sh
docker exec -it phonebook-back sh
bin/phpunit
```

