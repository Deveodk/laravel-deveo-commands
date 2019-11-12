# Laravel Deveo Commands

[![Latest Version on Packagist](https://img.shields.io/packagist/v/deveodk/laravel-deveo-commands.svg?style=flat-square)](https://packagist.org/packages/deveodk/laravel-deveo-commands)
[![Total Downloads](https://img.shields.io/packagist/dt/deveodk/laravel-deveo-commands.svg?style=flat-square)](https://packagist.org/packages/deveodk/laravel-deveo-commands)

This Laravel package adds (for now only one) useful commands used at Deveo.  
Deveo is a development agency, developing Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require deveodk/laravel-deveo-commands
```

## Commands

Behind the scenes, this commands runs `migrate:fresh --seed` and `passport:install`.  
It's just a more convenient way to run both in a single command.
``` bash
php artisan deveo:fresh-db
```
In production environments, you should add the `--force` flag, to force the migration to run.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email pb@deveo.dk instead of using the issue tracker.

## Credits

- [Peter Brinck](https://github.com/peterbrinck)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
