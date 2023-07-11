# Filament login as

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibrahimbougaoua/filament-login-as.svg?style=flat-square)](https://packagist.org/packages/ibrahimbougaoua/filament-login-as)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ibrahimbougaoua/filament-login-as/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ibrahimbougaoua/filament-login-as/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ibrahimbougaoua/filament-login-as/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ibrahimbougaoua/filament-login-as/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ibrahimbougaoua/filament-login-as.svg?style=flat-square)](https://packagist.org/packages/ibrahimbougaoua/filament-login-as)

A Laravel package for login as another user provides functionality that allows authorized users, typically administrators or superusers, to temporarily authenticate themselves as a different user within a Laravel application. This feature is useful for troubleshooting issues, testing user-specific functionality, or providing support by experiencing the application from the user's perspective.

## Installation

You can install the package via composer:

```bash
composer require ibrahimbougaoua/filament-login-as
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-login-as-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-login-as-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-login-as-views"
```

## Usage

```php
->actions([
	LoginAsAction::make(),
])
```

## Testing

```bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ibrahim](https://github.com/ibrahimBougaoua)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
