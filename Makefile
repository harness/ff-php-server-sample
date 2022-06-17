start: stop
	docker-compose -p php_sample -f docker-compose.yaml up -d --remove-orphans

stop:
	docker-compose -p php_sample -f docker-compose.yaml down --remove-orphans
