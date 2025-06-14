# App Hiperf Nuxt
## App build with Hiperf Swoole PHP Lang and Nuxt.js. Api Hiperf and frontend with nuxt.js using vue.js.

### Skill

- [PHP](https://www.php.net/)
- [Hiperf](https://www.hyperf.io/)
- [Mysql](https://www.mysql.com/)
- [Vue.js](https://vuejs.org/)
- [Nuxt.js](https://nuxt.com/)
- [Vuetify](https://vuetifyjs.com/)

 

### Run api-hiperf

```shell
cd api-hiperf/
cargo run
# run localhost:9501

```

### Run app-nuxt

```shell
cd app-hiperf/
yarn dev --open
# run localhost:3000

cd app-nuxt 
pnpm run dev
 
```

### Docker and Docker Compose

```shell

docker-compose build
docker-compose up # run api-hiperf http://localhost:9501 app-hiperf http://localhost:3000

docker-compose up --build # run api-hiperf http://localhost:9501 app-hiperf http://localhost:3000

docker-compose up --build &> logs.txt
docker-compose build app-hiperf  &> logs.txt

docker-compose run --rm app bash
# Run   migration for create all tables migrations on database
docker-compose run --rm app php bin/hyperf.php migrate  # Or

docker-compose run --rm app /bin/bash
php bin/hyperf.php migrate
php bin/hyperf.php migrate --force
php bin/hyperf.php gen:migration create_users_table
php bin/hyperf.php gen:migration create_users_table --table=users
php bin/hyperf.php gen:migration create_users_table --create=users

# Run db:seed For populate data faker on database
docker-compose run --rm app php bin/hyperf.php db:seed # Or

docker-compose run --rm app /bin/bash
php bin/hyperf.php db:seed
php bin/hyperf.php db:seed --seed=UserSeeder
php bin/hyperf.php gen:seeder UserSeeder

# Api Hiperf individual
docker-compose build api-hiperf
docker-compose run --rm api-hiperf
# run http://0.0.0.0:9501

# App Nuxt individual
docker-compose build app-nuxt
docker-compose run --rm app-nuxt
# run http://0.0.0.0:3000

# Optional
docker-compose ps
docker-compose stop
docker-compose down
docker-compose run --rm app bash
docker network create app-network

# sudo docker rmi --force $(docker images -f "dangling=true" -q)

```


https://gilcierweb.com.br
