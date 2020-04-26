# Laravel RESTFul API with JSON Web Token (JWT)

# Installation
1. Clone this repo
```
https://github.com/samironbarai/laravel-rest-api-jwt-auth.git
```

2. Install composer packages
```
cd laravel-rest-api-jwt-auth
$ composer install
```

3. Create and setup .env file
```
make a copy of .env.example and rename to .env
$ php artisan key:generate
put database credentials in .env file
$ php artisan jwt:secret
```

4. Migrate and insert records
```
$ php artisan migrate
$ php artisan tinker
$ factory(App\User::class, 10)->create()
$ factory(App\Task::class, 50)->create()
```
To test application follow the tutorial bellow.
Click on the image bellow to see YouTube video.

[![Laravel SMS with Nexmo](https://img.youtube.com/vi/jF9wdF0sViI/0.jpg)](https://www.youtube.com/watch?v=jF9wdF0sViI) 

Please visit my website for written tutorial.
[samironbarai.com](https://samironbarai.com/tutorials/laravel-7-restful-api-with-json-web-token-jwt) 
