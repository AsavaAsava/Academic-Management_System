#  Schooly API

Schooly API is an RESTful API service for an Academic Management System created with [Laravel 9](https://laravel.com/docs/9.x/) . This project also consists of a front-end (also in Laravel) consuming the API.

## Installation 
Laravel can be installed from [here](https://laravel.com/docs/10.x/installation)

First, rename the `env.example` file to `.env` as this file contains environmental variables.

Edit the  Database information in the `.env` file to match the database you are using as seen below

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ams
DB_USERNAME=root
DB_PASSWORD=

```

Then serve the project on the local server using:

```bash
php artisan serve
```

## Usage

You can use the following command to see the active API routes

```bash
php artisan route:list
```

I am still working on the API documentation and will update it once complete.

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
