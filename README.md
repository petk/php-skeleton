# PHP skeleton

![Test workflow](https://github.com/petk/php-skeleton/actions/workflows/tests.yaml/badge.svg)

Creating PSR-4 compliant PHP package or library with Composer the easy way.

This package provides a common folder structure and belonging files that are
used for creating a modern PHP package/library that is PSR-4 compliant.

There is no recommended or standard folder and files structure for PHP packages
but there are good practices. This repository provides initial skeleton for your
PHP libraries and packages.

Inspired by [phpleague/skeleton](https://github.com/thephpleague/skeleton) and
[php.skeleton](https://github.com/koriym/PHP.Skeleton).

php-skeleton uses [Semantic Versioning](http://semver.org)

## Installation

```bash
$ composer create-project petk/php-skeleton ./project 'dev-master'
```

## Usage

After creating the skeleton project directory, you can start customizing it.

For example, create `index.php` and so on:

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

use YourNamespace\Application;

$application = new Application();
// ...
```

Read also the [documentation](docs/index.md) for more information how to use
php-skeleton.

## License

This project is licensed under the [MIT license](LICENSE).
