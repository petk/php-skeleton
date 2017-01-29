# PHP Skeleton Documentation

## About

Currently there is no canonical way of creating PHP packages for using with Composer or standard folder and files structure for PHP packages however there are good practices.


## The directory structure

Our PHP package will assume and provide you the following directory structure:

```
/bin
/docs
/src
/tests
/.gitattributes
/.gitignore.
/.travis.yml
/CHANGELOG.md
/composer.json
/CONTRIBUTING.md
/LICENSE
/phpunit.xml.dist
/README.md
```

## Installation

With Composer creating a new PHP package is as simple as:

```bash
$ composer create-project petk/php-skeleton ./new-php-package 'dev-master'
```


## Writing tests

We will use PHPUnit for Test driven development. Check the `phpunit.xml.dist` file.


## .gitattributes
