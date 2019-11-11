# PHP-II Class Notes

## TODO
* reinstall the database

## HOMEWORK
* For Tue 12 Nov 2019
  * Charlene: Lab: Type Hinting
  * http://collabedit.com/wuesq
  * NOTE: please have a look here first: https://github.com/dbierer/php-ii-nov-2019/tree/master/Homework/Charlene
    * I made a few slight changes to your namespace structuring to make it more generic

* For Sun 10 Nov 2019
  * Charlene: Magic Lab
  * Abe: Abstract Classes and Methods Lab
  * All: Lab: Interfaces
  * http://collabedit.com/dgra2
* For Thu 7 Nov 2019
  * All: Lab: Create a Class
  * Abe: Lab: Create an Extensible Super Class
  * http://collabedit.com/u8u24
* For Tue 5 Nov 2019
  * Get VM up and running
  * ALL: Lab: Namespace

## CLASS NOTES
* Creating pull requests on github: https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request

* Running stand-alone PHP webserver:
```
cd /path/to/desired/project
php -S localhost:9999
````
* Modify the `php.ini` file to add `display_errors=on`
```
sudo gedit /etc/php/7.3/cli/php.ini
```

* Composer
  * https://packagist.org/
* Autoloading examples
  * https://github.com/dbierer/classic_php_examples/blob/master/oop/oop_autoload_example.php
  * https://github.com/dbierer/classic_php_examples/blob/master/oop/oop_autoload_class_example.php
* Magic Methods
  * https://www.php.net/manual/en/language.oop5.magic.php
  * https://github.com/dbierer/classic_php_examples/blob/master/oop/oop_magic_get_set.php
* Interfaces
  * Example: https://github.com/zendframework/zend-db/blob/master/src/Adapter/AdapterInterface.php
