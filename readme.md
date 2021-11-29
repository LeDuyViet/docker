Setup
Step1: copy .env.example -> .env
Step2: docker-compose up --build -d unimart mysql
Step3: docker exec -it unimart bash
Step3.1: cd src
Step4: composer install
Step5: php artisan key:generate
Step6: php artisan migrate