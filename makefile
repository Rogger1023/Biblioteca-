setup:
	@docker-compose build
	@docker-compose up -d --remove-orphans
	@docker-compose run app php -r "file_exists('.env') || copy('.env.example', '.env');"
	@docker-compose run --rm app composer install
	@docker-compose run --rm app php artisan key:generate
	@docker-compose run --rm app php artisan migrate:fresh --seed
	@docker-compose run --rm app php artisan config:clear
	@docker-compose run --rm app php artisan cache:clear
	@docker-compose run --rm app php artisan route:clear
	@docker-compose run --rm app npm install
	@docker-compose run --rm app npm run dev

clean:
	@docker-compose run --rm app rm -rf node_modules
	@docker-compose run --rm app npm cache clean --force
	@docker-compose down

remove_volumes:
	@docker volume rm biblioteca-postgres-data

start:
	@docker-compose stop
	@docker-compose up -d

stop:
	@docker-compose stop
