<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Requirements
* PHP >= 8.1.17
* composer >= 2.5.5
* mysql

## Configuration
1. Clone the repository
```bash
git clone https://github.com/JersonGerman/crud_cursos_laravel.git
```
2. Run the following command
```bash
composer install
```
3. Rename the .`env.example` file to `.env`
4. Create a database and configure it in the `.env` file
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cursos
DB_USERNAME=root
DB_PASSWORD=
```
5. Generate a `KEY` for the `APP_KEY` environment variable
```bash
php artisan key:generate
```
6. Run the artisan command to do the database migration
```bash
php artisan migrate
```
7. Run the migration with test data with the following command
```bash
php artisan migrate:fresh --seed
```
## Run application
Create a local domain, example `http://cursos.test` and open the domain in the browser


