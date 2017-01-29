# Skeleton

[![Build Status](https://secure.travis-ci.org/petk/php-skeleton.png?branch=master)](http://travis-ci.org/petk/php-skeleton)

Creating PSR-4 compliant PHP package or library with Composer the easy way. This package provides you with
most of the files and common folder structure that are used for creating PSR-4 compliant, modern PHP
package/library.

There is no recommended or standard folder and files structure for PHP packages but there are good practices.
This repository provides initial skeleton for your PHP libraries and packages.

Inspired by [phpleague/skeleton](https://github.com/thephpleague/skeleton) and [php.skeleton](https://github.com/koriym/PHP.Skeleton).

php-skeleton uses [Semantic Versioning](http://semver.org)

## Installation

```bash
$ composer create-project petk/php-skeleton ./project 'dev-master'
```

## Usage

```php
<?php
include vendor
use Petk\Skeleton;

$skeleton = new Skeleton();
```

Read also the [documentation](docs/index.md) for more information how to use php-skeleton.

## License

This project is licensed under the [MIT license](LICENSE).
