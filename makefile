up:
	- docker-compose up -d
	- echo "\033[0;32mProject started!"

bash:
	- docker exec -it meeting-bot_app_1 bash

init:
	- cp .env.example .env
	- docker-compose up -d
	- echo "\033[0;32mProject ready, make somthing awesome ;)"
