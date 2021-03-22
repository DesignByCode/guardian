# Laravel Guardian Authentication

[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/guardian.svg?style=flat-square)](https://packagist.org/packages/designbycode/guardian)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/designbycode/guardian/run-tests?label=tests)](https://github.com/designbycode/guardian/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/designbycode/guardian/Check%20&%20fix%20styling?label=code%20style)](https://github.com/designbycode/guardian/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/guardian.svg?style=flat-square)](https://packagist.org/packages/designbycode/guardian)


Laravel authentication system build with Laravel Fortify and Hoodoo-sass. 

## Installation

You can install the package via composer:

```bash
composer require designbycode/guardian
```

You can publish and run the migrations with:

```bash
php artisan guardian:install
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="DesignByCode\Guardian\GuardianServiceProvider" --tag="guardian-config"
```


## Usage
All the configuration is all ready done by the installation command.
```php



```

## Guardian Routes 
| Method   | URL                             | Named Route             |
|----------|---------------------------------|-------------------------|
| GET|HEAD | dashboard                       | guardian.dashboard      |
| DELETE   | guardian/delete-account         | guardian.delete-account |
| GET|HEAD | dashboard/profile               | guardian.profile        |



## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Claude Myburgh](https://github.com/designbycode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
