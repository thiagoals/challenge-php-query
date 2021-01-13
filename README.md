# challenge-php-query
Api para consulta de dados (query)

# Como rodar a aplicação
Primeiro, configure o .env do projeto para que ele possa acessar a base de dados containerizada, cuja imagem está nesse repositório:
```
https://github.com/thiagoals/mysql-container
```
Primeiro você deve rodar a imagem do container do mysql, e configurar os .env dos projetos em laravel/lumem para conectar à base de dados.
```
DB_CONNECTION=mysql
DB_HOST=xx.x.x.xxx (meu endereço ipv4)
DB_PORT=3306 (porta que está sendo exportada o container do mysql, vide docker-compose.yml)
DB_DATABASE=challenge-php (usuário criado através do docker-compose.yml)
DB_USERNAME=root
DB_PASSWORD=challenge-root (password criado através do docker-compose.yml)
```

Depois de configurar o docker-compose.yml - caso necessário - hora de buildar a aplicação:
```
docker-compose up --build -d
```
Este comando irá subir a aplicação sem precisar deixar o terminal aberto.

# Swagger
Esse projeto possui uma documentação básica de swagger. Caso você queira criar mais anotações de documentação do projeto, importante utilizar o comando do artisan na pasta /var/www/html/:
```
php artisan swagger-lume:generate
```
