# Framework

A PHP based framework, which uses the MVC model.

## Getting Started

These instructions will give you a copy of the project up and running on
your local machine for development and testing purposes.

### Prerequisites

Requirements for the software and other tools to build, test and push
- [XAMPP 7.4](https://www.apachefriends.org/download.html)

### Installing

A step by step series of examples that tell you how to get a development
environment running

Use `git clone` to clone to repository to the htdocs folder in the XAMPP folder.

    git clone https://github.com/Christo-IV/raamistik.git

Change the values of the constants in `/app/config/constant.php`
```
define('PROJECT_NAME', 'projectname');
...
define('DB_HOST', 'host');
define('DB_USER', 'user');
define('DB_PASS', 'pass');
define('DB_NAME', 'dbname');
```
Start the Apache and MySQL services with the XAMPP control panel.

Going to `DB_HOST`/`PROJECT_NAME`/pages in your browser should now show a simple gray and black webpage with one 
heading and paragraph.

## File Structure

The project is divided into two main folders: `app/` and `public/`.

### Important files

- `public/index.php` - The source file where all the code is initiated. When writing relative paths,
  take into account that the **paths start from this file**.
- `app/bootstrap.php` - File for dependencies.
- `app/config/constants.php` - Variables that never change throughout the code. **Values need to be set manually**.
- `app/libs/Core.php` - Responsible for retrieving and cleaning up the URL.

## Authors

- **Anna Karutina** - *Provided the code* -
  [AnnaKarutina](https://github.com/AnnaKarutina)
- **Billie Thompson** - *Provided README Template* -
  [PurpleBooth](https://github.com/PurpleBooth)
- **Christo IV** - *Shamelessly copied code* -
  [Christo-IV](https://github.com/Christo-IV)
- **Sander Paasalu** - *Was around and did stuff* -
  [Sander-Paasalu](https://github.com/SanderPaasalu)

See also the list of
[contributors](https://github.com/Christo-IV/raamistik/contributors)
who participated in this project.

## License

This project doesn't have any licenses associated with it.

## Acknowledgments

- Anna Karutina's Moodle course
