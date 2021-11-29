Setup
Step1: copy .env.example -> .env
Step2: docker-compose up --build -d unimart mysql
Step3: docker exec -it unimart bash
Step4: composer install
Step5: php artisan key:generate
Step6: php artisan migrate

## install fish shells
Step1: docker-compose exec -it --user root bash
Step2: apt update
Step3: apt install fish
Step4: fish