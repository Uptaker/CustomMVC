# CustomMVC (PHP)

This mini MVC framework is based on Brad Traversy's MVC framework used in his course. I've created it to experiment, expand and learn PHP and grasp the MVC (Model-View-Controller) model.

The repository additionally includes some examples files for basic controller, view and model logic.

### Getting Started

Copy the project in your folder and install the database dump in your PhpMyAdmin.
Follow the instructions to complete the installation.

### Prerequisites

* Apache Server
* PHP 5.6+
* Mysql Database

Install [XAMPP](https://www.apachefriends.org/it/index.html) for an easy quickstart

### Config File

Modify the app/config/config.php file according to your needs. You can use example.config.php file inside the same folder as an example based on my local settings.

```
// DB params
define('DB_HOST', '<databaseHost>');
define('DB_USER', '<databaseUser>');
define('DB_PASS', '<databasePassword>');
define('DB_NAME', '<databaseName>');

// URL root
define('URLROOT', 'http://localhost/<YOUR_INSTALL_FOLDER>');

// Site name
define('SITENAME', '<YOUR_SITE_NAME>');
```

Modify it based on your own configuration

```
// DB params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mvctest');

// URL root
define('URLROOT', 'http://localhost/CustomMVC');

// Site name
define('SITENAME', 'CustomMVC');
```

### .htaccess file

Modify the .htaccess file inside the public folder to match the name of your installation folder

```
  RewriteBase /CustomMVC/public
```

would turn into
```
  RewriteBase /<YOUR_INSTALL_FOLDER>/public
```

## License

This project is licensed under the MIT License
