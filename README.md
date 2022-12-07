# TeamLapwing_mypatch
A platform that allows users spin up a basic website, assigned to TeamLapwing
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
