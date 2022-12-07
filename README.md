## Project Structure
The directory structure of the project looks like this:
```
├── apps                   <- holds the base code for Builda(my_cms) 
|      |
|      └── console         <- contains all the project artisan commands.
|      └── exceptions      <- Builda(my_cms) exception handling files
|      └── http            <- holds different filters, requests, and controllers.
|      └── models          <- contains the model classes
|      └── providers       <-  contains all of the service providers for Builda(my_cms).
|
├── bootstrap              <- contains all the bootstrapping scripts
|
├── configs                <- Builda(my_cms) configuration file
|
├── database               <- Project database files
|
├── public                 <- starts project and maintains other necessary
|                              files such as JavaScript, CSS, and images of the project.
|
├── resources              <- holds all the Sass files, language (localization) files, and templates.
|
├── routes                 <- contains all the definition files for routing, 
|                              such as console.php, api.php, channels.php, etc.
|
├── storage                <- holds the session files, cache, compiled templates, 
|                             and miscellaneous files generated.
|
├── tests                  <- holds all the test cases.
|
├── .env.example              <- Example of file for storing private environment variables
|
├── .gitignore                <- List of files ignored by git
└── README.md
```

=======
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`

##### You can now access your project at localhost:8000 :)

## If for some reason your project stop working do these:
- `composer install`
- `php artisan migrate`



For the other process download the zipped file, and download unzip the project using any unzipping software. Unzip into any directory in your PC and get access to the files




