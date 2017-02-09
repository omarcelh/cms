    # Content Management System
## About CMS

CMS is a web application that lets user manage the contents of articles in the database. This web application is developed with [Laravel](http://laravel.com) framework. 

## How to Deploy

- Clone this repository
- Run ```composer install```
- Copy ```.env.example``` or rename it to ```.env```
- Run ```php artisan key:generate```
- Create empty database using MySQL
- Run ```php artisan migrate --seed```
- It is **recommended** to create virtual host named ```cms.dev``` due to the usage of Google API and Facebook Graph API (needed a URL to redirect and to handle callback)
- Run ```php artisan serve```
- Open your browser at ```http://cms.dev:8000/```

## Take a Look
- Homepage
![Homepage](/screenshots/homepage.png "Homepage")
- Login
![Login](/screenshots/login.png "Login")
- Password Management
![Passsword](/screenshots/password.png "Password")
- Categories Management
![Categories](/screenshots/category.png "Categories")
- Articles Management
![Articles](/screenshots/article.png "Articles")

## Dummy Data
- To login, there is one seed of user with given credentials
```email: ariana@gmail.com```
```password: grande```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).