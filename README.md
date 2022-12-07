
# Project Name
BUILDA(my_cms)

A website that is used for content management, allowing multiple contributors to create, edit and publish. Content in it, is typically stored in a database and displayed in a presentation layer based on a set of templates like a website.

This application is designed to assist bloggers, individuals and business with little to no experience to build websites.


## Authors

- [@Directormichaels](https://www.github.com/Directormichaels) Fullstack Developer
- [@Abbyaigbe](https://www.github.com/Abbyaigbe) Frontend Developer
- [@Oddisy](https://www.github.com/Oddisy) Frontend Developer
- [@Davidmilly](https://www.github.com/davidmilly) Frontend Developer
- [@nifemi2005](https://www.github.com/nifemi2005) Frontend Developer
- [@ig-matrix](https://www.github.com/ig-matrix) Frontend
- [@faves1](https://www.github.com/faves1) Backend Developer
- [@Nne85](https://www.github.com/Nne85) Backend Developer
- [@Hasoye](https://www.github.com/Hasoye) Product Design 
- [@designedbyzah](https://www.github.com/designedbyzah) Product Design
- [@Adexgolden](https://www.github.com/Adexgolden) Product Design
- [@Save9y2jk](https://www.github.com/Save9y2jk) Product Design
- [@Ayanfeoluwa27](https://www.github.com/Ayanfeoluwa27) Product Design
- [@Tewotolu](https://www.github.com/Tewotolu) Product Design
- [@DapoDapo123](https://www.github.com/DapoDapo123) Product Design
- [@Saliualiu](https://www.github.com/Saliualiu) Product Design
- [@lastmarine1](https://www.github.com/lastmarine1) Product Design

## Contributing

Contributions are always welcome!

See `contributing.md` for ways to get started.

Please adhere to this project's `code of conduct`.


## Features

Authenticated:
- Authorized users can to create more pages.
- Authorized users can make as much customization as possible.
- Authorized users can add Social media links.
- Authorized users Change templates and more.
- Authorized users can access the backend of created websites.
Unauthenticated:
- Unauthorized can sign up for an account.
- Unauthorized can access documentation.
- Unauthorized can setup a website by filling some information.
- Unauthorized user can view basic information about the built platform.
- Unauthorized can browse through templates.

## Tech Stack

**Frontend:** Html, Css, Javascript, React Bootstrap

**Backend:** PHP, SQL


## Documentation

[Documentation](https://docs.google.com/document/d/1aKMYtaRfMy-c7f18DOmX_mjUz4JnhUe35yrg9enxZCI/edit)


## License

[MIT](https://choosealicense.com/licenses/mit/)


## Run Locally

### Windows users:
- Have PHP installed
- Download xampp: https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.12/xampp-windows-x64-8.1.12-0-VS16-installer.exe
- Download and extract cmder mini: https://github.com/cmderdev/cmder/releases/download/v1.1.4.1/cmder_mini.zip
- Update windows environment variable path to point to your php install folder (inside xampp installation dir) (here is how you can do this http://stackoverflow.com/questions/17727436/how-to-properly-set-php-environment-variable-to-run-commands-in-git-bash)
- start up Apache and MySQL on xampp
 

cmder will be refered as console

### Mac Os, Ubuntu and windows users continue here:
- Create a database locally named `homestead` utf8_general_ci 
- Download composer https://getcomposer.org/download/
- Pull Laravel/php project from git provider.
```bash
git clone https://github.com/zuri-training/my_cms_TeamLapwing
```
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd the project root directory
 ```
$ cd my_cms_TeamLapwing
```
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




