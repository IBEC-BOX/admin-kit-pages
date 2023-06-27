# Pages package for Admin Kit

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ibec-box/admin-kit-pages.svg?style=flat-square)](https://packagist.org/packages/ibecsystems/admin-kit-pages)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ibec-box/admin-kit-pages/run-tests.yml?branch=2.x&label=tests&style=flat-square)](https://github.com/ibec-box/admin-kit-pages/actions?query=workflow%3Arun-tests+branch%3A2.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ibec-box/admin-kit-pages/fix-php-code-style-issues.yml?branch=2.x&label=code%20style&style=flat-square)](https://github.com/ibec-box/admin-kit-pages/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/ibec-box/admin-kit-pages.svg?style=flat-square)](https://packagist.org/packages/ibecsystems/admin-kit-pages)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ibecsystems/admin-kit-pages
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="admin-kit-pages-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="admin-kit-pages-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="admin-kit-pages-views"
```

## Usage

```php
$pages = new AdminKit\Pages();
echo $pages->echoPhrase('Hello, AdminKit!');
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

- [Anastas Mironov](https://github.com/ast21)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
