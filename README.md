
# Laravel Route Viewer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ricventu/laravel-route-viewer.svg?style=flat-square)](https://packagist.org/packages/ricventu/laravel-route-viewer)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ricventu/laravel-route-viewer/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ricventu/laravel-route-viewer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ricventu/laravel-route-viewer/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ricventu/laravel-route-viewer/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ricventu/laravel-route-viewer.svg?style=flat-square)](https://packagist.org/packages/ricventu/laravel-route-viewer)

Simple web page to browse Laravel routes of your project

## Installation

You can install the package via composer:

```bash
composer require ricventu/laravel-route-viewer
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="route-viewer-config"
```

Publish the assets using

```bash
php artisan vendor:publish --tag="route-viewer-assets"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="route-viewer-views"
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Riccardo Venturini](https://github.com/ricventu)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
