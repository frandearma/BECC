# Backend Engineer Coding Challenge

## Set-up

``` bash
# install laravel
$ composer global require laravel/installer

#Config .ENV
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=.....
DB_USERNAME=.....
DB_PASSWORD=.....

# Migrations
$ php artisan migrate

# Start Server development (Default http://127.0.0.1:8000)
$ php artisan serve
```

## Postman Collections
#### Include in root folder.

## Routes

| Route               | Login       | Description                     |
| ------------------- | ----------- | ------------------------------- |
| /api/types          | No          | Return all cards types          |
| /api/subtypes       | No          |  Return all cards subtypes      |
| /api/cards          | No          |  Return all cards paginates     |
| /api/cards/{id}    | No          | Return only card by id        |
