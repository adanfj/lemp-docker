docker exec some-mysql sh -c 'exec mysqldump --all-databases -uroot -p"abc123."' > db.sql

docker exec -i some-mysql sh -c 'exec mysql -uroot -p"abc123."' < db.sql
